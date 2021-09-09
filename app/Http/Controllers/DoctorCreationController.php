<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorCreationController extends Controller
{
    public function index(Request $req){
        return view('layouts.docRegister');
    }

    public function store(Request $req){
        $certificate = $req->files("doctor_certificate");
        $qualification = $req->input("qualification");
        $sector = $req->input("sector");
        $description = $req->input("description");
        echo $certificate.$qualification.$sector.$description;
    }

}
