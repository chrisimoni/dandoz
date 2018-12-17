<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('backend.sliders.index', compact('sliders'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);

        return view('backend.sliders.edit', compact('slider'));
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
        $this->validate($request, [
            'slider_text' => 'required|min:6',
            'file' => 'image|mimes:jpeg,jpg,png'
        ]);

        $slider = Slider::findOrFail($id);

        $slider->slider_text = $request->slider_text;

        //remove and/or save image
        if($request->hasFile('file')) {
            
            if($slider->file){
                if(File::exists(public_path('images/slider_images/'. $slider->file))){
                    unlink(public_path() . "/images/slider_images/" . $slider->file);
                }
            }

            $image = $request->file('file');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/slider_images/' . $filename);

            $image->move(public_path('images/slider_images'), $filename);

            $slider->file = $filename;
        }

        $slider->update();

        return back()->with('success', 'Slider updated!');
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
