<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
                crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
                integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Dashboard</title>
        <style>
                /* The side navigation menu */
                .sidebar {
                        margin: 0;
                        margin-top: -3px;
                        padding: 0;
                        width: 200px;
                        background-color: #f1f1f1;
                        position: fixed;
                        height: 100%;
                        overflow: auto;
                }

                /* Sidebar links */
                .sidebar a {
                        display: block;
                        color: black;
                        padding: 16px;
                        text-decoration: none;
                }

                /* Active/current link */
                .sidebar a.active {
                        background-color: #04AA6D;
                        color: white;
                }

                /* Links on mouse-over */
                .sidebar a:hover:not(.active) {
                        background-color: #555;
                        color: white;
                }

                /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
                div.content {
                        margin-top: 60px;
                        margin-left: 200px;
                        padding: 1px 16px;
                        height: 1000px;
                }

                /* On screens that are less than 700px wide, make the sidebar into a topbar */
                @media screen and (max-width: 700px) {
                        .sidebar {
                                width: 100%;
                                height: auto;
                                position: relative;
                        }

                        .sidebar a {
                                float: left;
                        }

                        div.content {
                                margin-left: 0;
                        }
                }

                /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
                @media screen and (max-width: 400px) {
                        .sidebar a {
                                text-align: center;
                                float: none;
                        }
                }

                .navbar {
                        overflow: hidden;
                        background-color: #333;
                        position: fixed;
                        top: 0;
                        width: 100%;
                }
        </style>
</head>

<body>
        <div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
                        <div class="container-fluid">
                                <a class="navbar-brand" href="#">Admin Dashboard</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                        <!-- <ul class="navbar-nav">
                                                <li class="nav-item">
                                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" href="#">Features</a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" href="#">Pricing</a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link disabled">Disabled</a>
                                                </li>
                                        </ul> -->
                                </div>
                        </div>
                </nav>
                <div class="sidebar">
                        <a class="active" href="#home">Jobs</a>
                        <a href="#jobs">Candidates Applied</a>
                        <a href="#contact">Contact</a>
                        <a href="#about">About</a>
                </div>

                <div class="content">
                        <p>
                                <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Link with href</a> -->
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">Post Job</button>
                        </p>
                        <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                        <form action="" method="POST">
                                                <div class="mb-3">
                                                        <label for="CompanyName" class="form-label">Comapany
                                                                Name</label>
                                                        <input type="text" class="form-control" id="CompanyName"
                                                                name="cname">
                                                </div>
                                                <div class="mb-3">
                                                        <label for="exampleInputPosition"
                                                                class="form-label">Position</label>
                                                        <input type="password" class="form-control"
                                                                id="exampleInputPosition" name="pos">
                                                </div>
                                                <div class="mb-3">
                                                        <label for="JobDesc" class="form-label">Job Description</label>
                                                        <textarea type="text" cols="30" class="form-control"
                                                                id="JobDesc" name="Jdesc"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                        <label for="skills" class="form-label">Skills Required</label>
                                                        <textarea type="text" class="form-control" id="skills"
                                                                name="skills"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                        <label for="CTC" class="form-label">CTC</label>
                                                        <input type="text" class="form-control" id="CTC" name="CTC">
                                                </div>
                                                <button type="submit" class="btn btn-primary"
                                                        name="submit1">Submit</button>
                                        </form>
                                </div>
                        </div>
                        <table class="table">
                                <thead>
                                        <tr>
                                                <th scope="col">Sl.No</th>
                                                <th scope="col">Company Name</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">CTC</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                                <th scope="row">1</th>
                                                <td>TCS</td>
                                                <td>Software Developer</td>
                                                <td>8LPA</td>
                                        </tr>
                                        <tr>
                                                <th scope="row">2</th>
                                                <td>Google</td>
                                                <td>Digital Marketing</td>
                                                <td>12LPA</td>
                                        </tr>
                                        <tr>
                                                <th scope="row">3</th>
                                                <td>Amazon</td>
                                                <td>Product Developer</td>
                                                <td>15LPA</td>
                                        </tr>
                                </tbody>
                        </table>
                </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
</body>

</html>