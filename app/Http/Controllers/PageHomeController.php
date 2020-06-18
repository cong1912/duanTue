<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\Introduces;
use App\News;
use App\Softwares;

use function GuzzleHttp\Promise\all;

class PageHomeController extends Controller
{
    public function index(){
        return view('front-end/home3');
    }

    public function course(Request $req,$id){
        $doc=Courses::find($id);
        return view('front-end/course',['doc' => $doc]);
    }
    
    public function software($id){
        $sof = Softwares::find($id);
        return view('front-end/software',['sof' => $sof]);
    }

    public function introduce(Request $req){
        $introduce = Introduces::first();
        return view('front-end/introduce',['introduce'=>$introduce]);
    }

    public function contact(){
        return view('front-end/contact');
    }
    public function new(){
        $new = News::all();
        return view('front-end/new',['new'=>$new]);
    }
   
}