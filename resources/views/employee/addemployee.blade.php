<!-- login form modal -->
<div class="modal fade p-5" id="ademp" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="row">
      <div class="col-md-5 login-sidebar p-5">
      <h2 class="text-white mt-2">Add Employee <i class="bi bi-person"></i> </h2>
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
            <button class="btn btn-primary" type="submit" name="log">Add Employee</button>
            <button class="btn btn-primary" type="reset" name="reset">Reset</button>
          
          </div>
          
        </form>
      </div>
</div>
</div>
</div>
</div>
