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
    <div>
        @include('layouts/agent-navbar')
    </div>
        <div class="prop-reports">
            <h1>property reports</h1>
            <div class="table-filter">
                <button>viewing reports</button>
                <button>inquiries</button>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Ref number <i class="fa-solid fa-arrow-down-up-across-line" style="color: #ff0000;"></i></th>
                            <th scope="col">Viewer ID <i class="fa-solid fa-arrow-down-up-across-line" style="color: #ff0000;"></i></th>
                            <th scope="col">Viewer Name <i class="fa-solid fa-arrow-down-up-across-line" style="color: #ff0000;"></i></th>
                            <th scope="col">Date <i class="fa-solid fa-arrow-down-up-across-line" style="color: #ff0000;"></i></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                        <x-table-row/>
                    </tbody>
                </table>
                <div class="table-pagination">
                    <i class="fa-solid fa-chevron-left" style="color: #ff0000;"></i>
                    <p>1</p>
                    <i class="fa-solid fa-chevron-right" style="color: #ff0000;"></i>
                </div>
            </div>
        </div>
    <div>
        @include('layouts/footer')
    </div>
</body>