<div class="border border-gray-300 rounded-lg my-4">
    <div class="flex p-4">
            <div class="mr-4 flex-shrink-0">
                <img class="mr-2 rounded-full" src="{{auth()->user()->avatar  }}" alt="">
            </div>

        <div>
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
            <p class="text-sm mb-4 mr-2">
            {{$tweet->body}}
            </p>

        </div>
    </div>
</div>