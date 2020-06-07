<?php

namespace App\Http\Controllers;

use App\Introduces;
use Illuminate\Http\Request;

class IntroducesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $introduce =Introduces::get();
        return view('back-end.pages.introduces.index',compact('introduce'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.pages.introduces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);
        Introduces::create($request->all());
        return redirect()->route('introduces.index')->withStatus(__('câu giới thiệu được tạo thành công'));
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
        $introduce=Introduces::find($id);
        return view('back-end.pages.introduces.edit',compact('introduce'));
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
        $res= $request->validate([
            'content' => 'required',
        ]);
        Introduces::whereId($id)->update($res);
        return redirect()->route('introduces.index')->withStatus(__('Cập nhật lời giới thiệu thành công .'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $introduce = Introduces::find($id);
        $introduce->delete();

        return redirect()->route('introduces.index')->withStatus(__('xóa lời dẫn thành công.'));
    }
}
