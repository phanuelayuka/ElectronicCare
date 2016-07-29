<?php

namespace App\Http\Controllers;
use App\Doctors;
use App\News;
use App\Http\Requests\CreateDoctorRequest;
use Validator;
use Illuminate\Support\Facades\Input;
use Request;

class pagesController extends Controller
{
    //routing to the home page-->home.blade.php
    public function home(){
        $news=News::all()->where('Category','N');//where('Category', 'N');
        $alerts=News::all()->where('Category','A');
        return view('pages.home', compact('news','alerts'));
    }

    //routing to the doctors form--->doctors_register.blade.php
    public function create_doc(){
        return view('forms.doctors_register');
    }
    
    public function Images()
    {
        return view('pages.image_upload');
    }

    //fetch records for all doctors---->report printing.
    public function doctors(){
        $doctors=Doctors::all();
        return view ('pages.doctors', compact('doctors'));
    }
    
    //function for validation of user input and saving the enties in the database
    public function save_doc(CreateDoctorRequest $request){

        $input= Request::all();//request all the fields inputs
        $doctor=new Doctors;

        $doctor->ServiceNo=$input['ServiceNo'];
        $doctor->FName=$input['FName'];
        $doctor->SName=$input['SName'];
        $doctor->Phone=$input['Phone'];
        $doctor->Email=$input['Email'];
        $doctor->Age=$input['Age'];
        $doctor->NationalId=$input['NationalId'];
        $doctor->Password=bcrypt($input['Password']);

        $doctor->save();//save in the table

        return redirect('/home');//redirect to homepage
    }
    

    
}


