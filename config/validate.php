<?php

try{
    include('db_connection.php');
    $sql="SELECT * FROM users WHERE user= :user AND password= :password";
    $result=$connect->prepare($sql);
    $user=htmlentities(addslashes($_POST["user"]));
    $password=htmlentities(addslashes($_POST["password"]));

    $result->bindValue(":user", $user);
    $result->bindValue(":password", $password);
    $result->execute();

    $register_count=$result->rowCount();

    if($register_count!=0){
        session_start();
        $_SESSION["user"]=$_POST['user'];

        header('Location: ../home.php');
    }else{
        header('Location: ../login.php');
    }
} catch(Exception $e){
     die("Error " . $e->getMessage());
}

?>