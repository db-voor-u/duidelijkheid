
<div >
    <h3 class="text-lg font-semibold text-neutral-900 mb-3">Aanbevolen onderwerpen</h3>
    <div class="topics flex flex-wrap justify-start">
        @foreach ($categories as $category)
        <x-posts.category-badge :category="$category" />

        @endforeach

    </div>
</div>
