<div>
    @push('css')
        <link rel="stylesheet" href="{{ asset('public/css/service.css') }}">
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
                <img src="{{ asset('public/image/service/service-icon.png') }}" alt="Service 1" id="myBtn">
                <img src="{{ asset('public/image/service/service-icon.png') }}" alt="Service 2">
                <img src="{{ asset('public/image/service/service-icon.png') }}" alt="Service 3">
                <img src="{{ asset('public/image/service/service-icon.png') }}" alt="Service 4">
                <img src="{{ asset('public/image/service/service-icon.png') }}" alt="Service 5">
                <img src="{{ asset('public/image/service/service-icon.png') }}" alt="Service 6">
                <img src="{{ asset('public/image/service/service-icon.png') }}" alt="Service 7">
                <img src="{{ asset('public/image/service/service-icon.png') }}" alt="Service 8">
            </div>
        </div>

        <div id="myModal" class="modal">
            <!-- Modal Content -->
            <div class="modal-content">
                <!-- Close Button -->
                <span class="close">&times;</span>
                <div class="modal-body">
                    <!-- Main logo and description (Left Side) -->
                    <div class="main-logo">
                        <img src="{{ asset('public/image/service/service-icon.png') }}" alt="Service 8">
                        <h2 class="model-title">CREAMBATH</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s...</p>
                    </div>

                    <!-- Small logos positioned vertically (Right Side) -->
                    <div class="small-logos">
                        <img src="{{ asset('public/image/service/Logo-symply.png') }}" alt="Logo 1" class="logo-small">
                        <img src="{{ asset('public/image/service/Logo-symply.png') }}" alt="Logo 2" class="logo-small">
                        <img src="{{ asset('public/image/service/Logo-symply.png') }}" alt="Logo 3" class="logo-small">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endpush
