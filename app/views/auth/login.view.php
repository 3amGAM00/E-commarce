<?php use App\Process\Template ;?>
<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?php Template::asset('img/login.jpg')?>" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="main_btn" href="/E-commarce-main/register/home">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3><a href="/ecommarce/public/index/home">LOGO</a></h3>
						   <form method="POST" class="login_form row" action="/E-commarce-main/login/authlogin">
                    
                           
                       
                       
                        <div class="form-group col-md-12">
                            <!--<label for="identify" placeholder="identify"class="col-md-4 col-form-label text-md-right">{{ __('identify') }}</label>-->
                                <input id="email" placeholder="E-mail" type="text" class="form-control " name="email" value="" required autocomplete="email" autofocus>
                      
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                         
                        </div>

                        <div class="form-group col-md-12">
                            <!--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->


                                <input id="password" placeholder="password" type="password" class="form-control " name="password" required autocomplete="current-password">

                               
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                               

                        </div>

                        <div class="form-group col-md-12">

                                <div class="form-check creat_account">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        remember Me
                                    </label>

                            </div>
                        </div>

                        <div class="form-group col-md-12">

                                <button type="submit" class="btn submit_btn" name="Login">
                                   Login
                                </button>

                                
                                    <a  href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                              

                        </div>
                    </form>
					</div>
				</div>
			</div>
		</div>
	</section>