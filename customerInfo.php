

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "nil_events";

echo "<body style =background-image:url('https://images.pexels.com/photos/1005417/pexels-photo-1005417.jpeg?auto=compress&cs=tinysrgb&w=600');background-repeat:no-repeat;background-size:cover;>";

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM bookinterview";
$result = mysqli_query($conn, $sql);

 echo "<center>";
 echo "<BR><B> Booking Info:</B>";
 echo "<table border=2>"; 
     echo " <th> Username </th>
      <th> Email </th>
       <th> Event Name </th>
        <th> Date </th>";

if (mysqli_num_rows($result) > 0) 
{
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
   {

    echo " <tr> ";
    echo "<td> $row[username] </td> ";
     echo "<td> $row[email] </td> ";
      echo "<td> $row[ename] </td> ";
       echo "<td> $row[date] </td> ";
     echo "</tr>";
   
   }
 
   echo "</table>";
   echo "</center>";
 }
 else {
  echo "0 results";
}

mysqli_close($conn);
?>