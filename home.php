
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
 <?php
    $hostname = "localhost";
    $username = "root";
    $password = "cfg2014!";

    $dbhandle = mysql_connect($hostname, $username, $password) 
      or die("Unable to connect to MySQL");
    mysql_select_db("data") or die(mysql_error());
    echo "Connected to MySQL<br>";
    $id = $_GET['id'];
    $result = mysql_query("SELECT * FROM mentees")
    or die(mysql_error());  

    ?>
    <script>
// This example uses SVG path notation to add a vector-based symbol
// as the icon for a marker. The resulting icon is a star-shaped symbol
// with a pale yellow fill and a thick yellow border.



var layer = "watercolor";



function initialize() {

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
  var geocoder;
geocoder = new google.maps.Geocoder();
map.mapTypes.set(layer, new google.maps.StamenMapType(layer));
geocoder.geocode( { 'address': "London"}, function(results, status) { });
  var marker1 = new google.maps.Marker({
    position: results[0].geometry.location,
    icon: "http://www.geekchamp.com/upload/symbolicons/animals/1f43a-wolf%20face.png",
    map: map
  });
    google.maps.event.addListener(marker1, 'click', function() {
    // Set the info window's content and position.
    document.getElementById("other-stuff").innerHTML = "beep";
    });


  var marker2 = new google.maps.Marker({
    position: new google.maps.LatLng(-25.363882, 0.044922),
    icon: "http://www.geekchamp.com/upload/symbolicons/animals/1f434-horse%20face.png",
    map: map
  });
    google.maps.event.addListener(marker2, 'click', function() {
    // Set the info window's content and position.
    document.getElementById("other-stuff").innerHTML = "boop";
    });

 infoWindow = new google.maps.InfoWindow();

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

      <div class="starter-template">
        <h1>Empowering women, creating connections</h1>
        <p class="lead">Some text describing the project.</p>
      </div>
    </div><!-- /.container -->

      <div id="map-canvas"></div>
    <div id="other-stuff"></div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>