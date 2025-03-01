<?php

namespace App\Http\Controllers;
use App\Models\Role;

use Illuminate\Http\Request;

class RoleManagementController extends Controller
{
    public function create()
    {
        return view('st-admin.settings.add-role');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'role_name' => 'required|string|max:255',
        ]);

        Role::create($data);
        
        return redirect(route('users'));
    }

}
