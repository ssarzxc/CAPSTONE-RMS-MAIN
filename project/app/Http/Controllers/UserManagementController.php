<?php

namespace App\Http\Controllers;
use App\Models\Role;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        $roles = Role::all(); // Fetch all settings
        return view('st-admin.settings.settings', compact('roles'));
    }

    public function create()
    {
        return view('st-admin.settings.add-user');
    }

    

    public function edit()
    {
        return view('st-admin.settings.edit-user');
    }
}
