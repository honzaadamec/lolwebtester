<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="assets/css/goodgames.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
</head>
  <body>
    <header class="nk-header nk-header-opaque">
      <div class="nk-contacts-top">
        <div class="nk-contacts-right">
          <ul class="nk-contacts-icons">
            <li>
                <a href="#" data-toggle="modal" data-target="#modalLogin">
                    <span class="fa fa-user"></span>
                </a>
            </li>
          <?php
              if (isset($_SESSION['userId'])) {
                echo '<form action="includes/logout.inc.php" method="post">
                  <button type="submit" name="logout-submit">Logout</button>
                </form>';
              }
              else {
                echo '<form action="includes/login.inc.php" method="post">
                  <input type="text" name="mailuid" placeholder="E-mail...">
                  <input type="password" name="pwd" placeholder="Password...">
                  <button type="submit" name="login-submit">Login</button>
                </form>
              <a href="signup.php">Signup</a>';
              }
           ?>
          </ul>
        </div>
      </div>
    </header>
  </body>


  <!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm" role="document">
  <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="ion-android-close"></span>
          </button>

          <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

          <div class="nk-gap-1"></div>
          <form action="#" class="nk-form text-white">
              <div class="row vertical-gap">
                  <div class="col-md-6">
                      Use email and password:

                      <div class="nk-gap"></div>
                      <input type="email" value="" name="email" class=" form-control" placeholder="Email">

                      <div class="nk-gap"></div>
                      <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                  </div>
                  <div class="col-md-6">
                      Or social account:

                      <div class="nk-gap"></div>

                      <ul class="nk-social-links-2">
                          <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                          <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                          <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                      </ul>
                  </div>
              </div>

              <div class="nk-gap-1"></div>
              <div class="row vertical-gap">
                  <div class="col-md-6">
                      <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                  </div>
                  <div class="col-md-6">
                      <div class="mnt-5">
                          <small><a href="#">Forgot your password?</a></small>
                      </div>
                      <div class="mnt-5">
                          <small><a href="#">Not a member? Sign up</a></small>
                      </div>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>
</div>
<!-- END: Login Modal -->
