<header>
    <div class="navbar">
        <ul class="links">
            <li><a href="#home">HOME</a></li>
            <li><a href="#academy">ACADEMY</a></li>
            <li><a href="#book">BOOK</a></li>
        </ul>
        <div class="logo"><img src="{{ secure_asset('image/service/logo-symply.svg') }}" alt="Logo"></div>
        <ul class="links">
            <li><a href="#home">SERVICES</a></li>
            <li><a href="#academy">ABOUT US</a></li>
            <li><a href="#book">CONTACT US</a></li>
        </ul>
        <div class="toggle_btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="dropdown-menu">
        <li><a href="#home">HOME</a></li>
        <li><a href="#academy">ACADEMY</a></li>
        <li><a href="#book">BOOK</a></li>
        <li><a href="#home">SERVICES</a></li>
        <li><a href="#academy">ABOUT US</a></li>
        <li><a href="#book">CONTACT US</a></li>
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
