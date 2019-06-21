<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "registration";

    /*$con = mysqli_connect($hostname,$username,$password);

    $sql = "CREATE DATABASE registration";

    //$query1 = mysqli_query($con,$sql);

    if (mysqli_query($con,$sql)){
        echo "Database created";
    }

    else{
        echo "failed";
    }*/

    $con = mysqli_connect($hostname,$username,$password,$database);

    /*if (mysqli_query($con,$sql)){
        echo "connected";
    }
    else{
        echo "failed";
    }*/

    /*$sqlUsers = "CREATE TABLE Users(
        userId int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        userFirstName VARCHAR(30) NOT NULL,
        userLastName VARCHAR(30) NOT NULL,
        userUsername VARCHAR(30) NOT NULL,
        userEmail VARCHAR(50) NOT NULL,
        userPassword VARCHAR(40) NOT NULL);";
    
    if (mysqli_query($con,$sqlUsers)){
        echo "users table created";
        echo "<br>";
    }

    else{
        echo "failed";
        echo "<br>";
    }

    $sqlAdmins = "CREATE TABLE Admins(
        adminId int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        adminFirstName VARCHAR(30) NOT NULL,
        adminLastName VARCHAR(30) NOT NULL,
        adminUsername VARCHAR(30) NOT NULL,
        adminEmail VARCHAR(50) NOT NULL,
        adminPassword VARCHAR(40) NOT NULL);";

    if (mysqli_query($con,$sqlAdmins)){
        echo "admins table created";
        echo "<br>";
    }

    else{
        echo "failed";
        echo "<br>";
    }*/
    
?>