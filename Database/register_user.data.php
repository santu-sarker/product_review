<?php
include "../Database/connection.data.php";

class Register_user extends Connection
{

    public function create_user($name, $email, $pass, $type, $gender)
    {
        $hash_pass = password_hash($pass, PASSWORD_DEFAULT);
        $conn = $this->connect();
        if ($conn) {
            $message = array();
            $sql = "SELECT * FROM master_users WHERE user_email = ?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../views/user_register_page.php?error=stmtfailed");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result_data = mysqli_stmt_get_result($stmt);
            if (mysqli_fetch_assoc($result_data)) {
                $message['error_code'] = '101';
                $message['error'] = " user_already exists";
                return $message;
            } else {
                $sql = "INSERT INTO master_users(user_name , user_email, user_password,user_gender,user_type) VALUES(?,?,?,?,?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../views/user_register_page.php?error=stmtfailedcreate");
                    exit();
                }
                mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $hash_pass, $gender, $type);
                mysqli_stmt_execute($stmt);
                $message['error_code'] = 100;
                $message['error_message'] = "successfully registered";

            }
        }

    }
    public function create_page($page_name, $page_email, $page_password)
    {
        $hash_pass = password_hash($page_password, PASSWORD_DEFAULT);
        $conn = $this->connect();
        if ($conn) {
            $message = array();
            $sql = "SELECT * FROM master_users WHERE user_email = ?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../views/user_register_page.php?error=stmtfailed");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $page_email);
            mysqli_stmt_execute($stmt);
            $result_data = mysqli_stmt_get_result($stmt);
            if (mysqli_fetch_assoc($result_data)) {
                $message['error_code'] = '101';
                $message['error'] = " page_already exists";
                return $message;
            } else {
                $sql = "INSERT INTO master_users(user_name , user_email, user_password,user_gender,user_type) VALUES(?,?,?,?,?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../views/user_register_page.php?error=stmtfailedcreate");
                    exit();
                }
                mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $hash_pass, $gender, $type);
                mysqli_stmt_execute($stmt);
                $message['error_code'] = 100;
                $message['error_message'] = "successfully registered";

            }
        }

    }
    public function login_user($email, $password)
    {
        $conn = $this->connect();
        if ($conn) {
            $message = array();
            $sql = "SELECT user_name,user_email,user_password,user_type FROM master_users WHERE user_email = ?;";
            $result = $conn->prepare($sql);

            $result->bind_param('s', $email);
            $result->bind_result($user_name, $user_email, $user_pass, $user_type);
            $result->execute();

            if ($result->fetch()) {
                if (password_verify($password, $user_pass)) {
                    $message['login'] = "successful";
                    $message['user_type'] = $user_type;
                    return $message;
                } else {
                    $message['login'] = "password miss match";
                    return $message;
                }
            } else {
                $message['login'] = 'invalid email address';
                return $message;
            }
        } else {
            $message['login'] = 'connection error';
            return $message;
        }

    }

    /*public function table_creation(){
$sql = "CREATE TABLE IF NOT EXISTS Master_User (
user_id INT(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
user_name VARCHAR(50) NOT NULL ,
user_email varchar(50) NOT NULL UNIQUE,
user_password VARCHAR(50) NOT NULL ,
user_gender VARCHAR(10) NOT NULL ,
user_type VARCHAR(10) NOT NULL ,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if($this->connect()){
$result = $mysqli->query($sql);
if($result){
return true ;
}
return false;
}
else return false;
} */

}
