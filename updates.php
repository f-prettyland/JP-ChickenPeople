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
  
    $city= $_GET['city'];
    $country= $_GET['country'];
    $product= $_GET['product'];
    $tag= $_GET['tag'];
    $gmail= $_GET['gmail'];
    $phone= $_GET['phone'];
    $story = $_GET['story'];


    $result = mysql_query("UPDATE mentees SET city=$city where menteeId = $id;");
    $result = mysql_query("UPDATE mentees SET country=$country where menteeId = $id;");
    $result = mysql_query("UPDATE mentees SET product=$product where menteeId = $id;");
    $result = mysql_query("UPDATE mentees SET tag=$tag where menteeId = $id;");
    $result = mysql_query("UPDATE mentees SET gmail=$gmail where menteeId = $id;");
    $result = mysql_query("UPDATE mentees SET phone=$phone where menteeId = $id;");
    $result = mysql_query("UPDATE mentees SET story=$story where menteeId = $id;");

    ?>