<?php

    session_start();

    /*if (isset($_POST['submit'])){
        echo $email;
        echo "<br>";
        echo $accountType;
        echo "<br>";
        echo $password;
        echo "<br>";
    }
    
    else{
        echo "Couldn't connect";
    }*/

    if (isset($_POST['submit'])){
        include('connection.php');
        $email = $_POST['email'];
        $email = mysqli_real_escape_string($con,$email);
        $accountType = $_POST['accountType'];
        $password = $_POST['password'];
        $password = mysqli_real_escape_string($con,$password);
        $password = md5($password);
        $error = "";
        if ($accountType == "admin"){
            $sql = "SELECT `adminUsername`, `adminPassword` FROM `admins` WHERE `adminEmail`='$email' LIMIT 1";
            $result = mysqli_query($con,$sql);
            if (mysqli_num_rows($result) == 1){    
                $flag = mysqli_fetch_assoc($result);
                if ($flag["adminPassword"]!=$password){
                    echo '<script language="javascript">';
                    echo 'alert("Password Incorrect")';
                    echo '</script>';
                }
                else{
                    $_SESSION['username'] = $flag["adminUsername"];
                    header('Location:adminHome.php');
                }          
            }
            else{
                echo '<script language="javascript">';
                echo 'alert("Invalid Email")';
                echo '</script>';
            }
        }
        else{
            $sql = "SELECT `userUsername`, `userPassword` FROM `users` WHERE `userEmail`='$email' LIMIT 1";
            $result = mysqli_query($con,$sql);
            if (mysqli_num_rows($result) == 1){
                $flag = mysqli_fetch_assoc($result);
                if ($flag["userPassword"]!=$password){
                    echo '<script language="javascript">';
                    echo 'alert("Password Incorrect")';
                    echo '</script>';
                }
                else{
                    $_SESSION['username'] = $flag["userUsername"];
                    header('Location:userHome.php');
                }
            }
            else{
                echo '<script language="javascript">';
                echo 'alert("Invalid Email")';
                echo '</script>';
            }
        }
    }

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>TRAWELL</title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#" class="navbar-brand">TRAWELL<i class="fa fa-plane"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"
            aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse"></div>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="destinations.php" class="nav-link">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Hotel Booking</a>
                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                </ul>

                <form action="" class="form-inline my-2 my-lg-0">
                    <button class="btn menu-right-btn border" type="submit">Message</button>
                </form>
            </div>
        </nav>
    </header>

    <div class="container">
        <form action="" class="form-container justify-content-center" style="height:400px;" method="POST" name="loginForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Email" class="form-control form-control-md">
                <div id="errorEmail"></div>
            </div>
            <div class="form-group">
                <label for="accountType">Select Account Type</label>
                <select name="accountType" id="accountType" class="form-control form-control-md" required="required">
                    <option value="">Choose Account Type</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" class="form-control form-control-md">
                <div id="errorPassword"></div>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="LOGIN" class="btn btn-md btn-primary btn-block btn-sign in">
            </div>
        </form>
    </div>

    <main>

        

    </main>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>

</html>