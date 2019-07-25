<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class learningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view("e-learning.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        return view("e-learning.gallery");
    }
    public function notfound()
    {
        return view("e-learning.notfound");
    }
    public function contact()
    {
        return view("e-learning.contact");
    }
    public function blogs()
    {
        return view("e-learning.blog-single");
    }
    public function coursea()
    {
        return view("e-learning.course-archive");
    }
    public function coursed()
    {
        return view("e-learning.course-detail");
    }
    public function bloga()
    {
        return view("e-learning.blog-archive");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $user = User::find($id);
        return view('e-learning.info');
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
