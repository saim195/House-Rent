@extends('admin_deshbord')
@section('content')
  <!-- form start -->
  <div class="row">


  <div class="col-md-4">
  </div>

  <div class="col-md-4">
    <h3 class="text-center text-success">Edit Post  </h3>

    <form method="post" action="{{url('/edit-post/'.$all_post_show->post_id)}}" enctype="multipart/form-data" >
      @csrf



      <div class="form-group">
        <label for="exampleInputEmail1">Bed Room</label>
        <input value="{{$all_post_show->badroom}}" type="text" class="form-control" id="exampleInputEmail1"   placeholder="Write Here.....! " name="badroom">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Dinning Room</label>
        <input value="{{$all_post_show->daiing}}" type="text" name="daiing" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Drawing Room</label>
        <input value="{{$all_post_show->drowing}}" type="text" name="drowing" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Bathroom</label>
        <input value="{{$all_post_show->bathroom}}" type="text" name="bathroom" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Corridor</label>
        <input value="{{$all_post_show->corridor}}" type="text" name="corridor" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input value="{{$all_post_show->address}}" type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>
      <div class="form-group">
        <select class="form-control" name="air">
          <option value="AC">AC</option>
          <option value="NON-AC">NON-AC</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Cell</label>
        <input value="{{$all_post_show->cell}}" type="text" name="cell"  class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Rent</label>
        <input value="{{$all_post_show->rent}}" type="texWrite Here.....!" name="rent" class="form-control" id="exampleInputPassword1" placeholder="Write Here.....!">
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
