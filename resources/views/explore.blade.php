@extends("layouts.app")


@section("content")
    <dev>
        <h1 class=""><strong>Explore page</strong></h1>


            @foreach($users as $user)
            <div class=" mr-4" >
                <a href="{{ route("profile",$user)}}" >
                    <div class="flex items-center ">

                    <img src="{{$user->avatar}}" class="mr-4" width="60">
                    </div>
                    <div>
                        <h4 class="font-bold">{{$user->name}}</h4>

                    </div>
                </a>
            </div>
            @endforeach



    </dev>
@endsection
