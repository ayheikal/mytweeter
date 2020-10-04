
@extends('layouts.app')

@section('content')
 @push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush
    <main class="main " style="position: relative;left:-28%; top:-50px" >
        <form class="form" method="POST" action="{{route("login")}}">
            @csrf
            <h1>Login Form</h1>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control"><i id="email-icon" class="fas fa-user"></i>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:red">{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:red">{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="Login" name="submit" class="submit"><i
                    id="password-icon" class="fas fa-unlock-alt"></i>
            </div>
        </form>
    </main>
@endsection
