<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AppSetting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // public function index(){
    //     $appSettings = AppSetting::first();

    //     return view('Admin.about', compact('appSettings'));
    // }
    // Fungsi untuk menampilkan halaman Edit About Us
    public function edit()
    {
        // Ambil data about us dari database (misalnya dari tabel "about")
        $appSettings = AppSetting::first();

        $about = About::first();

        // Tampilkan view dan kirimkan data about
        return view('Admin.about', compact('about', 'appSettings'));
    }

    // Fungsi untuk mengupdate data About Us
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'years_of_experience' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Ambil data about yang ada
        $about = About::first();

        // Update data
        $about->title = $request->input('title');
        $about->description = $request->input('description');
        $about->years_of_experience = $request->input('years_of_experience');

        // Cek jika ada file image yang di-upload
        if ($request->hasFile('image')) {
            // Ambil file image dari permintaan
            $file = $request->file('image');

            // Buat nama file baru berdasarkan ekstensi file yang diunggah
            $filename = "about_image." . $file->getClientOriginalExtension();

            // Simpan file baru ke direktori 'public/images/about' dalam storage
            $imagePath = $file->storeAs('public/images/about', $filename); // Menyimpan file image di storage/app/public/images/about

            // Simpan path relatif ke image dalam database
            $about->image = 'storage/images/about/' . $filename; // Path lengkap image
        }

        // Simpan perubahan ke database
        $about->save();

        // Redirect ke halaman Edit About dengan pesan sukses
        return redirect()->route('admin.editAbout')->with('success', 'About Us updated successfully!');
    }
}
