<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;  //add this while working with Spatie
use Spatie\Permission\Models\Permission;  //add this while working with Spatie
use app\User;
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
//        Role::create(['name'=>'Admin']);
//        Permission::create(['name'=>'Edit']);

//        $role=Role::findById(1);
//        $permission=Permission::findById(1);
//        $permission->assignRole($role);

//        auth()->user()->assignRole('Admin');

//        return auth()->user()->getAllPermissions();

//        return User::role('Admin')->get();


//        $user = auth()->user();
//        $name=auth()->user()->name;
        return view('home');
    }
}
