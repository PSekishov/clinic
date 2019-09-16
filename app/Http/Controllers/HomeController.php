<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profession;
use App\Service;
use App\Doctor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function profession($id){
       $profession = Profession::find($id);
       $doctors = Doctor::where('profession_id','=',$id)->get();
       return view('pageProfession',compact('profession','doctors'));
    }
}
