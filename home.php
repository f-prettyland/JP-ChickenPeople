
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://www.cherieblairfoundation.org/wp-content/uploads/2012/08/favicon-3.png">

    <title>Home Page</title>
<style>
      html, body, #map-canvas {
         width: 90%;height: 90%; margin: 0 auto; padding: 0; 
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript" src="http://maps.stamen.com/js/tile.stamen.js?v1.3.0"></script>
 
    <script>
// This example uses SVG path notation to add a vector-based symbol
// as the icon for a marker. The resulting icon is a star-shaped symbol
// with a pale yellow fill and a thick yellow border.



var layer = "watercolor";
var geocoder;


function initialize() {

  geocoder = new google.maps.Geocoder();
  var mapOptions = {
    zoom: 1,
    center: new google.maps.LatLng(0, 0),
disableDefaultUI: true,
mapTypeControl: false,
      draggable: false,
      scaleControl: false,
      scrollwheel: false,
        disableDoubleClickZoom: true,
      navigationControl: false,
      streetViewControl: false,

    mapTypeId: layer,
    mapTypeControlOptions: {
        mapTypeIds: [layer]
    }
  };




  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

map.mapTypes.set(layer, new google.maps.StamenMapType(layer));
<?php

    $hostname = "localhost";
    $username = "root";
    $password_serv = "cfg2014!";
    $dbhandle = mysql_connect($hostname, $username, $password_serv) 
      or die("Unable to connect to MySQL");
    mysql_select_db("data") or die(mysql_error());

  $result = mysql_query("SELECT menteeId, menteeName, city, country, picName from mentees")
      or die(mysql_error()); 

  while(($row = mysql_fetch_assoc($result)) != NULL) {

$city = $row['city'];
$country = $row['country'];
$username = $row['menteeId'];
$photo = $row['picName'];
$name = $row['menteeName']
?>

var image<?php echo $username ?> = <?php echo "\"".$photo."\""; ?>;
var city_name = <?php echo "\"".$city."\""; ?>;
var country_name = <?php echo "\"".$country."\""; ?>;
var mentee = <?php echo "\"".$username."\""; ?>;
var name<?php echo $username ?> = <?php echo "\"".$name."\""; ?>;
var web_location<?php echo $username ?> = "./mentee.php?id=" + mentee;

geocoder.geocode({ 'address': city_name + ", " + country_name}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        var marker = new google.maps.Marker({
            map: map,
            icon: "./photos/" + image<?php echo $username ?> ,

            position: results[0].geometry.location
        });
        google.maps.event.addListener(marker, 'click', function() {
    // Set the info window's content and position.
    document.getElementById("other-stuff").innerHTML = "<h3> Mentee name: " + name<?php echo $username ?> + "</h3> <h3> <a href=\"web_location<?php echo $username ?>Click here</a> to go to her project page!</h3>"    });
      }
    });
<?php
}
?>

}



google.maps.event.addDomListener(window, 'load', initialize);

    </script>
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

            <li class="active"><a href="./home.php">Home</a></li>
            <li><a href="./login.php">Log In</a></li>
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

      <div class="starter-template">
        <h1>Empowering women, creating connections</h1>
        <p class="lead">Some text describing the project.</p>
      </div>
    </div><!-- /.container -->
   
    <div id="other-stuff">
    </div>

      <div id="map-canvas"></div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
