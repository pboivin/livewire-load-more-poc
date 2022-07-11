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
    public $sortDirection = 'asc';
    public $queryCount = 0;

    public function mount()
    {
        $this->prepareChunks();
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

    public function prepareChunks()
    {
        $this->postIdChunks = Post::orderBy('title', $this->sortDirection)
            ->pluck('id')
            ->chunk(12)
            ->toArray();

        $this->page = 1;

        $this->maxPage = count($this->postIdChunks);

        $this->queryCount++;
    }

    public function updatedSortDirection()
    {
        $this->prepareChunks();
    }
}
