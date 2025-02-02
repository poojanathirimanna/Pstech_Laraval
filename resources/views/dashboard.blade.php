@extends('layouts.frontend1')
@section('pages')

<!-- User Welcome Section -->

<!-- Main Content -->
<main>
    <div id="customCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-keyboard="false">

        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('images/GAMING.jpg') }}" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h1>The Best PC Parts and Gaming Accessories in Town</h1>
                    <p>We offer everything you need to build or upgrade your gaming rig. Perfect for gamers and tech enthusiasts seeking quality, reliability, and top-notch performance!</p>
                    <a href="/products" class="btn custom-view-more-btn">VIEW MORE</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('images/A2.jpg') }}" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h1>BUILDING NEW EXPERIENCES</h1>
                    <p>Embark on a journey of innovation with our cutting-edge products designed for building new experiences.</p>
                    <a href="/products" class="btn custom-view-more-btn">VIEW MORE</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{ asset('images/GTX_1080TI.jpg') }}" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h1>CUSTOMIZE YOUR DREAM</h1>
                    <p>Turn your vision into reality with our customizable options to create your dream setup.</p>
                    <a href="/products" class="btn custom-view-more-btn">VIEW MORE</a>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- New Arrivals Section -->
    <div class="text-center text-[#F7941D] text-4xl font-bold mb-6">
        <h2 class="inline-block border-b-4 border-[#F7941D]">
            * NEW ARRIVALS *
        </h2>
    </div>

    <!-- Special Offers Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 px-3">
        <div class="bg-gray-800 text-white rounded-lg shadow-lg p-3">
            <img src="{{ asset('images/rtx4080.png') }}" alt="MSI RTX 4080" class="w-full h-auto">
            <h3 class="text-lg font-bold mt-2">MSI RTX 4080 SUPER GAMING SLIM 16GB</h3>
            <p class="text-yellow-400 text-xl font-bold">529,000 LKR</p>
        </div>
        <div class="bg-gray-800 text-white rounded-lg shadow-lg p-4">
            <img src="{{ asset('images/ASUS ROG STRIX Z790.png') }}" alt="ASUS ROG Z790" class="w-full h-auto">
            <h3 class="text-lg font-bold mt-2">ASUS ROG MAXIMUS Z790 DARK HERO</h3>
            <p class="text-yellow-400 text-xl font-bold">300,000 LKR</p>
        </div>
        <div class="bg-gray-800 text-white rounded-lg shadow-lg p-4">
            <img src="{{ asset('images/G.SKILL TridentZ RGB NEO 16GB.png') }}" alt="G.SKILL TridentZ" class="w-full h-auto">
            <h3 class="text-lg font-bold mt-2">G.SKILL TridentZ RGB NEO 16GB</h3>
            <p class="text-yellow-400 text-xl font-bold">12,000 LKR</p>
        </div>
    </div>
</main>
@endsection
