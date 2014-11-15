    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

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
    $searchcrit = $_GET['search'];
    $result = mysql_query("SELECT * FROM mentees where tag LIKE '%$searchcrit%'OR city = '$searchcrit' OR menteeName LIKE '%$searchcrit%' OR country = '$searchcrit'")
    or die(mysql_error());  

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
            <li ><a href="./login.php">Log In</a></li>
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

  </br></br></br></br>
  <div class="container">
<?php
           while ($row = mysql_fetch_array($result)) {
            $stringPic =  "\"./photos/".$row['picName']."\"";
 echo "<div class=\"panel panel-success\">";
      echo "      <div class=\"panel-heading\" style=\"background-color:#F5DA81; color:#FE9A2E\">";
      echo "        <h1 class=\"panel-title\" style=\"text-shadow:  1px 1px 0.5px #1C1C1C;\"> <font size=\"5\"><a href=\"./mentee.php?id=".$row['menteeId']."\">".$row[menteeName]."</a></font> </h1>";
      echo "      </div>";
      echo "      <div class=\"panel-body\">";
      echo "        <div class=\"row clearfix\">";
      echo "  <div class=\"col-md-2 column\" style=\"background-color:#F5DA81\">";
      echo "    <h4>";
      echo "      <center>";
      echo "        <h1 class=\"panel-title\" style=\"text-shadow:  1px 1px 1px #1C1C1C;\">";
      echo "          <a href=\"./mentee.php?id=".$row['menteeId']."\"><img alt=\"140x140\" src=".$stringPic." class=\"img-rounded\" />";
      echo "        </h1>";
      echo "      </center>";
      echo "    </h4>";
      echo "  </div>";
      echo "  <div class=\"col-md-4 column\">";
      echo "    <h4>";
      echo "       <h1 class=\"panel-title\" style=\"text-shadow:  1px 1px 1px #1C1C1C;\">";
      echo "          <font size=\"4\" color=\"#FE9A2E\">Product:</font>".$row[product]."";
      echo "       </h1>";
      echo "     </br>";
      echo "       <h1 class=\"panel-title\" style=\"text-shadow:  1px 1px 1px #1C1C1C;\">";
      echo "        <font size=\"4\" color=\"#FE9A2E\">Location: </font>".$row[country];
      echo "      </h1>";
      echo "    </h4>";
      echo "  </div>";
      echo "</div>";
      echo "      </div>";
      echo "    </div>";
    }
?>
</div>

</div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
