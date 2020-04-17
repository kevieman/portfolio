<!-- TODO: Show detailed information about a page -->
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <h3>Title: {{ $page->title }}</h3>
                <h3>Route: {{ $page->route }}</h3>
            </div>
        </div>
    </div>
@endsection
