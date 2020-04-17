@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Skills</h1>
                <p><a href="{{ route('skills.create') }}" class="btn btn1">Create</a></p>

                <table class="table skills-table">
                    <tbody>
                    @foreach($skills as $skill)
                        <tr>
                            <th scope="row">{{ $skill->name }}</th>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $skill->lvl }}%"
                                         aria-valuenow="{{ $skill->lvl }}" aria-valuemin="0" aria-valuemax="100">
                                        {{ $skill->lvl }}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
