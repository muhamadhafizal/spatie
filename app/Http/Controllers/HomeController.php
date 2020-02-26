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

    public function role(){

        $role = Role::all();
        return response()->json($role);

    }

    public function permission(){
        $permission = Permission::all();
        return response()->json($permission);
    }

    public function assignrole(Request $request){

        $userid = $request->input('userid');
        $roleid = $request->input('roleid');

        $user = User::find($userid);
        $role = Role::findById($roleid);
        $user->assignRole($role);

        $permission = $user->getAllPermissions();
        return response()->json($permission);

    }

    public function assignpermission(Request $request){
        $userid = $request->input('userid');
        $permissionid = $request->input('permissionid');

        $user = User::find($userid);
        $permission = Permission::findById($permissionid);
        $user->givePermissionTo($permission);

        $result = $user->getAllPermissions();
        return response()->json($result);

    }

    public function status(Request $request){

        $id = $request->input('id');

        $user = User::find($id);
        $data = $user->getAllPermissions();
        return response()->json($data);

    }

    //create new route
    //How to assign roles to the user.
    //1st need to get userid
    //2nd need to get permission or role id
    //3rd post to table permission and role
    //4th once assign new role make sure look into how they want to remove the permission
}
