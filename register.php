<?php include('server.php') ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <title>Sign-up</title>
</head>
<body>
<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3">
                        <a href="login.php">
                        <span class="a-text">Log In </span>
                        </a>
                        <span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"><a href="register.php"></a></label>
						<div class="card-3d-wrap mx-auto">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
                                        <h4 class="mt-3 pb-3">Sign Up</h4>
									<form method="post" action="register.php">
									<?php include('errors.php'); ?>
										<div class="form-group">
											<input type="text" class="form-style" placeholder="Username" name="username" value="<?php echo $username; ?>">
											<i class="input-icon uil uil-user"></i>
										</div> 
										<div class="form-group mt-2">
											<input type="email" class="form-style" placeholder="Email" name="email" value="<?php echo $email; ?>">
											<i class="input-icon uil uil-at"></i>
										</div>
										<div class="form-group mt-2">
											<input type="password" class="form-style" placeholder="Password" name="password_1">
											<i class="input-icon uil uil-lock-alt"></i>
										</div>
										<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Confirm Password" name="password_2">
												<i class="input-icon uil uil-lock-alt"></i>
											</div> 
										<button type="submit" class="btn mt-4" name="reg_user">Register</button>
									</form>
                                </div>
                            </div>
                        </div>
</body>
</html>