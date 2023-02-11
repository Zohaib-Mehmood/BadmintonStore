<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
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
    <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="wishList.css">
    <link rel="stylesheet" href="payMethod.css">

    <title>SAZ Official</title>
</head>

<body>

    <nav>
        <div class="logo"><a href="#"><img style="width: 130px; height: 100px;" src="pics/logo-removebg-preview.png"
                    class="img-fluid" alt="logo"></a></div>
        <ul class="nav-links">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="shoes.html">Badminton Shoes</a>
            </li>
            <li>
                <a href="bags.html">Badminton Bags</a>
            </li>
            <li>
                <a href="rackets.html">Badminton Rackets</a>
            </li>
            <li class="ms-lg-auto">
                <a id="search-icon"><i class="fas fa-search"></i></a>
                <form id="search-form" style="display:none;">
                    <input type="text" placeholder="Search...">
                </form>
            </li>


            <li>
                <a href="wishList.html"><i class="fas fa-heart"></i></a>
            </li>
            <li>
                <a href="#"><i id="cart-open-button" class="fas fa-shopping-bag" onclick="openCartPage()"><span class="cart-item-count">0</span></i></a>
                   
                    <a  id="cart-button">
                    <div id="cart-page" style="display: none;">
                      <h1>Shopping Cart</h1>
                      <table>
                        <tr>
                          <th>Item</th>
                          <th>Quantity</th>
                          <th>Price</th>
                        </tr>
                        <tr>
                          <td>Badminton Racket</td>
                          <td>1</td>
                          <td>$50</td>
                        </tr>
                        <tr>
                          <td>Badminton Shoe</td>
                          <td>2</td>
                          <td>$70</td>
                        </tr>
                        <tr>
                          <td colspan="2">Total</td>
                          <td>$190</td>
                        </tr>
                      </table>
                      <button id="cart-close-button" onclick="closeCartPage()">Close</button>
                    </div>
                </a>
                    
            </li>
        </ul>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        
    </nav>

    <section class="home">
        <div class="container-fluid">
            <div class="row text-md-start text-center">
                <div class="col-lg-4">
                    <h6 class="text-uppercase mt-5 pt-md-5 rt">Sponsored by SAZ</h6>
                    <div class="line mb-4 rt"></div>
                    <h1 class="dss rt">SAZ SPORTS CLUB</h1>
                    <button type="button" class="rt">WELCOME <i class="fas fa-angle-right"></i></button>
                </div>
                <div class="col-lg-8 rt mt-md-0 mt-5 d-flex justify-content-end align-items-center">
                    <img src="img/Mask Group.png" class="img-fluid rt" alt="">
                    <div class="imgg rt"></div>
                </div> 
            </div>
        </div>
    </section>


    <div class="intro">
        <div class="intro-text">
            <h1 class="hide">
                <span class="text fontt">Welcome to</span>
            </h1>
            <h1 class="hide">
                <span class="text fontt"> SAZ</span>
            </h1>
            <h1 class="hide">
                <span class="text fontt">Official site.</span>
            </h1>
        </div>
    </div>
    <div class="slider"></div>
    

    <section class="feature hom">
        <div class="contanier-fluid">
            <div class="row d-flex flex-lg-row flex-column-reverse">
                <div class="col-lg-4 sol">
                    <img src="pics/2-2-badminton-picture.png" class="shoe sol hom1" style="width: 120%; left: 30px;" alt="">
                </div>
                <div class="col-lg-8 mb-5 pe-0 d-flex flex-column align-content-end align-items-start">
                    <h6 class="top">INTRODUCTION</h6>
                    <h1 class="display-1 text-uppercase top">Bring The Quality
                        to Light</h1>
                        <p class="w-75 top">SAZ Badminton Club was founded in 01/01/2022. The motive of this club is to make avaliable best possible badminton products (Shoes, Bags, Rackets) to the highly professional and compatative players out there.  
                        </p> 
                        <p class="w-75 top">
                            To win in badminton, players need to employ a wide variety of strokes in the right situations. These range from powerful jumping smashes to delicate tumbling net returns. Often rallies finish with a smash, but setting up the smash requires subtler strokes. For example, a net shot can force the opponent to lift the shuttlecock, which gives an opportunity to smash. If the net shot is tight and tumbling, then the opponent's lift will not reach the back of the court, which makes the subsequent smash much harder to return.
                        </p>
                    </div>
                </div>
            </div>
        </section>

<section class="about" style="position: relative; overflow: hidden;">
    <div class="container-fluid">

        <div class="row" style="height: 600px;">
            <div class="col-md-12 p-0">
                <img src="pics/shoes.jpg" class="img-fluid w-100" style="height: 100vh; object-fit: fill;" alt="">
            </div>

            <div class="contact opacity">
                <div class="d-flex flex-column align-items-center">
                    <h1 class="text-center">Badminton Shoes</h1>
                    <button type="button"><a href="./shoes.html" style="color: white; text-decoration: none; width: 100%;">Shop Now</a></button>
                </div>
            </div>
        </div>

        <div class="row" style="height: 600px;">
            <div class="col-md-12 p-0">
                <img src="pics/bbg.jpg" class="img-fluid w-100" alt="" style="height: 100vh; width: 100%; object-fit: fill;" alt="">
            </div>

            <div class="contact opacity">
                <div class="d-flex flex-column align-items-center">
                    <h1 class="text-center">Badminton Bags</h1>
                    <button type="button"><a href="./bags.html" style="color: white; text-decoration: none; width: 100%;">Shop Now</a></button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 p-0">
                <img src="pics/racket2.jpg" class="img-fluid w-100" alt="" style="height: 100vh; width: 100%; object-fit: fill;" alt="">
            </div>

            <div class="contact opacity">
                <div class="d-flex flex-column align-items-center">
                    <h1 class="text-center">Badminton Rackets</h1>
                    <button type="button"><a href="./rackets.html" style="color: white; text-decoration: none; width: 100%;">Shop Now</a></button>
                </div>
            </div>
        </div>

    </div>
</section>

<footer>
    <div class="container-fluid">
        <div class="row pt-5 pe-5 mb-4">
            <div class="col-md-3 ms-md-5">
                <a href="#home" id="home"></a>
                <p class="text-white mt-3">Stay update with our lastes ventures & news</p>
                <div class="bg-transparent mb-4">
                    <input type="email" class="bg-transparent" placeholder="enter your email box"><i
                        class="fas fa-angle-right fd"></i>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <h3 class="text-white">GET HELP</h3>
                <ul>
                    <li class="mb-2"><a href="orderStatus.html">Order Status</a></li>
                    <li class="mb-2"><a href="delivery.html">Delivery</a></li>
                    <li class="mb-2"><a href="#">Returns</a></li>
                    <li class="mb-2"><a onclick="payOpen()">Payment Options</Button></li>
                        <div id="payment-page" style="display: none;">
                        <div id="payment-header">
                        <h1>Payment Method</h1>
                        <button id="close-button">Close</button>
                        </div>
                        <div id="payment-options">
                        <div class="option">
                            <input type="radio" id="credit-card" name="payment-method" value="credit-card">
                            <label for="credit-card">Credit Card</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="debit-card" name="payment-method" value="debit-card">
                            <label for="debit-card">Debit Card</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="net-banking" name="payment-method" value="net-banking">
                            <label for="net-banking">Net Banking</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="wallet" name="payment-method" value="wallet">
                            <label for="wallet">Wallet</label>
                        </div>
                        </div>
                        <button id="next-button">Next</button>
                    </div>
                </ul>
            </div>
            <div class="col-md-2 col-6">
                <h3 class="text-white">About SAZ</h3>
                <ul>
                    <li class="mb-2"><a href="#">News</a></li>
                    <li class="mb-2"><a href="#">Careers</a></li>
                    <li class="mb-2"><a href="#">investors</a></li>
                    <li class="mb-2"><a href="#"> Sustainability</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-6">
                <ul class="d-flex justify-content-around">
                    <li class="mb-2 ms-0"><a target="_blank" href="https://www.facebook.com/zohaibmehmood.zohaibkhan.3"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="mb-2"><a target="_blank" href="https://twitter.com/ZohaibM55355876?t=Nlq-Tf6aD3QcoKNRzlQeLw&s=09"><i class="fab fa-twitter"></i></a></li>
                    <li class="mb-2"><a target="_blank" href="https://www.instagram.com/zohaib_mehmmod_/p/BjLEfxMjjpI/?utm_medium=share_sheet"><i class="fab fa-instagram"></i></a></li>
                    <li class="mb-2"><a target="_blank" href="https://youtube.com/channel/UCqngpAq3iLNjVmkKfFXFQeQ"> <i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="hr1 my-4"></div>
        <div class="row pb-3">
            <div class="col-12 text-center">
                <a href="#" class="op">Developed by SAZ</a>
            </div>
        </div>
    </div>
</footer>











<script
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"
    integrity="sha512-HzAEuXwhLxwm/Jj+5ecdjzrRVrjuh2ZeIxyT1Ln37TO5pWNMnKBuU7cfd1wvRQ/k86w1oC174Yk1T7aRlBpIcA=="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"
    integrity="sha512-A98SmLRZISk4eIxQBeCm8k0jAcwN3A3lBx4hr7baoMpV1VpxcxlZIhi5fJIZN50sQ5RlCzx8yV+Voy2cR6x0aA=="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"
    integrity="sha512-Kr+RPfLjQ71E0cJ9nseJ6jwTrnmMnuSPnnsVQQ/ZYYCjOHKfJcWj8ILICXnvf9A7ZQChNzIbr9x/ZAxA6xAZlQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
    integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
    crossorigin="anonymous"></script>
<script src="Nike.js"></script>
<script src="icons.js"></script>
<script src="wishList.js"></script>
<script src="script.js"></script>
<script src="script1.js"></script>
<script src="cart.js"></script>
<script src="payMethod.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<div class="content">
  	<!-- notification message -->

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

    <!-- logged in user information -->

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		

</body>
</html>