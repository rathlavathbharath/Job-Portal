<?php

//connection of database
$server="localhost";
$username="root";
$password="";
$database="jobs";
$error= '';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
        echo"Connection Error".$conn->connect_error;
}

//register process
if(isset($_POST['register'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $password=$_POST['password'];

        $sql = "INSERT INTO `users`(`name`, `email`, `number`, `password`) VALUES ('$name','$email','$number','$password')";

        if(mysqli_query($conn, $sql)){
                // echo "Records inserted successfully.";
        }else{
                echo "ERROR: Could not able to execute $sql.".mysqli_error($conn);
        }
}

//login 
if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql = "SELECT * FROM users WHERE 'email'='$email' and 'password'='$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result)==0){
                header("location:admin.php");
        }else{
                $error= 'Emailid or Password is incorrect';
        }
}

//posting jobs
if(isset($_POST['jobs'])){
        $cname=$_POST['cname'];
        $position=$_POST['job_position'];
        $skills=$_POST['skills'];
        $CTC=$_POST['CTC'];

        $sql = "INSERT INTO `jobs`(`cname`, `job_position`, `skills`, `CTC`) VALUES ('$cname','$position','$skills','$CTC')";
        if(mysqli_query($conn, $sql)){
              
        }else{
                echo "ERROR: Failed to Post the Job $sql".mysqli_error($conn);
        }
}

//apping job
if(isset($_POST['apply'])){
        $email=$_POST['email'];
        $name=$_POST['name'];
        $position=$_POST['position'];
        $cname=$_POST['cname'];
        $edu=$_POST['edu'];
        $skills=$_POST['skills'];

        $sql = "INSERT INTO `candidates`(`email`, `name`, `position`, `cname`, `education`, `skills`) VALUES ('$email','$name','$position','$cname','$edu','$skills')";

        if(mysqli_query($conn, $sql)){
              
        }else{
                echo "ERROR:not inserted $sql".mysqli_error($conn);
        }
}
?>