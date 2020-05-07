<?php
    include 'connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $idCheckQuery = "SELECT u.id_permission FROM userlogin u WHERE _username = '$username' and _password = '$password';";
    $idCheck = mysqli_query($con, $idCheckQuery) or die("2: Id check query failed"); //error code #2 = id check query failed

    if(mysqli_num_rows($idCheck) > 0){
        while($row = mysqli_fetch_assoc($idCheck)){
            if ($row['id_permission'] == '1') {
                return redirect("http://histones.github.io/index.html");
            } 
            else {
                if ($row['id_permission'] == '2') {
                    return redirect("http://histones.github.io/creatorPage.html");
                }
                else {
                    if ($row['id_permission'] == '3') {
                        return redirect("http://histones.github.io/creatorPage.html");
                    }
                    else {
                        echo "Acesso negado!";
                    }
                }

            }
        }
    }else{
        echo "5: Usuário ou senha incorretos!";
    }

    function redirect($url) {
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }