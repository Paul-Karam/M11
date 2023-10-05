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
    <div class="buyy">
        <h1>buy</h1>
        <x-filter/>
        <div class="places-compare">
            <div class="places-btns">
                <button>Apartments</button>
                <button>Villas</button>
                <button>Townhouses</button>
                <button>Land</button>
                <button>Penthouses</button>
                <button>Duplexes</button>
            </div>
            <div>
                <div class="checkbox">
                    <label><input type="checkbox" id="compareCheckbox" >compare</label>
                    <p><a class="options" href="" id="toggleFilter">sort by: featured <i class="fa-solid fa-chevron-down"></i></a></p>
                </div>
            </div>
        </div>
        <div class="compare-container">
            <div class="compare">
                <div class="imgs">
                    <div class="img">
                        <img src="image/croussel1.png" alt="">
                    </div>
                    <div>
                        <img src="image/croussel3.png" alt="">
                    </div>
                </div>
                <div class="btn-compare">
                    <button class="btn-grey">compare</button>
                </div>
            </div>
            <div class="line">
            </div>
        </div>
        
        <div class="buy-info">
            <div class="prop-pics">
                <div class="imgs">
                    <img src="image/croussel1.png" alt="">
                </div>
                <div class="imgs">
                    <img src="image/croussel2.png" alt="">
                </div>
            </div>
            <div class="superagent-info">
                <div class="user-location">
                    <div class="user">
                        <img src="image/profilepic.png" alt="">
                        <div class="username">
                            <h5>Johnny Doe</h5>
                            <p>Superagent</p>
                        </div>
                    </div>
                    <div class="location">
                        <div class="loc">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Dubai, Downtown Dubai, The Residences</p>
                        </div>
                        <p class="listed">Listed 2 Days Ago</p>
                    </div>
                </div>
                <div class="prop-price">
                    <h3>Peartree cottage</h3>
                    <h4>3,500 AED</h4>
                </div>
                <div class="prop-infos">
                    <div class="prop-info">
                        <i class="fa-regular fa-building"></i>
                        <p>villa</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-brands fa-uncharted"></i>
                        <p>1,546 sqft</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-solid fa-bed"></i>
                        <p>4 bedrooms</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-solid fa-bath"></i>
                        <p>2 bathrooms</p>
                    </div>
                </div>
                <div class="contact-options">
                    <button class="btn"><i class="fa-solid fa-heart"></i> save for later</button>
                    <button class="btn"><i class="fa-solid fa-phone"></i> call agent</button>
                    <button class="btn"><i class="fa-regular fa-envelope"></i> email agent</button>
                    <button class="btn-green"><i class="fa-brands fa-whatsapp"></i> whatsapp</button>
                </div>
            </div>
        </div>
        <div class="buy-info">
            <div class="prop-pics">
                <div class="imgs">
                    <img src="image/croussel1.png" alt="">
                </div>
                <div class="imgs">
                    <img src="image/croussel2.png" alt="">
                </div>
            </div>
            <div class="superagent-info">
                <div class="user-location">
                    <div class="user">
                        <img src="image/profilepic.png" alt="">
                        <div class="username">
                            <h5>Johnny Doe</h5>
                            <p>Superagent</p>
                        </div>
                    </div>
                    <div class="location">
                        <div class="loc">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Dubai, Downtown Dubai, The Residences</p>
                        </div>
                        <p class="listed">Listed 2 Days Ago</p>
                    </div>
                </div>
                <div class="prop-price">
                    <h3>Peartree cottage</h3>
                    <h4>3,500 AED</h4>
                </div>
                <div class="prop-infos">
                    <div class="prop-info">
                        <i class="fa-regular fa-building"></i>
                        <p>villa</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-brands fa-uncharted"></i>
                        <p>1,546 sqft</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-solid fa-bed"></i>
                        <p>4 bedrooms</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-solid fa-bath"></i>
                        <p>2 bathrooms</p>
                    </div>
                </div>
                <div class="contact-options">
                    <button class="btn"><i class="fa-solid fa-heart"></i> save for later</button>
                    <button class="btn"><i class="fa-solid fa-phone"></i> call agent</button>
                    <button class="btn"><i class="fa-regular fa-envelope"></i> email agent</button>
                    <button class="btn-green"><i class="fa-brands fa-whatsapp"></i> whatsapp</button>
                </div>
            </div>
        </div>
        <div class="buy-info">
            <div class="prop-pics">
                <div class="imgs">
                    <img src="image/croussel1.png" alt="">
                </div>
                <div class="imgs">
                    <img src="image/croussel2.png" alt="">
                </div>
            </div>
            <div class="superagent-info">
                <div class="user-location">
                    <div class="user">
                        <img src="image/profilepic.png" alt="">
                        <div class="username">
                            <h5>Johnny Doe</h5>
                            <p>Superagent</p>
                        </div>
                    </div>
                    <div class="location">
                        <div class="loc">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Dubai, Downtown Dubai, The Residences</p>
                        </div>
                        <p class="listed">Listed 2 Days Ago</p>
                    </div>
                </div>
                <div class="prop-price">
                    <h3>Peartree cottage</h3>
                    <h4>3,500 AED</h4>
                </div>
                <div class="prop-infos">
                    <div class="prop-info">
                        <i class="fa-regular fa-building"></i>
                        <p>villa</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-brands fa-uncharted"></i>
                        <p>1,546 sqft</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-solid fa-bed"></i>
                        <p>4 bedrooms</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-solid fa-bath"></i>
                        <p>2 bathrooms</p>
                    </div>
                </div>
                <div class="contact-options">
                    <button class="btn"><i class="fa-solid fa-heart"></i> save for later</button>
                    <button class="btn"><i class="fa-solid fa-phone"></i> call agent</button>
                    <button class="btn"><i class="fa-regular fa-envelope"></i> email agent</button>
                    <button class="btn-green"><i class="fa-brands fa-whatsapp"></i> whatsapp</button>
                </div>
            </div>
        </div>
        <div class="buy-info">
            <div class="prop-pics">
                <div class="imgs">
                    <img src="image/croussel1.png" alt="">
                </div>
                <div class="imgs">
                    <img src="image/croussel2.png" alt="">
                </div>
            </div>
            <div class="superagent-info">
                <div class="user-location">
                    <div class="user">
                        <img src="image/profilepic.png" alt="">
                        <div class="username">
                            <h5>Johnny Doe</h5>
                            <p>Superagent</p>
                        </div>
                    </div>
                    <div class="location">
                        <div class="loc">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Dubai, Downtown Dubai, The Residences</p>
                        </div>
                        <p class="listed">Listed 2 Days Ago</p>
                    </div>
                </div>
                <div class="prop-price">
                    <h3>Peartree cottage</h3>
                    <h4>3,500 AED</h4>
                </div>
                <div class="prop-infos">
                    <div class="prop-info">
                        <i class="fa-regular fa-building"></i>
                        <p>villa</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-brands fa-uncharted"></i>
                        <p>1,546 sqft</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-solid fa-bed"></i>
                        <p>4 bedrooms</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-solid fa-bath"></i>
                        <p>2 bathrooms</p>
                    </div>
                </div>
                <div class="contact-options">
                    <button class="btn"><i class="fa-solid fa-heart"></i> save for later</button>
                    <button class="btn"><i class="fa-solid fa-phone"></i> call agent</button>
                    <button class="btn"><i class="fa-regular fa-envelope"></i> email agent</button>
                    <button class="btn-green"><i class="fa-brands fa-whatsapp"></i> whatsapp</button>
                </div>
            </div>
        </div>
        <div class="buy-info">
            <div class="prop-pics">
                <div class="imgs">
                    <img src="image/croussel1.png" alt="">
                </div>
                <div class="imgs">
                    <img src="image/croussel2.png" alt="">
                </div>
            </div>
            <div class="superagent-info">
                <div class="user-location">
                    <div class="user">
                        <img src="image/profilepic.png" alt="">
                        <div class="username">
                            <h5>Johnny Doe</h5>
                            <p>Superagent</p>
                        </div>
                    </div>
                    <div class="location">
                        <div class="loc">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Dubai, Downtown Dubai, The Residences</p>
                        </div>
                        <p class="listed">Listed 2 Days Ago</p>
                    </div>
                </div>
                <div class="prop-price">
                    <h3>Peartree cottage</h3>
                    <h4>3,500 AED</h4>
                </div>
                <div class="prop-infos">
                    <div class="prop-info">
                        <i class="fa-regular fa-building"></i>
                        <p>villa</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-brands fa-uncharted"></i>
                        <p>1,546 sqft</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-solid fa-bed"></i>
                        <p>4 bedrooms</p>
                    </div>
                    <div class="prop-info">
                        <i class="fa-solid fa-bath"></i>
                        <p>2 bathrooms</p>
                    </div>
                </div>
                <div class="contact-options">
                    <button class="btn"><i class="fa-solid fa-heart"></i> save for later</button>
                    <button class="btn"><i class="fa-solid fa-phone"></i> call agent</button>
                    <button class="btn"><i class="fa-regular fa-envelope"></i> email agent</button>
                    <button class="btn-green"><i class="fa-brands fa-whatsapp"></i> whatsapp</button>
                </div>
            </div>
        </div>
        <div class="pagination">
            <p class="active">1</p>
            <p>2</p>
            <p>3</p>
            <p>4</p>
            <p>5</p>
        </div>
    </div>
    <div>
        @include('layouts/footer')
    </div>
    <script>
        const navbar = document.querySelector(".topnav");
        navbar.classList.add("compact");
    </script>
    <script>
        // Get references to the checkbox and the compare section
        const compareCheckbox = document.getElementById('compareCheckbox');
        const compareSection = document.querySelector('.compare-container');
    
        // Function to toggle the visibility of the compare section
        function toggleCompareSection() {
            compareSection.style.display = compareCheckbox.checked ? 'flex' : 'none';
        }
    
        // Add a change event listener to the checkbox
        compareCheckbox.addEventListener('change', toggleCompareSection);
    
        // Initial state
        toggleCompareSection();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const toggleFilter = document.getElementById("toggleFilter");
        const filter3 = document.querySelector(".filter3");
        const vidContent = document.querySelector(".vid-content");
    
        toggleFilter.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent the default link behavior
    
            filter3.classList.toggle("active"); // Toggle the "active" class
            toggleFilter.classList.toggle("active"); // Toggle the "active" class on the link
            if (getComputedStyle(filter3).display === "none") {
                vidContent.style.gap = "270px";
            } else {
                vidContent.style.gap = "190px";
            }
        });
    });
    </script>    
</body>