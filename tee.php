
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
    echo "Connected to MySQL<br>";
    $result = mysql_query("SELECT * FROM mentees where menteeId = 0")
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

            <li>Home</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="active"><a href="#about">NAME</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="row">

        <div class="col-sm-4">
          <ul class="list-group">
            <li class="list-group-item"><img alt="Brand" width="20"src="http://www.cherieblairfoundation.org/wp-content/uploads/2012/07/CBFW_LogoWeb.Png"></li>
            <li class="list-group-item"><?php echo "Name: ".$row['menteeName']; ?></li>
            <li class="list-group-item"><?php echo "City: ".$row['city']; ?></li>
            <li class="list-group-item">Country</li>
          </ul>
        </div>
        <div class="col-sm-8">
          <div class="col-sm-4">
              
            <h1>PRODUCT NAME</h1>
            <p class="lead">Prod Sssssssssssssssssss sssssssssssss sssssssssss ssssssssssss sssssssssssssssssss</p>
          </div><div class="col-sm-4">
              
            <h1>STORY</h1>
            <p class="lead">Where I lived Where I lived Where I lived Where I lived Where I lived Where I lived Where I lived Where I lived Where I lived Where I lived Where I lived Where I lived Where I lived Where I lived Where I lived Where I lived </p>
          </div>
        </div>
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
