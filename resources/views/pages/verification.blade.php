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
    
    <div class="otp_div">
        <h1>VERIFICATION</h1>
        <div class="otp">johnnydoe@gmail.com. Not you? <a>Use another account</a></div>
        <div class="otp2">Enter verification code</div>
        <div class="timer">01:00</div>
        <div class="otp">
            <form action="otp_form">
                <input class="otp_input" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)'
                    maxlength=1>
                <input class="otp_input" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)'
                    maxlength=1>
                <input class="otp_input" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)'
                    maxlength=1>
                <input class="otp_input" type="text" oninput='digitValidate(this)'onkeyup='tabChange(4)'
                    maxlength=1>
            </form>
        </div>
        <div class="otp">Didn’t receive OTP? <a>Resendt</a></div>
    </div>

    
    <div>
        @include('layouts/footer')
    </div>
    <script>
        const navbar = document.querySelector(".topnav");
        navbar.classList.add("compact");
    </script>
    <script>
        function startTimer(duration, display) {
            let timer = duration,
                minutes, seconds;
            setInterval(function() {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
                display.textContent = minutes + ":" + seconds;
    
                if (--timer < 0) {
                    clearInterval();
                }
            }, 1000);
        }
        window.onload = function() {
            const display = document.querySelector('.timer');
            startTimer(60, display);
        };
    
        let digitValidate = function(ele) {
            console.log(ele.value);
            ele.value = ele.value.replace(/[^0-9]/g, '');
        }
    
        let tabChange = function(val) {
            let ele = document.querySelectorAll('input');
            if (ele[val - 1].value != '') {
                ele[val].focus()
            } else if (ele[val - 1].value == '') {
                ele[val - 2].focus()
            }
        }
    </script>
    
</body>