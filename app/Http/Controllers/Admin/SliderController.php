<?php

namespace App\Http\Controllers\Admin;
use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubArea;
use App\Area;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Slider::all();
        return view('admin.slider.index',compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Slider::all();
        return view('admin.slider.create',compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'depart' => 'required',
            'year'   => 'required',
            'pname'  => 'required',
            'supname'  => 'required',
            'name1'  => 'required',
            'name2'  => 'required',
            'email1' => 'required',
            'email2' => 'required',
            'phone'  => 'required',
            'phone2' => 'required',
            'desc'   => 'required',
        ]);
        
        $post = new Slider();
        $post->Department = $request->depart;
        $post->Year = $request->year;
        $post->Pname = $request->pname;
        $post->Supervisor = $request->supname;
        $post->Leader = $request->name1;
        $post->Socend_p = $request->name2;
        $post->L_email = $request->email1;
        $post->Socend_E = $request->email2;
        $post->L_phone = $request->phone;
        $post->Socend_ph = $request->phone2;
        $post->Description = $request->desc;
        
        $post->save();
        return redirect()->route('slider.index')->with('successMsg','Project Successfully Saved');

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
        $this->validate($request,[
            'name' => 'required',
            'post' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'area' => 'required',
            'subarea' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        
        $post = Slider::find($id);
        $post->Department = $request->depart;
        $post->Year = $request->year;
        $post->Pname = $request->pname;
        $post->Supervisor = $request->supname;
        $post->Leader = $request->name1;
        $post->Socend_p = $request->name2;
        $post->L_email = $request->email1;
        $post->Socend_E = $request->email2;
        $post->L_phone = $request->phone;
        $post->Socend_ph = $request->phone2;
        $post->Description = $request->desc;
        $post->save();
        return redirect()->route('slider.index')->with('successMsg','Slider Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Slider::find($id);
       
        $post->delete();
        return redirect()->back()->with('successMsg','Slider Successfully Deleted');
    }
}
