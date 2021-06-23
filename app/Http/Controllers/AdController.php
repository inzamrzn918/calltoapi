<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Ad::create([
            "title"=>$request['title'],
            "description"=>$request['description'],
            "slug" => $request['title'],
            "image" => "hgjjdfghfj",
            "fare_min"=>$request['fare_min'],
            "fare_max"=>$request['fare_max'],
            "user"=>1

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Ad::find($id);
    }

        /**
     * Display the specified resource.
     *
     * @param  str  $keyword
     * @return \Illuminate\Http\Response
     */
    public function search($keyword)
    {
        return Ad::where('title','like','%'.$keyword.'%')->get();
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
       $user =  Ad::find($id);
       $user->update($request->body());
       return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Ad::destroy($id);
    }



}
