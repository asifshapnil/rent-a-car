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





  <div class="row formmargin">
    <div class="col-lg-5 col-12 "  style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Get Signed in here</h3> <hr>
      </div>

      {!! Form::open(['action' => 'CompanyController@getsignin']) !!}
      <div class="row">
        <div class="col-lg-4 col-5">
        {!! Form::label('email', 'Email', ['class' => 'btn btn-info formbtn']) !!}
      </div>
        <div class="col-lg-6 col-7">
        {!! Form::email('email', '', ['class' => 'form-control'])!!}
      </div></div>
        @if ($errors->has('email'))
          <span class="help-block" style="color:red">{!! $errors->first('email') !!}</span> <br>
        @endif
        <div class="row">
          <div class="col-lg-4 col-5">
        {!! Form::label('password', 'Password',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6 col-7">
        {!! Form::text('password', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('password'))
          <span class="help-block" style="color:red">{!! $errors->first('password') !!}</span> <br>
        @endif <br>
        <div class="row">
          <div class="col-lg-6 col-7">

          </div>
          <div class="col-lg-4 col-5" style="margin-top:-15px;margin-bottom:15px;">
        {!! Form::submit('Sign in', ['class' => 'btn btn-block btn-info']) !!}
      </div> </div>
      <div class="row" style="margin-bottom:15px">
        <div class="col-lg-10 col-12">
        <a href="#" class="btn btn-block btn-info">not registered??</a>
        </div>
   </div>
   <div class="row">
     <div class="col-lg-10 col-12">
     <a href="/companysignup" class="btn btn-block btn-info">get registered here !!</a>
     </div>
</div>


      {!! Form::close() !!}


  </div>

</div>
@endsection
