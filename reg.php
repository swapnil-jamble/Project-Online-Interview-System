

<?php
$host = "localhost";
$user = "root";
$pass = "swapnil";
$db   = "nil_events";


echo "<body style =background-image:url('https://images.pexels.com/photos/1005417/pexels-photo-1005417.jpeg?auto=compress&cs=tinysrgb&w=600');background-repeat:no-repeat;background-size:cover;>";



$con=mysqli_connect($host,$user,$pass,$db);
if($con) {
echo "<h1> <center> Connection successful </center> </h1>";
}
else {
  echo "Connection error";
}


$username =$_POST['username'];
$email =$_POST["email"];
$password =$_POST["password"];

$sql = "INSERT INTO customer(username,email,password) VALUES ('$username','$email','$password')";

if (mysqli_query($con, $sql)) {
  echo "<h1> <center> New record created successfully </center> </h1>";
  echo "<h1> <center>  <a href='login.html'> Click me to Login </a>  </center> </h1>";
}
 else {
  echo "There is some Problem Plz Register Again" ;
}
 

mysqli_close($con);
?>

















