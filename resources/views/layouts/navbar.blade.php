<div class="topnav">
    <div class="leftnav">
      <i class="fa-solid fa-bars" id="openSidebar"></i>
      <ul>
        <li><a href="#home">BUY</a></li>
        <li><a href="#news">RENT</a></li>
        <li><a href="#contact">GET SOCIAL</a></li>
        <li><a href="#about">CONTACT US</a></li>
      </ul>
    </div>
    <div>
      <img class="logo" src="image/logo.svg" alt="Logo">
    </div>
    <div class="rightnav">
        <ul>
          <li>
            <select class="lang">
                <option value="en">EN</option>
                <option value="fr">FR</option>
                <option value="ar">AR</option>
            </select>
          </li>
          <div class="navbar-ele">
            <i class="fa-regular fa-user"></i>
            @if(isset($isAccountPage) && $isAccountPage)
                <li><a href="#news">PROFILE</a></li>
            @else
                <li><a href="#news">LOGIN</a></li>
            @endif
        </div>
          <div class="navbar-ele">
            <i class="fa-regular fa-message"></i>
            <li><a href="#contact">INBOX</a></li>
          </div>
          <div class="navbar-ele">
            <i class="fa-regular fa-bell"></i>
          </div>
            <li><button class="btn">AGENT PORTAL</button></li>
        </ul>
    </div>
</div>

