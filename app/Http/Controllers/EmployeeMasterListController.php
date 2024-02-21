<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeMasterListController extends Controller
{
    public function create(Request $request){
        $First_Name = $request->input('First-Name');
        $Middle_Name = $request->input('Middle-Name');
        $Last_Name = $request ->input('Last-Name');
        $Address = $request -> input('Address');
        $Contact_Number = $request -> input('Contact-Number');
        
        
        $Birthday = $request -> input('Birthday');
        $Gender = $request -> input('Gender');
        $Role = $request -> input('Role');
    
        employee::create([
            "fname" =>$First_Name,
            "lname" =>$Last_Name,
            "minitial" =>$Middle_Name,
            "bday"=>$Birthday,
            "phone_number"=>$Contact_Number,
            
            

            
        ]);
    
    }}

