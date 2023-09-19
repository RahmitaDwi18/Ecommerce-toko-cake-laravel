<!doctype html>
<html lang="en">
  <head>
  	<title>LotusCake | Registrasi</title>
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
				<div class="col-md-2 text-center ">
					<h2 class="heading-section">REGISTER</h2>
                </div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-2 col-lg-4">
					<div class="login-wrap p-0">
		      	<form action="<?= route_to('register') ?>" method="post" class="signin-form">
                  <?= csrf_field() ?>
                  <?= view('Myth\Auth\Views\_message_block') ?>
     
                        <div class="form-group">
		      			<input name="name" type="text" class="form-control <?php if (session('errors.name')) : ?>is-invalid<?php endif ?>"  name="name"placeholder="Fullname" required>
                            <div class="invalid-feedback">
                                <?= session('errors.name') ?>
                            </div>
		      		    </div>
                        
                        <div class="form-group">
		      			<input name="username" type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"  name="username"placeholder="Username" required>
                            <div class="invalid-feedback">
                                <?= session('errors.username') ?>
                            </div>
		      		    </div>
                        
                        <div class="form-group">
		      			<input name="email" type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"  name="login"placeholder="Gmail" required>
                        <span class="focus-input100" data-placeholder="Email"></span>
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
		      		    </div>
                    
	            <div class="form-group">
	              <input id="password-field <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa toggle-password"></span>
                  <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>

                        <div class="form-group">
		      			<input name="pass_confirm" type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"  name="pass_confirm"placeholder="Repeat Password" required>
                            <div class="invalid-feedback">
                                <?= session('errors.pass_confirm') ?>
                            </div>
		      		    </div>

                        <div class="form-group">
		      			<input name="phone_number" type="number" class="form-control <?php if (session('errors.phone_number')) : ?>is-invalid<?php endif ?>"  name="phone_number"placeholder="Phone Number" required>
                            <div class="invalid-feedback">
                                <?= session('errors.phone_number') ?>
                            </div>
		      		    </div>
                        
                        <div class="form-group">
		      			<input name="address" type="textArea" class="form-control <?php if (session('errors.address')) : ?>is-invalid<?php endif ?>"  name="address"placeholder="Address" required>
                            <div class="invalid-feedback">
                                <?= session('errors.address') ?>
                            </div>
		      		    </div>
           
                </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">REGISTER</button>
	            </div>
	           
	          </form>
			  <p class="masuk"> Have an account?</p>
	          <a class=" " href="<?= route_to('login') ?>">&mdash; Or Sign In &mdash;</a>
	         
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

