<div>
    <div>
        @for ($i = 0; $i < $page && $i < $maxPage; $i++)
            @livewire('post-list-items', [
                'postIds' => $postIdChunks[$i],
            ], key('chunk-' . $i))
        @endfor
    </div>

    @if ($hasNextPage)
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
