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
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            <div class="start-selling">
                <div class="selling-img">
                    <div class="asp asp-3-1">
                        <img src="image/articleBackground.png" alt="">
                    </div>
                </div>
                <div class="text">
                    <div class="head1">
                        <h1 class="head">Start selling your properties now on m11</h1>
                        <button class="btn-grey">get started</button>
                    </div>
                    <div class="head2">
                        <div class="head3">
                            @include('svg-files/list')
                            <p>Ability to list endless number of properties</p>
                        </div>
                        <div class="head3">
                            @include('svg-files/analytics')
                            <p>Ability to track the performance of each property</p>
                        </div>
                        <div class="head3">
                            @include('svg-files/system')
                            <p>Ability to manage multiple properties at the same time</p>
                        </div>
                    </div>
                </div>
                <div class="how-it-works">
                    <h1>how it works</h1>
                    <div class="steps">
                        <div class="step">
                            <div class="asp asp-2-1">
                                <img src="image/step1.png" alt="">    
                            </div>
                            <p>1</p>
                            <p>creat your account</p>
                        </div>
                        <div class="step">
                            <div class="asp asp-2-1">
                                <img src="image/step2.png" alt="">
                            </div>
                            <p>2</p>
                            <p>list your properties</p>
                        </div>
                        <div class="step">
                            <div class="asp asp-2-1">
                                <img src="image/step3.png" alt="">
                            </div>
                            <p>3</p>
                            <p>start selling</p>
                        </div>
                    </div>
                </div>
                <div class="build-container">
                    <div class="building-img">
                        <img src="image/building.png" style="min-width: 100%" alt="building image">
                    </div>
                    <div class="img-text">
                        <div class="front-img">
                            <div class="asp asp-2-1">
                                <img src="image/frontImg.png" style="min-width: 100%"  alt="front image">
                            </div>
                        </div>
                        <div class="who-container">
                            <div class="who-we-are">
                                <h5>A particular platform with a whole new experience</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. 
                                </p>
                                <p>
                                    Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in.
                                    Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla. 
                                    Tincidunt ornare massa eget egestas purus viverra accumsan in nisl.
                                    Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium.
                                    Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget nunc lobortis.
                                </p>
                                <p>
                                    Erat velit scelerisque in dictum non consectetur a erat.
                                    Amet nulla facilisi morbi tempus iaculis urna. Egestas purus viverra accumsan in nisl. 
                                    Feugiat in ante metus dictum at tempor commodo. Convallis tellus id interdum velit laoreet. 
                                    Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra.
                                </p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <x-faq-component/>
            <div>
                @include('layouts/footer')
            </div>
            <script>
                const navbar = document.querySelector(".topnav");
                navbar.classList.add("compact");
            </script>
        </body>
</html>