@extends('students.layout')
@section('content')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2>Laravel 10 Crud</h2>
            </div>
            <div class="card-body">
                <!-- <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a> -->

                <div class="table-responsive">
                    <table class="table datatable" id="studentsDataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <!-- <th>Address</th> -->
                                <th>Mobile</th>
                                <th>Birthdate</th>
                                <th>Age</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <!-- <td>{{ $student->address }}</td> -->
                                <td>{{ $student->mobile }}</td>
                                <td>{{ $student->birthdate }}</td>
                                <td>{{ date_diff(date_create($student->birthdate), date_create('now'))->y }}</td>
                                <td>
                                    <a href="{{ url('/student/' . $student->id) }}" title="View Student"><button class="btn btn-view btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                    <a href="{{ url('/student/' . $student->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                    <form method="POST" action="{{ url('/student' . '/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
    <div class="col-md-2"></div>
</div>

<script>
    $(document).ready( function () {
        $('#studentsDataTable').DataTable();
    });
</script>
@endsection


