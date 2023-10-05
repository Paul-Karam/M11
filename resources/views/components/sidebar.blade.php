<div class="sidebar">
    <div class="icon-x">
        <i class="fa-solid fa-xmark" onclick="closeSidebar()" style="color: white;"></i>
    </div>
    <div class="menu-container">
        <div class="menu">
            <p>01</p>
            <h3>HOME</h3>
        </div>
        <div class="menu">
            <p>02</p>
            <h3>OUR STORY</h3>
        </div>
        <div class="menu">
            <p>03</p>
            <h3>GET SOCIAL</h3>
        </div>
        <div class="menu">
            <p>04</p>
            <h3>PROPERTY LIST</h3>
        </div>
        <div class="menu">
            <p>05</p>
            <h3>MEDIA CENTER</h3>
        </div>
        <div class="menu">
            <p>06</p>
            <h3>CONTACT US</h3>
        </div>
    </div>
    <div class="empty-container">
        <div class="sidebar-icons">
            <i class="fa-brands fa-instagram fa-lg"></i>
            <i class="fa-brands fa-facebook fa-lg"></i>
            <i class="fa-brands fa-twitter fa-lg"></i>
            <i class="fa-brands fa-linkedin fa-lg"></i>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.querySelector(".sidebar");
    const openSidebarIcon = document.getElementById("openSidebar");
    const closeSidebarIcon = document.querySelector(".fa-xmark");

    openSidebarIcon.addEventListener("click", function () {
        sidebar.style.left = "0";
    });

    closeSidebarIcon.addEventListener("click", function () {
        sidebar.style.left = "-100%";
    });
});
</script>