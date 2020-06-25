<?php

namespace App\Http\Controllers;

use App\Softwares;
use Illuminate\Http\Request;

class SoftwaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $software =Softwares::orderBy('id', 'desc')->get();
        return view('back-end.pages.softwares.index',compact('software'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.pages.softwares.create');
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //dd($request->all());
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(storage_path('app/public/images'), $imageName);
        $data = $request->all();
        Softwares::create([
            'name' => $data['name'],
            'image'=>$imageName,
            'content'=>$data['content'],
            'link_android'=>$data['link_android'],
            'link_ios'=>$data['link_ios'],
        ]);
        return redirect()->route('software.index')->withStatus(__('địa chỉ phần mềm thành công'));
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
        $software=Softwares::find($id);
        return view('back-end.pages.softwares.edit',compact('software'));
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
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(storage_path('app/public/images'), $imageName);
            $data = $request->all();
            Softwares::find($id)->update([
                'name' => $data['name'],
                'image'=>$imageName,
                'content'=>$data['content'],
                'link_android'=>$data['link_android'],
                'link_ios'=>$data['link_ios'],
            ]);
            return redirect()->route('software.index')->withStatus(__('địa chỉ phần mềm thành công'));
        }
        else{
            $data = $request->all();
            Softwares::find($id)->update([
                'name' => $data['name'],
                'content'=>$data['content'],
                'link_android'=>$data['link_android'],
                'link_ios'=>$data['link_ios'],
            ]);
            return redirect()->route('software.index')->withStatus(__('địa chỉ phần mềm thành công'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
