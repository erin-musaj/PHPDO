<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<table>
<?php
    require "db_connection.php";
    $result = $connection->prepare("SELECT * FROM persona");
    $result->execute();
    echo "<table>";
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        foreach ($row as $value){
            echo "<td>". $value ."</td>";
        }
        echo "</tr>";
    }
?>
</body>
</html>