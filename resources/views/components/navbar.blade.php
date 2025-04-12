@php
    function anchor($id) {
        return url('/#' . $id);
    }
@endphp
<header>
    <div class="navbar">
        <ul class="links">
            <li><a href="{{ anchor('home') }}">HOME</a></li>
            <li><a href="/academy">ACADEMY</a></li>
            <li><a href="{{ anchor('book') }}">BOOK</a></li>
        </ul>
        <div class="logo"><img src="{{ asset('storage/images/service/logo-symply.svg') }}" alt="Logo"></div>
        <ul class="links">
            <li><a href="{{ anchor('service') }}">SERVICES</a></li>
            <li><a href="{{ anchor('about') }}">ABOUT US</a></li>
            <li><a href="{{ anchor('contact') }}">CONTACT US</a></li>
        </ul>
        <div class="toggle_btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="dropdown-menu">
        <li><a href="{{ anchor('home') }}">HOME</a></li>
        <li><a href="/academy">ACADEMY</a></li>
        <li><a href="{{ anchor('book') }}">BOOK</a></li>
        <li><a href="{{ anchor('service') }}">SERVICES</a></li>
        <li><a href="{{ anchor('about') }}">ABOUT US</a></li>
        <li><a href="{{ anchor('contact') }}">CONTACT US</a></li>
    </div>
</header>
@push('js')
    <script>
        const toggleBtn = document.querySelector('.toggle_btn');
        const toggleBtnIcon = document.querySelector('.toggle_btn i');
        const dropDown = document.querySelector('.dropdown-menu');

        toggleBtn.onclick = function() {
            dropDown.classList.toggle('open');
            const isOpen = dropDown.classList.contains('open');

            toggleBtnIcon.classList = isOpen ?
                'fas fa-xmark' :
                'fas fa-bars';
        }
    </script>
@endpush
