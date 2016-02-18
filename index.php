<?php
session_start();
?>
<html lang="en">
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="../../favicon.ico" />
    <title>A simple bootstrap shop</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->
    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet" />
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="blog-masthead">
    <div class="container">
      <nav class="blog-nav">
      <a class="blog-nav-item active" href="#">Home</a> 
      <a class="blog-nav-item" href="#">Category</a> 
      <a class="blog-nav-item" href="#">Blog</a> 
      <a class="blog-nav-item" href="#">New hires</a> 
      <a class="blog-nav-item" href="#">About</a> <?php if (isset($_SESSION['email'])) {
                              echo('<a class="blog-nav-item" href="myAccount.php">My Account (connected as '.$_SESSION["email"].')</a>');
                        } else {
                              echo('<a class="blog-nav-item" data-toggle="modal" href="#myAccount">My Account</a>');
                        } ?>
	  <a class="blog-nav-item" href="#cart" data-toggle="modal">Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</a>
	  </nav>
    </div>
  </div>
  <div class="container">
    <div class="col-sm-8">
      <div class="blog-header">
        <h1 class="blog-title">A simple Bootstrap shop</h1>
        <p class="lead blog-description">Using simplecartjs. Managed with AdminLTE.</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta 
        <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum
        nulla sed consectetur.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-11 blog-main">
        <div class="blog-post simpleCart_shelfItem">
          <h2 class="blog-post-title item_name">Famous smartphone</h2>
          <p class="blog-post-meta">Category >
          <a href="#">Smartphone</a></p>
          <div class="col-sm-6">
			<img src="img/topic_iphone_5c.png" width="400px"/><br/>
			<p style="margin-top: 2em;text-align: center;">I want <input type="text" value="1" maxlength="2" size="2" class="item_Quantity"/> product(s)!
			<button style="font-size:1.5em;" class="btn btn-default item_add" href="javascript:;">Add to cart</button>
		  </div>
		  <div class="col-sm-6">
			<p>Price: <strong><span class="item_price">399</span></strong>€</p>
			<p>Stock: <strong>in stock</strong></p>
			<p>Shipped in 3 - 5 days</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim metus, tempus in tempus nec, consequat nec purus. Morbi non elementum mauris, quis dictum lorem. In hac habitasse platea dictumst. Nunc congue diam at est pharetra facilisis. Donec et tellus sed nunc posuere placerat eu id ante. In vulputate est non metus cursus volutpat. Vivamus ornare, metus sit amet mollis egestas, lectus neque lobortis ante, sit amet sagittis velit neque nec lorem. Sed et massa ligula. Fusce aliquet sit amet nibh sit amet sagittis. Duis sodales venenatis ligula nec accumsan. Sed at velit ut mauris sollicitudin dictum porta at metus. Phasellus odio lorem, efficitur id imperdiet et, pretium et velit. Pellentesque sem nisi, pulvinar ac tellus vitae, fringilla faucibus libero. Mauris in quam interdum tortor blandit lobortis a nec lorem. Duis imperdiet ipsum eget diam vestibulum, sit amet lacinia diam ornare.</p>
		  </div>
        </div>
        <!-- /.blog-post -->
      </div>
      <!-- /.blog-main -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
  <footer class="blog-footer">
    <p>Blog template built for 
    <a href="http://getbootstrap.com">Bootstrap</a> by 
    <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>
  <!-- Modal My Account -->
  <!-- Modal -->
  <div id="myAccount" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="panel panel-login">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <a href="#" class="active" id="login-form-link">Login</a>
                </div>
                <div class="col-xs-6">
                  <a href="#" id="register-form-link">Register</a>
                </div>
              </div>
              <hr />
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                    <div class="form-group">
                      <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="" />
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control"
                      placeholder="Password" />
                    </div>
                    <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember" /> 
                    <label for="remember">Remember Me</label></div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="login-submit" id="login-submit" tabindex="4"
                          class="form-control btn btn-login" value="Log In" />
                        </div>
                      </div>
                    </div>
                    <!-- To be added later
                                                                        <div class="form-group">
                                                                                <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                                <div class="text-center">
                                                                                                        <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>-->
                  </form>
                  <form id="register-form" action="register.php" method="post" role="form" style="display: none;">
                    <div class="form-group">
                      <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address"
                      value="" />
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" tabindex="2" class="form-control"
                      placeholder="Password" />
                    </div>
                    <div class="form-group">
                      <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control"
                      placeholder="Confirm Password" />
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="register-submit" id="register-submit" tabindex="4"
                          class="form-control btn btn-register" value="Register Now" />
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>
  <div id="cart" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4>My cart</h4>
        </div>
        <div class="modal-body">
		  <p class="simpleCart_items">
		  </p>
	      <p class="alert alert-info">Final Total: <strong><span id="simpleCart_grandTotal" class="simpleCart_grandTotal"></span></strong>&nbsp;|&nbsp;<button href="javascript:;" class="simpleCart_checkout btn btn-default">Checkout</button> or <button href="javascript:;" class="simpleCart_empty btn btn-default">Empty cart</button></p>
		  </div>
        </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
  <script src="js/myaccount.js"></script> 
  <script src="js/vendor/simpleCart.js"></script>
  <script>
  simpleCart({
    checkout: { 
        type: "PayPlug"
    },
    currency:   "EUR"
	});
	</script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
  <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>--></body>
</html>
