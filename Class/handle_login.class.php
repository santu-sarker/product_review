<?php
include "../Database/register_user.data.php";
$user_login = new Register_user();

// ******* getting form data through post method ****************
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['submit'])) {

        $email = validate_input($_REQUEST['input_email']);
        $pass = validate_input($_REQUEST['input_password']);

        if (email_check($email) && pass_check($pass)) {
            $user = $user_login->login_user($email, $pass);

            printf($user['login']);
            printf($user['password']);
        } else {
            header("location: ../views/user_register_page.php?error=invalid_email_or_password");
        }

    } else {
        printf("submit is not submitted");
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
function pass_check($pass)
{
    if (strlen($pass) >= 6) {
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
