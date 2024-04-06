@extends('students.layout')
<style>
  .mb-20{
    margin-bottom: 20px;
  }
  .mb-30{
    margin-bottom: 30px;
  }
  label{
    margin-bottom: 5px;
  }
</style>
@section('content')
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="card box-sh">
      <div class="card-header"><h6>Edytuj Studenta</h6></div>
      <div class="card-body">
      @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
          <form action="{{ url('student/' .$students->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
            <label>Imię i Nazwisko</label>
            <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control mb-20">
            <label>Adres</label>
            <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control mb-20">
            <label>Telefon</label>
            <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control mb-20">
            <label>Data Urodzenia</label>
            <input type="date" name="birthdate" id="birthdate" value="{{$students->birthdate}}" class="form-control mb-20">
            <label>PESEL</label>
            <input type="int" name="pesel" id="pesel" value="{{$students->pesel}}" class="form-control mb-30">
            <input type="submit" value="Edytuj" class="btn btn-success">
        </form>
      
      </div>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>
@stop