@extends('students.layout')
@section('content')
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        
        <form action="{{ url('student') }}" method="post">
          {!! csrf_field() !!}
          <label>Name</label></br>
          <input type="text" name="name" id="name" class="form-control"></br>
          <label>Address</label></br>
          <input type="text" name="address" id="address" class="form-control"></br>
          <label>Mobile</label></br>
          <input type="text" name="mobile" id="mobile" class="form-control"></br>
          <label>Birthdate</label></br>
          <input type="date" name="birthdate" id="birthdate" class="form-control"></br>
          <label>PESEL</label></br>
          <input type="number" name="pesel" id="pesel" class="form-control"></br>
          <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
    
    </div>
  </div>
  </div>
  <div class="col-md-2"></div>
</div>
@stop