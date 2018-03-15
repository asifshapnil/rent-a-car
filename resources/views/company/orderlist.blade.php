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

  <center>
    <div class="row">
      <div class="col-lg-10" style="width:1200px; margin:0 auto;">
        @include('inc.messages')
        <table class="table table-responsive">
          <tr class="table-success">
            <th>Car Number</th> <th>Customer's email</th>
            <th>pickup Date</th> <th>Release Date</th>
            <th>Pickup Address</th> <th>Pickup Time</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
          @foreach ($orders as $orders)
            <tr class="table-info">
              <td>{{$orders->carnumber}}</td> <td>{{$orders->email}}</td>
              <td>{{$orders->pickupdate}}</td> <td>{{$orders->releasedate}}</td>
              <td>{{$orders->pickupAddress}}</td> <td>{{$orders->pickupTime}}</td>
              <td> <a href="/bookorder/{{$orders->carnumber}}/{{$orders->email}}/{{$orders->pickupdate}}/{{$orders->releasedate}}" class="btn btn-sm btn-success">Confirm Order</a> </td>
              <td> <a href="/cancelorder/{{$orders->carnumber}}" class="btn btn-sm btn-danger">Cancel Order</a> </td>

            </tr>
          @endforeach
        </table>
      </div>

    </div>
  </center>





@endsection
