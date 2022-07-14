<?php

namespace App\Http\Livewire;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PostList extends Component
{
    const ITEMS_PER_PAGE = 12;

    public $postIdChunks = [];
    public $page = 0;
    public $maxPage = 1;
    public $sortDirection = 'asc';
    public $queryCount = 0;

    public function mount()
    {
        $this->loadMore();
    }

    public function render()
    {
        return view('livewire.post-list');
    }

    public function updatedSortDirection()
    {
        $this->resetList();
    }

    public function loadMore()
    {
        if ($this->hasNextPage()) {
            $this->page++;

            /** @var LengthAwarePaginator */
            $paginator = DB::table('posts')
                ->orderBy('title', $this->sortDirection)
                ->paginate(self::ITEMS_PER_PAGE, ['id'], 'page', $this->page);

            $this->postIdChunks[] = $paginator->pluck('id');

            $this->maxPage = $paginator->lastPage();
        }
    }

    public function hasNextPage()
    {
        return $this->page < $this->maxPage;
    }

    public function resetList()
    {
        $this->page = 0;
        $this->postIdChunks = [];
        $this->queryCount++;
        $this->loadMore();
    }
}
