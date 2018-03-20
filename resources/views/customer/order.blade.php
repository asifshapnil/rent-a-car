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
      <p>Make your order for {{$carnumber}}  </p>
  </center>
    </div>
    <div class="logout" style="margin-left:1200px;margin-top:-180px;">
      @if (Auth::guard('customers')->check())
        <a href="/customerlogout" class="btn btn-md btn-info">Log Out</a>
      @endif
    </div>
  </div>




  <div class="row">
    <div class="col-lg-5 col-12" style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Order {{$carnumber}} </h3> <hr>
        @include('inc.messages')
      </div>

      {!! Form::open(['action' => ['OrderController@postorder', $carnumber]]) !!}
      <div class="row">
        <div class="col-lg-4 col-4">
        {!! Form::label('email', 'Email',['class' => 'btn btn-info formbtn']) !!}
      </div>
      <div class="col-lg-6 col-6">
        {!! Form::email('email', Auth::guard('customers')->user()->email, ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('email'))
          <span class="help-block" style="color:red">{!! $errors->first('email') !!}</span> <br>
        @endif
        <div class="row">
          <div class="col-lg-4 col-4">
          {!! Form::label('from', 'From',['class' => 'btn btn-info formbtn']) !!}
        </div>
        <div class="col-lg-6 col-6">
          {!! Form::text('from', $from, ['class' => 'form-control'])!!}
        </div> </div>

        <div class="row">
          <div class="col-lg-4 col-4">
          {!! Form::label('to', 'To',['class' => 'btn btn-info formbtn']) !!}
        </div>
        <div class="col-lg-6 col-6">
          {!! Form::text('to', $to, ['class' => 'form-control'])!!}
        </div> </div>
        <div class="row">
          <div class="col-lg-4 col-4">
          {!! Form::label('date', 'Date',['class' => 'btn btn-info formbtn']) !!}
        </div>
        <div class="col-lg-6 col-6">
          {!! Form::date('date', '', ['class' => 'form-control'])!!}
        </div> </div>
        <div class="row">
          <div class="col-lg-4 col-4">
          {!! Form::label('releasedate', 'ReleaseDate',['class' => 'btn btn-info formbtn']) !!}
        </div>
        <div class="col-lg-6 col-6">
          {!! Form::date('releasedate', '', ['class' => 'form-control'])!!}
        </div> </div>
        <div class="row">
        <div class="col-lg-4 col-4">
        {!! Form::label('pickupAddress', 'PickUp address',['class' => 'btn btn-info formbtn']) !!} </div>
        <div class="col-lg-6 col-6">
        {!! Form::textarea('pickupAddress', '', ['class' => 'form-control'])!!}
      </div> </div>

        @if ($errors->has('pickupAddress'))
          <span class="help-block" style="color:red">{!! $errors->first('pickupAddress') !!}</span> <br>
        @endif

        <div class="row">
        <div class="col-lg-4 col-4">
        {!! Form::label('pickupTime', 'PickUp Time',['class' => 'btn btn-info formbtn']) !!} </div>
        <div class="col-lg-6 col-6">
        {!! Form::text('pickupTime', '', ['class' => 'form-control'])!!}
      </div> </div>
        @if ($errors->has('pickupTime'))
          <span class="help-block" style="color:red">{!! $errors->first('pickupTime') !!}</span> <br>
        @endif


        {!! Form::token()!!}
        <div class="row">
        <div class="col-lg-10 col-10">
        {!! Form::submit('Order Now', ['class' => 'btn btn-block btn-info']) !!}
      </div></div>


      {!! Form::close() !!}

  </div>

</div>
@endsection
