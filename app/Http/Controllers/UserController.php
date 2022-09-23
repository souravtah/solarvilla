<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Exceptions\RoleDoesNotExist;

class UserController extends Controller
{
    public function index()
    {
        $users                      = User::with('roles')->paginate(5);
        $all_roles_in_database      = Role::all()->pluck('name');
        return view('users.index', compact('users', 'all_roles_in_database'));
    }

    public function role_wise_index(String $roleName)
    {
        try {
            $users                  = User::with('roles')->role($roleName)->paginate(5);
        } catch (RoleDoesNotExist $e) {
            abort(404);
        }

        $all_roles_in_database      = Role::all()->pluck('name');
        return view('users.index', compact('users', 'all_roles_in_database'));
    }
}
