<a class="flex flex-col items-center ml-4" data-url="{{ route('posts.index') }}" onclick="sharePost(this)">
    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1" width="1em" height="1em" viewBox="0 0 24 24">
        <path fill="black" d="m13.12 17.023l-4.199-2.29a4 4 0 1 1 0-5.465l4.2-2.29a4 4 0 1 1 .958 1.755l-4.2 2.29a4.008 4.008 0 0 1 0 1.954l4.2 2.29a4 4 0 1 1-.959 1.755M6 14a2 2 0 1 0 0-4a2 2 0 0 0 0 4m11-6a2 2 0 1 0 0-4a2 2 0 0 0 0 4m0 12a2 2 0 1 0 0-4a2 2 0 0 0 0 4"/>
    </svg>
    <p class="text-xs ml-1">delen</p>
</a>

<script>
    function sharePost(button) {
        const url = button.getAttribute('data-url');
        if (navigator.share) {
            navigator.share({
                title: 'Bekijk dit bericht!',
                url: url
            }).then(() => {
                console.log('Bedankt voor delen!');
            }).catch(console.error);
        } else {
            // Fallback for browsers that do not support the Web Share API
            alert('Delen wordt niet ondersteund in deze browser. Kopieer de link: ' + url);
        }
    }
</script>

