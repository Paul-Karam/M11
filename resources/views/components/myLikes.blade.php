<div class="my-likes">
    <h1>my likes</h1>
    @include('components/profile')
    <div class="written-post">
        @include('components/post1')
    </div>
</div>
<script>
    const bookmarkIcons = document.querySelectorAll('.fa-heart');
    bookmarkIcons.forEach(icon => {
        const newIcon = document.createElement('i');
        newIcon.className = 'fa-solid fa-heart';
        newIcon.style.color = '#ff0000';
        icon.parentNode.replaceChild(newIcon, icon);
    });
</script>