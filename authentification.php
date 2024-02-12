<?php
if(isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if($login === "admin" && $password === "admin") {
        echo "Vous êtes connecté";
    }
    else{
            echo"page sera réaffichée";
        }
    } 
    else {
        header("Location: authentification.html"); 
       }





?>