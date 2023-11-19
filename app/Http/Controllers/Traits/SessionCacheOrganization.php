<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait SessionCacheOrganization
{
    public function cacheOrganization(Request $request, $organization, $role) {
        $request->session()->put('organization', $organization);
        $request->session()->put('role', $role);

        $organizations = [];
        $user_organizations = $request->user()->organizations;
        foreach ($user_organizations as $user_organization) {
            $organizations[] = $user_organization->organization;
        }

        $request->session()->put('organizations', $organizations);
    }
}