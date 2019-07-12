<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Slider;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('welcome',compact('sliders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('post.create');
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
            'Sname'  => 'required',
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
        return redirect()->route('welcome')->with('successMsg','Project Successfully Saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
