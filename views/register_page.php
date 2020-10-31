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

  <title>Registration Page</title>
</head>
  <body>
    <div class="container-fluid p-0 main_div">

      <div class="">
        <?php include './side_views/login_navbar.php' ?>
      </div>

      <div class="row justify-content-center my-3">
        <div class="card col-6 justify-content-center p-5 m-5">
          <form class="form-signin" action="./include/handle_registration.class.php" method="POST">
            <h1 class="h3 mb-3 text-center register_head p-2">Register To Continue</h1>
            <div class="card-body justify-content-center">
              <div class="row my-3">
                <label for="page_name" class="col-2 mt-2">Name </label>
                <input type="name" id="page_name" class="form-control col-10 " placeholder="Enter Page Name" required autofocus>

              </div>
              <div class="row my-3">
                <label for="page_email" class="col-2 mt-2">Email </label>
                <input type="email" id="page_email" class="form-control col-10 " placeholder="Enter a Valid Email Adress" required autofocus>

              </div>
              <div class="row my-3">
                <label for="inputPassword" class="col-2 mt-2">Passwor</label>
                <input type="password" id="inputPassword" class="form-control col-10" placeholder="Password" required>

              </div>
              <div class="row my-3">
                <label for="confirm_Password" class="col-2 mt-2">Confirm</label>
                <input type="password" id="confirm_password" class="form-control col-10" placeholder="Confirm Entered Password" required>

              </div>

              <div class="checkbox ">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  I Read and Accept <a href="#">Terms and Conditions</a>
                </label>
              </div>

            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
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
