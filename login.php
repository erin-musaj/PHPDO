<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Result</title>
</head>

<body>
<?php
require "connection.php";
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
    echo "<a href='insert.php'><button>insert</button></a>
    <a href='query.php'><button>query</button></a>";
}
?>
</body>

</html>