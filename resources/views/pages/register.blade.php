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
    <div class="registration">
        <h1>Register</h1>
            <div class="user-form">
                <div class="name">
                    <label for="fname">First name</label>
                    <input type="text" name="fname" class="input" placeholder="First Name">
                </div>
                <div class="name">
                    <label for="lname">Last name</label>
                    <input type="text" name="lname" class="input" placeholder="Last Name">
                </div>
                <div class="name">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="input" placeholder="Last Name">
                </div>
                <div class="phone">
                    <label>Phone Number</label>
                    <input id="phone" name="phone" type="tel" placeholder="Phone Number">
                </div>
                <div class="name">
                    <label for="password">create password</label>
                    <input type="text" name="password" class="input" placeholder="Password">
                </div>
                <div class="name">
                    <label for="password">confirm password</label>
                    <input type="text" name="password" class="input" placeholder="Password">
                </div>
                <div class="register">
                    <button class="btn-grey">Register</button>
                </div>
            </div>
    </div>
    <div>
        @include('layouts/footer')
    </div>
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