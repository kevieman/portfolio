@extends('layouts.admin')

@section('content')
{{--    TODO: Add a form here --}}
<div class="container">
    <div class="row">
        <div class="col-5">
            <h1>Create skill</h1>
            <form action="{{ route('skills.store') }}" method="POST" id="skill-form" class="form-group">
                @csrf
                <label for="name">Skill name:</label>
                <input type="text" name="name" id="name" class="form-control" autocomplete="off"><br>
                <label for="lvl">Skill lvl:</label>
                <input type="number" name="lvl" id="lvl" class="form-control" min="0" max="100"><br>
                <div class="text-center">
                    <input type="submit" value="Opslaan" class="btn btn1 form-control" style="width: 50%">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
