<?php
    var_dump($_POST);
    // Super Global Variable $_
    // $_REQUEST, $_SEVER, $_POST, $_GET, $_FILES, $_SESSION

    // $name = $_GET["name"];
    // $email = $_GET["email"];
    // $password = $_GET["password"];

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $photo = $_FILES["photo"];
    echo "<h1>$name and $password</h1>";
    print_r($photo);
?>