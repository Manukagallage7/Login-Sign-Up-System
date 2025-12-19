<?php
    $sName = "localhost";
    $uName = "root";
    $pass = "";
    $db_Name = "user system";

    try {
        $conn = new PDO("mysql:host=$sName;dbname=$db_Name",
                        $uName, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,
                            PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Connection Failed: ". $e->getMessage();
    }