<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{
    public function index(){
        return view('instructor.instructor_login');
    }

    public function login(Request $request){
    
    $check = $request->all();

    if(Auth::guard('instructor')->attempt(['email' => $check['email'],'password' => $check['password']])){
        return redirect()->route('instructor.profile')->with('message','instructor Login Successfully');
    }
    else{
        return back()->with('message','Invalid email or password');
        
    }

    }

    public function profile(){
        return view('instructor.instructor_profile');
    }

    public function courses_list(){
        return view(("instructor.instructor_courses"));
    }

    public function uploadmarks(){
        return view(("instructor.instructor_upload_marks"));
    }

    public function schedule(){
        return view(("instructor.instructor_schedule"));
    }
    
    public function inspayments(){
        return view(("instructor.instructor_payments"));
    }

    public function logout(Request $request) {
        Auth::guard('instructor')->logout();
        return redirect()->route('instructor.login_form');
      }
}
