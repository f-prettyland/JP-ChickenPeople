
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://www.cherieblairfoundation.org/wp-content/uploads/2012/08/favicon-3.png">

    <title>Mentee</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/blog/blog.css" rel="stylesheet">



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
    $result = mysql_query("SELECT * FROM mentees  where menteeId = $id;")
    or die(mysql_error());  

    $timelines = mysql_query("SELECT * FROM timeline where userId = $id ORDER BY `id` DESC;")
    or die(mysql_error());

    // store the record of the "example" table into $row
    $row = mysql_fetch_array( $result );
    $bros = array();
    while($bro = mysql_fetch_array($timelines))
      $bros[] = $bro;
    // Print out the contents of the entry 
    $i =0;

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
    <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#timeline" aria-controls="timeline" role="tab" data-toggle="tab">Timeline</a></li>
    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
  	<div role="tabpanel" class="tab-pane fade active" id="profile">

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




    <!-- /.container --></div>
    <!-- PROFILE STUFF ENDS HERE-->

  	<div role="tabpanel" class="tab-pane fade" id="timeline">
  		 <!-- TIMELINE STUFF STARTS HERE-->
<?php
              foreach($bros as $bro){ 
                echo "<h2 class=\"blog-post-title\">".$bro['title']."</h2>";
                echo "<p class=\"blog-post-meta\">".$bro['date']." by ".$row['menteeName']."</p>";
                echo "<p>".$bro['description']."</p>";
                if($bro['photo1']!== NULL){
                  if($bro['photo2']!== NULL){
                    if($bro['photo3']!== NULL){
                      if($bro['photo4']!== NULL){
                         if($bro['photo5']!== NULL){
                              $i =5;              
                          }else{
                            $i =4; 
                          }
                      }else{
                        $i =3; 
                      }
                    }else{
                      $i =2; 
                    }
                  }else{
                    $i =1; 
                  }
                }
                
                 switch ($i) {
                case 0:
                    break;
                case 1:
                    echo "    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\"> ";
                    echo "      <ol class=\"carousel-indicators\">";
                    echo "        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>";
                    echo "        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>";
                    echo "      <div class=\"carousel-inner\" role=\"listbox\">";
                  echo "        <div class=\"item active\">";
                  echo "          <img src=\"/events/".$bro['photo1']." \" alt=\"First slide\">";
                  echo "          <div class=\"container\">";
                  echo "          </div>";
                  echo "        </div>";
                  echo "      </div>";
                  echo "    </div>";
                    break;
                case 2:
echo "    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\"> ";
echo "      <ol class=\"carousel-indicators\">";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>";
echo "      </ol>";
echo "      <div class=\"carousel-inner\" role=\"listbox\">";
echo "        <div class=\"item active\">";
echo "          <img src=\"/events/".$bro['photo1']." \" alt=\"First slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "        <div class=\"item\">";
echo "          <img src=\"/events/".$bro['photo2']."\" alt=\"Second slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "      </div>";
echo "    </div>";
                    break;
                    case 3:
echo "    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\"> ";
echo "      <ol class=\"carousel-indicators\">";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>";
echo "      </ol>";
echo "      <div class=\"carousel-inner\" role=\"listbox\">";
echo "        <div class=\"item active\">";
echo "          <img src=\"/events/".$bro['photo1']." \" alt=\"First slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "        <div class=\"item\">";
echo "          <img src=\"/events/".$bro['photo2']."\" alt=\"Second slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "        <div class=\"item\">";
echo "          <img src=\"/events/".$bro['photo3']."\" alt=\"Third slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "      </div>";
echo "    </div>";
                    break;
                    case 4:
echo "    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\"> ";
echo "      <ol class=\"carousel-indicators\">";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>";
echo "      </ol>";
echo "      <div class=\"carousel-inner\" role=\"listbox\">";
echo "        <div class=\"item active\">";
echo "          <img src=\"/events/".$bro['photo1']." \" alt=\"First slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "        <div class=\"item\">";
echo "          <img src=\"/events/".$bro['photo2']."\" alt=\"Second slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "        <div class=\"item\">";
echo "          <img src=\"/events/".$bro['photo3']."\" alt=\"Third slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "        <div class=\"item\">";
echo "          <img src=\"/events/".$bro['photo4']."\" alt=\"Third slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "      </div>";
echo "    </div>";
                    break;
                    case 5:
echo "    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\"> ";
echo "      <ol class=\"carousel-indicators\">";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>";
echo "        <li data-target=\"#myCarousel\" data-slide-to=\"4\"></li>";
echo "      </ol>";
echo "      <div class=\"carousel-inner\" role=\"listbox\">";
echo "        <div class=\"item active\">";
echo "          <img src=\"/events/".$bro['photo1']." \" alt=\"First slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "        <div class=\"item\">";
echo "          <img src=\"/events/".$bro['photo2']."\" alt=\"Second slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "        <div class=\"item\">";
echo "          <img src=\"/events/".$bro['photo3']."\" alt=\"Third slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "        <div class=\"item\">";
echo "          <img src=\"/events/".$bro['photo4']."\" alt=\"Third slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "        <div class=\"item\">";
echo "          <img src=\"/events/".$bro['photo5']."\" alt=\"Third slide\">";
echo "          <div class=\"container\">";
echo "          </div>";
echo "        </div>";
echo "      </div>";
echo "    </div>";
                    break;
            }
          }
                ?>
  		  <div class="container">

        </div>
  		
	 	 <!-- TIMELINE STUFF ENDS HERE-->
  	</div>


  	<div role="tabpanel" class="tab-pane fade" id="contact">
		<!-- CONTACT STUFF STARTS HERE-->

		<div class="row">
    <div class="col-lg-12">
        <form action="" method="POST" enctype="multipart/form-data" id="form_id">
            <div class="form-group">
                 <h5><label for="inputName">Name</label></h5>

                <input type="text" name="career[name]" class="form-control" tabindex="1" placeholder="Enter your name" pattern="[a-zA-Z. ]{1,50}" required>
            </div>
            <div class="form-group">
                 <h5><label for="inputEmail">Email</label></h5>

                <input type="email" name="career[email]" class="form-control" tabindex="2" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                 <h5><label for="inputMobile">Mobile</label></h5>

                <textarea name="career[message]" class="form-control" tabindex="4"
          placeholder="Write your details" required></textarea>
            </div>
            <div class="form-group">
                 <h5><label for="inputMessage">Message</label></h5>

                <input type="text" name="career[message]" class="form-control" tabindex="4" placeholder="Write your details" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block" tabindex="5">Submit</button>
        </form>
    </div>
</div>

		<!-- CONTACT STUFF ENDS HERE-->

  	</div>

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
