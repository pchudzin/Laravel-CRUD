@extends('students.layout')
@section('content')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<style>
    .table-responsive{
        padding: 10px;
    }
    th{
        font-weight: 500;
    }
</style>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2>Studenci</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatable" id="studentsDataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Imię i Nazwisko</th>
                                <th>Telefon</th>
                                <th>Data Urodzenia</th>
                                <th>Wiek</th>
                                <th>Operacje</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ preg_replace("/(\\w{3})/uim", "$1 ", $student->mobile) }}</td>
                                <td>{{ $student->birthdate }}</td>
                                <td>{{ date_diff(date_create($student->birthdate), date_create('now'))->y }}</td>
                                <td>
                                    <a href="{{ url('/student/' . $student->id) }}" title="Przeglądaj"><button class="btn btn-view btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Przeglądaj</button></a>
                                    <a href="{{ url('/student/' . $student->id . '/edit') }}" title="Edytuj"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edytuj</button></a>

                                    <form method="POST" action="{{ url('/student' . '/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Usuń" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Usuń</button>
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
    let table = new DataTable('#studentsDataTable', {
        info: false,
        columnDefs: [
            { targets: [5], orderable: false}
        ]
    });
</script>
@endsection


