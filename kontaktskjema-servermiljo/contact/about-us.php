<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personer</title>
</head>
<body>

<?php
$donald = new mysqli('localhost', 'root', 'root', 'kontaktskjema');

if($donald->connect_error){
    die($donald->connect_error. ":" .$donald->connect_error);
}
?>

<section>
    <h1>Personer</h1>
    <?php
        $sql = "SELECT * FROM person";
        $resultater = mysqli_query($donald, $sql);

        while($row = mysqli_fetch_array($resultater)){
            echo "<article>
            <h3> ".$row['name']."</h3>
            <p>".$row['age']."</p>
            <p>".$row['description']."</p>
            
            </article>";
        }

    ?>
</section>
    
</body>
</html>