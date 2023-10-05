
<div class="left-details">
    <div class="user-info">
        <div>
            <img src="image/profilePic2.png" alt="">
        </div>
        <div class="info">
            <h3>Johnny Doe</h3>
            <p>johnnydoe@gmail.com</p>
            <p>+961 3 736 734</p>
        </div>
    </div>
    <div class="btn-floors">
        <a href="{{ url('details') }}" class="{{ request()->is('details') ? 'active' : '' }}">
            <button>account details <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i></button>
        </a>
        <a href="{{ url('saved-properties') }}" class="{{ request()->is('saved-properties') ? 'active' : '' }}">
            <button>saved properties <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i></button>
        </a>
        <a href="{{ url('contacted-properties') }}" class="{{ request()->is('contacted-properties') ? 'active' : '' }}">
            <button>contacted properties <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i></button>
        </a>
        <a href="{{ url('viewing-history') }}" class="{{ request()->is('viewing-history') ? 'active' : '' }}">
            <button>viewing history <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i></button>
        </a>
        <a href="{{ url('saved-posts') }}" class="{{ request()->is('saved-posts') ? 'active' : '' }}">
            <button>saved posts <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i></button>
        </a>
        <a href="{{ url('my-likes') }}" class="{{ request()->is('my-likes') ? 'active' : '' }}">
            <button>my likes <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i></button>
        </a>
        <button>logout <i class="fa-solid fa-arrow-right-long" style="color: #ffffff;"></i></button>
    </div>
</div>