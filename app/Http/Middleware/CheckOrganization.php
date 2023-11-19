<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserOrganization;

class CheckOrganization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('organization')) {
            return redirect()->route('organization.create.first');
        }

        $user_organization = UserOrganization::where('user_id', Auth::user()->id)->first();

        if (!$user_organization) {
            return redirect()->route('organization.create.first');
        }

        return $next($request);
    }
}
