<div class="login-page">
  <div class="container d-flex align-items-center">
    <div class="form-holder has-shadow">
      <div class="row">
        <?php
            if(isset($this->data['msg-Error']) && !empty($this->data['msg-Error'])):
                echo "<div class='alert alert-denger'>".$this->data['msg-Error']."</div>";
            endif;
        ?>
        <!-- Form Panel    -->
        <div class="col-lg-6 ">
          <div class="form d-flex align-items-center">
            <div class="content">
            <form method="post" class="form-validate" action="adminLogin/authlogin">
                <input type="hidden" name="Login" >
                <div class="form-group">
                  <input id="login-username" type="text" name="email" required data-msg="Please enter your username" class="form-control input-material @error('username') is-invalid @enderror">
                  <label for="login-username" class="label-material">User Name</label>
                 
                </div>
                <div class="form-group">
                  <input id="login-password" type="password" name="password" required data-msg="Please enter your password " class="form-control input-material @error('password') is-invalid @enderror">
                  <label for="login-password" class="label-material">Password</label>
                 
                </div>
                <input type="submit" id="login" class="btn btn-primary" value="Login">
            </div>

          </div>

        </div>
         <!-- Logo & Information Panel-->
         <div class="col-lg-6">
          <div class="info d-flex align-items-center">
            <div class="content">
              <div class="logo">
                  <h1>Mashro3 Elt5arog☻◘♥</h1>
                  <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


