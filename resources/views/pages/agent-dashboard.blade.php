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
        <div class="user-page-container">         
            <div class="left-container">
                <div class="user-name">
                    <div class="user-info">
                        @include('svg-files/edit-red')
                        <img src="image/home4profile.png" alt="">
                        <div class="info">
                            <h3>Johnny Doe</h3>
                            <h4>AGENT</h4>
                        </div>
                        <div class="info">
                            <p>johnnydoe@gmail.com</p>
                            <p>+961 3 736 734</p>
                        </div>
                        <div class="sub-container">
                            @include('svg-files/subscribe')
                            <div class="sub-text">
                                <h3>subscribe now</h3>
                                <p>to access exclusive tools & insights</p>
                            </div>
                        </div>
                    </div>
                    <div class="user-data">
                        <button>my listings <i class="fa-solid fa-arrow-right-long" style="color: #353e46;"></i></button>
                        <button>properties reports <i class="fa-solid fa-arrow-right-long" style="color: #353e46;"></i></button>
                    </div>
                    <div class="user-stats">
                        <div class="visitors-interactions">
                            <div class="visitors">
                                <h3>page visitors</h3>
                                <p>87</p>
                            </div>
                            <div class="visitors">
                                <h3>post interactions</h3>
                                <p>2000</p>
                            </div>
                        </div>
                        <div>
                            <div class="user-data">
                                <button>see visitors analytics <i class="fa-solid fa-arrow-right-long" style="color: #ff0000;"></i></button>
                            </div>
                        </div>
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
            <div class="right-container">
                <div class="premium-pack">
                    <div class="premium-desc">
                        <h3>Take Your Journey To Another Level By Subscribing To The Premium Package</h3>
                    </div>
                    <div class="from-to">
                        <div class="prem-pic">
                            <img src="image/home4profile.png" alt="">
                        </div>
                        <i class="fa-solid fa-arrow-right-long" style="color: #353e46;"></i>
                        <div class="prem-pic">
                            <img src="image/home4profile.png" alt="">
                            @include('svg-files/subscribe')
                        </div>
                    </div>
                    <button class="btn-grey">view benefits</button>
                </div>
                <div class="add-props">
                    <div class="asp asp-1-1">
                        <img src="image/dashboardAd.png" alt="">
                    </div>
                    <div class="add-new">
                        <h3>Add New Listings To Increase Your Profit</h3>
                        <button class="btn">add properties</button>
                    </div>
                </div>
            </div>
            <div id="overlay"></div>
            <x-new-post/>
        </div>
        <div>
            @include('layouts/footer')
        </div>
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