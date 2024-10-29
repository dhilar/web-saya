<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\AppSetting;

class ProductController extends Controller
{
    // Tampilkan daftar produk di dashboard admin
    public function index()
    {
        $products = Product::all();
        $appSettings = AppSetting::first();
        return view('Admin.products.index', compact('products', 'appSettings'));
    }

    // Tampilkan form tambah produk
    public function create()
    {
        return view('Admin.products.create');
    }

    // Simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|numeric',
            'specification' => 'required|string',
            'advantages' => 'required|string',
            'video_url' => 'nullable|url',
        ]);

        $product = new Product();
        $product->category = $request->input('category');
        $product->name = $request->input('name');
        $product->code = $request->input('code');

        // Proses upload gambar
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/products'), $filename);
            $product->image = 'images/products/' . $filename;
        }

        $product->price = $request->input('price');
        $product->specification = $request->input('specification');
        $product->advantages = $request->input('advantages');

        // Mengonversi URL video ke format embed
        $videoUrl = $request->input('video_url');
        if ($videoUrl) {
            $product->video_url = $this->convertToEmbedUrl($videoUrl);
        }

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Tampilkan form edit produk
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('Admin.products.edit', compact('product'));
    }

    // Update data produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|numeric',
            'specification' => 'required|string',
            'advantages' => 'required|string',
            'video_url' => 'nullable|url',
        ]);

        $product = Product::findOrFail($id);
        $product->category = $request->input('category');
        $product->name = $request->input('name');
        $product->code = $request->input('code');

        // Proses upload gambar jika ada gambar baru
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/products'), $filename);
            $product->image = 'images/products/' . $filename;
        }

        $product->price = $request->input('price');
        $product->specification = $request->input('specification');
        $product->advantages = $request->input('advantages');

        // Mengonversi URL video ke format embed
        $videoUrl = $request->input('video_url');
        if ($videoUrl) {
            $product->video_url = $this->convertToEmbedUrl($videoUrl);
        }

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    // Hapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus!');
    }

    // Fungsi untuk mengonversi URL YouTube ke format embed
    private function convertToEmbedUrl($url)
    {
        // Menggunakan regex untuk mengekstrak ID video dari URL
        preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^&\n]{11})/', $url, $matches);
        $videoId = isset($matches[1]) ? $matches[1] : null;

        // Jika ID video ditemukan, kembalikan URL embed
        return $videoId ? 'https://www.youtube.com/embed/' . $videoId : null;
    }
}
