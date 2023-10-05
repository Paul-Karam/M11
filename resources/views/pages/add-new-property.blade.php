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
    <div class="add-new-prop">
        <h1>add new property</h1>
        <form action="">
            <div class="proper-details">
                <div class="pi">
                    <h1>property information</h1>
                </div>
                <div class="select-prop">
                    <div class="name">
                        <label for="country">listing type</label>
                        <select name="" id="">
                            <option value="">- Select -</option>
                        </select>
                    </div>
                </div>
                <div class="select-prop">
                    <div class="name">
                        <label for="country">property type</label>
                        <select name="" id="">
                            <option value="">- Select -</option>
                        </select>
                    </div>
                    <div class="name">
                        <label for="lname">property title</label>
                        <input type="text" class="input" placeholder="Property Title">
                    </div>
                </div>
                <div class="select-prop">
                    <div class="name">
                        <label for="country">city</label>
                        <select name="" id="">
                            <option value="">- Select -</option>
                        </select>
                    </div>
                    <div class="name">
                        <label for="lname">zip code</label>
                        <input type="text" class="input" placeholder="Zip Code">
                    </div>
                </div>
                <div class="additional-info">
                    <div class="name">
                        <label for="lname">Address</label>
                        <input type="text" class="input" placeholder="Address">
                    </div>
                </div>
                <div class="additional-info">
                    <div class="name">
                        <label for="email">Property description</label>
                        <input type="text" class="input" placeholder="Property Description">
                    </div>
                </div>
                <div class="select-prop">
                    <div class="name">
                        <label for="country">property status</label>
                        <select name="" id="">
                            <option value="">- Select -</option>
                        </select>
                    </div>
                    <div class="name">
                        <label for="lname">Property price or rental rate</label>
                        <input type="text" class="input" placeholder="Property Price Or Rental Rate">
                    </div>
                </div>
                <div class="select-prop">
                    <div class="name">
                        <label for="designations">Deeds</label>
                        <select name="" id="">
                            <option value="">- Select -</option>
                        </select>
                    </div>
                    <div class="name certificate">
                        <label for="certifications">Lease documents</label>
                        <div class="file-list" id="fileList"></div>
                        <i class="fa-solid fa-paperclip" id="fileInputTrigger" style="color: #ff0000; cursor: pointer;"></i>
                        <input type="file" class="input" id="fileInput" style="display: none;" accept=".pdf" multiple>
                    </div>
                </div>
            </div>
            <div class="proper-details">
                <div class="pi">
                    <h1>property features</h1>
                </div>
                <div class="select-prop">
                    <div class="name">
                        <label for="country">number of bedrooms</label>
                        <select name="" id="">
                            <option value="">- Select -</option>
                        </select>
                    </div>
                    <div class="name">
                        <label for="country">total area</label>
                        <select name="" id="">
                            <option value="">- Select -</option>
                        </select>
                    </div>
                </div>
                <div class="select-prop">
                    <div class="name">
                        <label for="country">number of bathrooms</label>
                        <select name="" id="">
                            <option value="">- Select -</option>
                        </select>
                    </div>
                    <div class="name">
                        <label for="amenties">Available amenities</label>
                    <div class="customSelect">
                        <div class="selectedList">Choose Options</div>
                        <select name="amenties" id="amenties" multiple>
                            <option value="Balcony">Balcony</option>
                            <option value="ChildrenPlayArea">Children's Play Area</option>
                            <option value="CoveredParking">Covered Parking</option>
                            <option value="MaidsRoom">Maids Room</option>
                        </select>
                    </div>
                    </div>
                </div>
            </div>
            <div class="proper-details">
                <div class="pi">
                    <h1>property images</h1>
                </div>
                <div class="add-img-container">
                    <div class="interior">
                        <h1>interior</h1>
                        <div class="interior-container">
                            <div class="add-img-interior"> 
                                <div class="add-img-btn">
                                    <i class="fa-solid fa-plus"></i>
                                    <h3>add image</h3>
                                </div>
                            </div>
                            <div class="imgs-container">
                                <p>No Images Added Yet</p>
                            </div>
                        </div>
                    </div>
                    <div class="interior">
                        <h1>exterior</h1>
                        <div class="interior-container">
                            <div class="add-img-interior">
                                <div class="add-img-btn">
                                    <i class="fa-solid fa-plus"></i>
                                    <h3>add image</h3>
                                </div>
                            </div>
                            <div class="imgs-container">
                                <p>No Images Added Yet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="proper-details">
                <div class="pi">
                    <h1>interactive floor plans</h1>
                </div>
                <div class="add-img-container">
                    <div class="elevation">
                        <h1>elevation</h1>
                        <div class="elevation-container">
                            <div class="add-img-elevation">
                                <div class="add-img-btn">
                                    <i class="fa-solid fa-plus"></i>
                                    <h3>add image</h3>
                                </div>
                            </div>
                            <div class="imgs-container">
                                <p>No Images Added Yet</p>
                            </div>
                        </div>
                    </div>
                    <div class="elevation">
                        <h1>level one</h1>
                        <div class="elevation-container">
                            <div class="add-img-elevation">
                                <div class="add-img-btn">
                                    <i class="fa-solid fa-plus"></i>
                                    <h3>add image</h3>
                                </div>
                            </div>
                            <div class="imgs-container">
                                <p>No Images Added Yet</p>
                            </div>
                        </div>
                    </div>
                    <div class="elevation">
                        <h1>alternate level one</h1>
                        <div class="elevation-container">
                            <div class="add-img-elevation">
                                <div class="add-img-btn">
                                    <i class="fa-solid fa-plus"></i>
                                    <h3>add image</h3>
                                </div>
                            </div>
                            <div class="imgs-container">
                                <p>No Images Added Yet</p>
                            </div>
                        </div>
                    </div>
                    <div class="elevation">
                        <h1>rear elevation</h1>
                        <div class="elevation-container">
                            <div class="add-img-elevation">
                                <div class="add-img-btn">
                                    <i class="fa-solid fa-plus"></i>
                                    <h3>add image</h3>
                                </div>
                            </div>
                            <div class="imgs-container">
                                <p>No Images Added Yet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="proper-details">
                <div class="pi">
                    <h1>extra information</h1>
                </div>
                <div class="textarea-container">
                    <div class="textarea-content">
                        <h3>specifications</h3>
                        <textarea name="" id="" cols="30" rows="7" placeholder="Enter Specifications…"></textarea>
                    </div>
                    <div class="textarea-content">
                        <h3>Environmental impact information </h3>
                        <textarea name="" id="" cols="30" rows="7" placeholder="Enter Environmental Impact Information…"></textarea>
                    </div>
                    <div class="textarea-content">
                        <h3>Concierge services</h3>
                        <textarea name="" id="" cols="30" rows="7" placeholder="Enter Concierge Services…"></textarea>
                    </div>
                </div>
            </div>
            <div class="submit-prop">
                <div class="submit-btn">
                    <button class="btn-grey">submit request</button>
                </div>
            </div>
        </form>
        
    </div>
    <div>
        @include('layouts/footer')
    </div>
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
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const addImgInteriorContainers = document.querySelectorAll('.add-img-interior');
        function addInteriorImages(event) {
            const imgsContainer = event.currentTarget.nextElementSibling;

            // Create an input element of type "file" dynamically
            const fileInput = document.createElement('input');
            fileInput.type = 'file';
            fileInput.accept = 'image/*';
            fileInput.style.display = 'none';
            fileInput.multiple = true; // Allow multiple file selection

            // Append the file input to the document body
            document.body.appendChild(fileInput);

            // Trigger a click event on the hidden file input
            fileInput.click();

            // Remove the dynamically created file input from the document body
            document.body.removeChild(fileInput);

            // Add an event listener to the file input for interior images
            fileInput.addEventListener('change', () => {
                // Get the selected files
                const selectedFiles = fileInput.files;

                // Check if files were selected
                if (selectedFiles.length > 0) {
                    // Clear the current contents of the imgsContainer
                    imgsContainer.innerHTML = '';

                    // Calculate the width of each image div based on the number of images
                    const numImages = selectedFiles.length;
                    const imageWidth = numImages <= 2 ? '30%' : '100%';

                    // Iterate over the selected files
                    for (let i = 0; i < numImages; i++) {
                        const selectedFile = selectedFiles[i];

                        // Create a FileReader for each file
                        const reader = new FileReader();

                        // Define a function to run when the FileReader has loaded the image
                        reader.onload = (e) => {
                            // Create a parent div with the calculated width
                            const parentDiv = document.createElement('div');
                            parentDiv.style.width = imageWidth;

                            // Create an image element
                            const imageElement = document.createElement('img');
                            
                            // Set the image source to the loaded image data URL
                            imageElement.src = e.target.result;

                            // Set the image height to 100%
                            imageElement.style.height = '100%';

                            // Append the image to the parentDiv
                            parentDiv.appendChild(imageElement);

                            // Append the parentDiv to the imgsContainer
                            imgsContainer.appendChild(parentDiv);
                        };

                        // Read the selected file as a data URL (base64)
                        reader.readAsDataURL(selectedFile);
                    }
                }
            });
        }
            addImgInteriorContainers.forEach(container => {
                container.addEventListener('click', addInteriorImages);
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addImgElevationContainers = document.querySelectorAll('.add-img-elevation');

            // Function to handle click and add a single image for elevation
            function addElevationImage(event) {
                const elevationContainer = event.currentTarget.nextElementSibling;

                // Create an input element of type "file" dynamically
                const fileInput = document.createElement('input');
                fileInput.type = 'file';
                fileInput.accept = 'image/*';
                fileInput.style.display = 'none';
                fileInput.multiple = false; // Allow only one file selection

                // Append the file input to the document body
                document.body.appendChild(fileInput);

                // Trigger a click event on the hidden file input
                fileInput.click();

                // Remove the dynamically created file input from the document body
                document.body.removeChild(fileInput);

                // Add an event listener to the file input for elevation image
                fileInput.addEventListener('change', () => {
                    // Get the selected file
                    const selectedFile = fileInput.files[0];

                    // Check if a file was selected
                    if (selectedFile) {
                        // Clear the current contents of the elevationContainer
                        elevationContainer.innerHTML = '';

                        // Create an image element
                        const imageElement = document.createElement('img');

                        // Set the image source to the loaded image data URL
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            imageElement.src = e.target.result;
                        };
                        reader.readAsDataURL(selectedFile);

                        // Set the image height to 100%
                        imageElement.style.height = '100%';

                        // Append the image to the elevationContainer
                        elevationContainer.appendChild(imageElement);
                    }
                });
            }

            // Add a click event listener to all "add-img-elevation" divs
            addImgElevationContainers.forEach(container => {
                container.addEventListener('click', addElevationImage);
            });
        });
    </script>
    <script>
        var selected = document.querySelector(".selectedList");
        var select = document.getElementById('amenties');
        var selectList = document.querySelector('.selectedList');
        var isOpen = false;
    
        function updateSelectedText() {
            var selectedOptions = select.selectedOptions;
    
            if (selectedOptions.length === 0) {
                selected.textContent = 'Choose Options';
            } else {
                selected.innerHTML = '';
                for (var i = 0; i < selectedOptions.length; i++) {
                    var optionText = selectedOptions[i].text;
    
                    var span = document.createElement('span');
                    span.classList.add('selectedOption');
                    span.dataset.value = selectedOptions[i].value;
    
                    var pTag = document.createElement('p');
                    pTag.textContent = optionText;
    
                    span.appendChild(pTag);
                    selected.appendChild(span);
    
                    span.addEventListener('click', function() {
                        var valueToRemove = this.dataset.value;
                        for (var j = 0; j < select.options.length; j++) {
                            if (select.options[j].value === valueToRemove) {
                                select.options[j].selected = false;
                                break;
                            }
                        }
                        updateSelectedText();
                    });
                }
            }
        }
    
        select.addEventListener('change', function() {
            updateSelectedText();
        });
    
        selectList.addEventListener('click', function(event) {
            event.stopPropagation();
            if (isOpen) {
                select.style.display = 'none';
            } else {
                select.style.display = 'flex';
                select.click(); 
            }
            isOpen = !isOpen;
        });
    

        document.addEventListener('click', function(event) {
            var target = event.target;
    
            if (!selectList.contains(target) && target !== select) {
                select.style.display = 'none';
                isOpen = false;
            }
        });
    
        select.addEventListener('click', function(event) {
            event.stopPropagation();
        });
        updateSelectedText();
    </script>
</body>