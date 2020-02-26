<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Create role
        //Role::create(['name'=>'editor']);
        //Role::create(['name'=>'publisher']);
        //Role::create(['name'=>'admin']);

        //Create post
        //Permission::create(['name'=> 'publish post']);

        //User
        $user = auth()->user();

        //Find Permission and role
        //$permission = Permission::findById(2);
        //$role = Role::findById(1);
        //$role = Role::findById(4);
        //$permission = Permission::findById(3);
        //$role = Role::findById(4);

        //Give Permission
        //$role->givePermissionTo($permission);
        //$user->givePermissionTo('edit post');
        //$permission = $user->permissions;
        //$user->assignRole($role);
        //$role->givePermissionTo($permission);

        //Remove or revoke permission
        //$user->removeRole('writer');
        //$user->revokePermissionTo('edit post');

        //return response()->json($permission);
        //return User::permission('edit post')->get();

        //Flow How to assign roles to user
        //1st Find which Roles
        //$role = Role::findById(1);
        //2nd get user id
        //$user = auth()->user();
        //3rd assign user to role
        //$user->assignRole($role);

        //Flow How to assign permission to user
        //1st Find which Permission
        //$permission = Permission::findById(2);
        //2nd get user id
        //$user = $auth()->user();
        //3rd assign user to permission
        //$user->givePermissionTo($permission);


        //Details user permission
        //$permission = $user->getDirectPermissions();
        //$permission = $user->getPermissionsViaRoles();
        $permission = $user->getAllPermissions();
        return $permission;
        //return view('home');
    }

    //create new route
    //How to assign roles to the user.
    //1st need to get userid
    //2nd need to get permission or role id
    //3rd post to table permission and role
    //4th once assign new role make sure look into how they want to remove the permission
}
