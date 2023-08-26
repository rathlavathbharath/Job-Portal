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
        <title>Career Page</title>
</head>

<body>
        <div class="modal fade" id="job" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Apply for Job</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <form method="POST" enctype="multipart/form-data">
                                                <span class="text text-danger">
                                                        <?php echo $error ?>
                                                </span>

                                                <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Email
                                                                address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" required name="email"
                                                                placeholder="Enter your Email" required>
                                                        <div id="emailHelp" class="form-text">We'll never share your
                                                                email with anyone else.</div>
                                                </div>
                                                <div class="mb-3">
                                                        <label for="exampleInputName" class="form-label">Full
                                                                Name</label>
                                                        <input type="text" class="form-control" id="exampleInputName"
                                                                name="name" placeholder="Enter your Name" required>
                                                </div>
                                                <div class="mb-3">
                                                        <label for="exampleInputName"
                                                                class="form-label">Position</label>
                                                        <input type="text" class="form-control" id="exampleInputName"
                                                                name="position" placeholder="Enter Position" required>
                                                </div>
                                                <div class="mb-3">
                                                        <label for="exampleInputName" class="form-label">Company
                                                                Name</label>
                                                        <input type="text" class="form-control" id="exampleInputName"
                                                                name="cname" placeholder="Enter Company Name" required>
                                                </div>
                                                <div class="mb-3">
                                                        <label for="exampleInputEdu" class="form-label">Education
                                                                Qualification</label>
                                                        <input type="text" class="form-control" id="exampleInputEdu"
                                                                name="edu"
                                                                placeholder="Enter your Education Qualification" required>
                                                </div>
                                                <div class="mb-3">
                                                        <label for="exampleInputSkills"
                                                                class="form-label">Skills</label>
                                                        <input type="text" class="form-control" id="exampleInputSkills"
                                                                name="skills" placeholder="Enter your Skills" required>
                                                </div>
                                                <!--<div class="mb-3">
                                                        <label for="exampleInputCV" class="form-label">Upload
                                                                Resume</label>
                                                        <input type="file" class="form-control" id="exampleInputCV" 
                                                                name="resume" placeholder="Upload your Resume">
                                                </div> -->
                                                <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary"
                                                                name="apply">Submit</button>
                                                </div>
                                        </form>
                                </div>
                                <!--<div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="apply">Submit</button>
                                </div>-->
                        </div>
                </div>
        </div>
        </div>
        <div class="row m-0" style="margin-bottom: 10px;">
                <div class="col-md-12">
                        <div class="jumbotron jumbotron-fluid"
                                style="background-image:url('backgroundimage.jpg'); background-size:cover; position: relative;">
                                <div
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                                </div>
                                <div class="container" style="color: white; padding:70px;">
                                        <h1
                                                style="color: white; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                                Job Portal</h1>
                                        <p>Available Jobs on the portal</p>
                                </div>
                        </div>
                </div>
        </div>

        <div class="row m-0">
                <?php
                $sql = "Select * from jobs";
                $result = mysqli_query($conn, $sql);
                $i = 0;
                if ($result->num_rows > 0) {
                        while ($rows = $result->fetch_assoc()) {
                                echo '
                        <div class="col-md-4">
                         <div style="background-color: white; box-shadow:3px 3px 8px 3px #888888; border:2px solid black; border-radius: 3px; margin-top: 30px; margin-bottom: 3em; padding: 10px;">
                                <h1 style="text-align: center;">' . $rows['job_position'] . '</h1>
                                <p style="text-align: center;">' . $rows['cname'] . '</p>
                                <p><b>Skills Required:</b> ' . $rows['skills'] . '</p>
                                <p><b>CTC:</b> ' . $rows['CTC'] . '</p>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#job">Apply for Job</button>
                         </div>
                        </div>';
                        }
                } else {
                        echo '';
                }
                ?>
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