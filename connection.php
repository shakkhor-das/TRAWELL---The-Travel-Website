<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "trawell";

    $con = mysqli_connect($hostname,$username,$password);
    $id = 0;

    //$sql = "CREATE DATABASE trawell";

    //$query1 = mysqli_query($con,$sql);

    /*if (mysqli_query($con,$sql)){
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

    /*$sqlBookingDetails = "CREATE TABLE userBookingDetails(
        
    )"*/

    /*$sqlMessage = "CREATE TABLE messages(
        messageId int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        messengerName VARCHAR(30) NOT NULL,
        messengerEmail VARCHAR(30) NOT NULL,
        messengerText VARCHAR(255) NOT NULL);";

    if (mysqli_query($con,$sqlMessage)){
        echo "Table created";
        echo '<br>';
    }
    else{
        echo "failed";
        echo '<br>';
    }*/

    /*$sqlUserBookingDetails = "CREATE TABLE userBookingDetails(
        bookingId int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        destination VARCHAR(30) NOT NULL,
        checkInDate VARCHAR(30) NOT NULL,
        checkOutDate VARCHAR(30) NOT NULL,
        persons int(10) NOT NULL,
        roomType VARCHAR(30) NOT NULL,
        meals VARCHAR(30) NOT NULL,
        paymentMethod VARCHAR(50) NOT NULL);";

    if (mysqli_query($con,$sqlUserBookingDetails)){
        echo "Table Created";
        echo '<br>';
    }
    else{
        echo "failed";
        echo '<br>';
    }*/
    
?>