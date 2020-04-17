@extends('layouts.app')

@section('content')
<div class="">
    <div class="content">
        <div class="m-b-md">
            <div class="container">
                <div class="row">
                    <row class="col">
                        <h1 class="heading">About me</h1>
                    </row>
                </div>
                <div class="row">
                    <div class="col">
                        <p>A young professional in the making!</p>
                        <p>
                            Hi there! My name is Kevin Tabak and I aspire to be a professional software engineer. <br>
                            Currently I am still studying software engineering at the NHL Stenden in Emmen. <br>
                            Even though I am not very experienced in working I am ready to learn. I got some basic knowladge in programming
                            and other IT and hope to learn even more!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2>Skills</h2>
                        <p>Even with the lack of experience I have some skills I am proud to share with you!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table skills-table table-borderless">
                            <tbody>
                                @foreach($skills as $skill)
                                    <tr>
                                        <th scope="row">{{ $skill->name }}</th>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{ $skill->lvl }}%"
                                                     aria-valuenow="{{ $skill->lvl }}" aria-valuemin="0"
                                                     aria-valuemax="100">{{ $skill->lvl }}</div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <span class="note">*The measures are based on my school results</span>
            </div>
        </div>
    </div>
</div>
@endsection
