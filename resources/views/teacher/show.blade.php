@extends('teacher.layout')
@section('content')


<div class="card">
    <div class="card-header">teacher Page</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-title">TCH ID : {{ $teacher->tchid }}</h5>
            <p class="card-text">Teacher Name : {{ $teacher->teacher_name }}</p>
            <p class="card-text">Degree : {{ $teacher->degree }}</p>
            <p class="card-text">Experience : {{ $teacher->experience }}</p>
            <p class="card-text">Subject : {{ $teacher->subject }}</p>
            <p class="card-text">Status : {{ $teacher->status }}</p>
        </div>

        </hr>

    </div>
</div>