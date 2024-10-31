<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role_id', '=', 2)->get();
        return view('all_users', compact('users'));
        // return view('all_users')->with('users',$users);

}
         
    
}