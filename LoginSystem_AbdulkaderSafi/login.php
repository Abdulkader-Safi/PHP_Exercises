<?php

session_start();
include 'db_conn.php';


if (isset($_POST['uname']) && isset($_POST['pass'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pass']);

    if(empty($uname)) {
        header("Location: index.php?error=User Name is required");
    } else if(empty($pass)) {
        header("Location: index.php?error=Password is required");
    } else {
        $sql = "SELECT * FROM users WHERE user_name = '$uname' AND pass = '$pass'";
        echo "test2";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if($row['user_name'] === $uname && $row['pass'] === $pass) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                // echo "test";
                header("Location: home.php");
                exit();
            } else {
                header("Location: index.php?error=Incorrect User Name or Password");
                exit();
            }
        } else {
            header("Location: index.php?error=Incorrect User Name or Password");
            exit();
        }
    }
}