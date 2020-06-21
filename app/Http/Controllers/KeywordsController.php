<?php

namespace App\Http\Controllers;

use App\Keywords;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class KeywordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyword =Keywords::get();
        return view('back-end.pages.keywords.index',compact('keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.pages.keywords.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $res=$request->validate([
            'keyword' => 'unique:keywords,keyword|required|max:255|string|',
            'bancong' => 'required',
        ]);
        Keywords::create($res);
        return redirect()->route('keywords.index')->withStatus(__('từ khóa được tạo thành công'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keyword=Keywords::find($id);
        return view('back-end.pages.keywords.edit',compact('keyword'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $res=$request->validate([
            'keyword' => 'required',
            'bancong' => 'required',
        ]);

        Keywords::whereId($id)->update($res);
        return redirect()->route('keywords.index')->withStatus(__('Cập nhật keyword thành công .'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keyword = Keywords::find($id);
        $keyword->delete();

        return redirect()->route('keywords.index')->withStatus(__('xóa từ khóa thành công.'));
    }
}
