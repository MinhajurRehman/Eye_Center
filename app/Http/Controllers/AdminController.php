<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function add(){

          if(Auth::id()){
         
               
                return view('admin.add_doctor');

            }else{


                return redirect()->back();
            }
         

       

       


    }


    public function upload(Request $request){

        $data = new doctor;

        $image = $request->file;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        
        $request->file->move('doctor_image',$imagename);


        $data->image = $imagename;

        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->room= $request->room;
        $data->speciality=$request->speciality;
        

        $data->save();

        return redirect()->back()->with('message','Doctor Added!');

    }



    public function showappointment(){


            $data = appointment::all();



               return view('admin.showappointment',compact('data'));

    }



    public function approve_appointment($id){


               $data = appointment::find($id);

               $data->status='Approved';

               $data->save();

               return redirect()->back();


    }



    
    public function cancel_appointment($id){



        $data = appointment::find($id);

        $data->status='Canceled';

        $data->save();

        return redirect()->back();


        
    }


    public function showdoctors(){


        $data = doctor::all();

        return view('admin.showdoctors',compact('data'));
    }
 




    public function update_doc($id){



         $data = doctor::find($id);





         return view('admin.update_doctor',compact('data'));


    }


    
    public function delete_doc($id){

        $data = doctor::find($id);
        $data->delete();

        return redirect()->back();

    }



    public function editdoctor(Request $request, $id){


        $doctor = doctor::find($id);


        $doctor->name= $request->name;
        $doctor->phone= $request->phone;
        $doctor->speciality= $request->room;
        $doctor->room= $request->room;
        

        $image = $request->file;


        if($image){

        
       
        $imagename = time().'.'.$image->getClientOriginalExtension();
        
        $request->file->move('doctor_image',$imagename);


        $doctor->image = $imagename;

        }


        $doctor->save();


        return redirect()->back()->with('message','Doctor Updated Successfully');


    }





}