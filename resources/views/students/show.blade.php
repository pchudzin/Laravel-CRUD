@extends('students.layout')

@section('content')
<style>
  .p-17{
    padding: 17px;
  }
  #studentImage{
    /* height: 220px; */
    max-width: 370px;
    max-height: 220px;
  }
  #studentInfo p:nth-child(even){
    font-weight: 500;
  }
  #studentInfo p:nth-child(even){
    margin-bottom: 0;
  }
  #editLink{
    position: absolute;
    right: 75px;
    top: 55px;
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
  #deleteForm{
    position: absolute;
    right: 18px;
    top: 55px;
  }
  #deleteBtn{
    height: 33px;
  }
  #backArrow {
    position: absolute;
    left: 0;
    right: 0;
    top: 5px;
    width: 20px;
    margin: auto;
    font-size: 21px;
    color: #787878;
  }
  #deletePhoto{
    position: absolute;
    top: 0;
    right: 0;
    color: red;
    font-size: 24px;
    border: none;
    
  }
  #innerImageDiv {
    position: relative;
    margin: 0 auto;
    top: 13px;
  }
  .btn_bg {
    background-color: #ffffff;
  }

  #studentInfo{
    position: relative;
  }
  #studentInfo:after {
    content: '';
    height: 260px;
    width: 1px;
    position: absolute;
    right: 0;
    top: 35px; 
    background-color: #e8e8e8; 
  }
</style>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8"> 
    <div class="card box-sh">
      <div class="card-header">
        <a id="backArrow" href="{{ url('/student') }}"><i class="bi bi-arrow-left"></i></a>
        <h6>Dane Studenta</h6>
      </div>

      <a id="editLink" href="{{ url('/student/' . $students->id . '/edit') }}" title="Edytuj"><button class="btn btn_edit btn-sm"><i class="bi bi-pencil"></i><span>Edytuj</span></button></a>

      <form id="deleteForm" method="POST" action="{{ url('/student' . '/' . $students->id) }}" accept-charset="UTF-8" style="display:inline">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button id="deleteBtn" name="deleteStudent" type="submit" class="btn btn-danger btn-sm" title="Usuń" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Usuń</button>
      </form>

      <div class="row row-cols-2 p-17">      
        <div id="studentInfo" class="col">
          <h5 class="mb-25">{{ $students->name }}</h5>
          <p>Adres:</p>
            <p>{{ $students->address }}</p>
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
          <p>Data Urodzenia:</p>
            <p>{{ date("d.m.Y", strtotime($students->birthdate))  }}</p>
          <p>PESEL:</p>
            <p>{{ $students->pesel }}</p>
        </div>
        <div id="imageDiv" class="col d-flex align-items-center">
          
          @if (file_exists(public_path('public/images/'.$students->image)) && !is_null($students->image))
          <div id="innerImageDiv">
            <form id="deleteImageForm" method="POST" action="{{ url('/student' . '/' . $students->id) }}"  accept-charset="UTF-8" style="display:inline">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <img id="studentImage" src="{{ url('public/images/'.$students->image) }}">
              <button id="deletePhoto" name="deleteImage" type="submit" class="btn_bg" title="Usuń Zdjęcie" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bi bi-trash-fill"></i></button>
            </form>
          </div>
          @else
            <p>brak zdjęcia</p>
            @if (Session::has('image_deleted'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('image_deleted')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
          @endif
        </div>
      </div>
      </hr>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>
@stop