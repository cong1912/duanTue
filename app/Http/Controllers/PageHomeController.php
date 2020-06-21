<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\Introduces;
use App\Keywords;
use App\News;
use App\Searchs;
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
        $newki = News::where('category',1)->paginate(4);
        $key = Keywords::all();
        $new_nav=News::where('category',1)->paginate(4);
        return view('front-end/new',['newki'=>$newki,'new_nav'=>$new_nav,'key'=>$key]);
    }
    public function search(Request $req,$id){
        $search = News::find($id);
        return view('front-end/search',['search'=>$search]);
    }
    public function tuyendung(){
        $td = News::all()->where('category',2);
        return view('front-end/recruitment',['td'=>$td]);
    }
    public function getDetail(Request $req,$id){
        $new=News::where('id',$req->id)->first();
        $key = Keywords::all();
        $new_nav=News::where('category',1)->paginate(4);
        return view('front-end/detail_new',['new'=>$new, 'new_nav'=>$new_nav,'key'=>$key]);

    }

    public function getSearch(Request $req){
        $data = $req->all();
        $tukhoa=$data['key'];
        $key = Keywords::all();
        $new_nav=News::where('category',1)->paginate(4);
        $new =News::where('category',1)->where(function($query ) use($req){
            $query->where('title','like','%'.$req->key.'%')
            ->orwhere('content','like','%'.$req->key.'%');
        })->get();
        return view('front-end/search_new',['new'=>$new,'new_nav'=>$new_nav,'key'=>$key,'tukhoa'=>$tukhoa]);
    }
   
}