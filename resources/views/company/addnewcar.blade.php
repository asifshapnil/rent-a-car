@extends('layouts.mastar')

@section('content')
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/" class="fa fa-home"></a>

    <a href="#" class="fa fa-search"></a>
    <a href="#"class="fa fa-envelope"></a>
    <a href="#" class="fa fa-globe"></a>
    <a href="#" class="fa fa-trash"></a>
  </div>

  <div id="main" class="jumbotron">
    <span style="font-size:30px;cursor:pointer; color:#ffff; width:150px;" onclick="openNav()">&#9776; </span>
    <div class="heading">
      <center>
      <h1>Rent A Car</h1>
      <p>Sign In here
  </p>
  </center>
    </div>
    <center>


    </center>
  </div>




  <div class="row">
    <div class="col-lg-5" style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Add new car here</h3> <hr>
      </div>

      {!! Form::open(['action' => ['CompanyController@postnewcar',  $company->id, $company->companyname],'files'=>true]) !!}
      <div class="row">
        <div class="col-lg-10">
          @include('inc.messages')
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
        {!! Form::label('carname', 'Car Name', ['class' => 'btn btn-info formbtn']) !!}
      </div>
        <div class="col-lg-6">
        {!! Form::text('carname', '', ['class' => 'form-control'])!!}
      </div></div>
        @if ($errors->has('carname'))
          <span class="help-block" style="color:red">{!! $errors->first('carname') !!}</span> <br>
        @endif
        <div class="row">
          <div class="col-lg-4">
        {!! Form::label('carmodel', 'Model',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6">
        {!! Form::text('carmodel', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('carmodel'))
          <span class="help-block" style="color:red">{!! $errors->first('carmodel') !!}</span> <br>
        @endif <br>
        <div class="row">
          <div class="col-lg-4">
        {!! Form::label('carnumber', 'Car Number',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6">
        {!! Form::text('carnumber', '', ['class' => 'form-control'])!!}
      </div> </div>

      @if ($errors->has('carmodel'))
        <span class="help-block" style="color:red">{!! $errors->first('carnumber') !!}</span> <br>
      @endif <br>
      <div class="row">
        <div class="col-lg-4">
      {!! Form::label('cartype', 'Car Type',['class' => 'btn btn-info formbtn']) !!}
    </div>
    <div class="col-lg-6">
      <select class="form-control" name="cartype">
        <option value="car">Car</option>
        <option value="Bus">Bus</option>
        <option value="Micro">Micro</option>

      </select>
    </div> </div>
      <div class="row">
        <div class="col-lg-4">
      {!! Form::label('carimage', 'Upload Picture',['class' => 'btn btn-info formbtn']) !!}
    </div>
    <div class="col-lg-6">
      {!! Form::file('carimage', '', ['class' => 'form-control'])!!}
    </div> </div> <br>
        <div class="row">

          <div class="col-lg-10" style="margin-top:-15px;margin-bottom:15px;">
        {!! Form::submit('Add Car', ['class' => 'btn btn-block btn-info']) !!}
      </div> </div>


      {!! Form::close() !!}


  </div>

</div>
@endsection
