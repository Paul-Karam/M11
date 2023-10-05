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
    <div class="user-page-container">
        <div class="left-container">
            <div class="user-name">
                <div class="user-info">
                    <img src="image/profilePic2.png" alt="">
                    <div class="info">
                        <h3>Johnny Doe</h3>
                        <h4>USER</h4>
                    </div>
                    <div class="info">
                        <p>johnnydoe@gmail.com</p>
                        <p>+961 3 736 734</p>
                    </div>
                </div>
            </div>
            <div class="about">
                <h3>ABOUT</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Ipsam dolorum illo sunt maiores eveniet. Debitis, aut. 
                    Provident magnam obcaecati aspernatur voluptates ipsa iusto quia.
                </p>
            </div>
            <div class="experience">
                <h3>EXPERIENCE</h3>
                <div class="company-info">
                    <i class="fa-solid fa-biohazard" style="color: #353e46;"></i>
                    <div class="info">
                        <h4>POSITION HERE</h4>
                        <h5>Company's Name</h5>
                        <p>Jul 2021 - Present.2 years</p>
                        <p>Lebanon</p>
                    </div>
                </div>
            </div>
            <div class="experience">
                <div class="company-info">
                    <div>
                        <i class="fa-solid fa-biohazard" style="color: #353e46;"></i>
                    </div>
                    <div class="info">
                        <h4>POSITION HERE</h4>
                        <h5>Company's Name</h5>
                        <p>Jul 2021 - Present.2 years</p>
                        <p>Lebanon</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="middle-container">
            <div class="user-post">
                <x-profile/>
            </div>
            <div class="written-post">
                <x-post1/>
            </div>
            <div class="written-post">
                <x-post1/>
            </div>
        </div>
        <div class="ads-container">
            <img src="./image/ad1.jpg" alt="ad1">
            <img src="./image/ad2.jpg" alt="ad2">
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