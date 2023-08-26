<?php

//connection of database
$server = "localhost";
$username = "root";
$password = "";
$database = "jobs";
$error = "";
$registrationSuccess = false;
$jobPosted = false;

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error) {
        echo "Connection Error" . $conn->connect_error;
}

//register
if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        // Validate form fields
        if (empty($name) || empty($email) || empty($number) || empty($password) || empty($confirmPassword)) {
                $error = 'All fields are required.';
        } elseif ($password !== $confirmPassword) {
                $error = 'Passwords do not match.';
        } else {
                $sql = "INSERT INTO `users`(`name`, `email`, `number`, `password`) VALUES ('$name','$email','$number','$password')";

                if (mysqli_query($conn, $sql)) {
                        $registrationSuccess = true; // Flag to show success message
                } else {
                        $error = "ERROR: Could not execute $sql. " . mysqli_error($conn);
                }
        }
}


//login 
if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if email and password are provided
        if (!empty($email) && !empty($password)) {
                $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                if (mysqli_num_rows($result) > 0) {
                        // Redirect to admin page or perform necessary actions
                        header("location: admin.php");
                        exit; // Add exit to stop further execution
                } else {
                        $error = 'Email or Password is incorrect';
                }
        } else {
                $error = 'Please provide both email and password';
        }
}

//jobs posting
if (isset($_POST['jobs'])) {
        $cname = $_POST['cname'];
        $position = $_POST['job_position'];
        $skills = $_POST['skills'];
        $CTC = $_POST['CTC'];

        // Validate form fields
        if (empty($cname) || empty($position) || empty($skills) || empty($CTC)) {
                $error = 'All fields are required.';
        } else {
                $sql = "INSERT INTO `jobs`(`cname`, `job_position`, `skills`, `CTC`) VALUES ('$cname','$position','$skills','$CTC')";

                if (mysqli_query($conn, $sql)) {
                        $jobPosted = true; // Flag to show success message
                } else {
                        $error = "ERROR: Failed to Post the Job. " . mysqli_error($conn);
                }
        }
}

//apping job
if (isset($_POST['apply'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $cname = $_POST['cname'];
        $edu = $_POST['edu'];
        $skills = $_POST['skills'];

        // Validate form fields
        if (empty($email) || empty($name) || empty($position) || empty($cname) || empty($edu) || empty($skills)) {
                $error = '';
        } else {
                $sql = "INSERT INTO `candidates`(`email`, `name`, `position`, `cname`, `education`, `skills`) VALUES ('$email','$name','$position','$cname','$edu','$skills')";

                if (mysqli_query($conn, $sql)) {
                        $candidateApplied = true; // Flag to show success message
                } else {
                        $error = "ERROR: Not inserted. " . mysqli_error($conn);
                }
        }
}

?>