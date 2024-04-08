<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::take(1)->first();
        return view('pages.backend.setting.edit', compact('setting'));
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
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'title' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'instagram' => 'required|string',
        ]);

        $data = $request->all();

        $setting->update($data);

        return redirect()->back()->with('success', 'Update Data Berhasil!');
    }

    public function updateLogo(Request $request, Setting $setting)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
        ]);

        if ($request->hasFile('logo')) {
            File::delete(storage_path('app/public/uploads/images/logo/'. $setting->logo));
            $file_name = $request->logo->getClientOriginalName();
            $request->logo->storeAs('public/uploads/images/logo/', $file_name);
        }

        $setting->logo = $file_name;
        $setting->save();

        return redirect()->back()->with('success', 'Update Logo Berhasil!');
    }

    public function deleteLogo(Setting $setting)
    {
        File::delete(storage_path('app/public/uploads/images/logo/'. $setting->logo));

        $setting->logo = null;
        $setting->save();


        // return response()->json('Delete Logo Berhasil!', 200);
        return redirect()->back()->with('success', 'Delete Logo Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
