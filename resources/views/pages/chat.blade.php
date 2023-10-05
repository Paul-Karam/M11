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
            <div class="chat-container">
                <div class="right-chat">
                    <div class="inbox">
                        <h1>my inbox</h1>
                        <div class="search-bar">
                            <i class="fa-solid fa-magnifying-glass" style="color: #ff0000;"></i>
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                    
                    @include('components/chatbox', 
                    [
                        'profilePic' => 'image/profilePic2.png',
                        'username' => 'Johnny Doe'
                    ])
                    @include('components/chatbox', 
                    [
                        'profilePic' => 'image/chat1.png',
                        'username' => 'Carlos'
                    ])
                    @include('components/chatbox', 
                    [
                        'profilePic' => 'image/chat2.png',
                        'username' => 'Jane Doe'
                    ])
                    @include('components/chatbox', 
                    [
                        'profilePic' => 'image/chat3.png',
                        'username' => 'Johnny Doe'
                    ])
                    @include('components/chatbox', 
                    [
                        'profilePic' => 'image/chat4.png',
                        'username' => 'Carlos'
                    ])
                    @include('components/chatbox', 
                    [
                        'profilePic' => 'image/chat5.png',
                        'username' => 'Jane Doe'
                    ])
                    @include('components/chatbox', 
                    [
                        'profilePic' => 'image/chat6.png',
                        'username' => 'Johnny Doe'
                    ])
                    @include('components/chatbox', 
                    [
                        'profilePic' => 'image/chat7.png',
                        'username' => 'Carlos'
                    ])
                    @include('components/chatbox', 
                    [
                        'profilePic' => 'image/chat8.png',
                        'username' => 'Jane Doe'
                    ])
                    @include('components/chatbox', 
                    [
                        'profilePic' => 'image/chat9.png',
                        'username' => 'Johnny Doe'
                    ])
                    @include('components/chatbox', 
                    [
                        'profilePic' => 'image/chat10.png',
                        'username' => 'Jane Doe'
                    ])
                    @include('components/chatbox', 
                    [
                        'profilePic' => 'image/chat11.png',
                        'username' => 'Carlos'
                    ])
                    
                </div>
                <div class="left-chat">
                    <div class="default-chat">
                        <img src="image/chat.png" alt="">
                        <p>You can communicate with agents in real-time to discuss property details or any inquiry you might have</p>
                    </div>
                    <div class="opened-chat">
                        <div class="chat-header">
                            <div class="user">
                                <img src="image/profilePic.png" alt="">
                                <div class="username">
                                    <h3>Johnny Doe</h3>
                                    <p>Available</p>
                                </div>
                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                        <div class="chat-body">
                            <div class="receiver">
                                <div class="msg1">
                                    <p>Hello, I would like to have an idea about the following property</p>
                                    <p>12:52 pm</p>
                                </div>
                                <div class="msg2">
                                    <img src="image/propertyImg1.png" alt="">
                                </div>
                            </div>
                            <div class="sender">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit, curabitur erat bibendum 
                                    venenatis blat purus luctus feugiat, integer vitae cubilia odio litora dapibus.
                                    Orci tellus euismod dis cursus pm penatibus suscipit cum placerat leo maecenas 
                                    fermentum bibendum, etiam at tempus lacinia enim rhoncus class mi vehicula velit donec.
                                </p>
                                <p>12:52 pm</p>
                            </div>
                        </div>
                        <div class="chat-text">
                            <i class="fa-solid fa-paperclip"></i>
                            <input type="text" placeholder="Type your message">
                            <i class="fa-solid fa-paper-plane" style="color: #ff0000;"></i>
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
        </body>
    </html>