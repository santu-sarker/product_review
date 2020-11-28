<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="./assets/images/icon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type='text/css' href="../css/registration_page.css">
  <script defer src="../javascript/login_validation.js"></script>
  <title>Login Page</title>
</head>
  <body>
    <div class="container-fluid p-0 main_div">

      <div class="">
        <?php include './login_navbar.php'?>
      </div>

      <div class="row justify-content-center my-5">
        <div class="row justify-content-center error">
          <h1 id="error_message" class="col-5 text-center"></h1>
        </div>
        <div class="card col-lg-5 col-md-7 col-sm-10 col-12 justify-content-center p-5 m-5">
          <form id="form_signin" action="../Class/handle_login.class.php" method="POST">
            <h1 class="h3 mb-3 text-center login_head p-2">Please sign in</h1>
            <div class="card-body justify-content-center">
              <div class="row my-4">

                <input type="email" id="input_email" name="input_email" class="form-control col-12 " placeholder="Email address" required autofocus>

              </div>
              <div class="row my-3">

                <input type="password" id="input_password" name="input_password" class="form-control col-12" placeholder="Password" required>

              </div>

              <div class="checkbox ">
                <label>
                  <input type="checkbox" id="login_check" value="remember-me"> Remember me </input>
                </label>
              </div>

            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit" name="submit">Sign in</button>
          </form>


        </div>

      </div>
    </div>

      <!-- Bootstrap Js -->
      <script src="../javascript/jquery-3.5.1.min.js"></script>
      <script src="../javascript/bootstrap.min.js"></script>
      <script src="../javascript/popper.min.js"></script>
      <script src="../javascript/all.min.js"></script>
      <!-- <script src="./javascript/header.js"> </script> -->
  </body>
</html>
