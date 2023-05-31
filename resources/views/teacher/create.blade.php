@extends('teacher.layout')
@section('content')

<div class="card">
    <div class="card-header">teacherus Page</div>
    <div class="card-body">
        <form action="{{ url('teacher') }}" method="post">
            {!! csrf_field() !!}
            <label>TCH ID</label></br>
            <input type="text" name="tchid" id="tchid" class="form-control"></br>
            <label>Teacher Name</label></br>
            <input type="text" name="teacher_name" id="teacher_name" class="form-control"></br>
            <label>Degree</label></br>
            <input type="text" name="degree" id="degree" class="form-control"></br>
            <label>Experience</label></br>
            <input type="text" name="experience" id="experience" class="form-control"></br>
            <label>Subject</label></br>
            <input type="text" name="subject" id="subject" class="form-control"></br>
            <label>Status</label></br>
            <select name="status" id="status" class="form-select">
                <option value="active">active</option>
                <option value="active">inactive</option>
            </select>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop