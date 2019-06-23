<?php

    session_start();
    include('connection.php');
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM `userbookingdetails` WHERE `username`='$username' LIMIT 1";
    $q = mysqli_query($con,$sql);
    $res = mysqli_num_rows($q);
    $paymentMethod = $_POST['paymentMethod'];
    $sql1 = "UPDATE `userbookingdetails` SET `paymentMethod`='$paymentMethod' WHERE `username`='$username';";
    $q1 = mysqli_query($con,$sql1);

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
                        <a href="userHome.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="destinations.php" class="nav-link">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a href="userHotelBooking.php" class="nav-link">Hotel Booking</a>
                    </li>
                    <li class="nav-item">
                        <a href="userBookingRecords.php" class="nav-link">Booking Records</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Logout</a>
                    </li>
                </ul>

                <form action="" class="form-inline my-2 my-lg-0">
                    <button class="btn menu-right-btn border" type="submit">Message</button>
                </form>
            </div>
        </nav>
    </header>

    <!--Image Slider-->
    <div class="container">
        <!--pore korbo-->
    </div>

    <main>

        <div class="container" style="margin-top: 220px;">
            <div class="alert alert-danger">
                <h4 style="text-align: center;">
                    <strong>BOOKING DONE!!!!</strong>
                    <br>
                </h4>
                <h6 style="text-align:center;">
                    See your booking records <a href="userBookingRecords.php">CLICK HERE</a>
                </h6>
            </div>
        </div>        

    </main>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>

</html>