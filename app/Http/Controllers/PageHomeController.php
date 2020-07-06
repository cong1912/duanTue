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
        $new=News::where('category',1)->orderBy('id', 'desc')->get();
        return view('front-end/home3',['new'=>$new]);
    }

    public function course(Request $req,$slug){
        $doc=Courses::where('slug', $slug)->firstOrFail();
        return view('front-end/course',['doc' => $doc]);
    }

    public function software($slug){
        $sof = Softwares::where('slug', $slug)->firstOrFail();
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
        $newki = News::where('category',1)->orderBy('id', 'desc')->paginate(4);
        $key = Keywords::all();
        $new_nav=News::where('category',1)
        ->orderBy('id', 'desc')->limit(4)->get();
        return view('front-end/new',['newki'=>$newki,'new_nav'=>$new_nav,'key'=>$key]);
    }
    public function search(Request $req,$slug){
        $search = News::where('slug', $slug)->firstOrFail();
        $key = Keywords::all();
        $new_nav=News::where('category',3) ->orderBy('id', 'desc')->limit(4)->get();
        return view('front-end/search',['search'=>$search,'new_nav'=>$new_nav,'key'=>$key]);
    }
    public function tuyendung(){
        $td = News::where('category',2)->paginate(4);;
        $key = Keywords::all();
        $new_nav=News::where('category',2) ->orderBy('id', 'desc')->limit(4)->get();
        return view('front-end/recruitment',['td'=>$td,'new_nav'=>$new_nav,'key'=>$key]);
    }
    public function getDetail(News $news,$slug){
        $new=News::where('slug', $slug)->firstOrFail();
        $key = Keywords::all();
        $new_nav=News::where('category',1) ->orderBy('id', 'desc')->limit(4)->get();
        return view('front-end/detail_new',['new'=>$new, 'new_nav'=>$new_nav,'key'=>$key]);

    }

    public function getSearch(Request $req){
        $data = $req->all();
        $tukhoa=$data['key'];
        $key = Keywords::all();
        $new_nav=News::where('category',1)->orderBy('id', 'desc')->limit(4)->get();
        $new =News::where('category',1)->where(function($query ) use($req){
            $query->where('title','like','%'.$req->key.'%')
            ->orwhere('content','like','%'.$req->key.'%');
        })->get();
        return view('front-end/search_new',['new'=>$new,'new_nav'=>$new_nav,'key'=>$key,'tukhoa'=>$tukhoa]);
    }
    
}
