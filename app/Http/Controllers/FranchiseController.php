<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FranchiseController extends Controller
{
    public function index(){
        return view('franchise.franchise_login');
    }

    public function login(Request $request){
    
    $check = $request->all();

    if(Auth::guard('franchise')->attempt(['email' => $check['email'],'password' => $check['password']])){
        return redirect()->route('franchise.dashboard')->with('message','franchise Login Successfully');
       
    }
    else{
        return back()->with('message','Invalid email or password');
    }

    }

    public function dashboard(){
        return view('franchise.index');
    }

    public function profile(){
        return view('franchise.franchise_profile');
    }

    public function addstudent(){
        return view('franchise.add_student');
    }

    public function allstudents(){
        return view('franchise.all_students');
    }

    public function allinstructors(){
        return view('franchise.all_instructors');
    }

    public function allbatches(){
        return view('franchise.all_batches');
    }

    public function addbatch(){
        return view('franchise.add_batch');
    }
    public function changebatch(){
        return view('franchise.change_batch_details');
    }

    public function addinstructor(){
        return view('franchise.add_instructor');
    }

    public function uploadedmarks(){
        return view('franchise.uploaded_marks');
    }

    public function markasdone(){
        return view('franchise.done_upload');
    }

    public function addmarks(){
        return view('franchise.add_marks');
    }

    public function changemarks(){
        return view('franchise.change_marks');
    }

    public function fcalendar() {
        return view('franchise.fcalendar');
    }

    public function addclass() {
        return view('franchise.add_class');
    }

    public function allpayments() {
        return view('franchise.franchise_payments');
    }

    public function addpayment() {
        return view('franchise.add_payment');
    }

    public function logout(Request $request) {
        Auth::guard('franchise')->logout();
        return redirect()->route('franchise.login_form');
      }
}
