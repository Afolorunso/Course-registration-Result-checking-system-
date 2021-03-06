<?php require_once 'core/init.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Students || Sign In</title>
  <link rel="shortcut icon" href="src/media/favico.ico" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="src/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="src/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container" style="margin-top: 15%;">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5 mx-5" style="margin-top: 10%;">
          <div class="card-body p-0 mx-5" style="margin-top: 5%;">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="text-center">

                    <?php
                    if (Session::exists('login')) {
                      echo '<h1 class="h4 text-gray-900 mb-4"> Welcome Back! ' . Session::flash('login') . '</h1>';
                    }
                    if (Input::exists()) {
                      if (Token::check(Input::get('token'))) {
                        $validate = new  Validate();
                        $validation = $validate->check($_POST, array(
                          'username' => array('required' => true),
                          'password' => array('required' => true)
                        ));

                        if ($validation->passed()) {

                          $user = new User();
                          $remember = (Input::get('remember') === 'on') ? true : false;
                          $login = $user->login(Input::get('username'),  Input::get('password'), $remember);


                          if ($login) {

                            Session::flash('complete', 'Welcome! Kindly Complete Your Profile');

                            if ($user->hasPermission('admin')) {
                              redirect::to('admin/index.php');
                            } else {
                              redirect::to('complete-profile.php');
                            }
                          } else {
                            echo '<div class="alert alert-danger text-center" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
    Sorry, Login Failed!! </div>';
                          }
                        } else {
                          foreach ($validation->errors() as $error) {
                            echo '<div class="alert alert-danger text-capitalize text-center" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span>' .
                              $error . '</div>';
                          }
                        }
                      }
                    }
                    ?>
                  </div>
                  <form method="post" class="user">

                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="username" placeholder="Enter Email Address...">
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                    </div>


                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" name="remember" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>

                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">

                    <input type="submit" value="Login" class="btn btn-primary btn-user btn-block  bg-gradient-primary">
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="src/vendor/jquery/jquery.min.js"></script>
  <script src="src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="src/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="src/js/sb-admin-2.min.js"></script>

</body>

</html>