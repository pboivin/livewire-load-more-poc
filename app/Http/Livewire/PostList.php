<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{
    public $postIdChunks = [];
    public $page = 1;
    public $maxPage = 1;
    public $hasNextPage = false;

    public function mount()
    {
        $this->postIdChunks = Post::pluck('id')->chunk(12)->toArray();
        $this->maxPage = count($this->postIdChunks);
    }

    public function render()
    {
        $this->hasNextPage = $this->page < $this->maxPage;

        return view('livewire.post-list');
    }

    public function loadMore()
    {
        if ($this->page < $this->maxPage) {
            $this->page++;
        }
    }
}
