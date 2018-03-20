@extends('layouts.mastar')

@section('content')
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/" class="fa fa-home"></a>

    <a href="#" class="fa fa-search"></a>
    <a href="#"class="fa fa-envelope"></a>
    <a href="#" class="fa fa-globe"></a>
    <a href="#" class="fa fa-trash"></a>
    <a class="logout">
      @if (Auth::guard('customers')->check())
        <a href="/customerlogout" class="fa fa-sign-out"></a>
      @endif
    </a>
  </div>

  <div id="main" class="jumbotron col-12">
    <span style="font-size:30px;cursor:pointer; color:#ffff; width:150px;" onclick="openNav()">&#9776; </span>
    <div class="heading">
      <center>
      <h1>Rent A Car</h1>
      <p>Get your perfect choice at door
  Be safe, Save money
  </p>
  </center>
    </div>


    <center>
      <div class="home">
      <a href="/oneway" class="btn btn-md  homebtn1">One way</a>
      <a href="/daybooking" class="btn btn-md  homebtn2">Day Booking</a>
    </div>
    </center>
    {{-- <div class="logout" style="margin-left:1200px;margin-top:-180px;">
      @if (Auth::guard('customers')->check())
        <a href="/customerlogout" class="btn btn-md btn-info">Log Out</a>
      @endif
    </div> --}}

  </div>


    <div class="row iconrow" >

      <div class="col-lg-4 col-4 icons">
          <center>
            <a href="#services">
            <img src="http://akshayteck.com/site/images/services1.png" alt="" width="150" height="150">
            <p id="iconhead"> <b> Services </b> </p>
            <p id="iconp">  Know about our services and features in details.</p>
          </a>
        </center>
      </div>
      <div class="col-lg-4 col-4 icons">
          <center>
            <a href="#guide">
            <img src="http://akshayteck.com/site/images/services1.png" alt="" width="150" height="150">
            <p id="iconhead"> <b> User Guide </b> </p>
            <p id="iconp">  Get to know how to use the application. </p>
          </a>
        </center>
      </div>
      <div class="col-lg-4 col-4 icons">
          <center>
            <img src="http://akshayteck.com/site/images/services1.png" alt="" width="150" height="150">
            <p id="iconhead"> <b> User Profile </b> </p>
            <p id="iconp">  Get to know how to use the application. </p>
        </center>
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
<div class="col-lg-6 col-5" id="cardmargin">
  <a href="/companysign"><div class="card img-fluid" style="width:500px">
    <img class="card-img-top" src="https://rentalcarsuae.com/wp-content/uploads/2017/09/Top-6-Suggestions-When-Rent-A-Car-500x306.jpg" alt="Card image" style="width:100%">
    <div class="card-img-overlay">
      <div class="cardbtn1">
        Top rated
      </div><br>
      <div class="cardbtn2">
        Search For Cars
      </div>
    </div>
  </div></a>
</div>

</div>
  </div>

<div class="container">
  <div class="row" id="servicesrow">
    <div class="col-lg-5 col-5" id="servicesimg">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSjlkCgkS4jn62jk7fI70XdmLPhh7srZKgBoKIbJsk32b4MO9C" alt="">
    </div>
    <div class="col-lg-7 col-7" id="services">
      <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <center>
      <p> <b> Services </b> </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </center>
  </div>
  <div class="carousel-item ">
    <center>
      <p> <b> Services </b> </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </center>
  </div>
  <div class="carousel-item ">
    <center>
      <p id=""> <b> Services </b> </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </center>
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>
    </div>
  </div>
</div>





  {{-- <div class="social">

    <div id="mySidenav" class="sidenav">
      <a href="#" id="about">About</a>
      <a href="#" id="blog">Blog</a>
      <a href="#" id="projects">Projects</a>
      <a href="#" id="contact">Contact</a>
    </div>
  </div> --}}

@endsection
