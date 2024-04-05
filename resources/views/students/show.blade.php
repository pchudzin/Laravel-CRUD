@extends('students.layout')
@section('content')
 
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8"> 
    <div class="card">
      <div class="card-header">Dane Studenta</div>
      <div class="card-body">
          <div class="card-body">
          <h5 class="card-title">{{ $students->name }}</h5>
          <p class="card-text">Address : {{ $students->address }}</p>
          <p class="card-text">Mobile : {{ $students->mobile }}</p>
          <p class="card-text">Birthdate : {{ $students->birthdate }}</p>
          <p class="card-text">PESEL : {{ $students->pesel }}</p>
      </div>
      </hr>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>
@stop