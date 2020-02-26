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
        //Role::create(['name'=>'writer']);
        //Permission::create(['name'=> 'write post']);

        $user = auth()->user();
        //$user->removeRole('writer');
        //$user->revokePermissionTo('edit post');
        //$permission = Permission::findById(2);
        //$role = Role::findById(1);
        //$role->givePermissionTo($permission);
        //$user->givePermissionTo('edit post');
        //$user->assignRole('writer');
        //$permission = $user->permissions;
        //return response()->json($permission);

        return User::permission('edit post')->get();
        //return view('home');
    }
}
