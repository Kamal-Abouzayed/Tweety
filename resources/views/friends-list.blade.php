<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class=" font-bold text-xl mb-4">Friends</h3>

    <ul>
        @forelse (auth()->user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4' }}">
                <div>
                    <a class="flex items-center text-sm" href="{{ route('profile', $user->username) }}">
                        <img src="{{ $user->avatar }}" alt="" class="mr-3" width="50">
                        {{ $user->username }}
                    </a>
                </div>
            </li>

        @empty
            <li>No Friends yet!</li>
        @endforelse
    
    </ul>
</div>