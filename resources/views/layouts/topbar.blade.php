<!-- Topbar Start -->
<div class="container-fluid p-0">
    <div class="topbar bg-dark d-flex justify-content-between align-items-center">
        <!-- Left Side (Phone Numbers & Email) -->
        <div class="topbar-left d-flex flex-column flex-md-row align-items-start align-items-md-center py-2 ps-3 ps-md-5">
            <!-- WhatsApp Numbers Section -->
            <div class="d-flex flex-column">
                <!-- WhatsApp Number 1 -->
                <a class="text-body mb-2" href="https://wa.me/{{ $appSettingTopbar->phone }}">
                    <i class="fa fa-phone-alt text-primary me-2"></i>{{ $appSettingTopbar->phone }}
                </a>
                <!-- WhatsApp Number 2 -->
                 <a class="text-body mb-2" href="https://wa.me/+6285715856120">
                    <i class="fa fa-phone-alt text-primary me-2"></i>0857-1585-6120
                </a>
                <!-- WhatsApp Number 3 -->
                <a class="text-body mb-2" href="https://wa.me/+6285694113328">
                    <i class="fa fa-phone-alt text-primary me-2"></i>0856-9411-3328
                </a>
            </div>

            <!-- Email Section (stay beside the WhatsApp numbers) -->
            <a class="text-body ms-md-3 mt-2 mt-md-0" href="mailto:{{ $appSettingTopbar->email }}">
                <i class="fa fa-envelope-open text-primary me-2"></i>{{ $appSettingTopbar->email }}
            </a>
        </div>

        <!-- Right Side (Links) -->
        <div class="topbar-right d-flex flex-column flex-md-row justify-content-end align-items-start align-items-md-center">
            <div class="d-inline-flex">
                <a class="text-body px-2" href="">Terms</a>
                <a class="text-body px-2" href="">Privacy</a>
            </div>
            <div class="d-inline-flex mt-2 mt-md-0">
                <a class="btn btn-sm-square btn-outline-body me-1" href="https://wa.me/{{ $appSettingTopbar->phone }}">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a class="btn btn-sm-square btn-outline-body me-1" href="{{ $appSettingTopbar->tokped }}">
                    <i class="fas fa-store"></i>
                </a>
                <a class="btn btn-sm-square btn-outline-body me-1" href="{{ $appSettingTopbar->instagram }}">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- CSS -->
<style>
    .topbar {
        width: 100%;
        background-color: #343a40;
        color: white;
        padding: 10px 0;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 10;
    }

    .topbar-left, .topbar-right {
        padding: 0 15px;
        width: 100%;
    }

    .topbar-left {
        display: flex;
        flex-direction: column;
    }

    .topbar-left a {
        color: white;
        text-decoration: none;
        font-size: 1.1rem;
        transition: color 0.3s ease;
    }

    .topbar-left a:hover {
        color: #ff5733;
    }

    .btn-outline-body {
        color: white;
        border-color: white;
        transition: all 0.3s ease;
    }

    .btn-outline-body:hover {
        background-color: #ff5733;
        color: white;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .topbar {
            flex-direction: column;
        }

        .topbar-left, .topbar-right {
            width: 100%;
            text-align: center;
        }

        .topbar-right {
            margin-top: 10px;
        }

        .btn-outline-body {
            font-size: 1.3rem;
        }
    }
</style>
