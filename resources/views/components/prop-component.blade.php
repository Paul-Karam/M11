<div class="prop-container">
    <div class="prop-details">
        <div class="prop-name">
            <h1>peartree cottage</h1>
        </div>
        <div class="stats-container">
            <div class="social-interaction">
                <div class="views">
                    <i class="fa-regular fa-eye"></i>
                    <p>200</p>
                    <p>views</p>
                </div>
                <div class="views">
                    @include('svg-files/messages2')
                    <p>300</p>
                    <p>inquiries</p>
                </div>
            </div>
            <div class="maintenance">
                <div class="settings">
                    @include('svg-files/settings')
                    <p>Maintenance requests</p>
                </div>
            </div>
        </div>
        <div class="location">
            <i class="fa-solid fa-location-dot"></i>
            <p>Dubai, Downtown Dubai, The Residences</p>
        </div>
        <div class="prop-infos">
            <div class="prop-info">
                @include('svg-files/buildings')
                <h6>property type</h6>
                <p>villa</p>
            </div>
            <div class="prop-info">
                @include('svg-files/blueprint')
                <h6>property size</h6>
                <p>1,546 sqft</p>
            </div>
            <div class="prop-info">
                @include('svg-files/bed')
                <h6>bedrooms</h6>
                <p>4 bedrooms</p>
            </div>
            <div class="prop-info">
                @include('svg-files/bathtub')
                <h6>bathrooms</h6>
                <p>2 bathrooms</p>
            </div>
        </div>
        <div class="edit-prop-details">
            @include('svg-files/edit-red')
            <p>edit property details</p>
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