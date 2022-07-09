<div>
    @foreach ($posts->chunk(2) as $row)
        <div class="flex">
            @foreach ($row as $item)
                <div class="w-1/2 mx-4 mb-16">
                    <div>
                        <img
                            class="bg-gray-100 w-full"
                            src="https://picsum.photos/id/{{ $item->id * 3 }}/800/600"
                            width="800"
                            height="600"
                            alt=""
                        >
                    </div>

                    <div class="mt-4">
                        {{ $item->title }}
                    </div>
                </div>
            @endforeach

            @if (count($row) === 1)
                <div class="w-1/2 mx-4 mb-16">
                    {{-- spacer  --}}
                </div>
            @endif
        </div>
    @endforeach
</div>
