<?Php
 $servername = "silva.computing.dundee.ac.uk";
  $username = "2019indteam4";
   $password = "5478.ind4.8745";
   $database = "2019indteam4db";
 
     $conn = mysqli_connect($servername, $username, $password,$database);
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());   
}
if ($_POST['search'] && $_POST['state']) {
$queryKey="";
if(isset($_POST['search']))
{
    $queryKey = $_POST['search'];
}
$queryAddress="";
if(isset($_POST['zipCode']))
{
$queryAddress =$_POST['zipCode'];
}
$queryState="";
if(isset($_POST['state']))
{
$queryState=$_POST['state'];
}
$queryPrice ="1000000";
if(isset($_POST['price'])){
$queryPrice =$_POST['price'];
}

/*$queryAddress =trim($_GET['keyZipCode']);*/

/*$queryTable =trim($_GET['keytable'] + "results");*/
/*
$query = "SELECT * FROM procedurebylocation WHERE drgDef LIKE '%$queryKey%' ORDER BY drgDef, CASE WHEN providerZipCode LIKE '%$queryAddress%' THEN 0 ELSE 1 END, providerZipCode ASC";
$results = mysqli_query($conn,$query);
if (!$results) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

if (mysqli_num_rows($results) >0)
{
    while($row= mysqli_fetch_array($results))
    {
        foreach($row as $key => $var)
        {
            echo $key . ' = ' . $var . '<br />';
        }
    } 
} else {
    echo "No Results are found";
}
*/
/* this display the results with the most recent year first and followed by previous year*/

$query = "SELECT * FROM testpurp WHERE drgDef Like '%$queryKey%' AND providerState Like '%$queryState%' AND averageTotalPayments <= '$queryPrice'  GROUP BY providerName ORDER BY drgDef, year_ DESC, CASE WHEN providerZipCode LIKE '%$queryAddress%' THEN 0 ELSE 1 END, providerZipCode ASC";
$results = mysqli_query($conn,$query);
if (!$results) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

if (mysqli_num_rows($results) >0)
{
    while($row= mysqli_fetch_array($results))
    {
        foreach($row as $key => $var)
        {
            echo $key . ' = ' . $var . '<br />';
        }
    } 
} else {
  ;
    echo "No Results are found";
}

}else {
    echo "Please enter both procedure and State";
}

/* this will only display the result form the equivalent yeartable base on the year user select */
/*
$query = "SELECT * FROM $queryTable WHERE year_ IN(SELECT MAX( year_ ) FROM $queryTable WHERE drgDef LIKE '%$queryKey%' Or id LIKE '%$queryKey%' GROUP BY providerName )ORDER BY drgDef, year_ DESC, CASE WHEN providerZipCode LIKE '%$queryAddress%' THEN 0 ELSE 1 END, providerZipCode ASC";
$results = mysqli_query($conn,$query);
if (!$results) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

if (mysqli_num_rows($results) >0)
{
    while($row= mysqli_fetch_array($results))
    {
        foreach($row as $key => $var)
        {
            echo $key . ' = ' . $var . '<br />';
        }
    } 
} else {
    echo "No Results are found";
}*/

?>
