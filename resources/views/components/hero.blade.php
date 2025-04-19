@push('css')
    {{-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <style>
        .hero-background {
            background-image: url('{{ asset('storage/images/hero/back.png') }}');
        }
        .carousel-1 {
            background-image: url('{{ asset('storage/images/hero/carousel-1.png') }}');
        }
        .carousel-2 {
            background-image: url('{{ asset('storage/images/hero/carousel-2.jpg') }}');
        }
        .carousel-3 {
            background-image: url('{{ asset('storage/images/hero/carousel-3.png') }}');
        }
        .carousel-4 {
            background-image: url('{{ asset('storage/images/hero/carousel-4.png') }}');
        }
        .carousel-5 {
            background-image: url('{{ asset('storage/images/hero/carousel-5.png') }}');
        }
    </style>
@endpush
<div id="hero">
    <div class="hero-container">

        <!-- Hero background tetap di atas carousel -->
        <div class="hero-background"></div>

        <div class="carousel-wrapper js-flickity"
            data-flickity='{
            "wrapAround": true,
            "autoPlay": 2000,
            "pageDots": false,
            "prevNextButtons": false,
            "cellAlign": "center",
            "contain": true
        }'>

            <div class="carousel-cell carousel-1">
                <div class="carousel-content">
                    {{-- <h1>Carousel 1</h1>
                    <p>This is the first carousel slide.</p> --}}
                </div>
            </div>

            <div class="carousel-cell carousel-2">
                <div class="carousel-content">
                    {{-- <h1>Carousel 2</h1>
                    <p>This is the second carousel slide.</p> --}}
                </div>
            </div>

            <div class="carousel-cell carousel-3">
                <div class="carousel-content">
                    {{-- <h1>Carousel 3</h1>
                    <p>This is the third carousel slide.</p> --}}
                </div>
            </div>
            <div class="carousel-cell carousel-4">
                <div class="carousel-content">
                    {{-- <h1>Carousel 3</h1>
                    <p>This is the third carousel slide.</p> --}}
                </div>
            </div>
            <div class="carousel-cell carousel-5">
                <div class="carousel-content">
                    {{-- <h1>Carousel 3</h1>
                    <p>This is the third carousel slide.</p> --}}
                </div>
            </div>
        </div>

        <!-- Tombol Panah -->
        <button class="carousel-arrow left-arrow">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-arrow right-arrow">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    @push('js')
        {{-- <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> --}}
        <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const flkty = new Flickity('.js-flickity', {
                    wrapAround: true,
                    autoPlay: 2000,
                    pageDots: false,
                    prevNextButtons: false,
                    cellAlign: 'center',
                    contain: true
                });

                // Tombol navigasi custom
                document.querySelector('.left-arrow').addEventListener('click', function() {
                    flkty.previous();
                });

                document.querySelector('.right-arrow').addEventListener('click', function() {
                    flkty.next();
                });
            });
        </script>
    @endpush
</div>
