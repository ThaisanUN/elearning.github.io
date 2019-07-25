<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
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
    public function storeCar(Request $request)
    {
 
        $this->validate($request, [
            'fileToUpload'  => 'required|image|mimes:jpg,jpeg,png,gif|max:2048'
           ]);
        
        $destinationPath = public_path('/images');
        $image = $request->file('fileToUpload');
 
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $image->move($destinationPath, $input['imagename']);
 
       
        $dbPath = $destinationPath. '/'.$input['imagename'];
        //dd($dbPath);
        $car = new Car();
        $car->name = request('imagename');
        $car->path = $dbPath;
 
        $car->save();
        //return view('uploadfile');
        return back()->with('success', 'Image Uploaded Successfully With Validation')->with('path', $input['imagename']);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
