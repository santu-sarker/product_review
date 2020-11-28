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
  <script defer src="../javascript/page_registration_validation.js"></script>
  <title>Registration Page</title>
</head>
  <body>
  <div class="container-fluid p-0 main_div">

<div class="">
  <?php include '../views/login_navbar.php'?>
</div>
<div class="row justify-content-center my-3">
  <div class="card col-lg-6 col-md-8 col-sm-10 col-12 justify-content-center p-5 m-5 user_card">
    <form class="form-signin" action="../Class/handle_page_registration.class.php" method="POST">
      <h1 class="h3 mb-3 text-center register_head p-2">Page Registration Form</h1>
      <div class="card-body justify-content-center">
        <div class="row my-3">

          <input type="name" name="page_name" id="page_name" class="form-control col-lg-12 col-md-12 col-sm-12 col-12  " placeholder="Enter Page Name" required autofocus>


        </div>
        <div class="row my-3">

          <input type="email" name="page_email" id="page_email" class="form-control col-12 "  placeholder="Enter a Valid Email Adress" required autofocus>

        </div>
        <div class="row my-3">

          <input type="password" name="page_pass" id="page_Password" class="form-control col-12" placeholder="Enter Password" required>

        </div>
        <div class="row my-3">

          <input type="password" name="page_confirm_password" id="confirm_password" class="form-control col-12" placeholder="Confirm Entered Password" required>

        </div>
        <div class="row">
          <div class="text col-3 ">Gender</div>
          <div class=" form-check col-3 ">
          <label class="gender-check-label" for="male">
          <input  type="radio" class="form-check-input" id="male" name="gender" value="male" >Male
          </label>
          </div>
          <div class="form-check col-3">
          <label class="gender-check-label" for="female">
          <input type="radio" class="form-check-input" id="female" name="gender" value="female">Female
          </label>
          </div>
        </div>
        <div class="row checkbox ">

          <label class="form-check-label col-lg-12 col-md-12 col-sm-12 col-12">
            <input type="checkbox" name="check_box" id="page_checkbox" class="form-check-input" required>
            I Read and Accept <a href="#">Terms and Conditions</a>
          </label>

        </div>

      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit" name="submit" >Sign in</button>
      <button class="btn btn-lg  btn-block"><a href="./user_register_page.php">user Registration </a></button>
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
