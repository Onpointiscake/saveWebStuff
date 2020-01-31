<?php 
  
    include('config/db_connection.php');

   if(isset($_POST['send_register'])){

        if(!empty($_POST['user']) && !empty($_POST['password'])){
            $sql = "INSERT INTO users (user,password) VALUES (:user, :password)";
            $statement = $connect->prepare($sql);
            $statement->bindParam(":user", $_POST['user']);
            //$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $statement->bindParam(":password",$_POST['password']);
            $statement->execute();

            header('Location: login.php');

        } else { 
            echo "<script>alert('Por favor completa todos los campos')</script>"; 
        }

   }
   
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Save Web Stuff | Web Saviour </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
	  .brand{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #cbb09c !important;
  	}
      .add-form{
          max-width: 460px;
          margin: 20px auto;
          padding: 20px;
      }
      .update-form{
          padding: 0px;
          margin: 0px;
      }
      .delete-form{
          margin-top: 0px;
          padding-top: 0px;
      }
      .forms-container{
          display: flex;
          justify-content: space-around;
          padding-bottom: 20px;
      }
      a{ color: #3d5afe; font-weight: bold; }
      .milink { color: inherit; } 
      li{
        list-style-type:none !important;
      }
      .save-btn{
          margin-top: 10px;
      }
  </style>
</head>
<body class="red accent-2">
<nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">Save Web Stuff</a>
        </div>
    </nav>

    <section class="container white-text">
        <h4 class="center">Sign Up</h4>
        <form action="signup.php" method="POST" class="white add-form">
            <label for="">Create a user:</label>
            <input type="text" name="user" >
            
            <label for="">Create a Password:</label>
            <input type="password" name="password"  >

            <label for="">Repeat the Password:</label>
            <input type="password" name="repeatpassword"  >
           
            <div class="center">
                <input type="submit" name="send_register" value="register" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
   

    
</html>