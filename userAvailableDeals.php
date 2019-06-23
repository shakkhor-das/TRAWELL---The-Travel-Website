<?php

    session_start();
    if (!isset($_SESSION['username'])){
        header('Location:login.php');
    }
    else{
        include('connection.php');
        //$username = $_SESSION['username'];
        $sql = "SELECT * FROM `users` WHERE userUsername='$username' LIMIT 1";
        $q = mysqli_query($con,$sql);
        $res = mysqli_fetch_assoc($q);
        $firstName = $res['userFirstname'];
        $lastName = $res['userLastName'];
    }

    if (isset($_POST['submit'])){
        $place = $_POST['selectDestination'];
        $checkInDate = $_POST['checkIn'];
        $checkOutDate = $_POST['checkOut'];
        $quantity = $_POST['quantity'];
        $roomType = $_POST['roomType'];
        $meals = $_POST['meals'];
    }

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a href="userHotelBooking.php" class="nav-link">Hotel Booking</a>
                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">Register</a>
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
        Available <strong><?php echo $roomType;?></strong> deals for <strong><?php echo $quantity;?></strong> in 
        <strong><?php echo $place;?></strong> from <strong><?php echo $checkInDate;?></strong> to 
        <strong><?php echo $checkOutDate;?></strong> are ---><br>

        <div class="w3-row-padding w3-padding-16">
            <form action="confirmReservation.php" class="w3-third w3-margin-bottom">
                <img src="img/singleRoom.jpg" alt="<?php echo $place;?>" style="width:100%">
                <div class="w3-container w3-white">
                    <h3>Single Room</h3>
                    <h6 class="w3-opacity">From Tk.999</h6>
                    <p>Single bed</p>
                    <p>15m<sup>2</sup></p>
                    <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
                    <input class="w3-button w3-block w3-black w3-margin-bottom" type="submit" value="Choose Room">
                </div>
            </form>
            <form action="confirmReservation.php" class="w3-third w3-margin-bottom">
                <img src="img/doubleRoom.jpg" alt="<?php echo $place;?>" style="width:100%">
                <div class="w3-container w3-white">
                    <h3>Double Room</h3>
                    <h6 class="w3-opacity">From Tk.1499</h6>
                    <p>Queen-size bed</p>
                    <p>25m<sup>2</sup></p>
                    <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
                    <input class="w3-button w3-block w3-black w3-margin-bottom" type="submit" value="Choose Room">
                </div>
            </form>
            <form id="ting" action="confirmReservation.php" class="w3-third w3-margin-bottom">
                <img src="img/deluxeRoom.jpg" alt="<?php echo $place;?>" style="width:100%">
                <div class="w3-container w3-white">
                    <h3>Deluxe Room</h3>
                    <h6 class="w3-opacity">From Tk.2999</h6>
                    <p>King-size bed</p>
                    <p>40m<sup>2</sup></p>
                    <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                    <input class="w3-button w3-block w3-black w3-margin-bottom" type="submit" value="Choose Room">
                </div>
            </form>
            
        </div>

    </div>

    <main>

        

    </main>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>

</html>