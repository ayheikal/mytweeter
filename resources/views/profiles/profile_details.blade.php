<div>
    <header class="border border-blue-400 rounded-lg px-8 py-2 bg-gray-100">
        <img
        class=" flex w-full border mb-2" style="height: 200px"
        src="/images/logo.png"
        alt='background'
        >
        <div class="flex justify-between item-center">
            
            <div>
                <img style="position:relative;bottom:50px;left:10px; width:100px;height:100px; padding-bottom:-10px;" src="{{ $user->avatar }}" alt="" class="rounded-full border boder-gray-400" >

                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="" style="position: relative;">
                @if(auth()->user()->is($user))
                    <form action="/profiles/{{ $user->name }}/edit">
                        @csrf
                        @method('put')
                        <button type="submit" class="bg-gray-500 rounded-lg shadow py-2 px-3 text-black text-xs">Edit profile</button>
                    </form>
                    @endif
                @if (auth()->user()->isNot($user) && !auth()->user()->following($user))
                    <form method="POST" action='/profiles/{{ $user->name }}/follow' style="float: left;padding:3px;">
                        @csrf
                        
                        <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white text-xs">Follow </button>
                        
                    </form>
                @elseif(auth()->user()->isNot($user))
                    <form method="POST" action='/profiles/{{ $user->name }}/unfollow' style="float: left;padding:3px;">
                        @csrf
                        @method('delete')
                        
                        <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white text-xs">UnFollow </button>
                        
                    </form>
                @endif
                 
               
            </div>
            
            
           
        </div>
        <div class="mb-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptate nemo dignissimos commodi distinctio natus dolor. Delectus praesentium eligendi ad. Ab, vitae tempora qui atque magni exercitationem nobis eveniet minima?</p>

        </div>

    </header>
</div>