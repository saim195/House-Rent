@extends('user_home')
@section('content')

<div class="row">
  <div class="col-md-4">

  </div>


  <!-- form start -->
  <div class="col-md-4">
    <h3 class="text-center text-success">Registration </h3>

    <form method="post" action="{{url('/save-registration')}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Fisrt Name</label>
        <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter " name="badroom">

      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Last Name</label>
        <input type="text" name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter " name="badroom">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">phone</label>
        <input type="number" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

<!-- form end -->


  <div class="col-md-4">

  </div>
</div>

@endsection
