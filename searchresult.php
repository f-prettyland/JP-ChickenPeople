    
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
    $result = mysql_query("SELECT * FROM mentees where tag LIKE %$searchcrit% OR city = $searchcrit OR menteeName LIKE %$searchcrit% OR country = $searchcrit")
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
          <a class="navbar-brand" href="./home.html">Cherie Blaire Project Network</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
            <li><img alt="Brand" src="http://www.cherieblairfoundation.org/wp-content/uploads/2012/07/CBFW_LogoWeb.png" width="300"></li>

            <li><a href="./home.html">Home</a></li>
            <li class="active"><a href="./login.html">Log In</a></li>
            <li><form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="search" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Search</button>
          </form></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  </br></br></br></br>
  <div class="container">

 <div class="panel panel-success">
            <div class="panel-heading" style="background-color:#F5DA81; color:#FE9A2E">
              <h1 class="panel-title" style="text-shadow:  1px 1px 0.5px #1C1C1C;"> <font size="5">Name Surname</font> </h1>
            </div>
            <div class="panel-body">
              <div class="row clearfix">
        <div class="col-md-3 column" style="background-color:#F5DA81">
          <h4>
            <center>
            </br>
              <h1 class="panel-title" style="text-shadow:  1px 1px 1px #1C1C1C;">Image</h1>
            </br></br>
            </center>
          </h4>
        </div>
        <div class="col-md-4 column">
          <h4>
             <h1 class="panel-title" style="text-shadow:  1px 1px 1px #1C1C1C;">
                <font size="4" color="#FE9A2E">Product:</font> blabla from php
             </h1>
           </br>
             <h1 class="panel-title" style="text-shadow:  1px 1px 1px #1C1C1C;">
              <font size="4" color="#FE9A2E">Location: </font> blabla from php
            </h1>
          </h4>
        </div>
      </div>
            </div>
          </div>

<table class="striped">
        <tr class="header">
            <td>Id</td>
            <td>Title</td>
            <td>Date</td>
        </tr>
  <?php
           $i = 0;
           while ($row = mysql_fetch_array($result)) {
               $class = ($i == 0) ? "" : "alt";
               echo "<tr class=\"".$class."\">";
               echo "<td>".$row[menteeName]."</td>";
               echo "<td>".$row[product]."</td>";
               echo "<td>".$row[story]."</td>";
               echo "</tr>";
               $i = ($i==0) ? 1:0;
           }

        ?>
    </table>
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
