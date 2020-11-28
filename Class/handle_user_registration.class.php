<?php
include "../Database/register_user.data.php";
$register_user = new Register_user();

// ******* getting form data through post method ****************
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['submit'])) {
        $firstname = validate_input($_REQUEST['first_name']);
        $lastname = validate_input($_REQUEST['last_name']);
        $email = validate_input($_REQUEST['user_email']);
        $pass = validate_input($_REQUEST['user_pass']);
        $confirm_pass = validate_input($_REQUEST['user_confirm_password']);
        $gender = $_REQUEST['gender'];
        $check_password = pass_check($pass, $confirm_pass);
        $check_email = email_check($email);
        if ($check_email == true && $check_password == true) {
            $name = $firstname . "*" . $lastname;
            $type = "user";
            $user = $register_user->create_user($name, $email, $pass, $type, $gender);
            printf($user);

        } else {
            header("location: ../views/user_register_page.php?error=passwordmissmatch");
        }

    }

}

// ***** function to sanitaize form input  data to prevent cross site attack **********
function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return $data;
}

// *********** function to check if 2 password actually match & not less than 6 digit **********
function pass_check($pass, $confirm_pass)
{
    if (strlen($pass) >= 6 && !strcmp($pass, $confirm_pass)) {
        return true;
    } else {
        return false;
    }

}

// *********** function to validate the email address  ***************
function email_check($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        return true;
    } else {
        return false;
    }
}
