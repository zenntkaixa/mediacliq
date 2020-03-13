<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class URLController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        // [2020-03-12 17:07:00] local.DEBUG: array (
        //   '_token' => '3mDDAyBY5YxhrgcvqUqcYuQIg7xRpvQCylg2K2qa',
        //   'exampleURL' => 'http://mediacliq.com.my',
        //   'submit' => NULL,
        // )  

        $url = new \App\Models\URL;
        $url->id           = uniqid();
        $url->original_url = $request['exampleURL'];
        // $url->short_url    = NULL;
        $url->created_at   = Carbon::now()->timestamp;
        $url->updated_at   = Carbon::now()->timestamp;
        $url->clicks       = 0;

        $url->save();
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
        //
    }
}
