<div>
    <header class="border border-blue-400 rounded-lg px-8 py-6 bg-gray-100">
        <img
        class=" flex w-full border mb-2" style="height: 200px"
        src="/images/logo.png"
        alt='background'
        >
        <div class="flex justify-between item-center">
            
            <div>
                <img src="{{ $user->avatar }}" alt="" class="rounded-full w-150 static" >

                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <button type="submit" class="bg-white-500 rounded-lg shadow py-2 px-2 text-black text-xs">Edit profile</button>
                
                @if (auth()->user()->email!==$user->email)
                 <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white text-xs">Follow </button>
                @endif
            </div>
            
            
           
        </div>
        <div class="mb-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptate nemo dignissimos commodi distinctio natus dolor. Delectus praesentium eligendi ad. Ab, vitae tempora qui atque magni exercitationem nobis eveniet minima?</p>

        </div>

    </header>
</div>