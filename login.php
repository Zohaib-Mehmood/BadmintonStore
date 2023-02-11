<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    
    <link rel="shortcut icon" type="x-icon" href="../pics/logo1-removebg-preview.png">
    <link rel="stylesheet" href="Nike.css">

    <title>Login</title>
</head>

<body style="background-image:linear-gradient(to right,rgb(200, 241, 85),rgb(173, 91, 123))  ">

            <div class="container py-3 d-block" style="height: auto;">
                
                <div class="row d-flex justify-content-center align-items-center h-100" >
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0" >
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="pics/b.jpg" alt="login form" class="img-fluid"
                                    style="object-fit: cover; height: 100%;" />
                                </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center" >
                                <div class="card-body p-4 p-lg-5 text-black"  >

                                        <form method="post" action="login.php" style="background: url(img/Mask\ Group.png);">

                                            <?php include('errors.php'); ?>

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="pics/logo-removebg-preview.png" alt=""
                                            style="height: auto; width: 100px;">
                                            <span class="h1  fw-bold mb-0">Zabi Sports</span>
                                        </div>
                                        
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>
                                            
                                            <div class="form-outline mb-4">
                                                <input type="text" id="form2Example17"
                                                class="form-control form-control-lg" name="username"/>
                                                <label class="form-label" for="form2Example17">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27"
                                            class="form-control form-control-lg" name="password"/>
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>
                                        
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" name="login_user"><a
                                                    class="btn text-light fs-8">Login</a></button>
                                                </div>

                                                
                                                
                                                <a class="small text-muted" href="#!">Forgot password?</a>
                                                <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php">Sign up</a></p>
                                                    <a href="#!" class="small text-muted">Terms of use.</a>
                                                    <a href="#!" class="small text-muted">Privacy policy</a>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
        </div>

        <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>

          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>

      	</h3>
      </div>
  	<?php endif ?>
      
</body>

</html>