<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostListItems extends Component
{
    public $postIds;

    public function render()
    {
        return view('livewire.post-list-items', [
            'posts' => Post::find($this->postIds),
        ]);
    }
}
