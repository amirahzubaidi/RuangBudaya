<?php 
     session_start();
     require "../ruangbudayacopy/db.php";
     //$_SESSION['login'] = true;
    
     if($_SERVER['REQUEST_METHOD'] == "POST")
     {
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "select * from form where email = '$email' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass'] == $password)
                    {
                        $_SESSION['login'] = true;
                        header("location: index.php");
                        die;
                    }
                    //if (password_verify($password, $data['password'])){
                        //$_SESSION['username'] = $data['username'];
                        //$_SESSION['login'] = true;
                    //}
                }
            }
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";
        }
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="css/stylesignup.css">
</head>
<body>
    <div class="login">
        <br><h1>Login</h1>
        <form method="POST" action="login.php">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required><br><br>
            <input type="Submit" name="" value="Submit">
        </form>
        <p>Not have an account? <a href="signup.php">Sign Up here</a></p>

</body>
</html>


