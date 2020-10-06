@if (auth()->check())
<div class=" lg:w-1/6 bg-blue-100 rounded-lg p-2" id="friendList">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        
            
        @forelse (auth()->user()->follows as $user)
        <li class="mb-2">
            
                <a href="{{ route('profile',$user) }}" class="flex text-sm">
                    <img class="mr-2 rounded-full" src="{{ $user->avatar }}" alt="">
                
                {{ $user->name }}
            </a>
        

        </li>
        @empty
            <li class="mr-2 rounded px-3 " style="color:red; background:black">No friends</li>
        @endforelse
        @endif
        

        
    </ul>
</div>