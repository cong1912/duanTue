<?php

namespace App\Http\Controllers;

use App\Courses;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    public function course(){
        $doc=Courses::find(1);
        return view('front-end/course',['doc' => $doc]);
    }
}
