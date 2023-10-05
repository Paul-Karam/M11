<div class="saved-post">
    <h1>saved posts</h1>
    @include('components/profile')
    <div class="written-post">
        @include('components/post1')
    </div>
</div>
<script>
    const bookmarkIcons = document.querySelectorAll('.fa-bookmark');
    bookmarkIcons.forEach(icon => {
        const newIcon = document.createElement('i');
        newIcon.className = 'fa-solid fa-bookmark';
        newIcon.style.color = '#ff0000';
        icon.parentNode.replaceChild(newIcon, icon);
    });
</script>