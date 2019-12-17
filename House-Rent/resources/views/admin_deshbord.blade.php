<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--font awesomelink-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <!--custom css-->
    <link rel="stylesheet" href="style.css">
  </head>


  <body>
      <h3 class="text-success text-center bg-success text-light ">WELCOM Admin Pannel</h3>
      <div class="row">
        <div class="col-md-2">
          <ul class="nav-navbar" style="list-style: none">
            <li class="nav-item"><a class="nav-link btn btn-success"  href="#">Deshbord</a> </li>
            <li class="nav-item"><a class="nav-link btn btn-success"  href="{{URL::to('/all-post')}}">All Post</a> </li>
            <li class="nav-item"><a class="nav-link btn btn-success"  href="{{URL::to('/add-post')}}">Add Post</a> </li>
            <li class="nav-item"><a class="nav-link btn btn-success"  href="{{URL::to('/user-post')}}">User post</a> </li>
            <li class="nav-item"><a class="nav-link btn btn-success"  href="{{URL::to('/Logout')}}">Logout</a> </li>
          </ul>
        </div>

        <div class="col-md-10">
          @yield('content')
        </div>
      </div>
  </body>
</html>
