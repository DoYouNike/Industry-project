<?php
$drgID = "";
$proc = "";

if (isset($_COOKIE["def"]))
{
    $proc = $_COOKIE["def"];
    $proc = strtoupper($proc);
}

if (isset($_COOKIE["drgID"]))
{
    $drgID = $_COOKIE["drgID"];
}

if((empty($drgID)) && (empty($proc))){

}
else{
    $myfile = fopen("Search-terms.txt", "a") or die ("Unable to open file!");
    $data = "THIS IS NEW DATA";
    fwrite($myfile, ",");
    fwrite($myfile, "\r\n");
    fwrite($myfile, $drgID);
    fwrite($myfile, " - ");
    fwrite($myfile, $proc);
    fwrite($myfile, ":");  
    fclose($myfile);
}
?>