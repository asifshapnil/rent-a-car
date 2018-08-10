@extends('layouts.mastar')
@include('inc.nav')

@section('content')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" /> --}}
<link rel="stylesheet" href="{{asset('css/jquery-ui.mins.css')}}">
<script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>

    <header id="home-section">
      <div class="dark-overlay">
        <div class="home-inner">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 d-none d-lg-block">
                <h1 class="display-4">Build <strong>social profiles</strong> and gain revenue and <strong>profits</strong></h1>


                <div class="d-flex flex-row">
                  <div class="p-4 align-self-start">
                    <i class="fa fa-check"></i>
                  </div>
                  <div class="p-4 align-self-end">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, architecto, quaerat. Quis cum eius itaque ipsa magni quam, illo molestias
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card bg-primary text-center card-form">
                  <div class="card-body">
                    <h3>Find Your Car</h3>
                    @if ($error)
                        @if ($availableTypes->isEmpty())
                          <p class="text-danger font-weight-bold">
                            Service of this location is currently unavailable.
                          </p>

                        @else
                          <p class="text-danger font-weight-bold">{{$error}}</p>


                        <p class="text-danger font-weight-bold">
                          Please try
                            @foreach ($availableTypes as $types)
                              {{$types->type}},
                            @endforeach </p>
                         @endif

                    @else
                      <p>Let us know from where will you start and what's your destination !!</p>
                    @endif
                    <form action= "searchcar" method="get" data-parsley-validate="">
                      <div class="form-group">
                        {{-- <input type="text" name="from" id="from" class="form-control form-control-lg" placeholder="from"> --}}
                        <select class="form-control form-control-lg" name="from" required="">
                          <option value="">Start From </option>
                          <option value="">------------------------------------</option>

                          @foreach ($locations as $location)
                            <option value="{{$location->from}}">{{$location->from}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        {{-- <input type="text"  name="to" id="ajaxTo" class="form-control form-control-lg" placeholder="to"> --}}
                        <select class="form-control form-control-lg" name="to" required="">
                          <option value="">End to </option>
                          <option value="">------------------------------------</option>

                          @foreach ($locations as $location)

                            <option value="{{$location->to}}">{{$location->to}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control form-control-lg" name="type" required="">
                          <option value="car">Car</option>
                          <option value="micro">Micro</option>
                          <option value="bike">Bike</option>
                          <option value="mini-bus">Mini-bus</option>

                        </select>
                      </div>

                      <input type="submit" class="btn btn-outline-light btn-block">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>








{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> --}}

@endsection


<script type="text/javascript">
$(window).scroll(function() {
if($(this).scrollTop() > 40)  /*height in pixels when the navbar becomes navbar-default1*/
{
   $('nav').addClass('nav1').addClass('bg-dark');
} else {
   $('nav').removeClass('nav1').removeClass('bg-dark');
}
});
</script>
