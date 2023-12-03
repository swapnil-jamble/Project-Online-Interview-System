
<?php
$host = "localhost";
$user = "root";
$pass = "swapnil";
$db   = "nil_events";

$con=mysqli_connect($host,$user,$pass,$db);
if($con) {
   echo "<h1> <center>Sucessfully Connected </center> </h1>";
}
else {
  echo "Connection error";
}

echo "<body style =background-image:url('https://images.pexels.com/photos/1005417/pexels-photo-1005417.jpeg?auto=compress&cs=tinysrgb&w=600');background-repeat:no-repeat;background-size:cover;>";
$username =$_POST['name'];
$email =$_POST["email"];
$ename =$_POST["ename"];
$date = $_POST['AppointmentDate'];

$sql = "INSERT INTO BookInterview(username,email,ename,date) VALUES ('$username','$email','$ename','$date')";

if (mysqli_query($con, $sql)) {
    echo "<h1> <center>Sucessfully Inserted Information </center> </h1>";
    echo "<h1> <center>I will Message you on your email </center> </h1>";
    echo "<h1> <center> If any query email me : learnworld8@gmail.com</center> </h1>";


} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($con);
?>






