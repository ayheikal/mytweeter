<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @foreach (auth()->user()->follows as $user)
    <li class="mb-2">
        <div class="flex text-sm">
            <img class="mr-2 rounded-full" src="{{ $user->avatar }}" alt="">
            {{ $user->name }}
        </div>

    </li>
    @endforeach
    

    
</ul>