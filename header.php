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
            <div>
            </div>
          </ul>
        </div>
      </div>
    </header>

    <!-- START: Login Modal -->
  <div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="ion-android-close"></span>
            </button>
            <?php
            if (isset($_SESSION['userId'])) {
              echo '<div class="nk-gap-1"></div>
              <div class="row vertical-gap">
                  <div class="col-md-6">
                      <a href="index.php" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" name="logout-submit">Odhlasit</a>
                  </div>';
            }
            else {
              echo'
              <h4 class="mb-0"><span class="text-main-1">Přihlásit</span> se</h4>

              <div class="nk-gap-1"></div>
              <form action="includes/login.inc.php" class="nk-form text-white">
                  <div class="row vertical-gap">
                      <div class="col-md-6">
                          Použij email a heslo:

                          <div class="nk-gap"></div>
                          <input type="text" name="mailuid" class=" form-control" placeholder="Email">
                          <div class="nk-gap"></div>
                          <input type="password" name="pwd" class="required form-control" placeholder="Heslo">
                      </div>
                  </div>

                  <div class="nk-gap-1"></div>
                  <div class="row vertical-gap">
                      <div class="col-md-6">
                          <button class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" type="submit" name="login-submit">Přihlásit</button>
                      </div>
                      <div class="col-md-6">
                          <div class="mnt-5">
                              <small><a href=#">Zapomněl jsi heslo?</a></small>
                          </div>
                          <div class="mnt-5">
                              <small><a href="#">Nejsi členem. Registruj se!</a></small>
                          </div>
                      </div>
                  </div>
                </form>';
              }
            ?>
        </div>
    </div>
  </div>
  </div>
  <!-- END: Login Modal -->

  <!-- START: Scripts -->

  <!-- Object Fit Polyfill -->
  <script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

  <!-- GSAP -->
  <script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
  <script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

  <!-- Popper -->
  <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Sticky Kit -->
  <script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

  <!-- Jarallax -->
  <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
  <script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

  <!-- imagesLoaded -->
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

  <!-- Flickity -->
  <script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

  <!-- Photoswipe -->
  <script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
  <script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

  <!-- Jquery Validation -->
  <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

  <!-- Jquery Countdown + Moment -->
  <script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
  <script src="assets/vendor/moment/min/moment.min.js"></script>
  <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

  <!-- Hammer.js -->
  <script src="assets/vendor/hammerjs/hammer.min.js"></script>

  <!-- NanoSroller -->
  <script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

  <!-- SoundManager2 -->
  <script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

  <!-- Seiyria Bootstrap Slider -->
  <script src="assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

  <!-- Summernote -->
  <script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

  <!-- nK Share -->
  <script src="assets/plugins/nk-share/nk-share.js"></script>

  <!-- GoodGames -->
  <script src="assets/js/goodgames.min.js"></script>
  <script src="assets/js/goodgames-init.js"></script>
  <!-- END: Scripts -->


  </body>
  </html>
