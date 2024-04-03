<?php
// session_start();
// session_unset();
// session_destroy();

// unset($_SESSION['uid']);
// unset($_SESSION['username']);
// unset($_SESSION['useremail']);
// unset($_SESSION['logged_in']);

// header('location:index.php');
?>
<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../login.php");
            }
        }else{
            header("location: ../users.php");
        }
    }else{  
        header("location: ../login.php");
    }
?>