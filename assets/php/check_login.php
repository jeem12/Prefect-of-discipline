<?php 
include "db_connect.php";
session_start(); 

if (isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] += 1;
} else {
    $_SESSION['login_attempts'] = 1;
}

if ($_SESSION['login_attempts'] >= 3) {
    $time_elapsed = time() - $_SESSION['last_login_attempt'];
    if ($time_elapsed < 63) {
        $wait_time = 63 - $time_elapsed;
        header("Location: ../../index.php?error=exceeded_attempts&wait_time=$wait_time");
        exit();
    } else {
        unset($_SESSION['login_attempts']);
        unset($_SESSION['last_login_attempt']);
        if (isset($_POST['uname']) && isset($_POST['password'])) {

            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        
            $uname = validate($_POST['uname']);
            $pass = $_POST['password'];
        
            $ciphering = "aes-128-ctr";
            $option = 0;
            $decryption_iv = '1234567890123456';
            $decryption_key = 'devanshu';
            $decryption = openssl_encrypt($pass, $ciphering, $decryption_key, $option, $decryption_iv);
        
            if (empty($uname)) {
                header("Location: ../../index.php?error=User Name is required");
                exit();
            } else if (empty($pass)){
                header("Location: ../../index.php?error=Password is required");
                exit();
            } else {
                $sql = "SELECT * FROM podms_users WHERE username='$uname' AND password='$decryption'";
        
                $result = mysqli_query($conn, $sql);
        
                if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result);
                    if ($row['username'] === $uname && $row['password'] === $decryption) {
                        $_SESSION['user_name'] = $row['username'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['IS_LOGIN']='yes';
                        $_SESSION['position'] = $row['position'];
                        $_SESSION['id'] = $row['id'];
                        unset($_SESSION['login_attempts']);
                        unset($_SESSION['last_login_attempt']);
                        header("Location: ../../subsystem_folder/index.php");
                        exit();
                    } else {
                        $_SESSION['last_login_attempt'] = time();
                        header("Location: ../../index.php?error=Incorrect User name or password");
                        exit();
                    }
                } else {
                    $_SESSION['last_login_attempt'] = time();
                    header("Location: ../../index.php?error=Incorrect User name or password");
                    exit();
                }
            }
            
        } else {
            header("Location: ../../index.php");
            exit();
        }
    }
}

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = $_POST['password'];

    $ciphering = "aes-128-ctr";
    $option = 0;
    $decryption_iv = '1234567890123456';
    $decryption_key = 'devanshu';
    $decryption = openssl_encrypt($pass, $ciphering, $decryption_key, $option, $decryption_iv);

    if (empty($uname)) {
        header("Location: ../../index.php?error=User Name is required");
        exit();
    } else if (empty($pass)){
        header("Location: ../../index.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM podms_users WHERE username='$uname' AND password='$decryption'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $decryption) {
                $_SESSION['user_name'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['IS_LOGIN']='yes';
                $_SESSION['position'] = $row['position'];
                $_SESSION['id'] = $row['id'];
                unset($_SESSION['login_attempts']);
                unset($_SESSION['last_login_attempt']);
                header("Location: ../../subsystem_folder/index.php");
                exit();
            } else {
                $_SESSION['last_login_attempt'] = time();
                header("Location: ../../index.php?error=Incorrect User name or password");
                exit();
            }
        } else {
            $_SESSION['last_login_attempt'] = time();
            header("Location: ../../index.php?error=Incorrect User name or password");
            exit();
        }
    }
    
} else {
    header("Location: ../../index.php");
    exit();
}

if (isset($_SESSION['last_login_attempt'])) {
    $time_elapsed = time() - $_SESSION['last_login_attempt'];
    if ($time_elapsed < 70) {
        $wait_time = 70 - $time_elapsed;
        header("Refresh: $wait_time");
    } else {
        unset($_SESSION['last_login_attempt']);
    }
}
