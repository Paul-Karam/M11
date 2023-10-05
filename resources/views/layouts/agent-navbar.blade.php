<div class="agent-nav">
    <div class="nav">
        <div class="leftnav">
            <img class="logo" src="image/logo.svg" alt="Logo">
            <div class="searchbar-agent">
                <input type="text" name="" id="" class="input" placeholder="Search for listings">
                <i class="fa-solid fa-magnifying-glass" style="color: #ff0000;"></i>
            </div>
            <select class="lang">
                <option value="en">EN</option>
                <option value="fr">FR</option>
                <option value="ar">AR</option>
            </select>
        </div>
        <div class="rightnav">
            <ul>
                <div class="navbar-ele">
                    @include('svg-files/home')
                    <li><a href="#news">home</a></li>
                </div>
                <div class="navbar-ele">
                    @include('svg-files/clipboard-list')
                    <li><a href="#news">listings</a></li>
                </div>
                <div class="navbar-ele">
                    @include('svg-files/document')
                    <li><a href="#news">reports</a></li>
                </div>
                <div class="navbar-ele">
                    @include('svg-files/analytics2')
                    <li><a href="#news">analytics</a></li>
                </div>
                <div class="navbar-ele">
                    @include('svg-files/messages1')
                    <li><a href="#contact">inbox</a></li>
                </div>
                <div class="navbar-ele">
                    <i class="fa-regular fa-bell"></i>
                </div>
                <button class="btn-grey">add property</button>
            </ul>
        </div>
    </div>
</div>
