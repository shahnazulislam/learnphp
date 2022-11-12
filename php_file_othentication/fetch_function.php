<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Faild");
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql) or die("Query Faild");

$row = mysqli_fetch_field($result);

echo "<pre>";
print_r($row);
echo "</pre>";

/*foreach ($row as $data) {
  echo $data['id']. " ". $data['firstname']. " ". $data['lastname']. " ". $data['email']. "<br>";
}*/

//echo $row[1]. " " .$row[2];

/*while($row = mysqli_fetch_assoc($result)){
  echo $row['firstname']. " " .$row['lastname'] . "<br>";
}*/


?>