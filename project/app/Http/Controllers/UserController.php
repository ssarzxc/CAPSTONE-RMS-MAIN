<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRole;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $results = User::with('role')->get();

        foreach ($results as $user) {
            echo $user->first_name . ' - ' . ($user->role ? $user->role->role_name : 'No Role') . "<br>";
        }

        dd($results->toArray());
    }
}
