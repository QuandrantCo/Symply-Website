<div>
    @push('css')
        <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    @endpush
    <div class="hero-container">
        <div class="carousel-wrapper">
            <!-- Carousel Layer 1 -->
            <div class="carousel-1">
                <div class="carousel-content">
                    <h1>Carousel 1</h1>
                    <p>This is the first carousel slide.</p>
                </div>
            </div>

            <!-- Carousel Layer 2 -->
            <div class="carousel-2">
                <div class="carousel-content">
                    <h1>Carousel 2</h1>
                    <p>This is the second carousel slide.</p>
                </div>
            </div>

            <!-- Carousel Layer 3 -->
            <div class="carousel-3">
                <div class="carousel-content">
                    <h1>Carousel 3</h1>
                    <p>This is the third carousel slide.</p>
                </div>
            </div>
            <div class="hero-background"></div>
        </div>

        <!-- Tombol Panah -->
        <button class="carousel-arrow left-arrow" onclick="moveCarousel('prev')">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-arrow right-arrow" onclick="moveCarousel('next')">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    @push('js')
        <script src="{{ asset('js/hero.js') }}"></script>
    @endpush
</div>
