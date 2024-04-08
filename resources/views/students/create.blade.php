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
        <form action="{{ url('student') }}" method="post" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <label>Imię i Nazwisko</label>
          <input type="text" name="name" id="name" class="form-control mb-15" value="{{ old('name') }}">
          
          <label>Adres</label>
          <input type="text" name="address" id="address" class="form-control mb-15" value="{{ old('address') }}">
          
          <label>Telefon</label>
          <input type="text" name="mobile" id="mobile" class="form-control mb-15" value="{{ old('mobile') }}">
          <label>Data Urodzenia</label>
          <input type="date" name="birthdate" id="birthdate" class="form-control mb-15" value="{{ old('birthdate') }}">
          <label>PESEL</label>
          <input type="text" name="pesel" id="pesel" class="form-control mb-15" value="{{ old('pesel') }}">
          <label>Zdjęcie</label>
          <input type="file"  name="image" id="image" class="form-control mb-30">
          <input type="submit" value="Dodaj" class="btn btn-success">
      </form>
    
    </div>
  </div>
  </div>
  <div class="col-md-2"></div>
</div>
@stop