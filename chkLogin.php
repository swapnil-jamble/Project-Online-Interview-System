
<?php
$host = "localhost";
$user = "root";
$pass = "swapnil";
$db   = "nil_events";


echo "<body style =background-image:url('https://images.pexels.com/photos/1005417/pexels-photo-1005417.jpeg?auto=compress&cs=tinysrgb&w=600');background-repeat:no-repeat;background-size:cover;>";

$conn = mysqli_connect($host,$user,$pass,$db);
 if($conn)
   echo "<h1> <center> </center> </h1>";  
 else
   echo "<h1> <center> There is a problem to connect database..</center> </h1>";

   $username = $_POST['username'];
   $password = $_POST['password'];

   $query = "select * from customer where username = '$username' AND password = '$password'";

   $result = mysqli_query($conn,$query);


   $count = mysqli_num_rows($result);

   if(mysqli_num_rows($result)===1)
    {
       $row = mysqli_fetch_assoc($result);
       if($row['username']===$username && $row['password']===$password )
       {
            echo "<h1> <center> Login Successfully</center> </h1>";
         echo "<center> <h1> <button> <a href='BookInterview.html'> Click Here To Book Event </a>  </button> </h1> </center>";

       }       }
       
       else
            echo "<h1> <center> Login Failed, Invalid username & password</center> </h1> ";

 ?>

