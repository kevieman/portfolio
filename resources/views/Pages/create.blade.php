<!-- TODO: Create a form in which a new page can be made -->
@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{ route('pages.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Page Title:</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="route">Page route:</label>
                <input type="text" name="route" id="route" class="form-control">
                <small class="form-text text-muted">domain.com/example</small>
            </div>
            <button type="submit" class="btn btn1">Create</button>
        </form>
    </div>
@endsection
