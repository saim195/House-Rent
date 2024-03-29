<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!--bootstrap-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--font awesomelink-->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <!--custom css-->
  <link rel="stylesheet" href="style.css">

   <title>Welcome to House Rent</title>
</head>
<body>
   <!--navbar-->
   <nav class="navbar navbar-light navbar-expand-md" uk-sticky="top: 500; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up" style="background-color: #7FB3D5;">
  <div class="container">
    <a class="navbar-brand" href="index.html">House Rent</a>
    <button  class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div id="navbarNav"class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active"><a class="nav-link" href="{{URL::to('/')}}">Home</a></li>
        <li class="nav-item active"><a class="nav-link" href="{{URL::to('/login')}}">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="{{URL::to('/registration')}}">Sign Up</a></li>
        <li class="nav-item"><a class="nav-link" href="{{URL::to('/post-upload')}}">Upload Poperty</a></li>
        <li class="nav-item"><a class="nav-link" href="{{URL::to('/available-house')}}">Available House</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
       <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
    </ul>
  </div>
    </div>
</nav>


<!--- mairn contain start ---->

<section>
<div class="">
  @yield('content');
</div>
</section>

<!--- mairn contain start ---->













<!-- footer-->
 <div class="footer-area navbar-light" style="background-color: #2C3E50;color: white;">
   <div class="container">
     <div class="row">
       <div class="col-md-4">
         <div class="footer-wid">
           <h3>House Rent</h3>
           <p>House Rent Management System is an online platform focused on to give and take rent in Urban & Sub-Urban area for people in Bangladesh.</p>
         </div>
         <div class="social-links">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
          </div>
       </div>
       <div class="col-md-4"  >
         <div class="footer-wid">
         <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Sign Up</a></li>
          <li><a href="#">Upload Property</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
          </ul>
       </div>
       </div>
       <div class="col-md-3">
         <div class="footer-wid">
         <p class="contact-info"><i class="fa fa-map-marker"></i>Asulia, Savar <br> Dhaka, Bangladesh</p>
          <p class="contact-info"><i class="fa fa-envelope"></i><a href="mailto:utsho9826@gmail.com">utsho9826@gmail.com</a></p>
          <p class="contact-info"><i class="fa fa-phone"></i><a href="tell:8801682124921">+8801682124921</a></p>
          </div>
       </div>
     </div>
   </div>
 </div>
 <div class="copyright-area" style="background-color: #2C3E50;color: white;">
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <p>Copyright © 2019 All right reserved by<a href="about.html"> HOUSE RENT</a> </p>
       </div>
       <div class="col-md-6 text-right">
         <ul>
           <li><a href="#">Privacy Policy</a></li>
           <li><a href="#">Terms of conditions</a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>



  <!--bootstrap js-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
