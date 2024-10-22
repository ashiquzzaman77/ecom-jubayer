<!-- Preloader Script -->
<script>
    window.addEventListener('load', function() {
        // Hide the preloader with a fade-out effect when the page is fully loaded
        let preloader = document.querySelector('.preloader');
        preloader.style.transition = 'opacity 0.5s ease-out';
        preloader.style.opacity = '0';

        // After the fade-out, completely hide it
        setTimeout(function() {
            preloader.style.display = 'none';
        }, 500); // Adjust this timeout if needed to sync with your fade-out duration
    });
</script>

<script src="{{ asset('frontend/js/vendor.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>

@stack('scripts')
