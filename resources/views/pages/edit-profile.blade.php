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
        @include('components/sidebar')
        @include('layouts/navbar')
    </div>
    <div class="edit-prof-container">
            <h1>edit profile</h1>
            <form action="">
                <div class="edit-profile">
                    <div class="new-profile">
                        <input type="file" accept="image/*" id="image-input" style="display: none;">
                        <img id="profile-image" src="image/home4profile.png" alt="">
                    </div>
                    <div class="svg-background" id="camera-icon">
                        @include('svg-files/camera')
                    </div>
                </div>
                <div class="personal-details">
                    <div class="pi">
                        <h1>personal information</h1>
                    </div>
                    <div class="full-name">
                        <div class="name">
                            <label for="fname">first name</label>
                            <input type="text" class="input" placeholder="Enter your first name" value="Johnny">
                        </div>
                        <div class="name">
                            <label for="lname">last name</label>
                            <input type="text" class="input" placeholder="Enter your last name" value="Doe">
                        </div>
                    </div>
                    <div class="email-phone">
                        <div class="name">
                            <label for="email">email address</label>
                            <input type="email" class="input" placeholder="johnnydoe@gmail.com" value="johnnydoe@gmail.com">
                        </div>
                        <div class="phone">
                            <label>Phone Number</label>
                            <input id="phone" name="phone" type="tel" placeholder="Phone Number" value="+961 3 736 734">
                        </div>
                    </div>
                    <div class="select-country">
                        <div class="name">
                            <label for="country">country</label>
                            <select name="" id="">
                                <option value="">Lebanon</option>
                            </select>
                        </div>
                        <div class="name">
                            <label for="country">city</label>
                            <select name="" id="">
                                <option value="">Beirut</option>
                            </select>
                        </div>
                    </div>
                    <div class="additional-info">
                        <div class="name">
                            <label for="lname">Address</label>
                            <input type="text" class="input" placeholder="address" value="Mirna Chalouhi Street, Beirut, Lebanon">
                        </div>
                        <div class="name">
                            <label for="email">small biography</label>
                            <textarea name="" class="input" id="" cols="30" rows="10"> Lorem ipsum dolor sit amet, consectet cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis.</textarea>
                        </div>
                    </div>
                </div>
                <div class="personal-details">
                    <div class="pi">
                        <h1>contact information</h1>
                        <h3>For clients to reach you</h3>
                    </div>
                    <div class="email-phone">
                        <div class="name">
                            <label for="email">email address</label>
                            <input type="email" class="input" placeholder="johnnydoe@gmail.com" value="johnnydoe@gmail.com">
                        </div>
                        <div class="phone">
                            <label>Phone Number</label>
                            <input id="phone" name="phone1" type="tel" placeholder="Phone Number" value="+961 3 736 734">
                        </div>
                    </div>
                </div>
                <div class="personal-details">
                    <div class="pi">
                        <h1>experience</h1>
                        <h3>(optional)</h3>
                    </div>
                    <div class="add-position">
                        <i class="fa-solid fa-plus"></i>
                        <p> add position</p>
                    </div>
                    <div class="comp-container">
                        <div class="company-add b-bottom">
                            <div class="company-info">
                                <div class="company-name-logo">
                                    <i class="fa-solid fa-biohazard" style="color: #353e46;"></i>
                                    <div class="info">
                                        <h4>POSITION HERE</h4>
                                        <h5>Company's Name</h5>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>Jul 2021 - Present.2 years</p>
                                    <p>Lebanon</p>
                                </div>
                            </div>
                            <div class="edit-comp">
                                <i class="fa-solid fa-pen" style="color: #353e46;"></i>
                            </div>
                        </div>
                        <div class="company-add p-top">
                            <div class="company-info">
                                <div class="company-name-logo">
                                    <i class="fa-solid fa-biohazard" style="color: #353e46;"></i>
                                    <div class="info">
                                        <h4>POSITION HERE</h4>
                                        <h5>Company's Name</h5>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>Jul 2021 - Present.2 years</p>
                                    <p>Lebanon</p>
                                </div>
                            </div>
                            <div class="edit-comp">
                                <i class="fa-solid fa-pen" style="color: #353e46;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="personal-details">
                    <div class="pi">
                        <h1>professional credentials</h1>
                        <h3>(optional)</h3>
                    </div>
                    <div class="additional-info">
                        <div class="name">
                            <label for="lname">Real Estate License Number</label>
                            <input type="text" class="input" placeholder="Real Estate License Number">
                        </div>
                    </div>
                    <div class="select-country">
                        <div class="name">
                            <label for="designations">designations</label>
                            <select name="" id="">
                                <option value="">- Select -</option>
                            </select>
                        </div>
                        <div class="name certificate">
                            <label for="certifications">certifications</label>
                            <div class="file-list" id="fileList"></div>
                            <i class="fa-solid fa-paperclip" id="fileInputTrigger" style="color: #ff0000; cursor: pointer;"></i>
                            <input type="file" class="input" id="fileInput" style="display: none;" accept=".pdf" multiple>
                        </div>
                    </div>
                </div>
                <div class="personal-details">
                    <div class="pi">
                        <h1>personal information</h1>
                    </div>
                    <div class="full-name">
                        <div class="name">
                            <label for="comp-name">company name</label>
                            <input type="text" class="input" placeholder="Enter your first name">
                        </div>
                        <div class="name">
                            <label for="comp-website">company website</label>
                            <input type="text" class="input" placeholder="Enter your last name">
                        </div>
                    </div>
                    <div class="additional-info">
                        <div class="name">
                            <label for="comp-address">company address</label>
                            <input type="text" class="input" placeholder="address">
                        </div>
                        <div class="name certificate">
                            <label for="certifications">company logo</label>
                            <div class="file-list" id="fileList1"></div>
                            <i class="fa-solid fa-paperclip" id="fileInputTrigger1" style="color: #ff0000; cursor: pointer;"></i>
                            <input type="file" class="input" id="fileInput1" style="display: none;" accept=".png">
                        </div>
                    </div>
                </div>
                <div class="terms-register">
                    <div class="checkbox">
                        <label><input type="checkbox" id="compareCheckbox" >agree on the <u>terms and conditions</u></label>
                    </div>
                    <div class="register-btn">
                        <button class="btn-grey">register</button>
                    </div>
                </div>
            </form>
    </div>
    <div>
        @include('layouts/footer')
    </div>
    <script>
        const navbar = document.querySelector(".topnav");
        navbar.classList.add("compact");
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.querySelector('[name="phone"]');
            var iti = window.intlTelInput(input, {
                preferredCountries: ['lb'],
                utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.querySelector('[name="phone1"]');
            var iti = window.intlTelInput(input, {
                preferredCountries: ['lb'],
                utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
            });
        });
    </script>
    <script>
        // Get references to the elements
        const fileList = document.getElementById('fileList');
        const fileInputTrigger = document.getElementById('fileInputTrigger');
        const fileInput = document.getElementById('fileInput');
    
        // Add a click event listener to the paperclip icon
        fileInputTrigger.addEventListener('click', () => {
            // Trigger the hidden file input when the icon is clicked
            fileInput.click();
        });
    
        // Add an event listener to the file input to handle selected files
        fileInput.addEventListener('change', () => {
            // Get the selected files
            const selectedFiles = fileInput.files;
    
            // Create an array to store the names of selected files
            const fileNames = [];
    
            // Extract file names and add them to the array
            for (let i = 0; i < selectedFiles.length; i++) {
                fileNames.push(selectedFiles[i].name);
            }
    
            // Clear the file list
            fileList.innerHTML = '';
    
            // Create <p> tags for each file name and append them to the file list
            fileNames.forEach(fileName => {
                const pTag = document.createElement('p');
                pTag.textContent = fileName;
                fileList.appendChild(pTag);
            });
        });
    </script>
    <script>
        // Get references to the elements
        const fileList1 = document.getElementById('fileList1');
        const fileInputTrigger1 = document.getElementById('fileInputTrigger1');
        const fileInput1 = document.getElementById('fileInput1');
    
        // Add a click event listener to the paperclip icon
        fileInputTrigger1.addEventListener('click', () => {
            // Trigger the hidden file input when the icon is clicked
            fileInput1.click();
        });
    
        // Add an event listener to the file input to handle selected files
        fileInput1.addEventListener('change', () => {
            // Get the selected files
            const selectedFiles = fileInput1.files;
    
            // Create an array to store the names of selected files
            const fileNames1 = [];
    
            // Extract file names and add them to the array
            for (let i = 0; i < selectedFiles.length; i++) {
                fileNames1.push(selectedFiles[i].name);
            }
    
            // Clear the file list
            fileList1.innerHTML = '';
    
            // Create <p> tags for each file name and append them to the file list
            fileNames1.forEach(fileName1 => {
                const pTag = document.createElement('p');
                pTag.textContent = fileName1;
                fileList1.appendChild(pTag);
            });
        });
    </script>
    <script>
        const profileImage = document.getElementById('profile-image');
        const cameraIcon = document.getElementById('camera-icon');
        const imageInput = document.getElementById('image-input');

        // Add a click event listener to the camera icon
        cameraIcon.addEventListener('click', () => {
            // Trigger a click event on the hidden image input to open the file dialog
            imageInput.click();
        });

        // Add an event listener to the image input for when a new file is selected
        imageInput.addEventListener('change', (event) => {
            // Check if a file was selected
            if (event.target.files.length > 0) {
                // Get the selected file
                const selectedFile = event.target.files[0];

                // Create a FileReader to read the selected image file
                const reader = new FileReader();

                // Define a function to run when the FileReader has loaded the image
                reader.onload = (e) => {
                    // Update the src attribute of the profile image with the loaded image data URL
                    profileImage.src = e.target.result;
                };

                // Read the selected file as a data URL (base64)
                reader.readAsDataURL(selectedFile);
            }
        });
    </script>
</body>