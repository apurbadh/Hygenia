<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorCreationController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $req){
        $user = Auth::user();
        $doctor = Doctor::where("user_id", $user->id)->first();

        if ($doctor){
            return redirect("/");
        }

        return view('layouts.docRegister');
    }

    public function store(Request $req){
<<<<<<< HEAD
=======
        $user = Auth::user();
>>>>>>> d53f078a8b93779de39c2c2bc835a65db40f166a
        $certificate = $req->file("doctor_certificate");
        $qualification = $req->input("qualification");
        $sector = $req->input("sector");
        $description = $req->input("description");
        $path = $certificate->store("public");
        $path = str_replace("public", "/storage", $path);
        $doctor = new Doctor();
        $doctor->qualification = $qualification;
        $doctor->sector = $sector;
        $doctor->image_url = $path;
        $doctor-> description = $description;
        $doctor->user_id = $user->id;
        $doctor->save();

        return redirect('/');


    }

}
