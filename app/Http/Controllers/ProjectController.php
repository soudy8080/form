<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
class ProjectController extends Controller
{
    public function storeAds(Request $request)
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
}
