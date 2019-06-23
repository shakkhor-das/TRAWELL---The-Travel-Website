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
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Destinations</a>
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
        <form action="registerSuccess.php" class="form-container" method="POST" name="registrationForm" onsubmit="return formValidation();">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" placeholder="First Name" class="form-control form-control-md">
                <div class="errorFirstName"></div>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" class="form-control form-control-md">
                <div class="errorLastName"></div>
            </div>
            <div class="form-group">
                <label for="email">Email ID</label>
                <input type="text" id="email" name="email" placeholder="Email ID" class="form-control form-control-md">
                <div class="errorEmail"></div>
            </div>
            <div class="form-group">
                <label for="accountType">Select Account Type</label>
                <select name="selectAccountType" id="selectAccountType" class="form-control form-control-md" required="required">
                    <option value="">Choose Account Type</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <div class="errorAccountType"></div>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" class="form-control form-control-md">
                <div class="errorUsername"></div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" class="form-control form-control-md">
                <div class="errorPassword"></div>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" class="form-control form-control-md">
                <div class="errorConfirmPassword"></div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" id="acceptTerms" name="acceptTerms" class="form-check-input" required="required">
                    <label for="acceptTerms" class="form-check-label">Accept Terms & Conditions</label>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="submit" name="submit" class="btn btn-primary btn-block">
            </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>

<script>

    var firstName = document.forms['registrationForm']['firstName'];
    var lastName = document.forms['registrationForm']['lastName'];
    var email = document.forms['registrationForm']['email'];
    var username = document.forms['registrationForm']['username'];
    var password = document.forms['registrationForm']['password'];
    var confirmPassword = document.forms['registrationForm']['confirmPassword'];

</script>