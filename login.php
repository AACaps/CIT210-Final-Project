<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/login.css">
    <title>AlphaX Health & Fitness</title>
</head>

<body>
<?php  
    $srvname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alphax_gym";

    $conn = mysqli_connect($srvname, $username, $password, $dbname);

    if (isset($_GET['id'])) {
        $id=$_GET['id'];
    }  

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "" || $password == ""){
            echo "Please provide fill in the form";
            exit();
        }

        $LoginQuery = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $LoginQuery);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $idpass = mysqli_fetch_assoc($result);

        if($count == 1){
            echo "Login Successful";
            // header("location: dashboard.php");
        }else{
            $error = "Your Username or Password is invalid";
            echo "<script>alert('$error')</script>";
        }
    }
?>

    <!-- Login Container -->
    <form class="login" action="dashboard.php?id='<?php echo $idpass['id']; ?>'" method="post">

        <div class="gym-name">
            <p>ALPHAX HEALTH AND FITNESS GYM</p>
        </div>

        <div class="gym-logo">
            <img src="/static/assets/gym-logo.png" alt="Logo here">
        </div>

        <div class="input-container">
            <input type="text" required name="username" class="input" id="username" placeholder="Username">
            <input type="password" required name="password" class="input" id="password" placeholder="Password">
            <button onclick="location.href = 'dashboard.php?id='<?php echo $idpass['id']; ?>'" name="login" type="submit" class="btn btn-background-slide">LOGIN</button>

            <!-- Non member notes -->
            <div class="non-member-note">
                <p>Not a member?</p>
                <a href="membership.php">View Membership Options</a>
                <a href="registration.php">Register and get a membership now!</a>
                <a href="admin-login.php">Employee Login</a>
            </div>

        </div>

    </form>

</body>
</html>