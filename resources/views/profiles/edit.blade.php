<x-app>
    <form action="{{ $user->path() }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="block mb2 uppercase font-bold text-xs text-gray-700">Name</label>
            
            <input 
                type="text" 
                id="name" 
                class="border border-gray-400 p-2 w-full" 
                name="name" 
                value="{{ $user->name }}"
                required
            >

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb2 uppercase font-bold text-xs text-gray-700">Username</label>
            
            <input 
                type="text" 
                id="username" 
                class="border border-gray-400 p-2 w-full" 
                name="username" 
                value="{{ $user->username }}"
                required
            >

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="avatar" class="block mb2 uppercase font-bold text-xs text-gray-700">Avatar</label>

            <div class="flex">
            
                <input 
                    type="file" 
                    id="avatar" 
                    class="border border-gray-400 p-2 w-full" 
                    name="avatar" 
                >

                <img 
                    src="{{ $user->avatar }}" 
                    alt="your avatar"
                    width="40px"
                >
    
                
            </div>

            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>



        <div class="mb-6">
            <label for="email" class="block mb2 uppercase font-bold text-xs text-gray-700">Email</label>
            
            <input 
                type="email" 
                id="email" 
                class="border border-gray-400 p-2 w-full" 
                name="email" 
                value="{{ $user->email }}"
                required
            >

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb2 uppercase font-bold text-xs text-gray-700">Password</label>
            
            <input 
                type="password" 
                id="password" 
                class="border border-gray-400 p-2 w-full" 
                name="password" 
                required
            >

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb2 uppercase font-bold text-xs text-gray-700">Password Confimation</label>
            
            <input 
                type="password" 
                id="password_confirmation" 
                class="border border-gray-400 p-2 w-full" 
                name="password_confirmation" 
                required
            >

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                Submit
            </button>

            <a href="{{ $user->path() }}" class="hover:underline">Cancel</a>
        </div>
    </form>
</x-app>