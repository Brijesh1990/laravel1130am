<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Add employee management systems</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- css file load here -->
    <link rel="stylesheet" href="{{ asset('emp/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('emp/css/bootstrap-grid.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('emp/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- js file load here -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="{{ asset('emp/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('emp/js/bootstrap.bundle.js') }}"></script>    
</head>
<body>
<!-- navbar start here -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Employee Management systems</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Add Gallery</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account <i class="bi bi-person"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#log">SignIn</a></li>
            <li><a class="dropdown-item" href="/register-with-us">SignUp</a></li>
         
          </ul>
        </li>
      </ul>    
    </div>
  </div>
</nav>


<!-- content start here -->
@yield('content')
<!-- content end here -->
  <!-- footer -->
  <div class="container-fluid footer p-4 mt-5">
   <div class="row">
    <div class="col-md-3">
      <ul class="footer-link">
        <li><a href="#"><h3>Aboutus</h3></a></li>
        <li><a href="#">Electronics</a></li>
        <li><a href="#">Home appliences</a></li>
        <li><a href="#">Furnitures</a></li>
        <li><a href="#">Offers</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="footer-link">
        <li><a href="#"><h3>Contactus</h3></a></li>
        <li><a href="#">Electronics</a></li>
        <li><a href="#">Home appliences</a></li>
        <li><a href="#">Furnitures</a></li>
        <li><a href="#">Offers</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="footer-link">
        <li><a href="#"><h3>Our brand</h3></a></li>
        <li><a href="#">Electronics</a></li>
        <li><a href="#">Home appliences</a></li>
        <li><a href="#">Furnitures</a></li>
        <li><a href="#">Offers</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="footer-link">
        <li><a href="#"><h3>Our office Address</h3></a></li>
        <li><a href="#">Address: 7QVR+3RX, Jagnath Plot, Rajkot, Gujarat 360001<br>
        <b class="text-success">Hours: Open ⋅</b> Closes 8PM <br>
        <b class="text-success">Suggest an edit · Own this business</a></b></li>
        </ul>
    </div>
   </div>
   <hr class="line1">
   <p class="text-center text-white">copyright@2012-2022 All right reserved company</p> 
  </div>


</body>
</html>