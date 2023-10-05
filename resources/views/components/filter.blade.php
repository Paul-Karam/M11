<form action="" method="post" class="filter">
    <div class="btn-buyrent">
        <button class="buy">Buy</button>
        <button class="rent">Rent</button>
    </div>
    <div class="filter2">
        <div class="location">
            <label class="loc">LOCATION</label>
            <input type="text" class="location-input" name="location" placeholder="City, Community, Building">
        </div>
            <div class="prop-type">
                    <label class="loc">PROPERTY TYPE</label>
                <select class="select">
                   
                    <option class="option" value="a">- Select -</option> <option class="option" value="a">- Select -</option>
                </select>
            </div>
            <div class="no-beds">
                    <label class="loc">NO. OF BEDROOMS</label>
                <select class="select">
                    <option value="a">- Select -</option>
                </select>
            </div>
            <div class="price-range">
                    <label class="loc">PRICE RANGE</label>
                <select class="select">
                    <option value="a">- Select -</option>
                </select>
            </div> 
        <button id="search" class="fa fa-search fa-xl"></button>
    </div>
    <div class="filter3">
        <div class="completion">
            <label class="loc">COMPLETION STATUS</label>
            <select class="select">
                <option class="option" value="a">- Select -</option> <option class="option" value="a">- Select -</option>
            </select>
        </div>
        <div class="completion">
            <label class="loc">AREA (SQFT)</label>
            <select class="select">
                <option class="option" value="a">- Select -</option> <option class="option" value="a">- Select -</option>
            </select>
        </div>
        <div class="completion">
            <label class="loc">AMENTIES</label>
            <select class="select">
                <option value="a">- Select -</option>
            </select>
        </div>
        <div class="location">
            <label class="loc">KEYWORDS</label>
            <input type="text" class="location-input" name="location" placeholder="E.g. beach, chiller free">
        </div> 
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="commercial" value="commercialOnly"> SHOW COMMERCIAL PROPERTIES ONLY</label>
        <p><a class="options" href="" id="toggleFilter">SHOW MORE SEARCH OPTIONS <i class="fa-solid fa-chevron-down" style="color: #ffffff;"></i></a></p>
    </div>
</form>