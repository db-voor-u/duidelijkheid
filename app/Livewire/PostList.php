<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;



class PostList extends Component
{
     use WithPagination;
     #[Url()]
     public $sort = 'desc';
     #[Url()]
     public $search = '';

     #[Url()]
     public $category = '';
     public function setSort($sort)
     {
         $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
     }
     #[On('search')]
     public  function updateSearch($search)
     {
         $this->search = $search;
        //  dd('search');
     }

    #[Computed()]
    public function posts()
    {
        return Post::published()
        ->with('author','categories')
         ->orderBy('published_at', $this->sort)
         ->when($this->activeCategory, function ($query) {
            $query->withCategory($this->category);
        })
        ->where('title', 'like', '%'.$this->search.'%')
        ->simplePaginate(3);
    }

    #[Computed()]
    public function activeCategory()
    {
        if ($this->category === null || $this->category === '') {
            return null;
        }
        return Category::where('slug', $this->category)->first();
    }
    public function render()
    {
        return view('livewire.post-list');
    }
}
