
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


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "cfg2014!";

    $dbhandle = mysql_connect($hostname, $username, $password) 
      or die("Unable to connect to MySQL");
    mysql_select_db("data") or die(mysql_error());
    
    $cookie_name = "Auth";
    if(!isset($_COOKIE[$cookie_name])) {
           echo "Cookie named '" . $cookie_name . "' does not exist!";
    } else {
           $id = $_COOKIE[$cookie_name];
    }

    //$id = $_GET['id'];
    $result = mysql_query("SELECT * FROM mentees where menteeId = $id;")
    or die(mysql_error());  

   

    // store the record of the "example" table into $row
    $row = mysql_fetch_array( $result );
    // Print out the contents of the entry 

    ?>

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

            <li class="active"><a href="./home.html">Home</a></li>
            <li><a href="./login.html">Log In</a></li>
            <li><form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="search" class="form-control">
            </div>
            <button type="submit"class="btn btn-warning">Search</button>
          </form></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
</br>
</br>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Timeline</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
</br>

<div class="row">
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#F5DA81">
              <h3 class="panel-title" >Your details</h3>
            </div>
            <div class="panel-body">
             City:<br>
              <input type="text" name="city" value =<?php echo "\"".$row['city']."\""; ?> size="25">
               <button type="button" class="btn btn-sm btn-warning">Modify</button> 
              <br>
              Country:<br>
              <input type="text" name="country" value=<?php echo "\"".$row['country']."\""; ?> size="25">
               <button type="button" class="btn btn-sm btn-warning">Modify</button> 
              <br>
              Product:<br>
              <input type="text" name="product" value=<?php echo "\"".$row['product']."\""; ?> size="25">
               <button type="button" class="btn btn-sm btn-warning">Modify</button> 
              <br>
              Tag:<br>
              <input type="text" name="tag" value=<?php echo "\"".$row['tag']."\""; ?> size="25">
               <button type="button" class="btn btn-sm btn-warning">Modify</button> 
              <br>
              Gmail:<br>
              <input type="text" name="gmail" value=<?php echo "\"".$row['gmail']."\""; ?> size="25">
               <button type="button" class="btn btn-sm btn-warning">Modify</button> 
              <br>
              Phone Number:<br>
              <input type="text" name="phone" value=<?php echo "\"".$row['phone']."\""; ?> size="25">
               <button type="button" class="btn btn-sm btn-warning">Modify</button> 
              <br>
              Do you want your contact details to remain private?<br>
              <input type="checkbox" name="option3" value="Cheese">Protect my data<br> 
            </div>
          </div>
      </div>
      <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#F5DA81">
              <h3 class="panel-title" >Your story</h3>
            </div>
            <div class="panel-body">
              <textarea rows="15" cols="60" name="story">
              <?php echo "\"".$row['story']."\""; ?></textarea>
               <button type="button" class="btn btn-sm btn-warning">Modify</button> 
            </div>
          </div>
      </div>
    </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>