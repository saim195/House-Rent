@extends('user_home')
@section('content')

<div class="bs-example">
   <table class="table table-hover">
       <thead>
           <tr>
               <th>Bed Room</th>
               <th>Dinning Room</th>
               <th>Drawing Room</th>
               <th>Bathroom</th>
               <th>Corridor</th>
               <th>AC/NON AC</th>
               <th>Image</th>
               <th>Action</th>

           </tr>
       </thead>
       <
       <tbody>
         <?php
              $all_house_post=DB::table('tbl_user_post')->get();
          ?>


             @foreach($all_house_post as $v_house)
             <tr>
               <td>{{$v_house->badroom}}</td>
               <td>{{$v_house->daiing}}</td>
               <td>{{$v_house->drowing}}</td>
               <td>{{$v_house->bathroom}}</td>
               <td>{{$v_house->corridor}}</td>
               <td>{{$v_house->air}}</td>
               <td><img height="70" width="80" src="{{$v_house->status}}" alt=""> </td>


               <td><a class="btn btn-sm btn-info" href="{{URL::to('/details_post_show/'.$v_house->user_post_id)}}">Details</a></td>

</tr>
               @endforeach


       </tbody>
   </table>
</div>



@endsection
