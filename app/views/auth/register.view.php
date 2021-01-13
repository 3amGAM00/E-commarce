<?php use App\Process\Template;?>
<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?= Template::asset('img/login.jpg')?>" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="main_btn" href="/E-commarce-main/Dashboard">HOME</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner" style="padding-top: 60px">
						<h3>CREATE AN ACCOUNT</h3>
						   <form method="post" class="login_form row" action="/ecommarce/public/register/CheckData">
                      

                        <div class="form-group col-12">
                            <!--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>-->


                                <input id="name" type="text" placeholder="Name" class="form-control " name="name" value="" required autocomplete="name" autofocus>

  

                        </div>
                        <div class="form-group col-12">
                            <!--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>-->


                                <input id="phone_number" type="text" placeholder="PhoneNumber" class="form-control" name="phonenumber" value="" required autocomplete="phone_number" autofocus>

                   

                        </div>

                        <div class="form-group col-12 ">
                            <!--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->


                                <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="" required autocomplete="email">



                        </div>

                        <div class="form-group col-12">
                            <!--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->


                                <input id="password" type="password" placeholder="Password"class="form-control " name="password" required autocomplete="new-password">


                        </div>

                        <div class="form-group col-12">
                            <!--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>-->


                                <input id="password-confirm" placeholder="Password-confirm" type="password" class="form-control" name="passwordCr" required autocomplete="new-password">

                        </div>

                        <div class="form-group col-md-12">

                                <button type="submit" class="btn submit_btn">
                                    Register
                                </button>
                        </div>

                    </form>
					</div>
				</div>
			</div>
		</div>
	</section>