<!DOCTYPE html>
    <html>
        <head>
            <title>@yield('title')</title>
            <link rel="stylesheet" href="/app.scss"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
            <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
            @vite(["resources/scss/app.scss"])
        </head>
    <body>
            <div class="container">
                @include('components/sidebar')
                @include('layouts/navbar')
                @include('components/vidplayer')
            </div>
            <div>
                @include('components/text')
            </div>
            <div>
                @include('components/journey-start')
            </div>
            <div>
                @include('components/get-social')
            </div>
            <div>
                @include('components/ads')
            </div>
            <div>
                @include('components/latest-articles')
            </div>
            <div>
                @include('components/famous-prop')
            </div>
            <div>
                @include('components/reviews')
            </div>
            <div>
                @include('layouts/footer')
            </div>
            <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
            <script>

                window.addEventListener('scroll', function() {
                    const topnav = document.querySelector('.topnav');
                    if (window.scrollY > 780) {
                        topnav.classList.add('compact');
                    } else {
                        topnav.classList.remove('compact');
                    }
                });
                            
            </script>
    </body>
    </html>
