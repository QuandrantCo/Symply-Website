<div>
    @push('css')
        <link rel="stylesheet" href="{{ secure_asset('/public/css/academy.css') }}">
    @endpush
    <div class="academy">
        <div class="background-academy">
            <div class="container-academy">
                <div class="title-academy">
                    <h2 id="text"></h2>
                </div>
                <div class="sub-title-academy">
                    <p>WE ARE PREPARING SOMETHING AMAZING ACADEMY FOR YOU!</p>
                    <p><span>✨</span> Stay Tuned!<span>✨</span></p>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/TextPlugin.min.js"></script>

        <script>
            var text = document.getElementById("text");
            document.addEventListener("DOMContentLoaded", (event) => {
                gsap.registerPlugin(TextPlugin);
                gsap.to(text, {
                    duration: 3,
                    text: "COMING SOON..",
                    ease: "power2.out",
                });
                gsap.from(".sub-title-academy", {
                    duration: 2,
                    opacity: 0,
                    y: 30,
                    ease: "power2.out",
                    delay: 1.5
                });
            });
        </script>
    @endpush
</div>
