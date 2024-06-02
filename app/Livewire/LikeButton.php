<?php

namespace App\Livewire;

use App\Models\Post; // Add this import statement
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\User;

class LikeButton extends Component
{
    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function toggleLike()
    {
        if (auth()->guest()) {
            return $this->redirect(route('login'), true);
        }

        $user = auth()->user();

        $hasLiked = $user->likes()->where('post_id', $this->post->id)->exists();

        if ($hasLiked) {
            $user->likes()->detach($this->post->id);
        } else {
            $user->likes()->attach($this->post->id);
        }
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}


