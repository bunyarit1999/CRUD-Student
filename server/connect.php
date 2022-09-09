<?php
    $servername = "localhost";
    $username = "root";
    $password = "";    
    $databasename = "udg_students";
    date_default_timezone_set("Asia/Bangkok");

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("set names utf8"); 
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit();
    }