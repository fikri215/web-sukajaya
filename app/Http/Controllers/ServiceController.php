<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('pages.backend.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.service.create');
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
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file_name = $request->image->getClientOriginalName();
            $request->image->storeAs('public/uploads/images/service/', $file_name);
            $data['image'] = $file_name;
        }

        Service::create($data);

        return redirect()->route('service.index')->with('success', 'Berhasil Menambahkan Layanan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('pages.backend.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'image' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
            'title' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            File::delete(storage_path('app/public/uploads/images/service/' . $service->image));

            $file_name = $request->image->getClientOriginalName();
            $request->image->storeAs('public/uploads/images/service/', $file_name);
            $data['image'] = $file_name;
        }

        $service->update($data);

        return redirect()->route('service.index')->with('success', 'Layanan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return back()->with('success', 'Layanan berhasil dihapus!');
    }
}
