<div class="grid grid-cols-2 gap-x-4 gap-y-8 mt-8 lg:gap-y-16 lg:mt-16">
    @foreach ($posts as $post)
        <div>
            <img
                class="bg-gray-100 w-full"
                src="https://picsum.photos/id/{{ $post->id * 3 }}/800/600"
                width="800"
                height="600"
                alt=""
            >

            <div class="mt-4">
                {{ $post->title }}
            </div>
        </div>
    @endforeach
</div>
