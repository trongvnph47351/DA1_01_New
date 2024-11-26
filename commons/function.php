<?php
    function connectDB(){
       $host = DB_HOST;
       $port = DB_PORT;
       $name = DB_NAME;

       try {
            $conn = new PDO(
                "mysql:host=$host;port=$port;dbname=$name",
                DB_USERNAME,
                DB_PASSWORD
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $conn;
       } catch (PDOException $e) {
            echo 'connect failded' . $e->getMessage();
       }
    }
?>