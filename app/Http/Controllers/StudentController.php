<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        return view('student.student_login');
    }

    public function login(Request $request){
    
    $check = $request->all();
// dd($check);
    if(Auth::guard('student')->attempt(['email' => $check['email'],'password' => $check['password']])){
        return redirect()->route('student.dashboard')->with('message','student Login Successfully');
       
    }
    else{
        return back()->with('message','Invalid email or password');
        
    }

    }

    public function dashboard(){
        return view('student.index');
    }


    public function logout(Request $request) {
        Auth::guard('student')->logout();
        return redirect()->route('student.login_form');
      }

      public function announcement($id){
        // $item = Announcement::find($id);
        $item;
        foreach (Auth::user()->notifications as $notification) {
            if($notification->id === $id){
                $item = $notification;
                return view('student.announcement')->with('announcement',$item);
            }
        }

        // dd($item);
     
    }
}
