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
        //Role::create(['name'=>'editor']);
        //Role::create(['name'=>'publisher']);
        //Role::create(['name'=>'admin']);
        //Permission::create(['name'=> 'publish post']);
        //$user = auth()->user();
        //$user->removeRole('writer');
        //$user->revokePermissionTo('edit post');
        //$permission = Permission::findById(2);
        //$role = Role::findById(1);
        //$role->givePermissionTo($permission);
        //$user->givePermissionTo('edit post');
        //$role = Role::findById(4);
        //$user->assignRole($role);
        //$permission = $user->permissions;
        //return response()->json($permission);
        //return User::permission('edit post')->get();

        //$permission = Permission::findById(3);
        //$role = Role::findById(4);
        //$role->givePermissionTo($permission);

        return view('home');
    }
}
