@extends('employee.layout')
 @section("title_here")
 Create account with us
 @endsection
 @section('content')
  <!--content start here-->
  <div class="container mt-5">
    <a href="register.html"><button type="button" class="btn btn-lg text-white mt-1" id="btn">Create Account <i
          class="bi bi-person"></i></button></a>
    <h2 class="text-success mt-5 line1">Create Your Account <i class="bi bi-person"></i></h2>
   
    <div class="row">
      <div class="col-md-5  line">
        <img src="{{ asset('emp/images/create.gif') }}" class="img-fluid" style="width: 85%">
      </div>

      <div class="col-md-7">
      
        <form method="post" name="frm" id="frm" enctype="multipart/form-data" onsubmit="return valid(this.value)">
          <div class="form-group mt-2">
            <input type="text" name="fname" class="form-control" placeholder="Enter FirstName *">
          </div>
          <div id="error"></div>
          <div class="form-group mt-2">
            <input type="text" name="lname" class="form-control" placeholder="Enter LastName *">
          </div>
          <div class="form-group mt-2">
            <input type="text" name="email" class="form-control" placeholder="Enter Email *">
          </div>
          <div class="form-group mt-2">
            <input type="password" name="pass" class="form-control" placeholder="Enter Password *">
          </div>

          <div class="form-group mt-2">
            <input type="password" name="cpass" class="form-control" placeholder="Enter confirm Password *">
          </div>
          <div class="form-group mt-2">
          <label class="text-success">select D.O.B</label>
            <input type="date" name="dob" class="form-control" placeholder="Enter DOB *">
          </div>
          <div class="form-group mt-2">
            <label class="text-success">Upload images</label>
            <input type="file" name="img" class="form-control" placeholder="Upload image *">
          </div>

          <div class="form-group mt-2">
            <label class="text-success">Select Gender</label>
            male<input type="radio" name="gender" value="male">
            female<input type="radio" name="gender" value="female">
            other<input type="radio" name="gender" value="other">
          
          </div>
          <div class="form-group mt-2">
            <input type="text" name="mobile" class="form-control" placeholder="Enter Phone *">
          </div>

          <div class="form-group mt-2">
            <textarea name="address" class="form-control" placeholder="Enter Address *"></textarea>
          </div>
          
          <div class="form-group mt-2">
            <select name="state" class="form-control" placeholder="select state *">
              <option value="">-select state-</option>
            </select>
          </div>
          <div class="form-group mt-2">
            <select name="city" class="form-control" placeholder="select city *">
              <option value="">-select city-</option>
            </select>
</div>
          <div class="form-group mt-2">
            <input type="submit" name="reg" class="btn btn-lg" id="btn" placeholder="Enter FirstName *"
              value="Register">

            <input type="reset" name="res" class="btn btn-lg btn-danger" placeholder="Enter FirstName *" value="Reset">

          </div>
          <div class="form-group mt-2">
            <b>Already have an account ? <a href="" data-bs-toggle="modal" data-bs-target="#log">Login here</a></b>
          </div>
        </form>
      </div>
    </div>
  </div>



<!-- login form modal -->
<div class="modal fade p-5" id="log" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="row">
      <div class="col-md-5 login-sidebar p-5">
      <h2 class="text-dark mt-2">Login Form <i class="bi bi-person"></i> </h2>
      <p>Get access to your Orders, Wishlist and Recommendations</p>

      <p><img src="https://static-assets-web.flixcart.com/fk-p-linchpin-web/fk-cp-zion/img/login_img_c4a81e.png" class="img-fluid"></p>
      </div>
      <div class="col-md-7 p-5">
     <button class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal">&times;</button>
      

        <form method="post" class="row g-3 needs-validation" novalidate>
        <input type="hidden" name="fname" class="form-control" id="validationCustom03" required placeholder="Enter firstname *">
          <div class="col-md-12">

            <input type="email" name="email" class="form-control" id="validationCustom03" required placeholder="Enter Email *">
            <div class="invalid-feedback">
              Please provide a email Address.
            </div>
          </div>
          <div class="col-md-12">

            <input type="password" class="form-control" id="validationCustom03" name="pass" required placeholder="Enter Password *">
            <div class="invalid-feedback">
              Please provide a Password.
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="log">Login</button>
            <b><a href="">Forget Password</a></b>
          </div>
          <div class="form-group mt-2">
            <b>Don't have an account ? <a href="register-with-us">Register here</a></b>
          </div>
        </form>
      </div>
</div>
</div>
</div>
</div>


@endsection