<?php include 'config.php' ?>
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

        <title>Admin Panel</title>
        <style>
                .sidebar {
                        height: 100%;
                        width: 160px;
                        position: fixed;
                        z-index: 1;
                        margin-top: -25px;
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
                        margin-top: 100px;
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
        </style>
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                                <img src="https://thumbs.dreamstime.com/b/icon-admin-administrator-admin-144970320.jpg"
                                        alt="" width="30" height="24" class="d-inline-block align-text-top">
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
                <form method="POST">
                        <span class="text text-danger">
                        <?php echo $error ?>
                        </span>
                        <?php
                        if ($jobPosted) {
                                echo '<div class="alert alert-success" role="alert">Job Posted Successfully!.</div>';
                        }
                        ?>
                        <div class="mb-3">
                                <label for="CompanyName" class="form-label">Comapany Name</label>
                                <input type="text" class="form-control" id="cname" name="cname"
                                        placeholder="Enter the Comapany Name">
                        </div>
                        <div class="mb-3">
                                <label for="exampleInputPosition" class="form-label">Job Position</label>
                                <input type="text" class="form-control" id="job_position" name="job_position"
                                        placeholder="Enter the Job Position">
                        </div>
                        <div class="mb-3">
                                <label for="skills" class="form-label">Skills Required</label>
                                <input type="text" class="form-control" id="skills" name="skills"
                                        placeholder="Enter the Skills Required">
                        </div>
                        <div class="mb-3">
                                <label for="CTC" class="form-label">CTC</label>
                                <input type="text" class="form-control" id="CTC" name="CTC" placeholder="Enter the CTC">
                        </div>
                        <button type="submit" class="btn btn-primary" name="jobs">Post Job</button>
                </form> 
                <table class="table">
                        <thead>
                                <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Job Position</th>
                                        <th scope="col">Skills Required</th>
                                        <th scope="col">CTC</th>
                                </tr>
                        </thead>
                        <tbody>
                                <?php
                                $sql = "Select * from jobs";
                                $result = mysqli_query($conn, $sql);
                                $i = 0;
                                if ($result->num_rows > 0) {
                                        while ($rows = $result->fetch_assoc()) {
                                                echo '
                                        <tr>
                                           <th scope="row">' . ++$i . '</th>
                                           <td>' . $rows['cname'] . '</td>
                                           <td>' . $rows['job_position'] . '</td>
                                           <td>' . $rows['skills'] . '</td>
                                           <td>' . $rows['CTC'] . '</td>
                                        </tr>';
                                        }
                                } else {
                                        echo "";
                                }
                                ?>
                        </tbody>
                </table>
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