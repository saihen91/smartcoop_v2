<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Smartcoop</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="../public/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../public/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../public/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Dashmix framework -->
    <link rel="stylesheet" id="css-main" href="../public/css/dashmix.min.css">
    <link rel="stylesheet" id="css-theme" href="../public/css/themes/xmodern.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
  </head>

  <body>
    
    <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('../public/media/photos/photo19@2x.jpg');">
          <div class="row g-0 justify-content-center bg-primary-dark-op">
            <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
              <!-- Sign In Block -->
              <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
                  <!-- Header -->
                  <div class="mb-2 text-center">
                    <a class="link-fx fw-bold fs-1" href="index.html">
                      <span class="text-dark">Smart</span><span class="text-primary">coop</span>
                    </a>
                    <p class="text-uppercase fw-bold fs-sm text-muted">Log Masuk</p>
                  </div>
                  <!-- END Header -->

                  <!-- Sign In Form -->
                  <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                  <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->

                   <!-- login error -->
                  <?php if (isset($_SESSION['login_error'])): ?>
                  <div class="alert alert-danger d-flex align-items-center justify-content-between" role="alert">
                    <div class="flex-grow-1 me-3">
                      <p class="mb-0"><?php echo $_SESSION['login_error']; ?></p>
                      <?php unset($_SESSION['login_error']); // Clear the error message ?>
                    </div>
                    <div class="flex-shrink-0">
                      <i class="fa fa-fw fa-times-circle"></i>
                    </div>
                  </div>
                  <?php endif; ?>
                  <!-- /login error -->

                  <form class="js-validation-signin" action="../index.php?action=login" method="POST">
                    <div class="mb-4">
                      <div class="input-group input-group-lg">
                        <input type="text" class="form-control" id="login-username" name="login-username" placeholder="Username">
                        <span class="input-group-text">
                          <i class="fa fa-user-circle"></i>
                        </span>
                      </div>
                    </div>
                    <div class="mb-4">
                      <div class="input-group input-group-lg">
                        <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Password">
                        <span class="input-group-text">
                          <i class="fa fa-asterisk"></i>
                        </span>
                      </div>
                    </div>
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start mb-4">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="login-remember-me" name="login-remember-me" checked>
                        <label class="form-check-label" for="login-remember-me">Remember Me</label>
                      </div>
                    </div>
                    <div class="text-center mb-4">
                      <button type="submit" class="btn btn-hero btn-primary">
                        <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Log Masuk
                      </button>
                    </div>
                  </form>
                  <!-- END Sign In Form -->
                </div>
                <div class="block-content bg-body text-center">
                  <p class="fs-sm text-muted">
                    Smartcoop &copy; Sistem Bersepadu Pengurusan Dan Perakaunan KAAKBP<br>Dibangunkan oleh Pusat Teknologi Maklumat KAAKBP
                  </p>
                </div>
              </div>
              <!-- END Sign In Block -->
            </div>
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="../public/js/dashmix.app.min.js"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="../public/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="../public/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="../public/js/pages/op_auth_signin.min.js"></script>
  </body>
</html>
