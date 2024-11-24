<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
        function confirmSubmit(){
            return confirm("sei sicuro?")
        }
</script>
        <form action="insert.php" method="POST" onsubmit="confirmSubmit()">
            <label for="nome">nome</label>
            <br>
            <input type="text" id="nome" name="nome">
            <br>
            <br>
            <label for="cognome">cognome</label>
            <br>
            <input type="text" id="cognome" name="cognome">
            <button type="submit" >invia</button>
            </select>
        </form>
<?php
    if(isset($_POST["nome"]) && isset($_POST["cognome"])){
        require "db_connection.php";
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $result = $connection->prepare("INSERT INTO persona (Nome, Cognome) VALUES ('$nome', '$cognome')");
        $result->execute();
        echo "inserimento effettuato";
    }
?>
</body>
</html>