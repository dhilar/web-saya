<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h3 class="text-light mb-4">Contact Information</h3>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>{{ $appSettings->alamat }}</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>{{ $appSettings->phone }}</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>{{ $appSettings->email }}</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-outline-light me-2" href="{{ $appSettings->instagram }}"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-outline-light me-2" href="{{ $appSettings->tokped }}"><i class="fas fa-store"></i></a>
                    <a class="btn btn-square btn-outline-light me-2" href="{{ $appSettings->twitter_link }}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light" href="{{ $appSettings->linkedin_link }}"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h3 class="text-light mb-4">Our Services</h3>
                <ul class="list-unstyled">
                    {{-- <li><a class="text-body" href="{{ route('produk.project') }}">Keunggulan</a></li> --}}
                    <li><a class="text-body" href="{{ route('produk.unggulan') }}">Keunggulan</a></li>
                    <li><a class="text-body" href="{{ route('produk.sertifikasi') }}">Sertifikasi</a></li>
                    <li><a class="text-body" href="{{ route('produk.unggulan') }}">Daftar Harga dan Spesifikasi</a></li>
                    {{-- <li><a class="text-body" href="{{ route('produk.advantage') }}">Keunggulan Advantage</a></li> --}}
                    <li><a class="text-body" href="{{ route('galeri') }}">Galeri</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h3 class="text-light mb-4">Pesan</h3>
                <p>Dapatkan informasi terkini</p>
                <form action="https://api.whatsapp.com/send" method="get" target="_blank">
                    <div class="input-group">
                        <input type="hidden" name="phone" value="6285715856120"> <!-- Nomor WhatsApp tujuan -->
                        <input type="text" class="form-control border-light" name="text" placeholder="Ketik pesan Anda di sini" required>
                        <button class="btn btn-primary" type="submit">Kirim Pesan Langsung</button> <!-- Mengubah teks tombol -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="text-light" href="#">QuiPanel</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed by <a class="text-light" href="https://htmlcodex.com"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Custom Inline CSS -->
<style>
    .footer {
        background-color: #222;
        color: #bbb;
        font-size: 14px;
        line-height: 24px;
    }
    .footer h3 {
        font-size: 20px;
        color: #fff;
        font-weight: 600;
        margin-bottom: 20px;
        position: relative;
    }
    .footer h3:before {
        content: "";
        width: 50px;
        height: 2px;
        background-color: #fff;
        position: absolute;
        bottom: -10px;
        left: 0;
    }
    .footer a {
        color: #bbb;
        transition: all 0.3s ease;
    }
    .footer a:hover {
        color: #fff;
    }
    .footer .btn-square {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        transition: 0.3s;
    }
    .footer .btn-square i {
        font-size: 18px;
    }
    .footer .btn-outline-light {
        color: #fff;
        border: 1px solid #fff;
    }
    .footer .btn-outline-light:hover {
        background-color: #fff;
        color: #222;
    }

    .copyright {
        background-color: #0d6efd;
        font-size: 14px;
    }
    .copyright a {
        color: #fff;
    }
</style>
