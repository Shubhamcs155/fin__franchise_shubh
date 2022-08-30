<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Franchise;
use App\Models\Instructor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AnnouncementNotification;

class AnnouncementController extends Controller{
  
    
    public function store(Request $request){

        $students = Student::all();
        $franchises = Franchise::all();
        $instructors = Instructor::all();


        $message = Announcement::create([
            'subject' => $request->subject,
            'to' => $request->to,
            'message' => $request->message,
        ]);

        if($request->to === 'students'){
                      Notification::send($students, new AnnouncementNotification($message));
   
        }
        if($request->to === 'franchises'){
  
                
                Notification::send($franchises, new AnnouncementNotification($message));
            

        }
        if($request->to === 'instructors'){
          
                
                Notification::send($instructors, new AnnouncementNotification($message));
         

        }
        if($request->to === 'all'){
           
                
                Notification::send($instructors, new AnnouncementNotification($message));
            
            
                
                Notification::send($franchises, new AnnouncementNotification($message));
            
           
                
                Notification::send($students, new AnnouncementNotification($message));
         


        }


        return redirect()->back()->with('success','Successfully Announced');
    }


   

}