<div>
    @push('css')
        <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    @endpush

    <div class="container-service">
        <div class="title-service">
            <h1>SERVICE</h1>
        </div>
        <div class="sub-title-service">
            <p>Choose the service you want and select the hair artist you prefer</p>
        </div>
        <div class="content-service">
            <div class="card-service">
                <!-- Add hover effect with different modal id for each image -->
                <img src="{{ asset('images/service/service-icon.png') }}" alt="Service 1" class="service-image"
                    data-modal="myModal1">
                <img src="{{ asset('images/service/service-icon.png') }}" alt="Service 2" class="service-image"
                    data-modal="myModal2">
                <img src="{{ asset('images/service/service-icon.png') }}" alt="Service 3" class="service-image"
                    data-modal="myModal3">
                <img src="{{ asset('images/service/service-icon.png') }}" alt="Service 4" class="service-image"
                    data-modal="myModal4">
                <img src="{{ asset('images/service/service-icon.png') }}" alt="Service 5" class="service-image"
                    data-modal="myModal5">
                <img src="{{ asset('images/service/service.png') }}" alt="Service 6" class="service-image"
                    data-modal="myModal6">
                <img src="{{ asset('images/service/Creambath-icon.svg') }}" alt="Service 7" class="service-image"
                    data-modal="myModal7">
                <img src="{{ asset('images/service/Creambath-icon.png') }}" alt="Service 8" class="service-image"
                    data-modal="myModal8">
            </div>
        </div>

        <!-- Modal Content for Service 1 -->
        <div id="myModal1" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="modal-body">
                    <div class="main-logo">
                        <img src="{{ asset('images/service/service-icon.png') }}" alt="Service 1">
                        <h2 class="model-title">CREAMBATH</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                    </div>
                    <div class="small-logos">
                        <img src="{{ asset('images/service/Logo-symply.png') }}" alt="Logo 1" class="logo-small">
                        <img src="{{ asset('images/service/Logo-symply.png') }}" alt="Logo 2" class="logo-small">
                        <img src="{{ asset('images/service/Logo-symply.png') }}" alt="Logo 3" class="logo-small">
                    </div>
                </div>
            </div>
        </div>

        <!-- Repeat similar modal for other services -->
        <div id="myModal2" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="modal-body">
                    <div class="main-logo">
                        <img src="{{ asset('images/service/service-icon.png') }}" alt="Service 2">
                        <h2 class="model-title">SERVICE 2</h2>
                        <p>Details about service 2...</p>
                    </div>
                    <div class="small-logos">
                        <img src="{{ asset('images/service/Logo-symply.png') }}" alt="Logo 1" class="logo-small">
                        <img src="{{ asset('images/service/Logo-symply.png') }}" alt="Logo 2" class="logo-small">
                        <img src="{{ asset('images/service/Logo-symply.png') }}" alt="Logo 3" class="logo-small">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        // Get all images in the card-service
        var images = document.querySelectorAll('.service-image');

        images.forEach(function(image) {
            image.addEventListener('mouseenter', function() {
                var modalId = image.getAttribute('data-modal');
                var modal = document.getElementById(modalId);
                modal.style.display = "block"; // Show the modal
            });
        });

        // Get all modal close buttons and close the modal when clicked
        var closeBtns = document.querySelectorAll('.close');
        closeBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var modal = btn.closest('.modal');
                modal.style.display = "none"; // Close the modal
            });
        });

        // Close the modal if clicked outside of the modal
        window.onclick = function(event) {
            var modal = event.target.closest('.modal');
            if (modal && event.target == modal) {
                modal.style.display = "none";
            }
        };
    </script>
@endpush
