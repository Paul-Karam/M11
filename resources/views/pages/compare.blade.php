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
            <div class="compare-page">
                <h1>compare</h1>
                <div class="container-comp">
                    @include('components/amenities', 
                    [
                    'ImgSource' => 'image/croussel1.png',
                    'ProfilePic' => 'image/profilepic.png',
                    'username' => 'Johnny Doe',
                    'position' => 'Superagent',
                    'propName' => 'peartree cottage',
                    'propPrice' => '3,500 USD',
                    'propType' => 'Villa',
                    'propSize' => '1,546 sqft',
                    'bedNums' => '4',
                    'bathNums' => '2',
                    'specifications' => 'This two bedroom villa has been well maintained throughout. The ground floor consists 
                                        of a large modern living area, open plan upgraded kitchen/dining room,
                                        powder room & maids room. On the first floor, 
                                        there are two double en-suite bedrooms with fitted wardrobes, one of which are upgraded. 
                                        There is also a large landing room which can be utilized as a study or nursery. 
                                        The villa has a large space of land to the side with scope to extend, 
                                        subject to Nakheel Permissions and a short walk to the park. ',
                    'listText' => 'New to the market is an upgraded and extended two bedroom villa in District 7',
                    'propState' => 'Independent Villa',
                    'propFeatures' => 'Solar powered'
                    ])
                    @include('components/amenities', 
                    [
                    'ImgSource' => 'image/croussel3.png',
                    'ProfilePic' => 'image/profilePic3.png',
                    'username' => 'Jane Doe',
                    'position' => 'Agent',
                    'propName' => 'name of the property',
                    'propPrice' => '1,000 USD',
                    'propType' => 'Penthouse',
                    'propSize' => '956 sqft',
                    'bedNums' => '2',
                    'bathNums' => '1',
                    'specifications' => 'This two bedroom villa has been well maintained throughout. The ground floor consists 
                                        of a large modern living area, open plan upgraded kitchen/dining room,
                                        powder room & maids room. On the first floor, 
                                        there are two double en-suite bedrooms with fitted wardrobes, one of which are upgraded. 
                                        There is also a large landing room which can be utilized as a study or nursery. 
                                        The villa has a large space of land to the side with scope to extend, 
                                        subject to Nakheel Permissions and a short walk to the park. ',
                    'listText' => 'New to the market is an upgraded and extended two bedroom villa in District 7',
                    'propState' => 'Independent Villa',
                    'propFeatures' => 'Solar powered'
                    ])
                    <div class="add-compare">
                        <i class="fa-solid fa-plus" style="color: #ff0000;"></i>
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
        </body>
      
    </html>

  