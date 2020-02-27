<?php

include 'database.php';
$myfile = fopen("file.json", "w") or die("Unable to open file!");
$sql = "SELECT * from tasks";
$conn = $con->prepare($sql);
$conn->execute();

while ($result = $conn->fetch(PDO::FETCH_ASSOC)) {

    $txt = array('ID' => $result['id'],'Name' => $result['name']);
    fwrite($myfile, json_encode($txt));
}

fclose($myfile);
?>