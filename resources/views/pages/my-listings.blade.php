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
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            @vite(["resources/scss/app.scss"])
        </head>
<body>
    <div>
        @include('layouts/agent-navbar')
    </div>
    <div class="my-listings">
        <div class="listings-head">
            <h1>my listings</h1>
            <i class="fa-solid fa-plus"></i>
        </div>
        <div class="listings-container">
            <x-listing-profile/>
            <x-listing-profile/>
            <x-listing-profile/>
            <x-listing-profile/>
            <x-listing-profile/>
            <x-listing-profile/>
            <x-listing-profile/>
            <x-listing-profile/>
            <x-listing-profile/>
        </div>
    </div>
    <div>
        @include('layouts/footer')
    </div>
</body>