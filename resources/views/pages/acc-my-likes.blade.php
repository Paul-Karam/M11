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
            @php
                $isAccountPage = true;
            @endphp
        </head>
        <body>
            <div>
                @include('components/sidebar')
                @include('layouts/navbar')
            </div>
            <div class="account-container">
                <h1>profile</h1>
                <div class="account">
                    @include('components/left-details')
                    <div class="right-details">
                        @include('components/myLikes')
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
        </body>
    </html>