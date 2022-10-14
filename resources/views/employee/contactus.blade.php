@extends('employee.layout')
@section("title_here")
Contact us page
@endsection
@section('content')
<!--cart start here-->
 <div class="container mt-5">
       <button type="button" class="btn btn-lg btn-danger text-white mt-1">Contact with Us<i class="bi bi-person"></i></button>
 
       <hr class="border border-2 border-danger">
       <div class="row">
       <div class="col-md-4">
       <h2 class="text-success mt-5">Our Address<i class="bi bi-person"></i></h2>
       <hr class="border border-2 border-danger">
       <ul class="footer-link">
        <li><a href="#" class="text-dark"><h3>Our office Address</h3></a></li>
        <li><a href="#" class="text-dark">Address: 7QVR+3RX, Jagnath Plot, Rajkot, Gujarat 360001<br>
        <b class="text-success">Hours: Open ⋅</b> Closes 8PM <br>
        <b class="text-success">Suggest an edit · Own this business</a></b></li>
        <li class="mt-4"></li>
        <li>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7383.135609966986!2d70.78944882255448!3d22.294355868158846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cb38e7be28a1%3A0xfca5948b5748b2dd!2sFlipkart%20Office!5e0!3m2!1sen!2sin!4v1665730326995!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </li>
        </ul>
       </div>
       
       <div class="col-md-6 mx-auto">
       <h2 class="text-success mt-5">Contact Form<i class="bi bi-person"></i></h2>
       <hr class="border border-2 border-danger">
       <!-- pass a validations error message -->
       @if($errors->any())
        <div class="alert alert-danger">
         <ul>
           @foreach($errors->all() as $error)
            <li>{{ $error }}</li>    
            @endforeach 
         
         <ul>
        </div>
        @endif
       <!-- pass success message --> 
       @if(Session('success'))
         <div class="alert alert-success">
            <span class="text-dark">Hey! {{ session('success') }}</span>
         </div> 
        @endif

       <form method="post" name="frm">
          <!-- @csrf  this is a token i.e used to secured stored data in database -->
          @csrf
       <div class="form-group mt-2">
            <input type="text" name="name" class="form-control" placeholder="Enter Name *">
          </div>

       
          <div class="form-group mt-2">
            <input type="text" name="email" class="form-control" placeholder="Enter Email *">
          </div>
        
          <div class="form-group mt-2">
            <input type="text" name="phone" class="form-control" placeholder="Enter Phone *">
          </div>

           
          <div class="form-group mt-2">
            <input type="text" name="subject" class="form-control" placeholder="Enter Subject *">
          </div>

          <div class="form-group mt-2">
            <textarea name="message" class="form-control" placeholder="Enter Address *"></textarea>
          </div>
          
          <div class="form-group mt-2">
            <input type="submit" name="send" class="btn btn-lg" id="btn" placeholder="Enter FirstName *"
              value="Send">

            <input type="reset" name="res" class="btn btn-lg btn-danger" placeholder="Enter FirstName *" value="Reset">

          </div>

        </form>
      
</div>
</div>

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