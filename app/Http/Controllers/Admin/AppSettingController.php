<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AppSetting;

class AppSettingController extends Controller
{
    public function index()
    {
        $appSettings = appSetting::first();
        return view('Admin.layouts.index', compact('appSettings'));
    }

    public function update(Request $request)
    {
        $appSettings = appSetting::first();
        if(!$appSettings){
            $appSettings = new appSetting();
        }

        $appSettings->title = $request->input('title');
        $appSettings->description = $request->input('description');
        $appSettings->email = $request->input('email');
        $appSettings->instagram = $request->input('instagram');
        $appSettings->tokped = $request->input('tokped');
        $appSettings->alamat = $request->input('alamat');
        $appSettings->phone = $request->input('phone');

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Ambil file image dari permintaan
            $file = $request->file('image');
        
            // Buat nama file baru berdasarkan ekstensi file yang diunggah
            $filename = "image." . $file->getClientOriginalExtension();
        
            // Simpan image ke direktori 'public/images' dalam storage
            $imagePath = $file->storeAs('public/images', $filename); // Menyimpan file image di storage/app/public/images
        
            // Simpan path relatif ke image dalam database
            $appSettings->image = 'storage/images/' . $filename; // Path lengkap image
        } else {
            // Jika tidak ada file yang diunggah, tetap gunakan image yang sudah ada
            $appSettings->image = $appSettings->image; // Pastikan tidak mengubah yang sudah ada
        }

        // Handle Logo Upload
        if ($request->hasFile('logo')) {
            // Ambil file logo dari permintaan
            $file = $request->file('logo');
        
            // Buat nama file baru berdasarkan ekstensi file yang diunggah
            $filename = "logo." . $file->getClientOriginalExtension();
        
            // Simpan logo ke direktori 'public/logos' dalam storage
            $logoPath = $file->storeAs('public/logos', $filename); // Menyimpan file logo di storage/app/public/logos
        
            // Simpan path relatif ke logo dalam database
            $appSettings->logo = 'storage/logos/' . $filename; // Path lengkap logo
        } else {
            // Jika tidak ada file yang diunggah, tetap gunakan logo yang sudah ada
            $appSettings->logo = $appSettings->logo; // Pastikan tidak mengubah yang sudah ada
        }
        
        // Simpan pengaturan yang telah diperbarui
        $appSettings->save();
        
        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Settings updated successfully!');
        
    }
}
