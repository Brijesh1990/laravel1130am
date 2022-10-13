 @extends('employee.layout')
 @section("title_here")
 Home page
 @endsection
 @section('content')
 <!--cart start here-->
  <div class="container mt-5">
        <button type="button" class="btn btn-lg btn-danger text-white mt-1" data-bs-toggle="modal" data-bs-target="#ademp">Add Employee here<i class="bi bi-person"></i></button>
        <h2 class="text-success mt-5">View employee details<i class="bi bi-person"></i></h2>
        <hr class="border border-2 border-danger">
        <table class="table table-bordered table-stripped">
            <tr class="text-center">
                <th>id</th>
                <th>Firtname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            <tr class="text-center">
                <td>101</td>
                <td>brijesh</td>
                <td>pandey</td>
                <td>pandey</td>
                <td>pandey</td>
                <td>pandey</td>
                <td>pandey</td>
                <td><a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill text-white"></i></a></td>

            </tr>
            
        </tr>
        </table>
    </div>
    <!-- add employee modal load here -->
    <!-- login form modal -->
<div class="modal fade p-5" id="ademp" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="row">
      <div class="col-md-5 login-sidebar p-5">
      <h2 class="text-dark mt-2">Add Employee <i class="bi bi-person"></i> </h2>
      <p>Get access to your Orders, Wishlist and Recommendations</p>
      <p><img src="https://static-assets-web.flixcart.com/fk-p-linchpin-web/fk-cp-zion/img/login_img_c4a81e.png" class="img-fluid"></p>
      </div>
      <div class="col-md-7 p-5">
     <button
            class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal">&times;</button>
        <form method="post" class="row g-3 needs-validation" novalidate>
       

        <div class="col-md-12">
            <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname *">
          </div>

          <div class="col-md-12">
            <input type="text" name="lastname" class="form-control" placeholder="Enter Lastname *">
          </div>

        <div class="col-md-12">
            <input type="text" name="email" class="form-control" placeholder="Enter Email *">
          </div>
          
          <div class="col-md-12">
            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile *">
          </div>
          <div class="col-md-12">
            Male <input type="radio" name="gender" value="male">
            Female <input type="radio" name="gender" value="female">
          </div>
          <div class="col-md-12">
            <textarea name="address" class="form-control" placeholder="Enter Mobile *"></textarea>
          </div>

          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="log">Add Employee</button>
            <button class="btn btn-primary" type="reset" name="reset">Reset</button>
          
          </div>
          
        </form>
      </div>
</div>
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
     <button
            class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal">&times;</button>
      

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