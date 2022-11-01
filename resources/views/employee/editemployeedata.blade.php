@extends('employee.layout')
@section("title_here")
edit employee data
@endsection
@section('content')
<!--cart start here-->
    <div class="container">
    <div class="row">
      <div class="col-md-5 login-sidebar p-5">
      <h2 class="text-dark mt-2">Edit Employee <i class="bi bi-person"></i> </h2>
      <p>Get access to your Orders, Wishlist and Recommendations</p>
      <p><img src="https://static-assets-web.flixcart.com/fk-p-linchpin-web/fk-cp-zion/img/login_img_c4a81e.png" class="img-fluid"></p>
      </div>
      <div class="col-md-7 p-5">
     <button
            class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal">&times;</button>

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
      

        <form method="post" class="row g-3 needs-validation" novalidate>
        @csrf

        <div class="col-md-12">
            <input type="text" name="firstname" value="{{ $ed->firstname}}" class="form-control" placeholder="Enter Firstname *">
          </div>

          <div class="col-md-12">
            <input type="text" name="lastname" value="{{ $ed->lastname}}" class="form-control" placeholder="Enter Lastname *">
          </div>

        <div class="col-md-12">
            <input type="text" name="email" class="form-control" value="{{ $ed->email}}" placeholder="Enter Email *">
          </div>
          
          <div class="col-md-12">
            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile *" value="{{ $ed->mobile}}">
          </div>
          <div class="col-md-12">
            Male <input type="radio" name="gender" value="male" {{ $ed->gender == 'male' ? 'checked' : ''}}>
            Female <input type="radio" name="gender" value="female" {{ $ed->gender == 'female' ? 'checked' : ''}}>
          </div>
          <div class="col-md-12">
            <textarea name="address" class="form-control" placeholder="Enter Address *">{{ $ed->address}}</textarea>
          </div>

          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="upd">Update Employee</button>
            <button class="btn btn-primary" type="reset" name="reset">Reset</button>
          
          </div>
          
        </form>
      </div>
</div>
</div>
@endsection