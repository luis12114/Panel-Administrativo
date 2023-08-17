<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Spatie\Permission\Models\Permission;

class SliderController extends Controller
{
    function _construct()
    {
        $this->middleware('permission:ver-slider|crear-slider|editar-slider|borrar-slider', ['only' => ['index']]);
        $this->middleware('permission:crear-slider', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-slider', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-slider', ['only' => ['destroy']]);
    }

    public function index()
    {
        $sliders=Slider::paginate(5);
        return view('slider.index',compact('sliders'));
    }


    public function create()
    {
        return view('slider.create');
    }


    public function store(Request $request)
    {
        request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url_video'=>'required',
            'url_animation'=>'required',
        ]);
        Slider::create($request->all());
        return redirect()->route('slider.index');
    }



    public function edit(Slider $slider)
    {
        return view('slider.edit',compact('slider'));
    }


    public function update(Request $request, Slider $slider)
    {
        request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url_video'=>'required',
            'url_animation'=>'required',
        ]);
        $slider->update($request->all());
        return redirect()->route('slider.index');
    }


    public function destroy( Slider $slider)
    {
     $slider->delete();
     return redirect()->route('slider.index');

    }
}
