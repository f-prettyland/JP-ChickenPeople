
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
    $id = $_GET['id'];
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

            <li ><a href="./home.php">Home</a></li>
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

    <div class="container">
</br>
</br>
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#timeline" aria-controls="timeline" role="tab" data-toggle="tab">Timeline</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
  	<div role="tabpanel" class="tab-pane fade" id="profile">

  	<!-- PROFILE STUFF STARTS HERE-->
  	<div class="container">
	<div class="row clearfix">
		<div class="col-md-2 column">
			<h3>
        <?php $stringPic =  "\"./photos/".$row['picName']; 
        $stringPic .= "\""; ?>
			<img alt="140x140" src=  <?php echo $stringPic;?> class="img-rounded" />
				<?php echo "".$row['menteeName']; ?>
			</h3>
		</div>
		<div class="col-md-6 column">
            <h3><?php echo "".$row['product']; ?></h3>
			<p>
				<?php echo "".$row['story']; ?>
			</p>
		</div>
		<div class="col-md-4 column">
			 <address> <strong>Contact Info.</strong><br /> <?php echo "".$row['city']; ?><br /> <?php echo "".$row['country']; ?></address>

             <p>Tags:<br /> <?php echo "".$row['tag']; ?></p>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
		</div>
		<div class="col-md-6 column">
			 <button type="button" class="btn btn-default">Contact</button>
		</div>
		<div class="col-md-4 column">
		</div>
	</div>
</div>



    <script>
  		$(function () {
    		$('#myTab a:last').tab('show')
  		})
	</script>

    <!-- /.container --></div>
    <!-- PROFILE STUFF ENDS HERE-->

  	<div role="tabpanel" class="tab-pane fade" id="timeline">timeline</div>
  	<div role="tabpanel" class="tab-pane fade" id="messages">messages</div>

  </div>

</div>
</br>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
