<?php

namespace App\Http\Controllers\Admin;

use App\Partenaires;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PartenairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $partenaires = Partenaires::all();
        return view('admin.partenaires.index',compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partenaires.create');
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
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/partenaires'))
            {
                mkdir('uploads/partenaires', 0777 , true);
            }
            $image->move('uploads/partenaires',$imagename);
        }else {
            $imagename = 'dafault.png';
        }

        $partenaires = new Partenaires();
        $partenaires->title = $request->title;
        $partenaires->sub_title = $request->sub_title;
        $partenaires->image = $imagename;
        $partenaires->save();
        return redirect()->route('partenaires.index')->with('successMsg','Partenaires Successfully Saved');
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
        $partenaires = Partenaires::find($id);
        return view('admin.partenaires.edit',compact('partenaires'));
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
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        
        $image = $request->file('image');
        $slug = str_slug($request->title);
        $partenaires = Partenaires::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/partenaires'))
            {
                mkdir('uploads/partenaires', 0777 , true);
            }
            $image->move('uploads/partenaires',$imagename);
        }else {
            $imagename = $partenaires->image;
        }

        $partenaires->title = $request->title;
        $partenaires->sub_title = $request->sub_title;
        $partenaires->image = $imagename;
        $partenaires->save();
        return redirect()->route('partenaires.index')->with('successMsg','Partenaires Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partenaires = Partenaires::find($id);
        if (file_exists('uploads/partenaires/'.$partenaires->image))
        {
            unlink('uploads/partenaires/'.$partenaires->image);
        }
        $partenaires->delete();
        return redirect()->back()->with('successMsg','Partenaires successfully Deleted');
    }
}
