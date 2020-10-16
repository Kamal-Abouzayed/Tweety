<div class=" flex p-4 {{ $loop->last ? '' : 'border-b border-b-grey-500' }} ">
    <div class=" mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img src="{{ $tweet->user->avatar }}" alt="" class="mr-2 w-12 h-12 rounded-full">
        </a>
    </div>

    <div>
        <h5 class=" font-bold mb-2">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }}
            </a>
            
        </h5>

        <p class=" text-sm mb-3">{{ $tweet->body }}</p>

        <x-like-buttons :tweet="$tweet"/>
    </div>
</div>