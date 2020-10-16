<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea 
            name="body" 
            class="w-full" 
            placeholder="What's up doc??"  
            required 
            autofocus>
        </textarea>

        <hr class=" my-4">

        <footer class=" flex justify-between items-center">
            <img src="{{ auth()->user()->avatar }}" alt="" class="mr-2 w-12 h-12 rounded-full">
            <button type="submit" class=" bg-blue-500 hover:bg-blue-600 rounded-lg shadow py-2 px-10 text-sm text-white">Tweet a roo!</button>
        </footer>
    </form>

    @error('body')
        <p class=" text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>