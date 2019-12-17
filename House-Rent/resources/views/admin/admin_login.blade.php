
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

<div class="row">
  <div class="col-md-3">

  </div>


  <!-- form start -->
  <div class="col-md-3 mt-5">


    <form method="post" action="{{url('/admin-login')}}" class="ml-5 " >
      @csrf
          <legend class="text-center text-success" >Admin Login</legend>
      <div class="form-group">
        <label for="exampleInputPassword1">E-mail</label>
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


  <div class="col-md-3">

  </div>
</div>

</body>
</html>
