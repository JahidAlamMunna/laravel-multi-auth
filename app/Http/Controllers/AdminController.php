<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index(){
       
        $user_count = DB::table('users')->count();
        $doc_count = DB::table('doctors')->count();

        return view('admin.dashboard',[  'user_count'=>$user_count, 'doc_count'=>$doc_count]);
    }

    

    public function doctors(){    
        $doctors = DB::table('doctors')->get();
        return view('admin.doctor.doctors', ['doctors' => $doctors]);
    
    }


    

    public function appointments(){

        $apps = DB::table('appointments')->get();
        $users = DB::table('users')->get();
        $docs = DB::table('doctors')->get();
    
        return view('admin.appointments.appointments',['apps' => $apps, 'users' => $users,'docs' => $docs]);
    }

}
