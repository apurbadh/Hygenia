<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorChat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $users = array();
        $doctor = Doctor::where("user_id", $user->id)->first();

        if ($doctor){
            $chats = DoctorChat::all()->where("doctor", $user->id);

            foreach ($chats as $chat){
                if (!in_array($chat->patient, $users)){
                    array_push($users, User::all()->where("id", $chat->patient));
                }
            }
        }else{
            $chats = DoctorChat::all()->where("patient", $user->id);
            foreach ($chats as $chat){
                if (!in_array($chat->patient, $users)){
                    array_push($users, User::all()->where("id", $chat->patient));
                }
            }
        }
        return view('home', ["users" => $users]);
    }
}
