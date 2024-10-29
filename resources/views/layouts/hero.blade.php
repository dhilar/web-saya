<!-- Custom Hero Section Start -->
<div class="container-fluid p-0">
    @if($appSettingsHero->isNotEmpty())
    <div class="hero-slide" style="background-image: url('{{ asset($appSettingsHero->first()->image) }}');">
        <div class="hero-overlay"></div>
        <div class="hero-content-container">
            <h1 class="hero-title">{{ $appSettingsHero->first()->title }}</h1>
            <p class="hero-description">{{ $appSettingsHero->first()->description }}</p>
            <a href="#" class="btn btn-primary hero-btn">Read More</a>
        </div>
    </div>
    @endif
</div>
<!-- Custom Hero Section End -->

<style>
    .hero-slide {
        width: 100%;
        height: 80vh;
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        overflow: hidden;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2));
        z-index: 1;
    }

    .hero-content-container {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
        animation: fadeIn 1s ease-in-out;
        padding: 0 15px;
    }

    .hero-title {
        font-size: 6vw; /* Responsive text size */
        font-weight: 700;
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 3px;
        color: #ffff;
    }

    .hero-description {
        font-size: 1.8vw;
        margin-bottom: 1.5rem;
        max-width: 80%; /* Set width to adjust for smaller screens */
        margin-left: auto;
        margin-right: auto;
        color: white;
    }

    .hero-btn {
        font-size: 1.5vw;
        padding: 0.75rem 2.5rem;
        text-transform: uppercase;
        font-weight: 600;
        border-radius: 30px;
        background-color: #ff5733;
        border: none;
        transition: background-color 0.3s ease;
    }

    .hero-btn:hover {
        background-color: #c70039;
    }

    /* Adjustments for small screens */
    @media (max-width: 768px) {
        .hero-slide {
            height: 60vh;
        }

        .hero-title {
            font-size: 8vw; /* Larger for smaller screens */
        }

        .hero-description {
            font-size: 3.5vw;
            max-width: 90%;
        }

        .hero-btn {
            font-size: 4vw;
            padding: 0.5rem 1.5rem;
        }
    }

    /* Smooth fade-in animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
