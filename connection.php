<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require "db_connection.php";
If($connection!=null){
    $result = $connection->prepare(
    "CREATE TABLE IF NOT EXISTS `5ina`.`Persona`(
        ID INT AUTO_INCREMENT,
        Nome TEXT NOT NULL,
        Cognome TEXT NOT NULL,
        PRIMARY KEY(ID)
        )
    ");
    $result->execute();
    echo "<a href='login.php'><button>prosegui</button></a>";
}
?>
</body>
</html>