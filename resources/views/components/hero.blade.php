<div>
    @push('css')
        <link rel="stylesheet" href="{{ secure_asset('public/css/hero.css') }}">
    @endpush
    <div>
        <div>
            <h1>Hero Section</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
        </div>
    </div>
    @push('js')
        <script src="{{ asset('js/hero.js') }}"></script>
    @endpush
</div>
