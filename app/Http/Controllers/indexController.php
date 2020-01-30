<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class indexController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(){
        // $role = Role::create(['name' => 'writer']);

        // Role::create(['name' => 'writer2']);
        // auth()->user()->givePermissionTo('edit_post');
        return view('index');
    }
}
