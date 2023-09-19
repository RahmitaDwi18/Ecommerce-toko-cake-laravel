<!doctype html>
<html lang="en">
  <head>
  	<title>LotusCake | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href=<?= base_url("loginn/css/style.css")?>>

	</head>
	<body class="img js-fullheight" style="background-image: url(<?= base_url("loginn/images/bg2.jpg");?>">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><?= lang('Auth.loginTitle') ?></h2>
                </div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="<?= route_to('login') ?>" method="post" class="signin-form">
                  <?= csrf_field() ?>
                  <?= view('Myth\Auth\Views\_message_block') ?>

                  <?php if ($config->validFields === ['email']) : ?>
                        
                        <div class="form-group">
		      			<input name="login" type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"  name="login"placeholder="<?= lang('Auth.email') ?>" required>
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
		      		    </div>
                    <?php else : ?>
                        
                        <div class="form-group">
		      			<input name="login" type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"  name="login"placeholder="<?= lang('Auth.emailOrUsername') ?>" required>
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
		      		    </div>
                    <?php endif; ?>

        

	            <div class="form-group">
	              <input id="password-field <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password" class="form-control" placeholder="<?= lang('Auth.password') ?>" required>
	              <span toggle="#password-field" class=""></span>
                  <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3"><?= lang('Auth.loginAction') ?></button>
	            </div>
	           
	          </form>
			  <p class="masuk">Don't have an account?</p>
	          <a class="w-100 " href="<?= route_to('register') ?>">&mdash; Or Sign Up &mdash;</a>
	         
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src=<?= base_url("loginn/js/jquery.min.js")?>></script>
  <script src=<?= base_url("loginn/js/popper.js")?>></script>
  <script src=<?= base_url("loginn/js/bootstrap.min.js")?>></script>
  <script src=<?= base_url("loginn/js/main.js")?>></script>

	</body>
</html>

