<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
class PageHomeController extends Controller
{
    public function course(){
        $doc=Courses::find(1);
        return view('front-end/course',['doc' => $doc]);
    }}
