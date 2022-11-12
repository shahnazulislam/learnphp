<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Faild");
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql) or die("Query Faild");

// $row = mysqli_fetch_assoc($result);

/*echo "<pre>";
print_r($row);
echo "</pre>";
*/
/*echo $row['firstname']. " " .$row['lastname'];*/

while($row = mysqli_fetch_assoc($result)){
  echo $row['firstname']. " " .$row['lastname'] . "<br>";
}

echo "shakil khan";

?>