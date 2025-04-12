<div id="book">
    @push('css')
        <link rel="stylesheet" href="{{ asset('css/book.css') }}">
    @endpush
    <div class="book-container">
        <div class="book-background">
            <img src="{{ asset('storage/images/book/book2.png') }}" alt="About Us Image" class="background-image">
            <!-- Replace this path with your actual image path -->
        </div>
        <div class="book-overlay">
            <div class="book-content">
                <h1>Want to cut your hair?</h1>
                <a href="https://wa.me/085169765567" target="_blank">
                    <button>Book Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
                    </a>
            </div>
        </div>
    </div>
</div>
