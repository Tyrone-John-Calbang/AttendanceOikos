<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeMasterListController extends Controller
{
    public function create(Request $request){
        $firstName = $request->input('firstName');
        $middleName = $request->input('middleName');
        $lastName = $request ->input('lastName');
        $extendName = $request -> input ('extendName');
        $address = $request -> input('address');
        $phoneNumber = $request ->input('phoneNumber');
        $TelNumber = $request -> input('TelNumber');
        $age=$request ->input('age');
        $cityName = $request ->input('cityName');
        $regionName = $request -> input('regionName');
        $postalNumber = $request -> input('postalNumber');
        $countryName = $request-> input('countryName');
        $nationality = $request -> input('nationality');
        $birthday = $request -> input('birthday');
        $sex = $request -> input('sex');
        $position = $request -> input('position');
       
    
        Employees::create([
            "fname" =>$firstName,
            "lname" =>$lastName,
            "minitial" =>$middleName,
            "bday"=>$birthday,
            "phone_number"=>$phoneNumber,
            "extension" => $extendName,
            "age"=>$age,
            "telephone_number"=> $TelNumber,
            "address" =>$address,
            "city" =>$cityName,
            "region"=>$regionName,
            "postal_code"=> $postalNumber,
            "country" => $countryName,
            "nationality"=> $nationality,
            "sex" => $sex,
            "position"=>$position,
            "status"=>"Inactive",
            

            
        ]);
    
    }}

