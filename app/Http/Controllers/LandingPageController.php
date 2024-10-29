<?php

namespace App\Http\Controllers;

use App\Models\Team; // Ganti dari TeamMember ke Team
use App\Models\WhyChooseUs;
use App\Models\About;
use App\Models\AppSetting;
use App\Models\Project;
use App\Models\Product;
use App\Models\Advantage;
use App\Models\Sertifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class LandingPageController extends Controller
{
    /**
     * Tampilkan halaman utama landing page.
     */
    public function index()
    {
        // Ambil data dari berbagai tabel
        $teams = Team::all(); // Ambil semua data dari tabel teams
        $whyChooseUs = WhyChooseUs::all();
        $projects = Project::all();
        $advantages = Advantage::all();
        $appSettings = AppSetting::first();
        
        // Ambil satu data AppSetting untuk Topbar (first)
        $appSettingTopbar = AppSetting::first(); 

        // Ambil beberapa data AppSetting untuk Hero (limit 3)
        $appSettingsHero = AppSetting::all();
        
        // Kirim semua data yang diperlukan ke view 'layouts.app'
        return view('layouts.app', compact(
            'teams', // Ubah dari 'teamMembers' menjadi 'teams'
            'whyChooseUs', 
            'appSettingTopbar', 
            'appSettingsHero', 
            'projects',
            'advantages',
            'appSettings'
        ));
    }

    /**
     * Tampilkan halaman About.
     */
    public function about()
    {
        // Ambil data umum yang diperlukan untuk halaman About
        $appSettingTopbar = AppSetting::first(); 
        $appSettingsHero = AppSetting::all(); 
        $teams = Team::all(); // Ambil semua data anggota tim

        $whyChooseUs = WhyChooseUs::all();
        $appSettings = AppSetting::first();

        // Ambil data About
        $about = About::first();
        
        // Kirim semua data yang diperlukan ke view 'about'
        return view('about', compact(
            'about', 
            'teams', // Ubah dari 'teamMembers' menjadi 'teams'
            'whyChooseUs', 
            'appSettingTopbar', 
            'appSettingsHero',
            'appSettings'
        ));
    }

    public function product()
    {
        $appSettings = AppSetting::first();
        $appSettingTopbar = AppSetting::first(); 
        $products = Product::all();
        return view('produk.index', compact('appSettings', 'products', 'appSettingTopbar'));
    }

    public function galeri()
    {
        $appSettings = AppSetting::first();
        $products = Product::all(); // Ambil data produk dari database
        $appSettingTopbar = AppSetting::first(); 
        return view('galeri', compact('products', 'appSettingTopbar', 'appSettings'));
    }

    public function keunggulan()
    {
        $appSettings = AppSetting::first();
        $appSettingTopbar = AppSetting::first();
        $products = Product::all();
        $projects = Project::all();
        return view('produk.keunggulan', compact ('products', 'appSettings', 'appSettingTopbar', 'projects'));
    }
    
    public function Kontak()
    {
        $appSettings = AppSetting::first();
        $appSettingTopbar = AppSetting::first();
        return view('kontak', compact ('appSettings', 'appSettingTopbar'));
    }

    public function sendEmail(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Log::info('Sending email with data: ', [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ]);

    // Kirim email
    Mail::send('emails.contact', [
        'name' => $request->name,
        'email' => $request->email,
        'messageContent' => $request->message, // Ubah dari 'message' menjadi 'messageContent'
    ], function ($mail) use ($request) {
        $mail->from($request->email, $request->name); // Email pengirim
        $mail->to('tujuan@example.com'); // Ganti dengan alamat email tujuan
        $mail->subject('Pesan Kontak'); // Subjek email
    });

    return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
}


    public function Project()
    {
        $appSettings = AppSetting::first();
        $appSettingTopbar = AppSetting::first();
        $projects = Project::all();

        return view('produk.project', compact ('projects', 'appSettings', 'appSettingTopbar'));
    }

    public function advantages()
    {
        // Mengambil semua data keunggulan dari database
        $appSettings = AppSetting::first();
        $appSettingTopbar = AppSetting::first();
        $advantages = Advantage::all();

        // Mengirim data ke view
        return view('produk.advantage', compact('advantages', 'appSettings', 'appSettingTopbar'));
    }

    public function sertifikasi()
    {
        $products = Product::all();
        $sertifikasis = Sertifikasi::all(); // Pastikan model ini terhubung dengan tabel yang sesuai
        $appSettings = AppSetting::first();
        $appSettingTopbar = AppSetting::first(); 
        return view('produk.sertifikasi', compact('sertifikasis', 'appSettings', 'appSettingTopbar', 'products')); // Perbaikan di sini
    }
}
