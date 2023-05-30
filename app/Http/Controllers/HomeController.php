<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function index(){
        

          if(Auth::id()){

             if(Auth::user()->type=='0'){
                $data = doctor::all();


                return view('user.home',compact('data'));
             }else{
                return view('admin.home');
             }

          }else{


            return redirect()->back();


          }

    }



    public function home(){

               if(Auth::id()){
                return redirect('home');
               }else




            $data = doctor::all();


        return view('user.home',compact('data'));
    }





    public function appointment(Request $request){

               $data = new appointment;

               $data->name = $request->name;
               $data->email = $request->email;
               $data->date = $request->date;
               $data->phone = $request->phone;
               $data->message = $request->message;
               $data->doctor = $request->doctor;
               $data->status = 'In Progess';

                  if(Auth::id()){
                
               $data->user_id = Auth::user()->id;

                  }


          $data->save();

          return redirect()->back()->with('message','Appointment request Successfull . we will contact you soon!');


    }




    public function myappointment(){


        if(Auth::id()){



            $userid=Auth::user()->id;


            $appoint = appointment::where('user_id',$userid)->get();
            
            return view('user.myappointment',compact('appoint'));
            
        }else{


            return redirect()->back();
        }

        
    }



    public function cancel_appoint($id){


        $data = appointment::find($id);

        $data->delete();


        return redirect()->back();




    }


}
