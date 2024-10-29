<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\AppSetting;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // Tampilkan daftar tim di dashboard admin
    public function index()
    {
        $appSettings = AppSetting::first();
        $teams = Team::all();
        return view('Admin.team.index', compact('teams', 'appSettings'));
    }

    // Tampilkan form untuk membuat anggota tim baru
    public function create()
    {
        return view('Admin.team.create'); // Pastikan Anda memiliki view create.blade.php
    }

    // Simpan data anggota tim baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
        ]);

        $team = new Team();
        $team->nama = $request->input('nama');
        $team->jabatan = $request->input('jabatan');
        $team->facebook_link = $request->input('facebook_link');
        $team->twitter_link = $request->input('twitter_link');
        $team->instagram_link = $request->input('instagram_link');

        // Jika ada gambar yang di-upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            
            // Tentukan nama file dengan nama unik
            $filename = 'team/' . $request->nama . "_" . time() . "." . $file->getClientOriginalExtension();
            
            // Pindahkan file ke folder public_html/team
            $file->move(public_path('team'), $filename);
            
            // Simpan path relatif ke gambar di database
            $team->image = $filename;
        } else {
            $team->image = null;
        }
        $team->save();

        return redirect()->route('admin.team.index')->with('success', 'Team member created successfully!');
    }

    // Tampilkan form edit anggota tim
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('Admin.team.edit', compact('team'));
    }

    // Update data anggota tim
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
        ]);

        $team = Team::findOrFail($id);
        $team->nama = $request->input('nama');
        $team->jabatan = $request->input('jabatan');
        $team->facebook_link = $request->input('facebook_link');
        $team->twitter_link = $request->input('twitter_link');
        $team->instagram_link = $request->input('instagram_link');

        // Jika ada gambar baru yang di-upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = '/team/' . $request->nama . "_" . time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('team'), $filename);

            // Simpan path relatif ke gambar di database
            $team->image = $filename;
        }

        $team->save();

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully!');
    }

    // Hapus anggota tim
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        
        // Hapus file gambar jika ada
        if ($team->image && file_exists(public_path($team->image))) {
            unlink(public_path($team->image)); // Hapus gambar dari server
        }

        $team->delete();

        return redirect()->route('admin.team.index')->with('success', 'Team member deleted successfully!');
    }
}
