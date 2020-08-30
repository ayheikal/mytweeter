<div class="border border-blue-400 rounded-lg px-8 py-6">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" id="" class="w-full"  placeholder="what's up !"></textarea>
       @error('body')
           <p class='text-red-500 text-sm'>{{ $message }}</p>
       @enderror
        <hr class="my-4">
        <footer class="flex justify-between">
            
                <img class="mr-2 rounded-full" src="{{ auth()->user()->avatar }}" alt="">
                <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">tweet somethong!</button>
                
        </footer>
    </form>
</div>