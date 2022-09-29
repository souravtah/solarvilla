<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Spatie\Permission\Exceptions\RoleDoesNotExist;

class UserController extends Controller
{
    public function index()
    {
        $users                      = User::with('roles')->paginate(3);
        $all_roles_in_database      = Role::all()->pluck('name');
        $total_users                = $users->toArray()['total'];
        return view('users.index', compact('users', 'all_roles_in_database', 'total_users'));
    }

    public function role_wise_index(String $roleName)
    {
        try {
            $users                  = User::with('roles')->role($roleName)->paginate(3);
        } catch (RoleDoesNotExist $e) {
            abort(404);
        }
        $all_roles_in_database      = Role::all()->pluck('name');
        $total_users                = $users->toArray()['total'];
        return view('users.index', compact('users', 'all_roles_in_database', 'total_users'));
    }

    public function users_without_any_role()
    {
        $users                      = User::doesntHave('roles')->paginate(3);
        $all_roles_in_database      = Role::all()->pluck('name');
        $total_users                = $users->toArray()['total'];
        return view('users.index', compact('users', 'all_roles_in_database', 'total_users'));
    }

    public function users_with_trashed()
    {
        $users                      = User::with('roles')->onlyTrashed()->paginate(3);
        $all_roles_in_database      = Role::all()->pluck('name');
        $total_users                = $users->toArray()['total'];
        return view('users.index', compact('users', 'all_roles_in_database', 'total_users'));
    }

    public function restore($id)
    {
        $user                       = User::onlyTrashed()->findOrFail($id);
        $user->restore();
        return redirect()->route('users.index')->with('status', 'User '. $user->name .' restored!');
    }


    public function store(StoreUserRequest $request)
    {
        $validated                  = $request->safe()
                                        ->only(['title', 'name', 'email', 'phone']);
        $user                       = User::create($validated)->assignRole($request->role);
        return redirect()->route('users.index')
                    ->with('status', 'User '. $user->name .' created!');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // public function edit(User $user)
    // {

    // }

    public function update(UpdateUserRequest $request, User $user)
    {
        $validated                  = $request->safe()->only(['name', 'email', 'phone', 'role']);
        $user->name                 = $validated['name'];
        $user->email                = $validated['email'];
        $user->phone                = $validated['phone'];
        if ($user->getOriginal('email') != $validated['email']){
        $user->email_verified_at    = null;}
        if ($user->getOriginal('phone') != $validated['phone']){
        $user->phone_verified_at    = null;}
        $user->assignRole($validated['role']);
        $user->save();
        return redirect()->route('users.index')
                    ->with('status', 'User '. $user->name .' updated!');
    }

    public function destroy(User $user)
    {
        if (!$user->trashed()) {
            $user->delete();
            return redirect(route('users.index'))->with('status', 'User '. $user->name .' deleted!');
        }
        abort(403);
    }

    public function activity(User $user)
    {
        return view('users.activity', compact('user'));
    }

    public function setting(User $user)
    {
        return view('users.setting', compact('user'));
    }

    public function force_delete(User $user)
    {
        $user->forceDelete();
        return redirect()->route('users.index')->with('status', 'User '. $user->name .' permanently deleted!');
    }

}
