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
    <div class="agent-dash">
        <div>
            @include('layouts/agent-navbar')
        </div>
        <div>
            <h1></h1>
            <div class="page-progress">
                <div>
                    <h3>1000</h3>
                    <div>
                        <p>page views</p>
                        <p><i class="fa-solid fa-caret-up"></i> 14.34</p>
                    </div>
                </div>
                <div>
                    <h3>400</h3>
                    <div>
                        <p>unique visitors</p>
                        <p><i class="fa-solid fa-caret-down"></i> 14.34</p>
                    </div>
                </div>
                <div>
                    <h3>376</h3>
                    <div>
                        <p>post reactions</p>
                        <p><i class="fa-solid fa-caret-up"></i> 14.34</p>
                    </div>
                </div>
            </div>
            <div>
                
            </div>
        </div>
        <div>
            @include('layouts/footer')
        </div>
    </div>
</body>