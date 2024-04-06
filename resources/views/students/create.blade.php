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
    <div class="card-header"><h6>Dodaj Studenta</h6></div>
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
        <form action="{{ url('student') }}" method="post">
          {!! csrf_field() !!}
          <label>Imię i Nazwisko</label>
          <input type="text" name="name" id="name" class="form-control mb-20" value="{{ old('name') }}">
          
          <label>Adres</label>
          <input type="text" name="address" id="address" class="form-control mb-20" value="{{ old('address') }}">
          
          <label>Telefon</label>
          <input type="text" name="mobile" id="mobile" class="form-control mb-20" value="{{ old('mobile') }}">
          <label>Data Urodzenia</label>
          <input type="date" name="birthdate" id="birthdate" class="form-control mb-20" value="{{ old('birthdate') }}">
          <label>PESEL</label>
          <input type="number" name="pesel" id="pesel" class="form-control mb-30" value="{{ old('pesel') }}">
          
          <input type="submit" value="Dodaj" class="btn btn-success">
      </form>
    
    </div>
  </div>
  </div>
  <div class="col-md-2"></div>
</div>
@stop