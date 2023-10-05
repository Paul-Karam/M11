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
            <div class="property-details">
                <div class="property-container">
                    <div class="user">
                        <img src="image/profilepic.png" alt="">
                        <div class="username">
                            <h5>Johnny Doe</h5>
                            <p>Superagent</p>
                        </div>
                    </div>
                    <div class="price-container">
                        <h5>TOTAL PRICE</h5>
                        <p>3,500 USD</p>
                    </div>
                    <div class="price-container">
                        <h5>ESTIMATED MORTGAGE</h5>
                        <p>3,500 USD</p>
                    </div>
                    <div class="contact-options">
                        <button class="btn-saved"><i class="fa-regular fa-heart"></i> save for later</button>
                        <button class="btn"><i class="fa-solid fa-phone"></i> call agent</button>
                        <button class="btn"><i class="fa-regular fa-envelope"></i> email agent</button>
                        <button class="btn-green"><i class="fa-brands fa-whatsapp"></i> whatsapp</button>
                    </div>
                </div>
            </div>
        </body>
    </html>