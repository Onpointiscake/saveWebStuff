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
      .big-container{
          background: #DCD6F7;
          margin-top:0;
          padding-bottom: 20px;
          padding-top: 1px;
      }
      .landing-btn{
          background: #424874;
      }
      .title-box{
          padding: 0;
          margin-bottom: 13px;
      }
      .subtitle-box h5{
          margin-bottom: 20px;
          margin-top: 15px;
      }
  </style>
</head>
<body class="red accent-2">
    <nav class="white nav-bla">
        <div class="container">
            <a href="home.php" class="brand-logo brand-text">Save Web Stuff</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li><a href="login.php" class="btn brand z-depth-0">Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="container big-container">
        <div class="row center title-box">
            <h3>Capture Everything</h3>
        </div>
        <div class="row center title-img">
            <img width="50%" src="assets/landing_page2.jpg"/>
        </div>
        <div class="row center subtitle-box">
            <h5>A simple, fast, and easy way to save anything worthwile you find in the web</h5>
            <a href="signup.php" id="download-button" class="btn-large waves-effect waves-light landing-btn lighten-1">Get Started</a>
        </div>
    </div>


    <?php include('templates/footer.php'); ?>
</html>