<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\AppSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $appSettings = AppSetting::first();
        $projects = Project::all();
        return view('Admin.project.index', compact('projects', 'appSettings'));
    }

    public function create()
    {
        return view('Admin.project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');

        // Jika ada gambar yang diunggah
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // Simpan di public/images/projects
            $path = $file->move(public_path('images/projects'), $filename); 
            // Simpan path relatif ke database
            $project->image = 'images/projects/' . $filename; // Simpan path yang dihasilkan
        }

        $project->save();

        return redirect()->route('admin.project.index')->with('success', 'Project created successfully!');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('Admin.project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $project = Project::findOrFail($id);
        $project->title = $request->input('title');
        $project->description = $request->input('description');

        // Jika ada gambar baru yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($project->image && file_exists(public_path($project->image))) {
                unlink(public_path($project->image)); // Hapus gambar lama
            }

            // Simpan gambar baru
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->move(public_path('images/projects'), $filename); // Simpan di public
            $project->image = 'images/projects/' . $filename; // Simpan path yang dihasilkan
        }

        $project->save();

        return redirect()->route('admin.project.index')->with('success', 'Project updated successfully!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        // Hapus gambar jika ada
        if ($project->image && file_exists(public_path($project->image))) {
            unlink(public_path($project->image)); // Hapus gambar dari public
        }

        $project->delete();

        return redirect()->route('admin.project.index')->with('success', 'Project deleted successfully!');
    }
}
