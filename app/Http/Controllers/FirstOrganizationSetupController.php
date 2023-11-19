<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class FirstOrganizationSetupController extends Controller
{
    public function firstCreate()
    {
        $data = [
            'roles' => Role::all(),
        ];
        return view('organization.firstcreate', $data);
    }
}
