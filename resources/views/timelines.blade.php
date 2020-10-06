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
            <div id="likes_disLikes_icons">
                <form method="POST" action="/tweets/{{$tweet->id}}/like">
                    @csrf
                    @if( $tweet->isLiked(auth()->user()))
                        <button type="submit"><i class="far fa-thumbs-up text-blue-500">{{ $tweet->getLikes() }}</i></button>
                    @else
                    <button type="submit"><i  class="far fa-thumbs-up text-gray-500">{{ $tweet->getLikes() }}</i></button>
                    @endif
                </form>
                <form method="POST" action="/tweets/{{$tweet->id}}/dislike">
                    @csrf
                    @method("DELETE")
                    @if( $tweet->isDisliked(auth()->user()))
                        <button type="submit"><i  class="far fa-thumbs-down text-blue-500">{{ $tweet->getDislikes() }}</i></button>
                    @else
                        <button type="submit"><i  class="far fa-thumbs-down text-gray-500">{{ $tweet->getDislikes() }}</i></button>
                    @endif
                </form>

                
                
                {{-- <button  id="likes_btn">likes:{{$tweet->getLikes()}}</button> --}}
                {{-- <button >DisLiked:{{$tweet->getDislikes()}}</button> --}}
    
            </div>
            
           
        </div>
    </div>
</div>
