@if(session('success'))

  <h5>{{session('success')}}</h5>

@endif

@if(session('error'))
<div class="alert alert-danger">
  <h5>{{session('error')}}</h5>
</div>
@endif
