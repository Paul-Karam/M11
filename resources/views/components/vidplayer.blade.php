<video autoplay muted loop id="myVideo">
    <source src="./image/vid.mp4" type="video/mp4">
</video>

<div class="vid-content expanded">
    <h1>THE EUSTON ARMS</h1>
    <div class="lower">
        <div class="icons">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin"></i>
        </div>
        <x-filter/>
        <div class="comment">
            <div class="div-com">
                <i class="fa-solid fa-comment"></i>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const toggleFilter = document.getElementById("toggleFilter");
    const filter3 = document.querySelector(".filter3");
    const vidContent = document.querySelector(".vid-content");

    toggleFilter.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default link behavior

        filter3.classList.toggle("active"); // Toggle the "active" class
        toggleFilter.classList.toggle("active"); // Toggle the "active" class on the link
        if (getComputedStyle(filter3).display === "none") {
            vidContent.style.gap = "270px";
        } else {
            vidContent.style.gap = "190px";
        }
    });
});
</script>
