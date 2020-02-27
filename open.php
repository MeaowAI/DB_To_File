<?php

$myfile = fopen("file.json", "r") or die("Unable to open file!");
$data = fread($myfile, filesize("file.json"));
fclose($myfile);
echo $data;
foreach ($data as $key => $value){
    echo $key." ".$value." <br>";
}
?> 