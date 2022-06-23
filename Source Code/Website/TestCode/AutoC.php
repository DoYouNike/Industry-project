<?Php

$servername = "silva.computing.dundee.ac.uk";
$username = "2019indteam4";
 $password = "5478.ind4.8745";
 $database = "2019indteam4db";

   $conn = mysqli_connect($servername, $username, $password,$database);
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());   
}
  $key = trim($_GET['term']);
  $array = array();
  $query = "SELECT DISTINCT drgDef FROM procedurebylocation WHERE drgDef LIKE '%$key%'";
  $result = mysqli_query($conn, $query);
  if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
if (mysqli_num_rows($result) >0)
{
  while($row= mysqli_fetch_array($result))
  {
    $array[]= $row['drgDef'];
  }
}else {
  echo "No Results are found";
}
  echo json_encode($array);
  mysqli_close($conn);


?>


