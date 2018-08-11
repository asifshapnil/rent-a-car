@extends('layouts.mastar')

@section('content')
  <div class="row no-container">
    <div class="col-md-12 pb-5">
      @include('inc.navdark') <br> <br> <br><br>

    </div>
  </div>
  <div class="row offset-md-1 no-container">

  </div>


<div class="row justify-content-center no-container">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header bg-faded">
        <p class="font-weight-bold text-muted text-center display-5">Please Sign Up</p>
      </div>
      <div class="card-body bg-light">
        {!! Form::open(['action' => 'CompanyController@storesignup', 'data-parsley-validate'=>'']) !!}
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
            <a href="#" class="btn btn-primary btn-block font-weight-bold">REGISTER WITH FACEBOOK</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
            <a href="#" class="btn btn-danger btn-block font-weight-bold">REGISTER WITH GOOGLE+</a>
            </div>
        </div>
        <p class="text-center font-weight-bold text-secondary">OR</p>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Email</label> --}}
              <input class="form-control form-control-lg" name="email" required='' placeholder="Your email" type="text">
         </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Email</label> --}}
              <input class="form-control form-control-lg" name="companyname" required='' placeholder="Your Name" type="text">
            </div>
        </div>

        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Password</label> --}}
              <input class="form-control form-control-lg" name="location" required='' placeholder="Your Address" type="text">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Password</label> --}}
              <input class="form-control form-control-lg" name="phoneNumber" required='' placeholder="Your Phone Number" type="text">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {{-- <label>Password</label> --}}
              <input class="form-control form-control-lg" name="password" required='' placeholder="Password" type="password">
            </div>
        </div>

        <div class="col-sm-12 col-md-12">
          <div class="form-group">
              {!! Form::submit('Sign Up', ['class' => 'btn btn-outline-primary btn-block']) !!}
            </div>
        </div>
        {!! Form::close() !!}

      </div>
    </div>
  </div>
</div>
@endsection
