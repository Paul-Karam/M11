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
    <div>
        @include('components/sidebar')
        @include('layouts/navbar')
    </div>
    <div class="full-story">
            <div class="story-header">
                <h1>OUR STORY</h1>
            </div>
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
                        <h5>WHO ARE WE</h5>
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
            
            <div class="journey-mission">
                <h1>YOUR JOURNEY STARTS HERE</h1>
                <div class="mission-vision">
                    <div class="mv">
                        <h5>MISSION</h5>
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
                    <div class="mv">
                        <h5>VISION</h5>
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
    <div>
        @include('components/famous-prop')
    </div>
    <div>
        @include('layouts/footer')
    </div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        const navbar = document.querySelector(".topnav");
        navbar.classList.add("compact");
    </script>
</body>
</html>
    