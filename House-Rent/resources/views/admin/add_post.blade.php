@extends('admin_deshbord')
@section('content')
  <!-- form start -->
  <div class="row">


  <div class="col-md-4">
  </div>

  <div class="col-md-4">
    <h3 class="text-center text-success">Add Post Upload </h3>

    <form method="post" action="{{url('/save-post')}}" enctype="multipart/form-data" >
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Bed Room</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Here.....! " name="badroom">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Dinning Room</label>
        <input type="text" name="daiing" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Drawing Room</label>
        <input type="text" name="drowing" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Bathroom</label>
        <input type="text" name="bathroom" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Corridor</label>
        <input type="text" name="corridor" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>
      <div class="form-group">
        <select class="form-control" name="air">
          <option value="AC">AC</option>
          <option value="NON-AC">NON-AC</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Cell</label>
        <input type="text" name="cell"  class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Image</label>
        <input type="file" name="status" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Rent</label>
        <input type="texWrite Here.....!" name="rent" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>
      <div class="form-group float-right ">
        <input class="btn btn-success " type="submit" name="Upload" value="Upload">
      </div>


    </form>
  </div>

<!-- form end -->


  <div class="col-md-4">

  </div>
    </div>
</div>
@endsection
