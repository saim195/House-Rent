@extends('user_home')
@section('content')

<h4 class="text-center text-light bg-success" >House Rent</h4>
<div class="row">
  <div class="col-md-3">

  </div>
  <div class="col-md-8">
      <img height="500px;" width="700px;" src="{{asset($id_post_show->status)}}" alt="">
  </div>
  <div class="col-md-1">

  </div>
</div>


<table style="margin-left: 420px;">
  <thead>
    <legend style="margin-left: 320px;">House Details</legend>

    <tr>
      <th>House ID:</th>
      <td>{{$id_post_show->user_post_id}}</td>
    </tr>
    <tr>
        <th>House Owner Call:</th>
        <td>{{$id_post_show->cell}}</td>
    </tr>
    <tr>
      <th>House Address:</th>
      <td>{{$id_post_show->address}}</td>
    </tr>
    <tr>
      <th>House Rent:</th>
      <td>{{$id_post_show->rent}}</td>
    </tr>




  </thead>
  <tbody>




  </tbody>
</table>
@endsection
