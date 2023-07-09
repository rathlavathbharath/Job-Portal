<?php include 'config.php'?>
<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
                crossorigin="anonymous">

        <title>Registration Page</title>
        <style>
                body {
                        background-image: url('backgroundimage.jpg');
                        background-size: cover;
                }
                form{
                        background-color: #fff;
                        margin-top: 3em;
                        margin-left: 30em;
                        margin-right: 7em;
                        padding: 30px;
                        box-shadow: 10px 10px 8px 10px #888888;
                }
        </style>
</head>

<body>
        <form action="" method="POST">
                <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Enter your Name">
                </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter your Email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                        <label for="exampleInputNumber" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="exampleInputNumber" name="number" placeholder="Enter your Phone Number">
                </div>
                <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your password">
                </div>
                <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn btn-primary" name="register">Register</button>
                <br>
                Already Registered? <a href="login.php">Login</a>
        </form>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>