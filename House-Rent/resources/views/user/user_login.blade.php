@extends('user_home')
@section('content')
<div class="row">
  <div class="col-md-4">

  </div>


  <!-- form start -->
  <div class="col-md-4">
    <h3 class="text-center text-success">Login</h3>

    <form  method="post" action="{{url('/user-login')}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>




      <button type="submit" class="btn btn-primary ml-auto">Submit</button>
    </form>
  </div>

<!-- form end -->


  <div class="col-md-4">

  </div>
</div>
@endsection
