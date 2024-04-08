@extends('students.layout')

@section('content')
<style>
  .p-17{
    padding: 17px;
  }
  #studentImage{
    height: 220px;
  }
  #studentInfo{
    border-right: 1px solid #e7e7e7;
  }
  #studentInfo p:nth-child(even){
    font-weight: 500;
  }
  #studentInfo p:nth-child(even){
    margin-bottom: 0;
  }
  #imageDiv {
    padding-left: 25px;
    padding-top: 25px;
  }
  #editLink{
    position: absolute;
    right: 18px;
    top: 55px;
    line-height: 30px;
  }
  #editLink i {
    position: relative;
    padding-right: 5px;
    font-size: 16px;
    top: -1px;
  }
  #editLink span {
    position: relative;
    top: -1px;
  }
  .btn_edit{
    background-color: #df8300;
    color: #ffffff;
    vertical-align: middle;
    line-height: 22px;
  }
  .btn_edit:hover{
    background-color: #c77500;
    color: #ffffff;
  }
</style>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8"> 
    <div class="card box-sh">
      <div class="card-header">
        <h6>Dane Studenta</h6>
      </div>
      <!-- <div class="row text-end">
        <a href="{{ url('/student/' . $students->id . '/edit') }}" title="Edytuj"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edytuj</button></a>
      </div> -->
      <a id="editLink" href="{{ url('/student/' . $students->id . '/edit') }}" title="Edytuj"><button class="btn btn_edit btn-sm"><i class="bi bi-pencil"></i><span>Edytuj</span></button></a>
      <div class="row row-cols-2 p-17">      
          <div id="studentInfo" class="col">
            <h5 class="mb-25">{{ $students->name }}</h5>
            <p>Adres:</p><p>{{ $students->address }}</p>
            <p>Telefon:</p> 
              <p>
                <?php 
                  if( mb_strlen($students->mobile) == 9 ){
                      echo preg_replace("/(\\w{3})/uim", "$1 ", $students->mobile);
                  }else{
                      echo $students->mobile;
                  }
                ?>
              </p>
            <p>Data Urodzenia:</p><p>{{ $students->birthdate }}</p>
            <p>PESEL:</p><p>{{ $students->pesel }}</p>
          </div>
          <div id="imageDiv" class="col d-flex align-items-center">
            @if (file_exists(public_path('storage/images/'.$students->image)) && !is_null($students->image))
              <img id="studentImage" src="{{ asset('storage/images/'.$students->image) }}">
            @else
              <p>brak zdjęcia</p>
            @endif
          </div>
      </div>
      </hr>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>
@stop