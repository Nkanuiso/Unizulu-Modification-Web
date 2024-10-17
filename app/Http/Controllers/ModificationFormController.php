<?php

namespace App\Http\Controllers;

use App\Models\Add_Module;
use App\Models\cancelled_Module;
use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Redirect;

class ModificationFormController extends Controller
{
    public function index(){
        return view('/Modification_form');
    }

    public function submit(Request $request){
        $data= $request->validate([
            'name'=> 'required',
            'Surname'=> 'required',
            'Student_number'=> 'required','number', 'digit:9',
            'Email'=> 'required', 'lowercase','email',
            'cellphone'=>'nullable', 'max|10',
            'Old_Programme'=> 'required',
            'New_Programme'=> 'required',
            'Module'=>'required',
            'Semester'=> 'required',
            'Module_Description'=>'required',
            'Reason'=> 'nullable',
            'Modules'=>'required',
            'Semesta'=> 'required',
            'Module_Descriptions'=>'required',
            'Reasons'=> 'nullable',


        ]);

        $stor = student::create($data);
        return redirect()->route('Successful.page')->with('message', 'form submitted successful');

    }
}
