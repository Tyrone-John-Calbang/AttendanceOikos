<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeMasterListController extends Controller
{
    public function create(Request $request){
        date_default_timezone_set('Asia/Manila');
        $date_employed=date('m/d/Y');
        Employees::create([
            "qr"=>$request->input('position').rand(1000,9999),
            "fname" =>$request->input('firstName'),
            "lname" =>$request->input('lastName'),
            "minitial" =>$request->input('middleName'),
            "bday"=>$request->input('birthday'),
            "phone_number"=>$request->input('phoneNumber'),
            "extension" => $request->input('extendName'),
            "age"=>$request->input('age'),
            "date_employed"=>$date_employed,
            "telephone_number"=> $request->input('TelNumber'),
            "address" =>$request->input('address'),
            "city" =>$request->input('cityName'),
            "region"=>$request->input('regionName'),
            "postal_code"=> $request->input('postalNumber'),
            "country" => $request->input('countryName'),
            "nationality"=> $request->input('nationality'),
            "sex" => $request->input('sex'),
            "position"=>$request->input('position'),
            "status"=>"Inactive",
        ]);
        return response()->json(["success"=>true]);
    }}

