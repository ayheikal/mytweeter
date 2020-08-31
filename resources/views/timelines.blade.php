<div class="border border-gray-300 rounded-lg my-4">
    <div class="flex p-4">
            <div class="mr-4 flex-shrink-0">
                <a href="{{ route('profile',$tweet->user) }}">
                <img class="mr-2 rounded-full" src="{{$tweet->user->avatar  }}" alt="">

                </a>
            </div>

        <div>
            <h5 class="font-bold mb-4" ><a href="{{ route('profile',$tweet->user) }}">{{ $tweet->user->name }}</a></h5>
            <p class="text-sm mb-4 mr-2">
            {{$tweet->body}}
            </p>

        </div>
    </div>
</div>