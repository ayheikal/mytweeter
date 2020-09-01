@extends('layouts.app')

@section('content')
<div class="lg:flex-1 lg:mx-10">
    @include('createTweet')
    <div>
        @forelse($tweets as $tweet)
        @include('timelines')
        @empty
            <p class="m-5"> No Tweets to show</p>
        @endforelse 
             
        
       
       
    </div>

</div>
@endsection
