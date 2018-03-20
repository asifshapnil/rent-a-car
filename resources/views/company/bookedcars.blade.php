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
      @if (Auth::check())
        <a href="/logout" class="fa fa-sign-out"></a>
      @endif
    </a>
  </div>

  <div id="main" class="jumbotron">
    <span style="font-size:30px;cursor:pointer; color:#ffff; width:150px;" onclick="openNav()">&#9776; </span>
    <div class="path">
    <a href="/addnewcar/{{$companyid}}/{{auth()->user()->companyname}}" class="" id="">Add new car /</a>

    <a href="/addnewlocation/{{$companyid}}/{{auth()->user()->companyname}}" class="" id="">Add new locations /</a>

    <a href="/checkorders/{{$companyid}}" class="" id="">Ordder lists /</a>

    <a href="/bookedcars/{{$companyid}}" class="" id="">Booked Cars</a>
  </div>
  
    <div class="heading">
      <center>
      <h1>Rent A Car</h1>
      <p>Dashboard</p>
  </center>
    </div>


      {{-- <div class="logout" style="margin-left:1200px;margin-top:-180px;">
        @if (Auth::check())
          <a href="/logout" class="btn btn-md btn-info">Log Out</a>
        @endif
      </div> --}}

  </div>

  <center>
    <div class="row">
      <div class="col-lg-6 col-12" style="width:900px; margin:0 auto;">
        @include('inc.messages')
        <table class="table table-responsive">
          <tr class="table-success">
            <th>Car Number</th> <th>Customer's email</th>
            <th>pickup Date</th> <th>Release Date</th>

            <th>Action</th>
          </tr>
          @foreach ($bookedcars as $bookedcars)
            <tr class="table-info">
              <td>{{$bookedcars->carnumber}}</td> <td>{{$bookedcars->email}}</td>
              <td>{{$bookedcars->dateFrom}}</td> <td>{{$bookedcars->dateTo}}</td>

              <td> <a href="/release/{{$bookedcars->carnumber}}" class="btn btn-sm btn-danger">Release</a> </td>

            </tr>
          @endforeach
        </table>
      </div>

    </div>
  </center>





@endsection
