@extends('admin_deshbord')
@section('content')

<div class="bs-example">
   <table class="table table-hover">
       <thead>
           <tr>
               <th>House ID</th>
               <th>Bed Room</th>
               <th>Dinning Room</th>
               <th>Drawing Room</th>
               <th>Bathroom</th>
               <th>Corridor</th>
               <th>Image</th>
               <th>AC/NON AC</th>
               <th>Call</th>
               <th>Address</th>
               <th>Rent</th>
               <th>Action</th>

           </tr>
       </thead>
       <
       <tbody>
         <?php
              $all_user=DB::table('tbl_user_post')->get();
          ?>

           <tr>
             @foreach($all_user as $v_house)
               <td>{{$v_house->user_post_id}}</td>
               <td>{{$v_house->badroom}}</td>
               <td>{{$v_house->daiing}}</td>
               <td>{{$v_house->drowing}}</td>
               <td>{{$v_house->bathroom}}</td>
               <td>{{$v_house->corridor}}</td>
               <td><img height="70" width="80" src="{{$v_house->status}}" alt=""> </td>
               <td>{{$v_house->air}}</td>
               <td>{{$v_house->cell}}</td>
               <td>{{$v_house->address}}</td>
               <td>{{$v_house->rent}}</td>
               <td><a class="btn btn-sm btn-danger" href="{{URL::to('/delete-user-post/'.$v_house->user_post_id)}}">Delete</a></td>


               @endforeach
           </tr>

       </tbody>
   </table>
</div>



@endsection
