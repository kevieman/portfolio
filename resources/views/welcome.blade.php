@extends('layouts.welcome')

@section('content')
{{-- TODO: Make welcome page responsive --}}
<div class="welcome-container">
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right welcome-links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <h1 class="title">Kevin Tabak</h1>
            </div>

            <div class="welcome-links">
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('portfolio') }}">portfolio</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
    </div>
</div>
@endsection

