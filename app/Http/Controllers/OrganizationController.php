<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Organization;
use App\Models\UserOrganization;

class OrganizationController extends Controller
{
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

            $request->session()->put('organization', $org);

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
}
