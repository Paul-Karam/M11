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
            <div class="media-article">
                <div class="article-header">
                    <div class="img-contain">
                        <div class="asp asp-3-1">
                            <img src="image/articleBackground.png" alt="">
                        </div>
                    </div>
                    <div class="article-header-content">
                        <div class="logos">
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                        <h1>title of the article</h1>
                        <h3>11.6.2023 - BY JENNIFER DOE</h3>
                    </div>
                </div>
                <div class="article-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet.
                        Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci 
                        dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut 
                        placerat orci nulla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl
                    </p>
                    <p>
                        Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. 
                        Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget 
                        nunc lobortis. Faucibus ornare suspendisse sed nisi. Sagittis eu volutpat odio 
                        facilisis mauris sit amet massa. Erat velit scelerisque in dictum non 
                        consectetur a erat. Amet nulla facilisi morbi tempus iaculis urna. 
                        Egestas purus viverra accumsan in nisl. Feugiat in ante metus dictum at tempor commodo.
                    </p>
                </div>
                <div class="article-middle-img">
                    <div class="asp asp-3-1">
                        <img src="image/home4.png" alt="">
                    </div>
                </div>
                <div class="article-paragraph">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet.
                        Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci 
                        dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut 
                        placerat orci nulla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl
                    </p>
                    <p>
                        Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. 
                        Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget 
                        nunc lobortis. Faucibus ornare suspendisse sed nisi. Sagittis eu volutpat odio 
                        facilisis mauris sit amet massa. Erat velit scelerisque in dictum non 
                        consectetur a erat. Amet nulla facilisi morbi tempus iaculis urna. 
                        Egestas purus viverra accumsan in nisl. Feugiat in ante metus dictum at tempor commodo.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet.
                        Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci 
                        dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut 
                        placerat orci nulla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl
                    </p>
                    <p>
                        Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. 
                        Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget 
                        nunc lobortis. Faucibus ornare suspendisse sed nisi. Sagittis eu volutpat odio 
                        facilisis mauris sit amet massa. Erat velit scelerisque in dictum non 
                        consectetur a erat. Amet nulla facilisi morbi tempus iaculis urna. 
                        Egestas purus viverra accumsan in nisl. Feugiat in ante metus dictum at tempor commodo.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet.
                        Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci 
                        dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut 
                        placerat orci nulla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl
                    </p>
                    <p>
                        Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. 
                        Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget 
                        nunc lobortis. Faucibus ornare suspendisse sed nisi. Sagittis eu volutpat odio 
                        facilisis mauris sit amet massa. Erat velit scelerisque in dictum non 
                        consectetur a erat. Amet nulla facilisi morbi tempus iaculis urna. 
                        Egestas purus viverra accumsan in nisl. Feugiat in ante metus dictum at tempor commodo.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet.
                        Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci 
                        dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut 
                        placerat orci nulla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl
                    </p>
                    <p>
                        Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. 
                        Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget 
                        nunc lobortis. Faucibus ornare suspendisse sed nisi. Sagittis eu volutpat odio 
                        facilisis mauris sit amet massa. Erat velit scelerisque in dictum non 
                        consectetur a erat. Amet nulla facilisi morbi tempus iaculis urna. 
                        Egestas purus viverra accumsan in nisl. Feugiat in ante metus dictum at tempor commodo.
                    </p>
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