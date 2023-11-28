<?php 
function registr($name_registr,$email_registr,$password_registr){
    require '../conn.php';
    if(empty($name_registr)){
        echo "Atinizdi toliq jazin";
    }elseif(empty($email_registr)){
        echo "Emaildi toliq jazin";
    }elseif(empty($password_registr)){
        echo "Paroldi toliq jazin";
    }elseif(!filter_var($email_registr,FILTER_VALIDATE_EMAIL)){
        echo "Emaildi duris jazin";
    }else{
        $sql = $conn->prepare("INSERT INTO registr (name,email,password) VALUES(?,?,?)");
        $sql->execute([$name_registr,$email_registr,$password_registr]);
    }
}
function login($email_login,$password_login){
    require '../conn.php';
    if(empty($email_login)){
        echo "Elektron pochtani toliq jazin";
    }elseif(empty($password_login)){
        echo "Paroldi toliq jazin";
    }elseif(strlen($email_login)<3){
        echo "Elektron pochta 3 haripten az";
    }elseif(strlen($password_login)<8){
        echo "Parol 8 den az";
    }elseif(!filter_var($email_login,FILTER_VALIDATE_EMAIL)){
        echo "Elektron pocchtani duris jazin'";
    }else{
        $sql = $conn->prepare("SELECT * FROM registr WHERE email = '$email_login' && password = '$password_login'");
        $sql->execute();
        $posts = $sql->fetch();
        $mylogin = $posts['email'];
        $mypass = $posts['password'];
        if($mylogin != $email_login){
            echo "Login yaki parol qate!";
        }elseif($mypass != $password_login){
            echo "Login yaki parol qate!";
        }else{
            echo "Siz saytqa kirdiniz!";
        }
    }
}
?>