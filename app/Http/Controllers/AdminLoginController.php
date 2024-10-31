<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{

    public function loginShow()
    {
        
        return view('AdminLogin');
    }
    public function Login(Request $request)
    {   $book=Book::all();
        $user=User::all();
        $countU= count($user);
       $count= count($book);

        $user=Auth::User();
        
   
     
            if($user->role_id==1){
                $adi=User::where('name' ,'=' , 'admin')->get();
               
                
                return view('Dashboard_admin', compact( 'adi', 'count', 'countU'));
            }
            elseif($user->role_id==2){
                return view('UserTemplate/index');
            }
            else{
                return view('message');
            }
            
        
       
    }
    public function logOut()
    {
       
        
        Auth::logout();

        return redirect('/login/page');
    }

   


}


