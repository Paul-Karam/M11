<div class="personal-details">
    <h1>personal information</h1>
    <div class="full-name">
        <div class="name">
            <label for="fname">first name</label>
            <input type="text" class="input" placeholder="Enter your first name">
        </div>
        <div class="name">
            <label for="lname">last name</label>
            <input type="text" class="input" placeholder="Enter your last name">
        </div>
    </div>
    <div class="email-phone">
        <div class="name">
            <label for="email">email address</label>
            <input type="email" class="input" placeholder="johnnydoe@gmail.com">
        </div>
        <div class="phone">
            <label>Phone Number</label>
            <input id="phone" name="phone" type="tel" placeholder="Phone Number">
        </div>
    </div>
    <div class="save-changes">
        <button class="btn-grey">save changes</button>
    </div>
</div>

<div class="pass-change">
    <h1>change password</h1>
    <div class="oldpass">
        <div class="name">
            <label for="oldPass">old password</label>
            <input type="password" class="input" placeholder="Password">
        </div>
    </div>
    <div class="newpass">
        <div class="name">
            <label for="newPass">new password</label>
            <input type="password" class="input" placeholder="Password">
        </div>
        <div class="name">
            <label for="confirmPass">confirm password</label>
            <input type="password" class="input" placeholder="johnnydoe@gmail.com">
        </div>
    </div>
    
    <div class="submit">
        <button class="btn-grey">submit</button>
    </div>
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

