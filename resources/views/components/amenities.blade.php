<div class="compare-container">
    <div class="compare-img">
        <img src="{{$ImgSource}}" alt="">
    </div>
    <div class="user">
        <img src="{{$ProfilePic}}" alt="">
        <div class="username">
            <h3>{{$username}}</h3>
            <p>{{$position}}</p>
        </div>
    </div>
    <div class="peartree-section">
        <h3>{{$propName}}</h3>
        <h3>{{$propPrice}}</h3>
    </div>
    <div class="prop-infos">
        <div class="prop-info">
            <i class="fa-regular fa-building"></i>
            <h6>property type</h6>
            <p>{{$propType}}</p>
        </div>
        <div class="prop-info">
            <i class="fa-brands fa-uncharted"></i>
            <h6>property size</h6>
            <p>{{$propSize}}</p>
        </div>
        <div class="prop-info">
            <i class="fa-solid fa-bed"></i>
            <h6>bedrooms</h6>
            <p>{{$bedNums}} bedrooms</p>
        </div>
        <div class="prop-info">
            <i class="fa-solid fa-bath"></i>
            <h6>bathrooms</h6>
            <p>{{$bathNums}} bathrooms</p>
        </div>
    </div>
    <div class="specifics">
        <div class="p">
            <h3>specifications</h3>
            <p>
                {{$specifications}}
            </p>
        </div>
        <div class="list-txt">
            <p>
                {{$listText}}
            </p>
            <ul>
                <li>{{$propState}}</li>
                <li>{{$propFeatures}}</li>
            </ul>
        </div>
    </div>
    <div class="amenities-container">
        <h3>amenities</h3>
        <div class="amenities">
            <div class="amenity">
                <svg xmlns="http://www.w3.org/2000/svg" width="25.011" height="25.152" viewBox="0 0 32.011 32.152">
                    <path id="balcony" d="M39.572,35.308h-.716V27.331h.716a.439.439,0,1,0,0-.879H34.219V17.6a9.713,9.713,0,0,0-19.426,0v8.856H9.439a.439.439,0,1,0,0,.879h.716v7.978H9.439A.439.439,0,0,0,9,35.748V38.6a.439.439,0,0,0,.439.439H39.572a.439.439,0,0,0,.439-.439V35.748A.439.439,0,0,0,39.572,35.308Zm-1.6,0H34.219V27.331h3.758ZM19.429,27.331v7.978H15.671V27.331Zm.879,0h3.758v7.978H20.308Zm4.637,7.978V27.331H28.7v7.978Zm4.637-7.978H33.34v7.978H29.582Zm-4.637-.879V18.036H33.34v8.416Zm6.107-14.781a8.8,8.8,0,0,1,2.277,5.486H25.566Zm-6.107,4.864V8.773a8.8,8.8,0,0,1,5.486,2.277Zm-.879,0L18.58,11.049a8.8,8.8,0,0,1,5.486-2.277Zm-6.107-4.864,5.486,5.486H15.682A8.8,8.8,0,0,1,17.959,11.671Zm-2.288,6.365h8.395v8.416H15.671Zm-4.637,9.3h3.758v7.978H11.035Zm28.1,10.825H9.879V36.187H39.133Z" transform="translate(-8.5 -7.383)" fill="red" stroke="red" stroke-width="1"/>
                </svg>
                <p>balcony</p>
            </div>
            <div class="amenity">
                <svg xmlns="http://www.w3.org/2000/svg" width="25.011" height="25.152" viewBox="0 0 36.992 31.152">
                    <path id="svgexport-33" d="M21.417,23.364h5.841V3.9H21.417Zm-1.947,0V3.9H13.629v26.28a.973.973,0,1,1-1.947,0v-2.92H1.947v2.92a.973.973,0,1,1-1.947,0V3.9A1.947,1.947,0,0,1,1.947,1.951h9.735l1.947,0,5.841,0V.973a.973.973,0,1,1,1.947,0v.977h5.841V.973a.973.973,0,1,1,1.947,0v.977h5.841A1.947,1.947,0,0,1,36.992,3.9v26.28a.973.973,0,1,1-1.947,0V4.385a.487.487,0,0,0-.487-.487H29.2V23.364h.973c.537,0,.973,1.042.973,1.994s-.436,1.9-.973,1.9H18.5c-.537,0-.973-.973-.973-1.947s.436-1.947.973-1.947ZM1.947,25.311h9.735V21.417H1.947Zm0-5.841h9.735V15.576H1.947Zm0-5.841h9.735V9.735H1.947Zm0-5.841h9.735V3.9H2.434a.487.487,0,0,0-.487.487Z" fill="red"/>
                </svg>
                <p>children's play area</p>
            </div>
            <div class="amenity">
                <svg xmlns="http://www.w3.org/2000/svg" width="25.011" height="25.152" viewBox="0 0 38.939 31.152">
                    <path id="svgexport-34" d="M36.992,29.2h1.947v1.947H35.045V3.894h3.894V5.841H36.992ZM33.1,31.152H29.2V29.2h1.947V5.841H0V3.894H33.1ZM0,0H38.939V1.947H0ZM1.947,25.311H25.311V19.47H21.417V17.523h3.407l-4.381-5.841H6.814L2.434,17.523h7.3V19.47H1.947v5.841Zm25.311-7.788V29.2a1.947,1.947,0,0,1-1.947,1.947H23.364A1.947,1.947,0,0,1,21.417,29.2V27.258H5.841V29.2a1.947,1.947,0,0,1-1.947,1.947H1.947A1.947,1.947,0,0,1,0,29.2V18.171A1.947,1.947,0,0,1,.389,17l4.867-6.489a1.947,1.947,0,0,1,1.558-.779H20.443A1.947,1.947,0,0,1,22,10.514L26.868,17a1.947,1.947,0,0,1,.278.52Zm-1.947,9.735H23.364V29.2h1.947Zm-23.364,0V29.2H3.894V27.258Zm1.947-5.841H9.735v1.947H3.894Zm13.629,0h5.841v1.947H17.523Z" fill="red"/>
                </svg>
                <p>Covered Parking</p>
            </div>
            <div class="amenity">
                <svg xmlns="http://www.w3.org/2000/svg" width="25.011" height="25.152" viewBox="0 0 29.205 29.205">
                    <path id="svgexport-36" d="M9.922,13.058a4.869,4.869,0,0,1,6.036-3.121,4.779,4.779,0,0,1,3.121,2.823l1.616,4.12a7.788,7.788,0,0,0,1.443,2.348l2,2.233a4.575,4.575,0,0,1-.5,6.6,4.955,4.955,0,0,1-3.91,1.084l-4.151-1.793a5.822,5.822,0,0,0-1.947,0L9.437,29.111a4.814,4.814,0,0,1-5.49-3.952,4.585,4.585,0,0,1,1.316-3.943l1.688-1.68a7.788,7.788,0,0,0,1.937-3.187l1.032-3.29Zm7.342.421A2.856,2.856,0,0,0,15.395,11.8a2.922,2.922,0,0,0-3.617,1.854l-1.162,3.672a7.788,7.788,0,0,1-1.953,3.193l-2,1.974a2.712,2.712,0,0,0-.789,2.344,2.886,2.886,0,0,0,3.29,2.348A20.243,20.243,0,0,1,13.1,25.4a15.568,15.568,0,0,1,3.084,0,18.272,18.272,0,0,1,3.832,1.828,3,3,0,0,0,2.344-.644,2.706,2.706,0,0,0,.3-3.925L20.537,20.3a7.788,7.788,0,0,1-1.431-2.284l-1.842-4.536Zm8.047,4.044c-2.22,0-3.894-2.229-3.894-4.867s1.674-4.867,3.894-4.867S29.2,10.017,29.2,12.655,27.53,17.523,25.311,17.523Zm0-1.947c1,0,1.947-1.256,1.947-2.92s-.942-2.92-1.947-2.92-1.947,1.256-1.947,2.92S24.306,15.576,25.311,15.576ZM3.894,17.523C1.674,17.523,0,15.293,0,12.655S1.674,7.788,3.894,7.788s3.894,2.229,3.894,4.867S6.113,17.523,3.894,17.523Zm0-1.947c1,0,1.947-1.256,1.947-2.92S4.9,9.735,3.894,9.735s-1.947,1.256-1.947,2.92S2.889,15.576,3.894,15.576ZM9.735,9.735c-2.22,0-3.894-2.229-3.894-4.867S7.515,0,9.735,0s3.894,2.229,3.894,4.867S11.954,9.735,9.735,9.735Zm0-1.947c1,0,1.947-1.256,1.947-2.92s-.942-2.92-1.947-2.92S7.788,3.2,7.788,4.867,8.73,7.788,9.735,7.788ZM19.47,9.735c-2.22,0-3.894-2.229-3.894-4.867S17.25,0,19.47,0s3.894,2.229,3.894,4.867S21.689,9.735,19.47,9.735Zm0-1.947c1,0,1.947-1.256,1.947-2.92s-.942-2.92-1.947-2.92S17.523,3.2,17.523,4.867,18.465,7.788,19.47,7.788Z" fill="red"/>
                </svg>  
                <p>Pets Allowed</p>
            </div>
        </div>
    </div>
</div>