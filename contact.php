<?php include 'config.php' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Panel</title>
    <style>
        .sidebar {
            height: 100%;
            width: 160px;
            position: fixed;
            z-index: 1;
            margin-top: -4px;
            margin-left: 0px;
            background-color: #f1f1f1;
            padding-top: 20px;
            overflow-x: hidden;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        .main {
            margin-left: 160px;
            font-size: 20px;
            padding: 0px 10px;
            margin-top: 80px;
            height: 1000px;
        }

        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 15px;
            }

            .sidebar a {
                font-size: 18px;
            }
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .container-fluid {
            background-color: crimson;
            padding: 10px;
        }

        .container {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        .container p {
            font-size: 18px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 15px;
        }

        .container .row {
            margin-bottom: 30px;
        }

        .container h4 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        .container form {
            max-width: 500px;
        }

        .container label {
            font-size: 18px;
            color: #333;
        }

        .container input[type="text"],
        .container input[type="email"],
        .container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .container .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .container .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://thumbs.dreamstime.com/b/icon-admin-administrator-admin-144970320.jpg" alt=""
                    width="30" height="24" class="d-inline-block align-text-top">
                <span style="color: #ffffff; font-size: 25px;">Admin Dashboard</span>
            </a>
        </div>
    </nav>
    <div class="sidebar">
        <a class="active" href="admin.php">Jobs</a>
        <a href="candidates.php">Candidates</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <div class="main">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have a question or need assistance? Feel free to get in touch with us.</p>

            <div class="row">
                <div class="col-md-6">
                    <h4>Our Office</h4>
                    <p>123 Main Street<br>Hyderabad, India<br>500090</p>
                </div>
                <div class="col-md-6">
                    <h4>Contact Information</h4>
                    <p>Email: info@company.com<br>Phone: +1 (123) 456-7890</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h4>Contact Form</h4>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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