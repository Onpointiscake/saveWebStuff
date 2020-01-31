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
  </style>
</head>
<body class="red accent-2">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="home.php" class="brand-logo brand-text">Save Web Stuff</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="login.php" class="btn brand z-depth-0">Login</a></li>
            </ul>
        </div>
    </nav>

    <?php include('templates/footer.php'); ?>
</html>