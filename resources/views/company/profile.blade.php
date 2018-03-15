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
      <p>Dashboard</p>
  </center>
    </div>


      <div class="logout" style="margin-left:1200px;margin-top:-180px;">
        @if (Auth::check())
          <a href="/logout" class="btn btn-md btn-info">Log Out</a>
        @endif
      </div>

  </div>
  @include('inc.messages')





  <div class="row">
     <div class="col-lg-6 col-xs-3">

     </div>
     <div class="col-lg-6 col-xs-3">
       <div class="row">
         <div class="col-lg-4">
           <a href="/addnewcar/{{$company->id}}/{{$company->companyname}}" class="btn profilebtn bg-danger" id="">Add new car</a>

         </div>
         <div class="col-lg-4">
           <a href="/addnewlocation/{{$company->id}}/{{$company->companyname}}" class="btn profilebtn bg-secondary" id="">Add new location</a>

         </div>

       </div>
       <div class="row">
         <div class="col-lg-4">
              <a href="/checkorders/{{$company->id}}" class="btn profilebtn bg-primary" id="">Check Orders ({{$orders}})</a>
         </div>
         <div class="col-lg-4">

           <a href="/bookedcars/{{$company->id}}" class="btn profilebtn bg-success" id="">Booked Cars({{$book }})</a>
         </div>

       </div>
       <div class="row">
         <div class="col-lg-4">
           <a href="/addnewcar" class="btn profilebtn bg-info" id="">Add new car</a>

         </div>
         <div class="col-lg-4">
           <a href="/addnewcar" class="btn profilebtn bg-warning" id="">Add new car</a>
         </div>

       </div>

     </div>

  </div>

@endsection
