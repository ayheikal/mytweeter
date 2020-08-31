@extends('layouts.app')
@section('content')

<div class="lg:flex-1 lg:mx-10">
   
    @include('profiles.profile_details')
    <div>
        @foreach ($user->tweets as $tweet)
             @include('timelines')
        @endforeach
       
       
    </div>

</div>
    
@endsection