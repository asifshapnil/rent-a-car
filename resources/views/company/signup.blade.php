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
      <p>Sign Up here
  </p>
  </center>
    </div>
    <center>


    </center>
  </div>




  <div class="row formmargin">
    <div class="col-lg-5 col-12 " style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Get Signedup here</h3> <hr>
      </div>

      {!! Form::open(['action' => 'CompanyController@storesignup']) !!}
      <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('email', 'Email',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6 col-7">
        {!! Form::email('email', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('email'))
          <span class="help-block" style="color:red">{!! $errors->first('email') !!}</span> <br>
        @endif
        <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('companyname', 'Company Name',['class' => 'btn btn-info formbtn']) !!} </div>
        <div class="col-lg-6 col-7">
        {!! Form::text('companyname', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('companyname'))
          <span class="help-block" style="color:red">{!! $errors->first('employee_id') !!}</span> <br>
        @endif
        <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('location', 'Location',['class' => 'btn btn-info formbtn']) !!} </div>
        <div class="col-lg-6 col-7">
        {!! Form::text('location', '', ['class' => 'form-control'])!!} </div> </div>
        @if ($errors->has('location'))
          <span class="help-block" style="color:red">{!! $errors->first('username') !!}</span> <br>
        @endif
        <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('password', 'Password',['class' => 'btn btn-info formbtn']) !!} </div>
        <div class="col-lg-6 col-7">
        {!! Form::text('password', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('password'))
          <span class="help-block" style="color:red">{!! $errors->first('password') !!}</span> <br>
        @endif <br>

        {!! Form::token()!!}
        <div class="row">
        <div class="col-lg-10 col-12">
        {!! Form::submit('Sign Up', ['class' => 'btn btn-block btn-info']) !!}
      </div></div>


      {!! Form::close() !!}

  </div>

</div>
@endsection
