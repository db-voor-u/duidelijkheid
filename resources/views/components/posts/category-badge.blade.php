@props(['category'])
<x-badge wire:navigate href=" {{ route('posts.index',['category'=> $category->title]) }}" :bgColor="$category->bg_color">
    {{ $category->title }}
</x-badge>
