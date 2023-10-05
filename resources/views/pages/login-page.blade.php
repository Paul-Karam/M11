<!DOCTYPE html>
    <html>
        <head>
            <title>@yield('title')</title>
            <link rel="stylesheet" href="/app.scss"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
            <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
            @vite(["resources/scss/app.scss"])
        </head>
<body>
    <div>
        @include('components/sidebar')
        @include('layouts/navbar')
    </div>

    <div class="login">
        <h1>LOGIN</h1>
        <div class="email-phone">
            <div class="email">
                <label for="email">EMAIL ADDRESS</label>
                <input type="text" name="email" class="email-input" placeholder="Email Address">
            </div>
            <div class="email">
                <label>PHONE NUMBER</label>
                <input id="phone" name="phone" type="tel" placeholder="Phone Number">
            </div>
            <div class="proceed">
                <button class="btn-grey">PROCEED</button>
            </div>
        </div>
        <div class="google-fb">
            <p>Or continue with</p>
          
                <button class="btn-grey">
                <img src="image/googleLogo.jpg" alt="">
                <div>LOGIN WITH GMAIL</div>
                <div></div>
            </button>
            <button class="fb">
                <i class="fa-brands fa-square-facebook" style="color: #ffffff;"></i>
                <div>LOGIN WITH FACEBOOK</div>
                <div></div>
            </button>
        </div>
    </div>

    <div>
        @include('layouts/footer')
    </div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        const navbar = document.querySelector(".topnav");
        navbar.classList.add("compact");
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.querySelector('[name="phone"]');
            var iti = window.intlTelInput(input, {
                preferredCountries: ['lb'],
                utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
            });
        });
    </script>
</body>
</html>