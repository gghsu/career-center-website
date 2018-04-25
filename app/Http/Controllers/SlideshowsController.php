<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slideshow;
use DB;

class SlideshowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        /*$input = Input::all();*/
        $slideshows = new \App\slideshow;
        $slideshows->title = $request->title;
        $slideshows->url = $request->url;
        $slideshows->start_at = $request->start_at;
        $slideshows->stop_at = $request->stop_at;
        $slideshows->path = $request->path;
        $slideshows->save();
        return redirect()->back();//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( )
    {
         /*$slideshow = DB::table('slideshows')->get();*/
         $slideshows = slideshow::all();

         return view('home',["slideshows"=>$slideshows]);
    }
    /**
     * Show the form for editing the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $slideshows = slideshow::find($id);
    $slideshows->delete();
    return Redirect::to('home');
    }
}
