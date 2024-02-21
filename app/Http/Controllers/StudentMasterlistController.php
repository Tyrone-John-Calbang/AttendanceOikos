<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;


class StudentMasterlistController extends Controller
{
    public function showData() {
        $students = Students::all();

    }

    public function addStudent(Request $request) {

        $firstName = $request->input('firstName');
        $middleName = $request->input('middleName');
        $lastName = $request->input('lastName');
        $extension = $request->input('extension');
        $gradeLevel = $request->input('gradeLevel');
        $section = $request->input('section');
        $fetcher = $request->input('fetcher');
        $enrollStatus = $request->input('enrollStatus');
        $birthday = $request->input('birthday');
        $address = $request->input('address');
        $city = $request->input('city');
        $region = $request->input('region');
        $postalCode = $request->input('postalCode');
        $country = $request->input('country');
        $nationality = $request->input('nationality');
        $sex = $request->input('sex');
        $telephoneNumber = $request->input('telephoneNumber');
        $mobileNumber = $request->input('mobileNumber');

        Students::create([
            'fname'=> $firstName,
            'mname'=> $middleName,
            'lname'=> $lastName,
            'extension'=> $extension,
            'level'=> $gradeLevel,
            'section'=> $section,
            'fetcher'=> $fetcher,
            'enroll_status'=> $enrollStatus,
            'bday'=> $birthday,
            'address'=> $address,
            'city'=> $city,
            'region'=> $region,
            'postal_code'=> $postalCode,
            'country'=> $country,
            'nationality'=> $nationality,
            'sex'=> $sex,
            'telephone_number'=> $telephoneNumber,
            'mobile_number'=> $mobileNumber
        ]);

        return response()->json(['success' => true, 'message' => 'Student added successfully']);
    }
}
