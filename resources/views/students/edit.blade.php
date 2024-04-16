@extends('students.layout')
<style>
  .mb-30{
    margin-bottom: 30px;
  }
  label{
    margin-bottom: 5px;
  }
  #studentImage{
    height: 220px;
  }
  #imageDiv{
    justify-content: center; 
    padding-top: 30px;
  }
  #backArrow {
    position: absolute;
    left: 0;
    right: 0;
    top: 11px;
    width: 20px;
    margin: auto;
    font-size: 21px;
    color: #787878;
  }
</style>
@section('content')
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="card box-sh">
      <div class="card-header">
        <a id="backArrow" href="{{ url('/student/' .$students->id) }}"><i class="bi bi-arrow-left"></i></a>
        <h6>Edytuj Studenta</h6>
      </div>
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
        <form action="{{ url('student/' .$students->id) }}" method="post"  enctype="multipart/form-data">
          {!! csrf_field() !!}
          @method("PATCH")

          <div class="row row-cols-2 p-17">      
            <div id="studentInfo" class="col">
              <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
              <label>Imię i Nazwisko</label>
              <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control mb-15">
              <label>Adres</label>
              <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control mb-15">
              <label>Telefon</label>
              <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control mb-15">
              <label>Data Urodzenia</label>
              <input type="date" name="birthdate" id="birthdate" value="{{$students->birthdate}}" class="form-control mb-15">
              <label>PESEL</label>
              <input type="text" name="pesel" id="pesel" value="{{$students->pesel}}" class="form-control mb-15">
              <label>Nowe Zdjęcie</label>
              <input type="file"  name="image" id="image" class="form-control mb-30">
              <input type="submit" value="Zapisz" class="btn btn-success">
            </div>

            <div id="imageDiv" class="col d-flex">
              @if (file_exists(public_path('public/images/'.$students->image)) && !is_null($students->image))
              <img id="studentImage" src="{{ url('public/images/'.$students->image) }}">
              @else
                <p>brak zdjęcia</p>
              @endif
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>
@stop