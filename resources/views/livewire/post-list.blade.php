<div>
    <div class="my-8 flex items-center text-sm">
        <label for="sortDirection" class="mr-4">
            Order by:
        </label>

        <select
            class="p-1 border border-black bg-transparent"
            id="sortDirection"
            wire:model="sortDirection"
        >
            <option value="asc">Title A-Z</option>
            <option value="desc">Title Z-A</option>
        </select>
    </div>

    <div>
        @for ($i = 0; $i < $page && $i < $maxPage; $i++)
            @livewire('post-list-items', [
                'postIds' => $postIdChunks[$i],
            ], key("chunk-{$queryCount}-{$i}"))
        @endfor
    </div>

    @if ($this->hasNextPage())
        <div class="my-32">
            <button
                class="w-full p-4 bg-black text-white text-xl"
                wire:click="loadMore"
            >
                Load more
            </button>
        </div>
    @endif
</div>
