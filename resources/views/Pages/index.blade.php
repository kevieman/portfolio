<!-- TODO: Show all te pages -->
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pages</h1>
                <a href="{{ route('pages.create') }}" class="btn btn1">Create</a>
            </div>
        </div>
        <br>
        <div class="border-bottom"></div>
        <br>
        <div class="row">
            <div class="col">
                @foreach($pages as $page)
                    <div class="card pages-card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col">
                                    <h5 class="card-title">{{ $page->title }}</h5>
                                    <p class="card-text">../{{ $page->route }}</p>
                                </div>
                                <div class="col-2 text-right">
                                    <a href="{{ route('pages.show', $page->id) }}" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
