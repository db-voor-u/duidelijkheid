<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class PostComments extends Component
{
    use WithPagination;
    public Post $post;

    #[Rule('required|min:3|max:200')]
    public string $comment;

    public function addComment()
    {
       if(auth()->guest()){
          return ;
       }
    $this->validateOnly('comment');


    $this->post->comments()->create([
        'user_id' => auth()->id(),
        'comment' => $this->comment
    ]);
    $this->reset('comment');
    }

    #[Computed()]
    public function comments(){


        return $this?->post?->comments()->with('user')->latest()->simplePaginate(10);

    }
    public function render()
    {
        return view('livewire.post-comments');
    }
}
