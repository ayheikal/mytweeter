@extends('layouts.app')
@section('content')

<div class=" flex border border-black px-4 py-4 rounded " style="position:relative; left:15px; background:rgb(123, 123, 212);width:420px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header " class="text-align:center;">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="/profiles/{{ $user->name }}">
                        @csrf
                        @method('patch')

                        <div class="form-group center">
                            <label for="name">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input value="{{ $user->name }}" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group center">
                            <label for="name">{{ __('UserName') }}</label>

                            <div class="col-md-6">
                                <input value="{{ $user->username }}"id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="username" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email"value="{{ $user->email }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group center">
                            <label for="name">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                  

                        <div class="form-group row mb-5 mt-5">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary rounded" style="background:blue; ">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


