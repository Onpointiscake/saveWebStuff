<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
  </style>
</head>
<body class="red accent-2">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="home.php" class="brand-logo brand-text">Save Web Stuff</a>
           
        </div>
    </nav>

    <section class="container white-text">
        <h4 class="center">Login</h4>
        <form action="config/validate.php" method="POST" class="white add-form">
            <label for="">User:</label>
            <input type="text" name="user" >
            
            <label for="">Password:</label>
            <input type="password" name="password"  >
           
            <div class="center">
                <input type="submit" name="enviar_login" value="enter" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

</body>
</html>