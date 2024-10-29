<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sertifikasi;
use App\Models\AppSetting; // Pastikan model AppSetting sudah benar
use Illuminate\Http\Request;

class SertifikasiController extends Controller
{
    // Menampilkan daftar sertifikasi
    public function index()
    {
        $appSettings = AppSetting::first();
        $sertifikasis = Sertifikasi::all();
        return view('Admin.sertifikasi.index', compact('sertifikasis', 'appSettings'));
    }

    // Menampilkan formulir untuk membuat sertifikasi baru
    public function create()
    {
        return view('Admin.sertifikasi.create');
    }

    // Menyimpan sertifikasi baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255', // Pastikan penamaan field benar
            'description' => 'required|string',
        ]);

        // Simpan sertifikasi baru
        Sertifikasi::create($request->only(['title', 'description']));

        return redirect()->route('Admin.sertifikasi.index')->with('success', 'Sertifikasi berhasil ditambahkan.');
    }

    // Menampilkan formulir untuk mengedit sertifikasi
    public function edit(Sertifikasi $sertifikasi)
    {
        return view('Admin.sertifikasi.edit', compact('sertifikasi'));
    }

    // Memperbarui sertifikasi di database
    // Memperbarui sertifikasi di database
public function update(Request $request, Sertifikasi $sertifikasi)
{
    $request->validate([
        'title' => 'required|string|max:255', // Pastikan penamaan field benar
        'description' => 'required|string',
    ]);

    // Perbarui sertifikasi
    $sertifikasi->update($request->only(['title', 'description']));

    return redirect()->route('admin.sertifikasi.index')->with('success', 'Sertifikasi berhasil diperbarui.');
}


    // Menghapus sertifikasi dari database
    public function destroy(Sertifikasi $sertifikasi)
    {
        $sertifikasi->delete();
        return redirect()->route('admin.sertifikasi.index')->with('success', 'Sertifikasi berhasil dihapus.');
    }
}
