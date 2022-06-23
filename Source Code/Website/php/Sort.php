<?Php
include ('dbConnection.php');
$sql = "SELECT * FROM procedurebylocation ORDER BY averageTotalPayments ASC";


$sql = "SELECT * FROM procedurebylocation ORDER BY averageMedicarePayments ASC";


$sql = "SELECT * FROM procedurebylocation ORDER BY averageCoveredCharges ASC";


$sql = "SELECT * FROM procedurebylocation ORDER BY totalDischarges ASC";


?>
