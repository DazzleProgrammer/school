@extends('teacher.layout')
@section('content')

<div class="card">
    <div class="card-header">teacherus Page</div>
    <div class="card-body">

        <form action="{{ url('teacher/' .$teacher->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$teacher->id}}" id="id" />
            <label>TCH ID</label></br>
            <input type="text" name="tchid" id="tchid" value="{{$teacher->tchid}}" class="form-control"></br>
            <label>Teacher Name</label></br>
            <input type="text" name="teacher_name" id="teacher_name" value="{{$teacher->teacher_name}}" class="form-control"></br>
            <label>Degree</label></br>
            <input type="text" name="degree" id="degree" value="{{$teacher->degree}}" class="form-control"></br>
            <label>Experience</label></br>
            <input type="text" name="experience" id="experience" value="{{$teacher->experience}}" class="form-control"></br>
            <label>Subject</label></br>
            <input type="text" name="subject" id="subject" value="{{$teacher->subject}}" class="form-control"></br>
            <label>Status</label></br>
            <select name="status" id="status" class="form-select">
                <option value="active">active</option>
                <option value="inactive">inactive</option>
            </select>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop