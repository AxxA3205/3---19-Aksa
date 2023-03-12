<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Slider;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $slider = Slider::where('judul', 'LIKE', '%'.$request->cari.'%')->paginate(5);
        } else{
            $slider = Slider::paginate(5);
        }
      return view('admin.slider.data_slider', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create_slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'judul' => 'required',
            'subjudul' => 'required',
            'foto' => 'required',
        ]);

        if (!empty($request->file('foto'))) {
            $slider = $request->all();
            $slider['foto'] = $request->file('foto')->store('slider');

            Slider::create($slider);

            return redirect()->route('slider.index');
        } else{
            $slider = $request->all();
            Slider::create($slider);

            return redirect()->route('slider.index');
        }


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
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit_slider', compact('slider'));

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
        if (empty($request->file('foto'))) {
            $slider->update([
                'judul' => $request->judul,
                'subjudul' => $request->subjudul,

            ]);
            return redirect()->route('slider.index');
           } else{
            $slider = Slider::find($id);
            storage::delete($slider->foto);
            $slider->update([
                'judul' => $request->judul,
                'subjudul' => $request->subjudul,
                'foto' => $request->file('foto')->store('slider'),
            ]);
            return redirect()->route('slider.index');
           }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
$slider = Slider::find($id);
$slider->delete();
return redirect()->route ('slider.index');
    }

    public function muncul(Request $request)
    {
        // $books = Books:: all();
        // $title = Books::all();
        // return view('index',[
        //     'books' => $books,
        //     'title'=> $title
        // ]);
        if($request->has('cari')){
            $title= "Hasil Pencarian";
            $slider = Slider::where('judul', 'LIKE', '%'.$request->cari.'%')->get();
        } else{
            $title= "Hasil Pencarian";
            $slider = Slider::all();
        }
      return view('index', compact('slider', 'title'));

    }
    
}
