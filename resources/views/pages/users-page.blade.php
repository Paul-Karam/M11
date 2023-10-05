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
                        <div class="user-data">
                            <button>MY PROFILE <i class="fa-solid fa-arrow-right-long" style="color: #353e46;"></i></button>
                            <button>SAVED POSTS <i class="fa-solid fa-arrow-right-long" style="color: #353e46;"></i></button>
                            <button>MY LIKES <i class="fa-solid fa-arrow-right-long" style="color: #353e46;"></i></button>
                        </div>
                    </div>
                    
                </div>
                <div class="middle-container">
                    <div class="add-post">
                        <div class="post">
                            <img src="image/profilePic2.png" alt="">
                            <input onclick="on()" type="text" placeholder="Share your experience">
                        </div>
                        <div class="add">
                            <div class="photo">
                                <i class="fa-regular fa-image" style="color: #ff0000;"></i>
                                <p>PHOTO</p>
                            </div>
                            <div class="vid">
                                <i class="fa-solid fa-video" style="color: #ff0000;"></i>
                                <p>VIDEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="agent-post">
                        <p>AGENTS' POSTS</p>
                        <i class="fa-solid fa-chevron-down" style="color: #ff0000;"></i>
                    </div>
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
                <div id="overlay"></div>
                <x-new-post/>
            </div>
            <div>
                @include('layouts/footer')
            </div>
            <script>
                const navbar = document.querySelector(".topnav");
                navbar.classList.add("compact");

                function on() {
                document.getElementById("overlay").style.display = "block";
                document.querySelector(".share-post-container").style.display = "flex";
                }
                function off() {
                document.getElementById("overlay").style.display = "none";
                document.querySelector(".share-post-container").style.display = "none";
                }

                // Add an event listener to the input element
                const inputElement = document.querySelector("input[type='text']");
                inputElement.addEventListener("click", on);

                // Add an event listener to the X icon
                const xIcon = document.querySelector(".fa-x");
                xIcon.addEventListener("click", off);
            </script>
        </body>
    </html>
        