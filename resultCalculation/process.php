<?php

session_start();

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $num1 = validate($_POST['num1']);
    $num2 = validate($_POST['num2']);
    $num3 = validate($_POST['num3']);

    if (empty($num1)) {
        header("Location: index.php?error=Num1 is required");
    } else if (empty($num2)) {
        header("Location: index.php?error=Num2 is required");
    } else if (empty($num3)) {
        header("Location: index.php?error=Num3 is required");
    } else {
        $result = (float)$num1 * (float)$num2 * (float)$num2;
        $_SESSION['result'] = (float)$result;

        header("Location: result.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
