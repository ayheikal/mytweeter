@extends('layouts.app')

@section('content')
<div class="lg:flex-1 lg:mx-10">
    @include('createTweet')
    <div>
        @foreach ($tweets as $tweet)
             @include('timelines')
        @endforeach
       
       
    </div>

</div>
@endsection
