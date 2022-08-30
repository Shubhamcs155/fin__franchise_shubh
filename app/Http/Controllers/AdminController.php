<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_login');
    }

    public function login(Request $request){
    
    $check = $request->all();
// dd($check);
    if(Auth::guard('admin')->attempt(['email' => $check['email'],'password' => $check['password']])){
        return redirect()->route('admin.dashboard')->with('message','Admin Login Successfully');
       
    }
    else{
        return back()->with('message','Invalid email or password');
        
    }

    }

    public function dashboard(){
        $students = Student::all();
        $instructors = Instructor::all();
        return view('admin.index',compact(['students','instructors']));
    }


    public function logout(Request $request) {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login_form');
      }

    public function studentlist(){
        $students = Student::all();
        return view('admin.studentlist')->with('students',$students);
    }  

    public function addstudent(){
        return view('admin.addstudent');

    }

    public function profile(){
        return view('admin.profile');
    }

    public function profileUpdate(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $admin = Admin::find(auth()->user()->id);
       
       $admin->name=$request->name;
       $admin->email = $request->email;
       $admin->phone = $request->phone;
       if($request->file('image')){
        $path = $request->file('image')->store('images','public');
        $admin->image = $path;
       }
       
       $admin->save();
       return redirect()->back()->with('success','profile updated successfully');

    }
    public function studentProfile(Student $id){
        $student = Student::find($id);
        // dd($student);
        return view('admin.studentProfile')->with('student',$student);
    }

    public function announcement(){
        return view('admin.announcement');
    }


    public function changePassword(Request $request) {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        Admin::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->back()->with("success","Password successfully changed!");
    }

}
