@if (auth()->check())
<div class=" lg:w-1/6 bg-blue-100 rounded-lg p-2" >
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        
            
        @foreach (auth()->user()->follows as $user)
        <li class="mb-2">
            
                <a href="{{ route('profile',$user) }}" class="flex text-sm">
                    <img class="mr-2 rounded-full" src="{{ $user->avatar }}" alt="">
                
                {{ $user->name }}
            </a>
        

        </li>
        @endforeach
        @endif
        

        
    </ul>
</div>