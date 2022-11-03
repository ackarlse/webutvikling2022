<?php
$donald = new mysqli('localhost', 'root', 'root', 'kontaktskjema');

if($donald->connect_error){
    die($donald->connect_error. ":" .$donald->connect_error);
}

$navn = $_POST["name"];
$alder = $_POST["age"];
$beskrivelse = $_POST["description"];

$sql = "INSERT INTO person (name , age, description) VALUES ('$navn', '$alder', '$beskrivelse')";
if($donald->query($sql) === TRUE){
    echo "Det ble sendt!";
} else{
    echo "Error " . $sql . "<br>" . $donald;
}

header("Location: about-us.php");


?>