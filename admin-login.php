<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/login.css">
    <title>Administrator</title>
</head>

<body>
    <!-- Login Container -->
    <form class="login" action="connect_admin-login.php" method="post">
        <div class="gym-name">
            <p>Employee Login</p>
        </div>
        <div class="gym-logo">
            <img src="/static/assets/gym-logo.png" alt="Logo here">
        </div>

        <!-- Input -->
        <div class="input-container">
            <input type="text" required name="username" class="input" id="username" placeholder="Username">
            <input type="password" required name="password" class="input" id="password" placeholder="Password">
            <button onclick="location.href = 'admin.php';" type="submit" class="btn btn-background-slide">LOGIN</button>
            <!-- <input type="submit" class="btn btn-border-pop" value="LOGIN"> -->

            <!-- Non member notes -->
            <!-- <div class="non-member-note">
                <p>Not a member?</p>
                <a href="#">Register and get a membership now!</a>
            </div> -->
        </div>
    </form>
</body>
</html>