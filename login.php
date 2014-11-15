
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://www.cherieblairfoundation.org/wp-content/uploads/2012/08/favicon-3.png">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">
    <link href="./login.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./home.html">Cherie Blaire Project Network</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
            <li><img alt="Brand" src="http://www.cherieblairfoundation.org/wp-content/uploads/2012/07/CBFW_LogoWeb.png" width="200"></li>

            <li><a href="./home.html">Home</a></li>
            <li class="active"><a href="./login.html">Log In</a></li>
            <li><form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="search" class="form-control">
            </div>
            <button type="submit" class="btn btn-warning">Search</button>
          </form></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container">


<?php
if (!isset($_POST["submit_b"])){

   echo "<div class=\"container\">

      <form class=\"form-signin\" role=\"form\" action=".$_SERVER['PHP_SELF']." method=\"post\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <input type=\"text\" name=\"username_\" class=\"form-control\" placeholder=\"Username\" method=\"post\" action=\"checklogin.php\" required autofocus>
        <input type=\"password\" name=\"password_\" class=\"form-control\" placeholder=\"Password\" method=\"post\" action=\"checklogin.php\" required>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" value=\"remember-me\"> Remember me
          </label>
        </div>
        <button class=\"btn btn-lg btn-warning btn-block\" type=\"submit\" name=\"submit_b\" id=\"submit_b\" value=\"Login\">Log in</button>
      </form>";}

  else {

    $hostname = "localhost";
    $username = "root";
    $password_serv = "cfg2014!";
    $dbhandle = mysql_connect($hostname, $username, $password_serv) 
      or die("Unable to connect to MySQL");
    mysql_select_db("data") or die(mysql_error());
 
  $username = $_POST["username_"];
  $password = $_POST["password_"];


  $result = mysql_query("SELECT * from users where userId = $username and password = $password")
      or die(mysql_error()); 
  $result_array = mysql_num_rows($result);
  echo "<p>".sizeof($result_array)."</p>";
  echo "<p>".var_dump($result_array)."</p>";
  if (sizeof($result_array) != 1) {
    echo "<p>Invalid username/password combination</p>";
    header("Location: ./login.php");
  } else {
    echo "<p>".$result.$result_array."</p>";
    #header("Location: ./mentee.php?id=".$username."");
      
$cookie_name = "Auth";
$cookie_value = $username;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' does not exist!";
} else {
    echo "Cookie is named: " . $cookie_name . "<br>Value is: " . $_COOKIE[$cookie_name];
}
  }
}
?>

    </div> <!-- /container -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
