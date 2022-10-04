<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/dashboard.css">
    <script src="/static/popup.js" type="text/javascript" defer></script>
    <title>AlphaX - Dashboard</title>
</head>

<body>
<?php  
    $connection = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db($connection, 'alphax_gym');

    if (isset($_GET['id'])) {
        $id=$_GET['id'];
    }  

    $query = "SELECT * FROM users WHERE id= $id";
    $query_run = mysqli_query($connection, $query);

    if ($query_run)
    {
        while ($row = mysqli_fetch_assoc($query_run))
        {
    ?>

    <form action="" method="post"> 
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <div class="navigation-bar">

        <div class="navigation-left">

            <div class="contact">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M415.9 335.5c-14.6-15-56.1-43.1-83.3-43.1-6.3 0-11.8 1.4-16.3 4.3-13.3 8.5-23.9 15.1-29 15.1-2.8 0-5.8-2.5-12.4-8.2l-1.1-1c-18.3-15.9-22.2-20-29.3-27.4l-1.8-1.9c-1.3-1.3-2.4-2.5-3.5-3.6-6.2-6.4-10.7-11-26.6-29l-.7-.8c-7.6-8.6-12.6-14.2-12.9-18.3-.3-4 3.2-10.5 12.1-22.6 10.8-14.6 11.2-32.6 1.3-53.5-7.9-16.5-20.8-32.3-32.2-46.2l-1-1.2c-9.8-12-21.2-18-33.9-18-14.1 0-25.8 7.6-32 11.6-.5.3-1 .7-1.5 1-13.9 8.8-24 20.9-27.8 33.2-5.7 18.5-9.5 42.5 17.8 92.4 23.6 43.2 45 72.2 79 107.1 32 32.8 46.2 43.4 78 66.4 35.4 25.6 69.4 40.3 93.2 40.3 22.1 0 39.5 0 64.3-29.9 26-31.4 15.2-50.6-.4-66.7zm-11.5 55.9c-20 24.2-31.5 24.2-52.3 24.2-20.3 0-51.8-14-84.2-37.3-31-22.4-44.8-32.7-75.9-64.6-32.9-33.7-53.6-61.8-76.4-103.5-24.1-44.1-21.4-63.4-16.5-79.3 2.6-8.5 10.4-17.6 21-24.2.5-.3 1-.7 1.6-1 5.3-3.4 14.1-9.1 23.7-9.1 8 0 15.1 4 21.9 12.3l1 1.2c25.5 31.2 45.4 58.8 30.4 79.2-10.6 14.3-16.2 24-15.3 34 .8 9.7 7.3 17 17.1 28l.7.8c16.1 18.2 20.7 23 27.1 29.5 1.1 1.1 2.2 2.3 3.5 3.6l1.8 1.9c7.4 7.7 11.5 11.9 30.3 28.4l1.1 1c8 7 13.9 12.1 22.5 12.1 8.9 0 18.7-5.6 37.3-17.5 1.9-1.2 4.6-1.9 8-1.9 21.7 0 59.1 24.8 72.2 38.3 12 12.2 18 21.4-.6 43.9z"/></svg>
                <p> +63 91 2345 6789</p>
            </div>
            <div class="opening-time">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M15.5,11.5h-3v-5C12.5,6.223877,12.276123,6,12,6s-0.5,0.223877-0.5,0.5V12c0,0.0001831,0,0.0003662,0,0.0005493C11.5001831,12.2765503,11.723999,12.5001831,12,12.5h3.5c0.276123,0,0.5-0.223877,0.5-0.5S15.776123,11.5,15.5,11.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z"/></svg>
                <p>Everyday | 8:00am - 7:30pm</p>
            </div>

        </div>

        <div class="navigation-right">
            <ul>
                <li><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17.9902344,1.5957031c-1.0087891-0.1067505-2.0227051-0.1586304-3.0371094-0.1552734C11.5898438,1.4404297,9.5,3.5819702,9.5,7.0302734v2.3408203H6.6748047c-0.276001-0.0001831-0.4998779,0.2234497-0.5,0.4994507v3.8511353c-0.0001831,0.276001,0.2234497,0.4998169,0.4994507,0.5H9.5v7.71875c-0.0001831,0.276001,0.2234497,0.4998169,0.4994507,0.5h3.9780884c0.276001,0.0001831,0.4998169-0.2234497,0.5-0.4994507v-7.7192993h2.8164673c0.2512207-0.000061,0.463501-0.1864014,0.4960938-0.4355469l0.4970703-3.8505859c0.0357056-0.2736816-0.1572266-0.5245361-0.4309692-0.5602417c-0.0216064-0.0028076-0.043335-0.0042114-0.0651245-0.0042114h-3.3135376V7.4121094c0-0.9697266,0.1953125-1.375,1.4082031-1.375l2.0390625-0.0009766c0.276001,0.0001221,0.4998169-0.2234497,0.5-0.4994507V2.0917969C18.4248657,1.8408203,18.2390137,1.6286621,17.9902344,1.5957031z M17.4248047,5.0361328l-1.5390625,0.0009766c-2.1582031,0-2.4082031,1.3554688-2.4082031,2.375v2.4590454c-0.0001221,0.2759399,0.2234497,0.4998169,0.4994507,0.499939h3.2456665l-0.3681641,2.8505859h-2.8769531c-0.276001-0.0001221-0.4998169,0.2234497-0.5,0.4994507v7.7192993H10.5v-7.71875c0.0001831-0.276001-0.2234497-0.4998169-0.4993896-0.5H7.1748047v-2.8505859H10c0.276001,0.0001831,0.4998169-0.2234497,0.5-0.4994507V7.0302734c0-2.8740234,1.664978-4.5898438,4.453125-4.5898438c1.0087891,0,1.9199219,0.0546875,2.4716797,0.1025391V5.0361328z"/></svg></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><path d="M8 .5C3.858.5.5 3.609.5 7.444c0 2.185 1.091 4.135 2.795 5.408V15.5l2.554-1.402c.682.189 1.404.29 2.151.29 4.142 0 7.5-3.109 7.5-6.944S12.142.5 8 .5z"/><path d="M8.745 9.852l-1.91-2.037-3.726 2.037L7.208 5.5l1.957 2.037 3.68-2.037z"/></g></svg></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M22.5,3.5888672c0.0002441-0.2761841-0.2234497-0.5002441-0.4996338-0.5004883c-0.0898438-0.000061-0.1779785,0.0240479-0.255249,0.0698242c-0.7038574,0.4194946-1.4684448,0.7275391-2.2666016,0.9130859c-0.8716431-0.8326416-2.0318604-1.2953491-3.2373047-1.2910156c-2.6089478,0.0032349-4.7229004,2.1176758-4.7255859,4.7265625c0,0.1347656,0.0058594,0.2714844,0.0185547,0.4091797C8.5112915,7.5945435,5.7377319,6.09198,3.8173828,3.7353516c-0.175354-0.2139282-0.4909668-0.2451782-0.704895-0.0698242c-0.0467529,0.0383301-0.0861816,0.0848389-0.116394,0.137207C2.581604,4.5263672,2.3637695,5.3458252,2.3642578,6.1797485C2.362915,7.0950928,2.6275635,7.9910889,3.1259766,8.7587891c-0.0195312-0.0107422-0.039978-0.0214844-0.0595703-0.0332031c-0.1596069-0.0778809-0.3484497-0.065979-0.4970703,0.03125c-0.1546631,0.1004028-0.2477417,0.272583-0.2470703,0.4570312C2.3181152,9.3320923,2.3253174,9.4505005,2.34375,9.5673218c0.0957642,1.3353882,0.7573853,2.5662842,1.8183594,3.3828735c-0.0925903,0.0269165-0.1751709,0.0805664-0.2373047,0.1542969c-0.1132812,0.1314087-0.1502686,0.3121948-0.0976562,0.4775391c0.468811,1.461731,1.62146,2.6026611,3.0878296,3.0566406c-1.4753418,0.8259277-3.1745605,1.1630249-4.8535156,0.9628906c-0.274231-0.0336304-0.5238037,0.161438-0.5574341,0.4356689c-0.0233154,0.1904297,0.06427,0.3773804,0.2254639,0.4813232C3.7386475,19.812439,6.0780029,20.5003662,8.4677734,20.5c5.5748291,0.0617676,10.4938965-3.6341553,11.9863281-9.0058594c0.3389282-1.1375122,0.5119019-2.3179321,0.5136719-3.5048828c0-0.1201172,0-0.2451172-0.0029297-0.3720703C22.0166626,6.5477295,22.5733032,5.0870972,22.5,3.5888672z M20.0761719,7.1220703c-0.0820923,0.0969849-0.1240234,0.2217407-0.1171875,0.3486328c0.0087891,0.1767578,0.0087891,0.3525391,0.0087891,0.5185547c-0.0020142,1.0913086-0.1611938,2.1766968-0.4726562,3.2226562C18.1668701,16.1845703,13.6137085,19.6067505,8.4677734,19.5c-1.5258789,0.0005493-3.036377-0.3045654-4.4423828-0.8974609c1.6526489-0.1833496,3.220459-0.8276367,4.5244141-1.859375c0.2172241-0.1707764,0.2548828-0.4852905,0.0841064-0.7025146C8.5411377,15.9225464,8.4001465,15.852417,8.25,15.8496094c-1.3014526-0.0209351-2.4966431-0.7225342-3.1494141-1.8486328c0.4240723,0.0012817,0.8461914-0.057251,1.2539062-0.1738281c0.2652588-0.0761719,0.4185181-0.3529053,0.3423462-0.6181641C6.6450806,13.0286255,6.4966431,12.8924561,6.3125,12.8564453c-1.463562-0.2926636-2.6086426-1.4346924-2.9052734-2.8974609c0.4245605,0.1375122,0.8664551,0.2141113,1.3125,0.2275391c0.2264404,0.0168457,0.4329224-0.1294556,0.4921875-0.3486328C5.2793579,9.625,5.1976929,9.3931885,5.0117188,9.2695312C3.9785156,8.581604,3.3596802,7.4209595,3.3642578,6.1796875C3.3639526,5.7672119,3.4312134,5.3574829,3.5634766,4.9667969C5.7807617,7.361084,8.84552,8.7946777,12.1044922,8.9619141c0.1580811,0.0167236,0.3132935-0.0512085,0.4082031-0.1787109c0.1005859-0.1207275,0.138855-0.2814941,0.1035156-0.4345703c-0.0661621-0.2757568-0.0999756-0.5582275-0.1005859-0.8417969c0.0019531-2.0569458,1.6686401-3.7240601,3.7255859-3.7265625c1.0283203-0.0029297,2.0109863,0.4244995,2.710022,1.1787109c0.1178589,0.1260986,0.2926025,0.182251,0.4619141,0.1484375c0.7096558-0.1395874,1.3995972-0.3652344,2.0546265-0.671875C21.2976074,5.4550171,20.81073,6.3949585,20.0761719,7.1220703z"/></svg></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 24 24"><g transform="translate(-40 -40)"><rect width="24" height="24" x="40" y="40" fill="none"/><path fill="#2c2c2c" d="M110.9,199C110.9,195.744 108.256,193.1 105,193.1C105,193.1 95,193.1 95,193.1C91.744,193.1 89.1,195.744 89.1,199C89.1,199 89.1,209 89.1,209C89.1,212.256 91.744,214.9 95,214.9C95,214.9 105,214.9 105,214.9C108.256,214.9 110.9,212.256 110.9,209L110.9,199ZM109.1,199L109.1,209C109.1,211.263 107.263,213.1 105,213.1L95,213.1C92.737,213.1 90.9,211.263 90.9,209L90.9,199C90.9,196.737 92.737,194.9 95,194.9L105,194.9C107.263,194.9 109.1,196.737 109.1,199ZM104.89,203.238C104.575,201.109 102.891,199.425 100.762,199.11C100.524,199.074 100.284,199.057 100.043,199.057C97.355,199.057 95.143,201.269 95.143,203.957C95.143,206.645 97.355,208.857 100.043,208.857C102.731,208.857 104.943,206.645 104.943,203.957C104.943,203.716 104.926,203.476 104.89,203.238ZM103.11,203.502C103.132,203.653 103.143,203.805 103.143,203.957C103.143,205.657 101.744,207.057 100.043,207.057C98.343,207.057 96.943,205.657 96.943,203.957C96.943,202.256 98.343,200.857 100.043,200.857C100.195,200.857 100.347,200.868 100.498,200.89C101.845,201.09 102.91,202.155 103.11,203.502ZM105.5,197.6C105.997,197.6 106.4,198.003 106.4,198.5C106.4,198.997 105.997,199.4 105.5,199.4C105.003,199.4 104.6,198.997 104.6,198.5C104.6,198.003 105.003,197.6 105.5,197.6Z" transform="translate(-48 -152)"/></g></svg></li>
            </ul>
        </div>

    </div>

    <!-- Section Title -->
    <div class="header">
        <p>USER PROFILE</p>
    </div>

    <div class="main">
        <div class="side-bar">

            <!-- top side -->
            <div class="top-side">
                <div class="profile-picture-container">
                    <img class="profile-picture" src="/static/assets/profile-picture.jpg" alt="">
                </div>
                <div class="user">
                    <p class="name"><?php echo $row['name']; ?></p>
                </div>
                <p class="subscription"><?php echo $row['membership']; ?></p>
            </div>

            <!-- bottom side -->
            <!-- <div class="bottom-side">
                <svg class="crown" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 50 50" viewBox="0 0 50 50"><path d="M6.9 44.2h36.2c.6 0 1.1-.5 1.1-1.1v-2.7H5.8v2.7C5.8 43.8 6.3 44.2 6.9 44.2zM46 12.2c-1.7 0-3 1.3-3 3 0 .8.3 1.6.9 2.1l-9 9.2-8.5-15.2c.9-.5 1.5-1.5 1.5-2.6 0-1.7-1.3-3-3-3s-3 1.3-3 3c0 1.1.6 2.1 1.5 2.6l-8.5 15.2-9-9.2C6.7 16.8 7 16 7 15.2c0-1.7-1.3-3-3-3s-3 1.3-3 3c0 1.7 1.3 3 3 3 .1 0 .2 0 .2 0l1.6 20.4h38.4l1.6-20.4c.1 0 .2 0 .2 0 1.7 0 3-1.3 3-3C49 13.6 47.7 12.2 46 12.2z"/></svg>
                <p class="subscription">
                    <span class="subscription-type"></span>
                    <p>{ subsription } Subscriber</p>
                    <p> since { subscription-year }</p>
                    <span class="subscription-year"></span>
                </p>
            </div> -->

        </div>
        <div class="information">
        <!-- Edit Modal -->
        <div class="info-main">
        <form action="" method="post">
    
                <div class="edit-left">

                    <div class="edit-input-field">
                        <label for="edit-name">FULL NAME</label>
                        <input type="text" id="edit-name" value="<?php echo $row['name']; ?>" name="name" class="input">
                    </div>

                    <div class="age-birth">
                        <div class="edit-input-field small">
                            <label for="edit-age">AGE</label>
                            <input type="text" id="edit-age" value="<?php echo $row['age']; ?>" name="age" class="input">
                        </div>

                        <div class="edit-input-field medium">
                            <label for="edit-birthday">BIRTHDATE</label>
                            <input type="text" id="edit-birthday" value="<?php echo $row['birthdate']; ?>" name="birthdate" class="input" placeholder="yyyy-mm-dd">
                        </div>
                    </div>

                    <div class="edit-input-field">
                        <label for="edit-address">ADDRESS</label>
                        <input type="text" id="edit-address" value="<?php echo $row['address']; ?>" name="address" class="input">
                    </div>

                    <div class="edit-input-field">
                        <label for="edit-contact-number">CONTACT NUMBER</label>
                        <input type="text" id="edit-contact-number" value="<?php echo $row['number']; ?>" name="number" class="input">
                    </div>

                    <div class="edit-input-field">
                        <label for="edit-contact-number">USERNAME</label>
                        <input type="text" id="edit-contact-number" value="<?php echo $row['username']; ?>" name="username" class="input">
                    </div>

                    <div class="edit-input-field">
                        <label for="edit-contact-number">PASSWORD</label>
                        <input type="text" id="edit-contact-number" value="<?php echo $row['password']; ?>" name="password" class="input">
                    </div>

                </div>

                <div class="edit-right">

                    <div class="edit-input-field">
                        <label for="edit-email">EMAIL</label>
                        <input type="email" value="<?php echo $row['email']; ?>" name="email" id="edit-email" class="input">
                    </div>

                    <div class="edit-input-field">
                        <label for="edit-membership-plan">MEMBERSHIP PLAN</label>
                        <input type="text" class="input" value="<?php echo $row['membership']; ?>" name="membership" id="edit-membership-plan">
                    </div>

                    <div class="edit-input-field">
                        <label for="edit-payment-mode">MODE OF PAYMENT</label>
                        <input type="text" class="input" id="edit-payment-mode" value="<?php echo $row['mode_of_payment']; ?>" name="mode_of_payment">
                    </div>

                    <div class="modal-nav">

                    <!-- <button onclick="location.href = 'admin.php';" class="modal-close btn-border-pop">CLOSE</button> -->

                    <a href="admin.php" class="modal-close btn-border-pop"> CLOSE </a>

                    <button type="submit" name="save" class="save-info btn-border-pop">SAVE</button>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {
                        $name = $_POST['name'];
                        $address = $_POST['address'];
                        $number = $_POST['number'];
                        $email = $_POST['email'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $membership = $_POST['membership'];
                        $age = $_POST['age'];
                        $birthdate = $_POST['birthdate'];
                        $mode_of_payment = $_POST['mode_of_payment'];

                        $query = "UPDATE users SET `name`='$name', `address`='$address', `number`='$number', `email`='$email', `username`='$username', `password`='$password', `membership`='$membership', `age`='$age', `birthdate`='$birthdate', `mode_of_payment`='$mode_of_payment' WHERE `id` = $id ";
                        $query_run = mysqli_query($connection, $query);

                        if ($query_run)
                        {
                            echo '<script> alert("Data updated."); </script>';
                            // header("location: admin.php");
                        }
                        else
                        {
                            echo '<script> alert("Data not updated."); </script>';
                        }

                    }  
                    ?>            
                    
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        }
        else
        {
            echo '<script> alert("No record found."); </script>';
        }
        
        ?>
    </div>
    </form>
 </body>
</html>