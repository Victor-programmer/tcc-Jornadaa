
<?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "guia";
        $port = 3306;

        try{
            $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
           // echo "deu certo porra";//
        } catch (PDOException $err) {
            echo "ixi veinho deu tchu tchu no sistema" . $err->getMessage();
        }
        