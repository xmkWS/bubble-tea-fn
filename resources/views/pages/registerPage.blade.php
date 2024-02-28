@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24 ">
            <div class="flex flex-col items-center gap-12 justify-center">
                <div class="flex flex-col gap-4 text-center items-center">
                    <h1 class="text-5xl">SIGN UP</h1>
                    <p>Have a account? <a class="text-white font-medium" href="{{ route('auth.loginPage') }}">Sign In!</a></p>
                </div>
                @foreach($errors->all() as $error)
                    <p class="text-red-500">{{ $error }}</p>
                @endforeach
                <form class="flex flex-col items-center gap-7" action="{{ route('auth.register') }}" method="post">
                    @csrf
                    <input class="input" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                    @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input class="input" type="text" name="surname" placeholder="Surname" value="{{ old('surname') }}">
                    @error('surname') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input class="input" type="text" name="patronymic" placeholder="Patronymic" value="{{ old('patronymic') }}">
                    @error('patronymic') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input class="input" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input class="input" type="password" name="password" placeholder="Password">
                    @error('password') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input class="input" type="password" name="password_r" placeholder="Confirm Password">
                    <button class="button-fill" type="submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
@endsection