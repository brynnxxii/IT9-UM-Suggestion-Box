<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
       if(Auth::user()->hasRole('user')){
            return view('userdash');
       }elseif(Auth::user()->hasRole('teacher')){
            return view('teacherdash');
       }elseif(Auth::user()->hasRole('admin')){
        return view('dashboard');
     }
}

   public function userprofile()
   {
    return view('userprofile');
   }

   public function userpost()
   {
    return view('userpost');
   }
   public function teacherprofile()
   {
    return view('teacherprofile');
   }

   public function teacherpost()
   {
        
    return view('teacherpost');
   }
   
   public function adminprofile()
   {
    return view('adminprofile');
   }

   public function adminpost()
   {
    return view('adminpost');
   }

   public function postdetails()
   {
    return view('postdetails');
   }
}