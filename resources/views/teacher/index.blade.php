@extends('teacher.layout')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">teacher</div>
                <div class="card-body">
                    <a href="{{ url('/teacher/create') }}" class="btn btn-success btn-sm" title="Add New teacher">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>tchid</th>
                                    <th>teacher_name</th>
                                    <th>degree</th>
                                    <th>experience</th>
                                    <th>subject</th>
                                    <th>status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teacher as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->tchid }}</td>
                                    <td>{{ $item->teacher_name }}</td>
                                    <td>{{ $item->degree }}</td>
                                    <td>{{ $item->experience }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ $item->status }}</td>

                                    <td>
                                        <a href="{{ url('/teacher/' . $item->id) }}" title="View teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/teacher/' . $item->id . '/edit') }}" title="Edit teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/teacher' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete teacher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
