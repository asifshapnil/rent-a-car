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
      <p>Your Cars  </p>
  </center>
    </div>
    <div class="logout" style="margin-left:1200px;margin-top:-180px;">
      @if (Auth::guard('customers')->check())
        <a href="/customerlogout" class="btn btn-md btn-info">Log Out</a>
      @endif
    </div>
  </div>

      <div class="row" style="width:1300px;margin:0 auto; padding-bottom:20px; padding-left:15px;">
        <div class="col-lg-3"> <b>Cars</b> </div>
        <div class="col-lg-3"> <b>PerDay Waiting </b></div>
        <div class="col-lg-3"> <b>Per Kilo </b></div>
      </div>
      <hr>
       @foreach ($searched as $searched)
         <div class="row" style="width:1300px;margin:0 auto; padding-bottom:20px;">
         <div class="col-lg-3">
             <img src="{{asset('images/' . $searched->image)}}" alt="" width="100%" height="130px;" style="border-radius:15px;"> <br>
             <center><h6>{{$searched->model}}</h6></center>
           </div>
           <div class="col-lg-3">
             <div class="orderbtn bg-secondary" >
               <b> 800 BDT</b>
             </div>

           </div>
           <div class="col-lg-3">
             <div class="orderbtn bg-secondary" >
               <b> 60 BDT</b>
             </div>

           </div>
         <div class="col-lg-3">
           <a href="/order/{{$searched->number}}/{{$searched->from}}/{{$searched->to}}" class="btn btn-md btn-info orderbtn" >Order Now</a>

         </div>
       </div>

       @endforeach




@endsection
