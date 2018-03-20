@extends('layouts.mastar')

@section('content')
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/" class="fa fa-home"></a>

    <a href="#" class="fa fa-search"></a>
    <a href="#"class="fa fa-envelope"></a>
    <a href="#" class="fa fa-globe"></a>
    <a href="#" class="fa fa-trash"></a>
    <a class="logout" style="margin-left:1200px;margin-top:-180px;">
      @if (Auth::guard('customers')->check())
        <a href="/customerlogout" class="btn btn-md btn-info">fa fa-sighn-out</a>
      @endif
    </a>
  </div>

  <div id="main" class="jumbotron">
    <span style="font-size:30px;cursor:pointer; color:#ccfced" onclick="openNav()">&#9776; </span>
    <div class="heading">
      <center>
      <h1>Rent A Car</h1>
      <p>Get your perfect choice at door
  Be safe, Save money
  </p>
  </center>
    </div>
    <center>
      {!! Form::open(['action' => 'CustomerController@searchcar', 'method' => 'GET']) !!}
      {!! Form::text('from', '', ['class' => 'searchinput btn btn-md', 'placeholder'=>'From']) !!}
      {!! Form::text('to', '', ['class' => 'searchinput btn btn-md', 'placeholder'=>'To']) !!}

      {!! Form::submit('Search', ['class' => 'searchinput btn btn-md']) !!}


      {{-- <form class="" action="/searchcar" method="">
        <input type="text" name="" value="" class="searchinput btn btn-md" placeholder="From">
        <input type="text" name="" value="" class="searchinput btn btn-md" placeholder="To">
        <input type="date" name="" value="Date" class="searchinput btn btn-md">
        <input type="submit" name="" value="Search" class="btn btn-md btn-secondary search">

      </form> --}}
</center>
<div class="logout" style="margin-left:1200px;margin-top:-180px;">
  @if (Auth::guard('customers')->check())
    <a href="/customerlogout" class="btn btn-md btn-info">Log Out</a>
  @endif
</div>
</div>

  <div class="container">
<div class="row">
  <div class="col-lg-6 col-5">
<div class="card img-fluid" style="width:500px">
  <img class="card-img-top" src="https://rentalcarsuae.com/wp-content/uploads/2017/09/Top-6-Suggestions-When-Rent-A-Car-500x306.jpg" alt="Card image" style="width:100%">
  <div class="card-img-overlay">
    <div class="cardbtn1">
      Top rated
    </div><br>
    <div class="cardbtn2">
      Search For Cars
    </div>
  </div>
</div>
</div>
<div class="col-lg-6 col-5">
  <div class="card img-fluid" style="width:500px">
    <img class="card-img-top" src="https://rentalcarsuae.com/wp-content/uploads/2017/09/Top-6-Suggestions-When-Rent-A-Car-500x306.jpg" alt="Card image" style="width:100%">
    <div class="card-img-overlay">
      <div class="cardbtn1">
        Top rated
      </div><br>
      <div class="cardbtn2">
        Search For Cars
      </div>
    </div>
  </div>
</div>

</div>
  </div>

@endsection
