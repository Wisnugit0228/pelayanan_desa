<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use File;
use Alert;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::get();
        
       
        return view('berita.view', ['berita'=>$berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpg,png,jpeg',
            'title' => 'required',
            'content'=> 'required'
            
        ]);


        $fileName = time().'.'.$request->thumbnail->extension();
        $request->thumbnail->move(public_path('images_content'), $fileName);

        $berita = new Berita;
        $berita->thumbnail = $fileName;
        $berita->title = $request->title;
        $berita->content = $request->content;

        $berita->save();
        Alert::success('Berhasil', 'Berhasil Tambah Berita');

        return redirect('berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::get()->where('id', $id)->first();

        return view('berita.detail', ['berita'=>$berita]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);

        return view ('berita.edit', ['berita'=>$berita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'image|mimes:jpg,png,jpeg',
            'content' => 'required'
        ]);

        $berita = Berita::find($id);
        if ($request->has('thumbnail')) {
            $patch = 'images_content/';
            File::delete($patch.$berita->thumbnail);

            $fileName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('images_content'), $fileName);

            $berita->thumbnail = $fileName;


            $berita->save();

        }

        $berita->title = $request['title'];
        $berita->content = $request['content'];
        $berita->save();

        Alert::success('Berhasil', 'Berita Berhasil Diupdate');

        return redirect('berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $patch = 'images_content/';
        File::delete($patch.$berita->thumbnail);

        $berita->delete();

        return redirect('berita');
    }
}
