@extends('layouts.app')

@section('content')
<div class="lg:flex lg:justify-between ">
    <div class="lg:w-33 ">
        @include('sidebarLinks')
    </div>

    <div class="lg:flex-1 lg:mx-10">
        @include('createTweet')
        <div>
            @foreach ($tweets as $tweet)
                 @include('timelines')
            @endforeach
           
           
        </div>

    </div>

    <div class="lg:w-1/6 bg-blue-100 rounded-lg p-2">
        @include('friendsList')
    </div>

</div>
@endsection
