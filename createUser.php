<?php
    include 'connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkQuery = "SELECT _username FROM userlogin WHERE _username = '$username';";
    $check = mysqli_query($con, $checkQuery) or die("2: falha select");
    if (mysqli_num_rows($check) > 0) {
        echo "usuario ja existe";
    } else {
        //encriptar senha
        $insertQuery = "INSERT INTO userlogin(_username, _password, id_permission) VALUES('$username', '$password', 1);";
        $insert = mysqli_query($con, $insertQuery) or die("2: falha insert");

        if($insert) {
            echo "usuario cadastrado com sucesso";
        } 
        else {
            echo "falha";
        }
    }
