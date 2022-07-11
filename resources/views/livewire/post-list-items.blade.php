<div class="grid grid-cols-2 gap-4">
    @foreach ($posts as $post)
        <div class="mb-16">
            <div>
                <img
                    class="bg-gray-100 w-full"
                    src="https://picsum.photos/id/{{ $post->id * 3 }}/800/600"
                    width="800"
                    height="600"
                    alt=""
                >
            </div>

            <div class="mt-4">
                {{ $post->title }}
            </div>
        </div>
    @endforeach
</div>
