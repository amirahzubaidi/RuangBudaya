<?php
    session_start();
    include("db.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $gender = $_POST['gender'];
        $contactaddress = $_POST['cnum'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "insert into form (fname, lname, gender, cnum, address, email, pass) values('$firstname', '$lastname', '$gender', '$contactaddress', '$address', '$email', '$password')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <link rel="stylesheet" href="css/stylesignup.css">

</head>
<body>
    <div class="signup">
        <br><h1>Sign Up</h1>
        <h4>It's free, in just a minute</h4>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact Address</label>
            <input type="text" name="cnum" required>
            <label>Address</label>
            <input type="text" name="address" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required><br><br>
            <input type="Submit" name="" value="Submit">

        </form>
        <p>By clicking the Sign Up button, you agree to our <br>
        <a href="">Terms and condition</a> and <a href="">Policy Privacy</a>
        </p>
        <p>Already have an account? <a href="login.php">Login Here</a></p>

    </div>
</body>
</html>

