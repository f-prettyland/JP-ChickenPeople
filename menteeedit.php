
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://www.cherieblairfoundation.org/wp-content/uploads/2012/08/favicon-3.png">

    <title>Edit Profile</title>

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


      $city= $_POST['city'];
      $country= $_POST['country'];
      $product= $_POST['product'];
      $tag= $_POST['tag'];
      $gmail= $_POST['gmail'];
      $phone= $_POST['phone'];
      $story = $_POST['story'];
     

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
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><img alt="Brand" src="http://www.cherieblairfoundation.org/wp-content/uploads/2012/07/CBFW_LogoWeb.png" width="155"></li>

            <li><a href="./home.php">Home</a></li>
            <?php
        if(!isset($_COOKIE[$cookie_name])) {
          echo"<li ><a href=\"./login.php\">Log In</a></li>";
        }
        else{
          echo"<li ><a href=\"./logout.php\">Logout</a></li>";
        }
      ?>
            <li><form class="navbar-form navbar-right" action="searchresult.php" method="get">
            <div class="form-group" >
              <input type="text" placeholder="Search" name="search">
            </div>
           <button type="submit" class="btn btn-warning">Search</button>

          </form></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
</br>
</br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#timeline" aria-controls="timeline" role="tab" data-toggle="tab">Timeline</a></li>
  </ul>

</br>
<div class="row">
  <form method="post" action="editland.php">
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#F5DA81">
              <h3 class="panel-title" >Your details</h3>
            </div>
            <div class="panel-body">
             City:<br>
                <input type="text" name="city" value =<?php echo "\"".$row['city']."\""; ?> size="25">
              <br>
              Country:<br>
       
              <input type="text" name="country" value=<?php echo "\"".$row['country']."\""; ?> size="25">
              <br>
              Product:<br>
            
              <input type="text" name="product" value=<?php echo "\"".$row['product']."\""; ?> size="25">
              <br>
              Tag:<br>
         
              <input type="text" name="tag" value=<?php echo "\"".$row['tag']."\""; ?> size="25">
              <br>
              Gmail:<br>
              <input type="text" name="gmail" value=<?php echo "\"".$row['gmail']."\""; ?> size="25">
              <br>
              Phone Number:<br>
              <input type="text" name="phone" value=<?php echo "\"".$row['phone']."\""; ?> size="25">
               <br>
               <button type="submit" class="btn btn-warning">Submit Changes</button>
              <br>
          
            </div>
          </div>
      </div>
      <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#F5DA81">
              <h3 class="panel-title" >Your story</h3>
            </div>
            <div class="panel-body">
              <textarea rows="15" cols="60" name="story"><?php echo $row['story']; ?></textarea>
            </div>
          </div>
      </div>
        </form>
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
