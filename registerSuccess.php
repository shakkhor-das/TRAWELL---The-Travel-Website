<?php

    include('connection.php');
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $accountType = $_POST['selectAccountType'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    /*if (isset($_POST['submit'])){
        echo $firstName;
        echo "<br>";
        echo $lastName;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $accountType;
        echo "<br>";
        echo $username;
        echo "<br>";
        echo $password;
        echo "<br>";
        echo $confirmPassword;
        echo "<br>";
    }

    if ($accountType == "user"){
        echo "okay";
    }

    else{
        echo "not okay";
    }*/

    if (isset($_POST['submit'])){
        if ($accountType == "user"){
            $firstName = mysqli_real_escape_string($con,$firstName);
            $lastName = mysqli_real_escape_string($con,$lastName);
            $email = mysqli_real_escape_string($con,$email);
            $username = mysqli_real_escape_string($con,$username);
            $password = mysqli_real_escape_string($con,$password);
            $confirmPassword = mysqli_real_escape_string($con,$confirmPassword);
            
            $sql = "SELECT * FROM `users` WHERE userUsername='$username' ";
            $result = mysqli_query($con,$sql);
            $sql1 = "SELECT * FROM `users` WHERE userEmail='$email' ";
            $result1 = mysqli_query($con,$sql1);

            if (mysqli_num_rows($result)>0){
                header('Location:error.php');
                //echo '<h4 style="text-align:center;">Username Already Exists!</h4>';
            }
            else if (mysqli_num_rows($result1)>0){
                header('Location:error.php');
            }
            else{
                $password = md5($password);
                $sql = "INSERT INTO `Users` (`userFirstName`, `userLastName`, `userUsername`, `userEmail`, `userPassword`)
                        VALUES ('$firstName', '$lastName', '$username', '$email', '$password');";
                if (mysqli_query($con,$sql)){
                    header('Location:confirmUserRegistration.php');
                    //echo "connected";
                }
                else{
                    header('Location:error.php');
                    //echo "failed";
                }
            }   
        }
        else{
            $firstName = mysqli_real_escape_string($con,$firstName);
            $lastName = mysqli_real_escape_string($con,$lastName);
            $email = mysqli_real_escape_string($con,$email);
            $username = mysqli_real_escape_string($con,$username);
            $password = mysqli_real_escape_string($con,$password);
            $confirmPassword = mysqli_real_escape_string($con,$confirmPassword);

            $sql = "SELECT * FROM `admins` WHERE adminUsername='$username' ";
            $result = mysqli_query($con,$sql);
            $sql1 = "SELECT * FROM `admins` WHERE adminEmail='$email' ";
            $result1 = mysqli_query($con,$sql1);

            if (mysqli_num_rows($result)>0){
                header('Location:error.php');
            }
            else if (mysqli_num_rows($result1)>0){
                header('Location:error.php');
            }
            else{
                $password = md5($password);
                $sql = "INSERT INTO `admins` (`adminFirstName`, `adminLastName`, `adminUsername`, `adminEmail`, `adminPassword`)
                        VALUES ('$firstName', '$lastName', '$username', '$email', '$password');";
                if (mysqli_query($con,$sql)){
                    header('Location:confirmAdminRegistration.php');
                    //echo "connected";
                }
                else{
                    header('Location:error.php');
                    //echo "failed";
                }
            }
        }
    }

?>