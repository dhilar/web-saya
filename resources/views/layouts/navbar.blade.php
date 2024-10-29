<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="home" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-primary m-0">
            <!-- Menampilkan logo secara dinamis -->
            <img src="{{ asset('' . $appSettings->logo) }}" width="50" height="50" >
        </h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="about" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
                <a href="{{ route('produk.index') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
                <div class="dropdown-menu border-0 m-0">
                    <a href="{{ route('produk.unggulan') }}" class="dropdown-item">Keunggulan</a>
                    <a href="{{ route('produk.sertifikasi') }}" class="dropdown-item">Sertifikasi</a>
                    <a href="{{ route('galeri') }}" class="dropdown-item">Instalasi dan Galeri</a>
                    <a href="{{ route('produk.unggulan') }}" class="dropdown-item">Daftar Harga dan Spesifikasi</a>
                </div>
            </div>
            <a href="{{ route('kontak') }}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="galeri" class="btn btn-primary py-2 px-4 d-none d-lg-block">Galeri</a>
    </div>
</nav>
<!-- Navbar End -->

<style>
/* Tambahkan aturan CSS khusus untuk mobile */
@media (max-width: 767px) {
    .navbar-brand img {
        width: 70px; /* Memperbesar logo */
        height: 70px;
    }

    .navbar-nav .nav-link {
        font-size: 1.2rem; /* Memperbesar teks menu */
        padding: 10px; /* Menambah jarak padding */
    }

    .btn-primary {
        font-size: 1.1rem; /* Memperbesar tombol */
        padding: 10px 20px; /* Menambah ukuran tombol */
    }
}
</style>
