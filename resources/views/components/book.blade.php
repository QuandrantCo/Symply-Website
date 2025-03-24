<div>
    @push('css')
        <link rel="stylesheet" href="{{ asset('css/book.css') }}">
    @endpush
    <div class="book-container">
        <div class="book-background">
            <img src="{{ asset('images/book/book2.png') }}" alt="About Us Image" class="background-image">
            <!-- Replace this path with your actual image path -->
        </div>
        <div class="book-overlay">
            <div class="book-content">
                <h1>Want to cut your hair?</h1>
                <button>Book Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
            </div>
        </div>
    </div>
</div>
