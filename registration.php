<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/registration.css">
    <title>AlphaX - Registration</title>
</head>

<body>
    <form class="registration-container center-div" action="connect_registration.php" method="post">
        <div class="form">

            <!-- Top Section -->
            <div class="top-section">
                <input type="text" required id="regis-user" class="top-input" placeholder="Full Name" name="name">
                <input type="text" required id="regis-address" class="top-input" placeholder="Complete Address" name="address">
                <input type="text" required id="contact-number" class="top-input" placeholder="Mobile Number" name="number">
                <input type="text" required id="regis-email" class="top-input" placeholder="E-mail" name="email">
                <input type="text" required id="regis-username" class="top-input" placeholder="Create Username" name="username">
                <input type="password" required id="regis-password" class="top-input" placeholder="Create password" name="password">
            </div>
        </div>

        <!-- Mid Section --> 
        <div class="middle-section">
            <div class="left flex-boiler-plate">
                <div class="membership-opt-drop flex-column">
                    <label for="memberships" class="memberships-title">Membership</label>
                    <label for="memberships" class="membership-dropdown"> <input type="radio" name="membership" id="member-opt" value="Walk In">          Walk In</label>
                    <br>
                    <label for="memberships" class="membership-dropdown"> <input type="radio" name="membership" id="member-opt" value="Student">          Student</label>
                    <br>
                    <label for="memberships" class="membership-dropdown"> <input type="radio" name="membership" id=" member-opt" value="Regular">          Regular</label>
                </div>     
            </div>
        </div>

         <!-- Bottom Section -->
            <div class="bottom-section">
                <div class="purchase-button">
                    <button type="submit" class="wrapper">REGISTER</button>
                </div>

            </div>
        
    </form>
   
</body>

</html>