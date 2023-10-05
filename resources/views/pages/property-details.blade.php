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
        </head>
        <body>
            <div>
                @include('components/sidebar')
                @include('layouts/navbar')
            </div>
            <div class="p-d-container">
                @include('components/under-navbar')
                <div class="prop-container">
                    <div class="prop-details">
                        <div class="share-prop">
                            <i class="fa-solid fa-share-nodes"></i>
                            <p>share property</p>
                        </div>
                        <div class="prop-name">
                            <h1>peartree cottage</h1>
                        </div>
                        <div class="location">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Dubai, Downtown Dubai, The Residences</p>
                        </div>
                        <div class="prop-price">
                            <h4>3,500 AED</h4>
                        </div>
                        <div class="prop-description">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Odio corrupti alias molestias adipisci nemo, 
                                blanditiis optio rerum, doloremque aliquid quidem voluptatem.
                                Repellat doloremque molestiae dignissimos,
                                molestias mollitia accusantium illo vel.
                            </p>
                        </div>
                        <div class="prop-infos">
                            <div class="prop-info">
                                <i class="fa-regular fa-building"></i>
                                <h6>property type</h6>
                                <p>villa</p>
                            </div>
                            <div class="prop-info">
                                <i class="fa-brands fa-uncharted"></i>
                                <h6>property size</h6>
                                <p>1,546 sqft</p>
                            </div>
                            <div class="prop-info">
                                <i class="fa-solid fa-bed"></i>
                                <h6>bedrooms</h6>
                                <p>4 bedrooms</p>
                            </div>
                            <div class="prop-info">
                                <i class="fa-solid fa-bath"></i>
                                <h6>bathrooms</h6>
                                <p>2 bathrooms</p>
                            </div>
                        </div>
                    </div>
                    <div class="prop-pics">
                        <div class="imgs">
                            <img src="image/propertyImg1.png" alt="">
                        </div>
                        <div class="imgs">
                            <img src="image/propertyImg2.png" alt="">
                            <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                        </div>
                    </div>
                </div>
                <div class="mortgage">
                    <h1>mortgage</h1>
                    <div>
                        <div class="light-grey">
                            <div class="calculator">
                                <div class="calc-container">
                                    <h3>mortgage calculator</h3>
                                    <p>Estimate your monthly mortgage payments</p>
                                </div>
                                <div class="calc-logo">
                                    <i class="fa-brands fa-wolf-pack-battalion"></i>
                                </div>
                            </div>
                            <div class="mortgage-details">
                                <div class="prop-price">
                                    <h6>property price</h6>
                                    <input type="text" placeholder="3,500 USD">
                                </div>
                                <div class="loan-terms">
                                    <h6>loan term</h6>
                                    <input type="text" placeholder="20 Years">
                                </div>
                                <div class="down-pay">
                                    <h6>down payment</h6>
                                    <input type="text" placeholder="1,000 USD">
                                </div>
                                <div class="percent">
                                    <h6>percent</h6>
                                    <input type="text" placeholder="20%">
                                </div>
                                <div class="interest-rate">
                                    <h6>interest rate</h6>
                                    <input type="text" placeholder="2.24%">
                                </div>
                            </div>
                        </div>
                        <div class="dark-grey">
                            <div class="monthly">
                                <h3>MONTHLY PAYMENT</h3>
                                <p>3,500 usd</p>
                            </div>
                            <div class="btn-approve">
                                <button class="btn">get pre-approved</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="specifications">
                    <h1>specifications</h1>
                    <div class="p1">
                        <p>
                            This two bedroom villa has been well maintained throughout. The ground floor consists 
                            of a large modern living area, open plan upgraded kitchen/dining room,
                             powder room & maids room. On the first floor, 
                            there are two double en-suite bedrooms with fitted wardrobes, one of which are upgraded. 
                            There is also a large landing room which can be utilized as a study or nursery. 
                            The villa has a large space of land to the side with scope to extend, 
                            subject to Nakheel Permissions and a short walk to the park. 
                        </p>
                    </div>
                    <div class="p-list">
                        <p>
                            New to the market is an upgraded and extended two bedroom villa in District 7
                        </p>
                        <ul>
                            <li>Independent Villa</li>
                            <li>Solar powered</li>
                        </ul>
                    </div>
                    <div class="read-more">
                        <p>read more <i class="fa-solid fa-chevron-down"></i></p>
                    </div>
                </div>
                <div class="amenities-container">
                    <h1>amenities</h1>
                    <div class="amenities">
                        <div class="amenity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32.011" height="32.152" viewBox="0 0 32.011 32.152">
                                <path id="balcony" d="M39.572,35.308h-.716V27.331h.716a.439.439,0,1,0,0-.879H34.219V17.6a9.713,9.713,0,0,0-19.426,0v8.856H9.439a.439.439,0,1,0,0,.879h.716v7.978H9.439A.439.439,0,0,0,9,35.748V38.6a.439.439,0,0,0,.439.439H39.572a.439.439,0,0,0,.439-.439V35.748A.439.439,0,0,0,39.572,35.308Zm-1.6,0H34.219V27.331h3.758ZM19.429,27.331v7.978H15.671V27.331Zm.879,0h3.758v7.978H20.308Zm4.637,7.978V27.331H28.7v7.978Zm4.637-7.978H33.34v7.978H29.582Zm-4.637-.879V18.036H33.34v8.416Zm6.107-14.781a8.8,8.8,0,0,1,2.277,5.486H25.566Zm-6.107,4.864V8.773a8.8,8.8,0,0,1,5.486,2.277Zm-.879,0L18.58,11.049a8.8,8.8,0,0,1,5.486-2.277Zm-6.107-4.864,5.486,5.486H15.682A8.8,8.8,0,0,1,17.959,11.671Zm-2.288,6.365h8.395v8.416H15.671Zm-4.637,9.3h3.758v7.978H11.035Zm28.1,10.825H9.879V36.187H39.133Z" transform="translate(-8.5 -7.383)" fill="red" stroke="red" stroke-width="1"/>
                            </svg>
                            <p>balcony</p>
                        </div>
                        <div class="amenity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36.992" height="31.152" viewBox="0 0 36.992 31.152">
                                <path id="svgexport-33" d="M21.417,23.364h5.841V3.9H21.417Zm-1.947,0V3.9H13.629v26.28a.973.973,0,1,1-1.947,0v-2.92H1.947v2.92a.973.973,0,1,1-1.947,0V3.9A1.947,1.947,0,0,1,1.947,1.951h9.735l1.947,0,5.841,0V.973a.973.973,0,1,1,1.947,0v.977h5.841V.973a.973.973,0,1,1,1.947,0v.977h5.841A1.947,1.947,0,0,1,36.992,3.9v26.28a.973.973,0,1,1-1.947,0V4.385a.487.487,0,0,0-.487-.487H29.2V23.364h.973c.537,0,.973,1.042.973,1.994s-.436,1.9-.973,1.9H18.5c-.537,0-.973-.973-.973-1.947s.436-1.947.973-1.947ZM1.947,25.311h9.735V21.417H1.947Zm0-5.841h9.735V15.576H1.947Zm0-5.841h9.735V9.735H1.947Zm0-5.841h9.735V3.9H2.434a.487.487,0,0,0-.487.487Z" fill="red"/>
                            </svg>
                            <p>children's play area</p>
                        </div>
                        <div class="amenity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38.939" height="31.152" viewBox="0 0 38.939 31.152">
                                <path id="svgexport-34" d="M36.992,29.2h1.947v1.947H35.045V3.894h3.894V5.841H36.992ZM33.1,31.152H29.2V29.2h1.947V5.841H0V3.894H33.1ZM0,0H38.939V1.947H0ZM1.947,25.311H25.311V19.47H21.417V17.523h3.407l-4.381-5.841H6.814L2.434,17.523h7.3V19.47H1.947v5.841Zm25.311-7.788V29.2a1.947,1.947,0,0,1-1.947,1.947H23.364A1.947,1.947,0,0,1,21.417,29.2V27.258H5.841V29.2a1.947,1.947,0,0,1-1.947,1.947H1.947A1.947,1.947,0,0,1,0,29.2V18.171A1.947,1.947,0,0,1,.389,17l4.867-6.489a1.947,1.947,0,0,1,1.558-.779H20.443A1.947,1.947,0,0,1,22,10.514L26.868,17a1.947,1.947,0,0,1,.278.52Zm-1.947,9.735H23.364V29.2h1.947Zm-23.364,0V29.2H3.894V27.258Zm1.947-5.841H9.735v1.947H3.894Zm13.629,0h5.841v1.947H17.523Z" fill="red"/>
                            </svg>
                            <p>Covered Parking</p>
                        </div>
                        <div class="amenity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38.938" height="38.94" viewBox="0 0 38.938 38.94">
                                <path id="svgexport-35" d="M25.31,36.993v-2.92a.973.973,0,0,1,1.947,0v2.92H33.1v-2.92a.973.973,0,0,1,1.947,0v2.92h1.46a.487.487,0,0,0,.487-.487V34.072A4.867,4.867,0,0,0,32.124,29.2H28.231a4.867,4.867,0,0,0-4.867,4.867v2.434a.488.488,0,0,0,.487.487Zm5.841-9.735h.973a6.814,6.814,0,0,1,6.814,6.814v2.92a1.947,1.947,0,0,1-1.947,1.947H23.363a1.947,1.947,0,0,1-1.947-1.947v-2.92a6.814,6.814,0,0,1,6.814-6.814H29.2V.974a.973.973,0,1,1,1.947,0Zm0,9.735H29.2v-2.92a.973.973,0,0,1,1.947,0ZM16.87,36.835c-.983,1.844-2.58,2.114-7.525,2.1H.8l-.607-.52a1.168,1.168,0,0,1,.532-1.725,17.3,17.3,0,0,0,3.748-1.9,3.867,3.867,0,0,0,.7-.835c-.043.062.89-1.378,1.227-1.834a8.931,8.931,0,0,1,1.783-1.836c1.624-1.236,4.517-1.377,6.526-.732L21.428.752a.974.974,0,1,1,1.9.444L16.51,30.4a.979.979,0,0,1-.058.167C17.727,31.956,17.9,34.894,16.87,36.835Zm-8.123.156h.6c4,.01,5.346-.218,5.8-1.071.7-1.32.514-3.514-.208-4.106a5.925,5.925,0,0,0-5.586.021,7.019,7.019,0,0,0-1.4,1.449c-.294.4-1.193,1.785-1.182,1.77a5.635,5.635,0,0,1-1.069,1.24,7.534,7.534,0,0,1-1.044.7Z" transform="translate(-0.001 0)" fill="red"/>
                            </svg>
                            <p>Maids Room</p>
                        </div>
                        <div class="amenity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29.205" height="29.205" viewBox="0 0 29.205 29.205">
                                <path id="svgexport-36" d="M9.922,13.058a4.869,4.869,0,0,1,6.036-3.121,4.779,4.779,0,0,1,3.121,2.823l1.616,4.12a7.788,7.788,0,0,0,1.443,2.348l2,2.233a4.575,4.575,0,0,1-.5,6.6,4.955,4.955,0,0,1-3.91,1.084l-4.151-1.793a5.822,5.822,0,0,0-1.947,0L9.437,29.111a4.814,4.814,0,0,1-5.49-3.952,4.585,4.585,0,0,1,1.316-3.943l1.688-1.68a7.788,7.788,0,0,0,1.937-3.187l1.032-3.29Zm7.342.421A2.856,2.856,0,0,0,15.395,11.8a2.922,2.922,0,0,0-3.617,1.854l-1.162,3.672a7.788,7.788,0,0,1-1.953,3.193l-2,1.974a2.712,2.712,0,0,0-.789,2.344,2.886,2.886,0,0,0,3.29,2.348A20.243,20.243,0,0,1,13.1,25.4a15.568,15.568,0,0,1,3.084,0,18.272,18.272,0,0,1,3.832,1.828,3,3,0,0,0,2.344-.644,2.706,2.706,0,0,0,.3-3.925L20.537,20.3a7.788,7.788,0,0,1-1.431-2.284l-1.842-4.536Zm8.047,4.044c-2.22,0-3.894-2.229-3.894-4.867s1.674-4.867,3.894-4.867S29.2,10.017,29.2,12.655,27.53,17.523,25.311,17.523Zm0-1.947c1,0,1.947-1.256,1.947-2.92s-.942-2.92-1.947-2.92-1.947,1.256-1.947,2.92S24.306,15.576,25.311,15.576ZM3.894,17.523C1.674,17.523,0,15.293,0,12.655S1.674,7.788,3.894,7.788s3.894,2.229,3.894,4.867S6.113,17.523,3.894,17.523Zm0-1.947c1,0,1.947-1.256,1.947-2.92S4.9,9.735,3.894,9.735s-1.947,1.256-1.947,2.92S2.889,15.576,3.894,15.576ZM9.735,9.735c-2.22,0-3.894-2.229-3.894-4.867S7.515,0,9.735,0s3.894,2.229,3.894,4.867S11.954,9.735,9.735,9.735Zm0-1.947c1,0,1.947-1.256,1.947-2.92s-.942-2.92-1.947-2.92S7.788,3.2,7.788,4.867,8.73,7.788,9.735,7.788ZM19.47,9.735c-2.22,0-3.894-2.229-3.894-4.867S17.25,0,19.47,0s3.894,2.229,3.894,4.867S21.689,9.735,19.47,9.735Zm0-1.947c1,0,1.947-1.256,1.947-2.92s-.942-2.92-1.947-2.92S17.523,3.2,17.523,4.867,18.465,7.788,19.47,7.788Z" fill="red"/>
                            </svg>  
                            <p>Pets Allowed</p>
                        </div>
                        <div class="amenity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35.045" height="38.939" viewBox="0 0 35.045 38.939">
                                <path id="svgexport-37" d="M15.856,11.682h7.508c1.538,0,4.022.872,7.692,2.64A8.865,8.865,0,0,0,23.171,6.8l-.049,0a13.5,13.5,0,0,0-1.883.07,6.87,6.87,0,0,0-5.383,4.811Zm5.561,1.947V18.5A4.86,4.86,0,0,1,19.47,22.39V38.939H17.523V23.383H15.609V38.939H13.662V22.415a4.86,4.86,0,0,1-1.98-3.919V13.629Q7.757,13.629,0,19.47V14.6A10.709,10.709,0,0,1,10.117,3.909,6.824,6.824,0,0,1,16.549,0c3.372,0,6.172,2.1,6.717,4.858a.37.37,0,0,1,.049.006l.049,0A10.811,10.811,0,0,1,33.1,15.624v1.9q-7.52-3.893-9.735-3.894Zm-1.947,0H13.629V18.5a2.92,2.92,0,1,0,5.841,0v-.973H15.576V15.576H19.47Zm-5.627-1.947a8.8,8.8,0,0,1,2.43-4.346,7.753,7.753,0,0,0-4.591-1.5h-.973A8.761,8.761,0,0,0,1.947,14.6v1.09c4-2.66,7.2-4.011,9.735-4.011ZM21.269,4.9a4.8,4.8,0,0,0-4.719-2.95,5.162,5.162,0,0,0-4.221,1.966A9.712,9.712,0,0,1,17.858,6.1a8.754,8.754,0,0,1,3.411-1.207ZM29.2,33.1h1.947v5.841H29.2ZM33.1,35.046h1.947v3.894H33.1Zm-7.788,0h1.947v3.894H25.311Zm-3.894,1.947h1.947v1.947H21.417Zm-11.682,0h1.947v1.947H9.735ZM5.841,35.046H7.788v3.894H5.841Z" fill="red"/>
                            </svg>
                            <p>Private Garden</p>
                        </div>
                    </div>
                </div>
                <div class="specifications">
                    <h1>Environmental impact information</h1>
                    <div class="p1">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. 
                            Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla. 
                            Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Tempor id eu nisl nunc mi ipsum faucibus. 
                            Fusce id velit ut tortor pretium. Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget nunc lobortis. 
                            Faucibus ornare suspendisse sed nisi.
                        </p>
                    </div>
                    <div class="p-list">
                        <p>
                            Sagittis eu volutpat odio facilisis mauris sit amet massa. Erat velit scelerisque in
                            dictum non consectetur a erat. Amet nulla facilisi morbi tempus iaculis urna. Egestas purus viverra accumsan in nisl. 
                            Feugiat in ante metus dictum at tempor commodo. Convallis tellus id interdum velit laoreet.
                            Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Viverra aliquet eget sit amet tellus cras adipiscing enim eu.
                            Ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Dui faucibus in ornare quam. 
                            In iaculis nunc sed augue lacus viverra vitae congue. Vitae tempus quam pellentesque nec nam aliquam sem et.
                            Ut morbi tincidunt augue interdum.
                        </p>
                    </div>
                    <div class="read-more">
                        <p>read more <i class="fa-solid fa-chevron-down"></i></p>
                    </div>
                </div>
                <div class="specifications">
                    <h1>concierge services</h1>
                    <div class="p1">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. 
                            Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla. 
                            Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Tempor id eu nisl nunc mi ipsum faucibus. 
                            Fusce id velit ut tortor pretium. Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget nunc lobortis. 
                            Faucibus ornare suspendisse sed nisi.
                        </p>
                    </div>
                    <div class="p-list">
                        <p>
                            Sagittis eu volutpat odio facilisis mauris sit amet massa. Erat velit scelerisque in
                            dictum non consectetur a erat. Amet nulla facilisi morbi tempus iaculis urna. Egestas purus viverra accumsan in nisl. 
                            Feugiat in ante metus dictum at tempor commodo. Convallis tellus id interdum velit laoreet.
                            Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Viverra aliquet eget sit amet tellus cras adipiscing enim eu.
                            Ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Dui faucibus in ornare quam. 
                            In iaculis nunc sed augue lacus viverra vitae congue. Vitae tempus quam pellentesque nec nam aliquam sem et.
                            Ut morbi tincidunt augue interdum.
                        </p>
                    </div>
                    <div class="read-more">
                        <p>read more <i class="fa-solid fa-chevron-down"></i></p>
                    </div>
                </div>
                <div class="floor-container">
                    <h1>Interactive floor plans</h1>
                    <div class="interactive">
                        <div class="btn-floors">
                            <button>elevation <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i></button>
                            <button>level one <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i></button>
                            <button>alternate level one <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i></button>
                            <button>rear elevation <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i></button>
                        </div>
                        <div class="carousel" data-flickity='{ "wrapAround": true }'>
                            <div class="carousel-cell"><img src="image/plan.png" alt=""></div>
                            <div class="carousel-cell"><img src="image/plan.png" alt=""></div>
                            <div class="carousel-cell"><img src="image/plan.png" alt=""></div>
                            <div class="carousel-cell"><img src="image/plan.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                @include('layouts/footer')
            </div>
            <script>
                const navbar = document.querySelector(".topnav");
                navbar.classList.add("compact");
            </script>
            <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        </body>
    </html>