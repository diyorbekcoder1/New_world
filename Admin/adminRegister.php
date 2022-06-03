<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <!DOCTYPE html>
  <html lang="en">


  <!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
  <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
      <title>AZNews - Admin</title>
      <!-- General CSS Files -->
      <link rel="stylesheet" href="assets/css/app.min.css">
      <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
      <!-- Template CSS -->
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/components.css">
      <!-- Custom style CSS -->
      <link rel="stylesheet" href="assets/css/custom.css">
      <link rel='shortcut icon' type='image/x-icon' href="/assets/img/logo/cc9f5ac842261e6ad2e996a4e2dc90af.png"/>
  </head>

  <body>
  <div class="loader"></div>
  <div id="app">
      <section class="section">
          <div class="container mt-5">
              <div class="row">
                  <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                      <div class="card card-primary">
                          <div class="card-header">
                              <h4>Register</h4>
                          </div>
                          <div class="card-body">
                              <form method="POST" action=>
                                  <div class="row">
                                      <div class="form-group col-6">
                                          <label for="frist_name">First Name</label>
                                          <input id="frist_name" type="text" class="form-control" name="firstname" required autofocus>
                                      </div>
                                      <div class="form-group col-6">
                                          <label for="last_name">Last Name</label>
                                          <input id="last_name" type="text" class="form-control" required name="lastname">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="email">Username</label>
                                      <input id="email" type="username" class="form-control" required name="username">
                                      <div class="invalid-feedback">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label>Password</label>
                                      <input type="password" class="form-control" required name="password">
                                  </div>
                                  <div class="form-group">
                                      <div class="control-label">Register Admin</div>
                                      <label class="custom-switch mt-2">
                                          <input type="checkbox" name="reg_admin" value="1"  class="custom-switch-input">
                                          <span class="custom-switch-indicator"></span>

                                      </label>
                                  </div>

                                  <div class="form-group">
                                      <button type="submit" name="reg" class="btn btn-primary btn-lg btn-block">
                                          Register
                                      </button>
                                  </div>
                              </form>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>

  <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-custom.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>