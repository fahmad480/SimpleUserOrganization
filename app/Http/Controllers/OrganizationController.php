<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Organization;
use App\Models\UserOrganization;
use App\Models\Role;
use App\Http\Controllers\Traits\SessionCacheOrganization;

class OrganizationController extends Controller
{
    use SessionCacheOrganization;

    public function store(Request $request) {
        try {
            DB::beginTransaction();

            $request->validate([
                'name' => 'required',
                'role' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // upload image
            $imagePath = null;

            if($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/images', $filename);
                $imagePath = 'storage/images/' . $filename;
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Organization logo required.'
                ], 500);
            }

            // create organization
            $org = new Organization;
            $org->name = $request->name;
            $org->code = strtoupper(substr($request->name, 0, 3)) . rand(100, 999);
            $org->logo = $imagePath;
            $org->save();

            // create user organization
            $user_org = new UserOrganization;
            $user_org->user_id = $request->user()->id;
            $user_org->organization_id = $org->id;
            $user_org->role_id = $request->role;
            $user_org->save();

            $this->cacheOrganization($request, $org, Role::where('id', $request->role)->first());

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Organization created successfully!',
                'organization' => $org,
            ], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Organization creation failed!',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function join(Request $request) {
        try {
            DB::beginTransaction();

            $request->validate([
                'code' => 'required',
            ]);

            $org = Organization::where('code', $request->code)->first();

            if ($org) {
                $user_org = new UserOrganization;
                $user_org->user_id = $request->user()->id;
                $user_org->organization_id = $org->id;
                $user_org->role_id = 3;
                $user_org->save();

                $this->cacheOrganization($request, $org, Role::where('id', 3)->first());

                DB::commit();

                return response()->json([
                    'success' => true,
                    'message' => 'Organization joined successfully!',
                    'organization' => $org,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Organization not found!',
                ], 404);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Organization join failed!',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function switch(Request $request, Organization $organization) {
        $user_organization = UserOrganization::where('user_id', $request->user()->id)->where('organization_id', $organization->id)->first();
        if ($user_organization) {
            $this->cacheOrganization($request, $organization, Role::where('id', $user_organization->role_id)->first());

            return redirect()->route('dashboard');
        } else {
            return redirect()->route('dashboard');
        }
    }
}
