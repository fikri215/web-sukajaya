<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::take(1)->first();
        return view('pages.backend.about.edit', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|string',
            'desc' => 'required|string',
        ]);

        $data = $request->all();

        $about->update($data);

        return redirect()->route('about.index')->with('success', 'Berhasil Mengupdate Data!');
    }

    public function updateImage(Request $request, About $about)
    {
        $request->validate([
            'image' => 'image|mimes:jpg,jpeg,png,svg',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            File::delete(storage_path('app/public/uploads/images/profile/' . $about->image));
            $file_name = $request->image->getClientOriginalName();
            $request->image->storeAs('public/uploads/images/profile/', $file_name);
            $data['image'] = $file_name;
        }

        $about->update($data);

        return redirect()->route('about.index')->with('success', 'Berhasil Mengupdate Gambar!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
