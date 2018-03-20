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
        <a href="/customerlogout" class="fa fa-sign-out">Log Out</a>
      @endif
    </a>
  </div>

  <div id="main" class="jumbotron">
    <span style="font-size:30px;cursor:pointer; color:#ffff; width:150px;" onclick="openNav()">&#9776; </span>
    <div class="heading">
      <center>
      <h1>Rent A Car</h1>
      <p>Your Cars  </p>
  </center>
    </div>
    {{-- <div class="logout" style="margin-left:1200px;margin-top:-180px;">
      @if (Auth::guard('customers')->check())
        <a href="/customerlogout" class="btn btn-md btn-info">Log Out</a>
      @endif
    </div> --}}
  </div>

      <div class="row" style="width:1000px;margin:0 auto; padding-bottom:20px; padding-left:15px;">
        <div class="col-lg-3 col-1"> <b>Cars</b> </div>
        <div class="col-lg-3 col-1"> <b>PerDay Waiting </b></div>
        <div class="col-lg-3 col-1"> <b>Cost </b></div>
        <div class="col-lg-3 col-1">
        {!! Form::open(['action' => 'CustomerController@searchcar', 'method' => 'GET']) !!}
        {!! Form::hidden('from', $from) !!}
        {!! Form::hidden('to', $to) !!}

        {!! Form::submit('show ascending', ['class' => 'btn btn-md btn-danger']) !!}
      </div>

      </div>
      <hr>
       @foreach ($searched as $search)
         <div class="row" style="width:1000px;margin:0 auto; padding-bottom:20px;" class="searchcar">
         <div class="col-lg-3 col-1">
             <img src="{{asset('images/' . $search->image)}}" alt="" width="150" height="50" style="border-radius:15px;" id="carimg"> <br>
             <h6>{{$search->model}}</h6>
           </div>
           <div class="col-lg-3 col-1">
             <div class="orderbtn bg-info" >
               <b> 800 BDT</b>
             </div>

           </div>
           <div class="col-lg-3 col-1">
             <div class="orderbtn bg-info" >
               <b> {{$search->cost}}</b>
             </div>

           </div>
         <div class="col-lg-3 col-1">
           <a href="/order/{{$search->number}}/{{$search->from}}/{{$search->to}}" class="btn btn-md btn-success orderbtn" ><b>Order Now</b></a>

         </div>
       </div>
       <div class="row">
         <div class="col-lg-5 col-5">


         </div>
       </div>

       @endforeach
       <div class="row">
         <div class="col-lg-5 col-5">
           {{-- <center>{{ $searched->links() }}</center> --}}


         </div>
       </div>





@endsection
