<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="styles/contacts.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Trakia Cyber Club</title>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="mainContainer">
            <!-- Logo -->
            <div class="logoArea">
                <a href="index.php"><img src="images/logo4.png" alt="site-logo"></a>
            </div>

            <!-- Navigation -->
            <nav class="navBar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li><a href="contact.php" class="active">Contact Us</a></li>
                </ul>
            </nav>

            <!-- User Icon -->
            <div class="rightSide">
                <div class="userArea">
                    <a class="user-icon"><i class="fa-regular fa-circle-user"></i></a>
                    <div class="dropDown">
                        <ul>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="#">My Favourites</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="menuArea">
                    <div class="menuBtn">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main>
        <img class="shape1" src="./images/shape1.png">
        <img class="shape2" src="./images/shape2.png">
        <div class="mainContainer">
            <!-- Contacts -->
            <section>
                <div class="contactsArea">
                    <!-- address -->
                    <div class="addressArea">
                    <?php
                        require 'inc/db.inc'; 
                        $table = "content";

                        $name1 = "ContactUs-1";
                        $query1 = "SELECT * FROM $table WHERE name = '$name1'";
                        $result1 = $mysqli->query($query1);
                        $row1 = $result1->fetch_assoc();

                        $name2 = "ContactUs-2";
                        $query2 = "SELECT * FROM $table WHERE name = '$name2'";
                        $result2 = $mysqli->query($query2);
                        $row2 = $result2->fetch_assoc();

                        $name3 = "ContactUs-3";
                        $query3 = "SELECT * FROM $table WHERE name = '$name3'";
                        $result3 = $mysqli->query($query3);
                        $row3 = $result3->fetch_assoc();

                        $name4 = "ContactUs-4";
                        $query4 = "SELECT * FROM $table WHERE name = '$name4'";
                        $result4 = $mysqli->query($query4);
                        $row4 = $result4->fetch_assoc();
                    ?>
                        <div class="box">
                            <i class="fa-solid fa-location-dot"></i>
                            <h2><?php echo $row1['title']; ?></h2>
                            <p><?php echo $row1['text']; ?></p>
                            <div class="admin-btns">
                                <a class="edit-btn" href="edit.php?id=<?php echo $row1['id']; ?>">Edit</a>
                            </div>
                        </div>
                        <div class="box">
                            <i class="fa-solid fa-building"></i>
                            <h2><?php echo $row2['title']; ?></h2>
                            <p><?php echo $row2['text']; ?></p>
                            <div class="admin-btns">
                                <a class="edit-btn" href="edit.php?id=<?php echo $row2['id']; ?>">Edit</a>
                            </div>
                        </div>
                        <div class="box">
                            <i class="fa-solid fa-phone"></i>
                            <h2><?php echo $row3['title']; ?></h2>
                            <p><?php echo $row3['text']; ?></p>
                            <div class="admin-btns">
                                <a class="edit-btn" href="edit.php?id=<?php echo $row3['id']; ?>">Edit</a>
                            </div>
                        </div>
                        <div class="box">
                            <i class="fa-solid fa-envelope"></i>
                            <h2><?php echo $row4['title']; ?></h2>
                            <p><?php echo $row4['text']; ?></p>
                            <div class="admin-btns">
                                <a class="edit-btn" href="edit.php?id=<?php echo $row4['id']; ?>">Edit</a>
                            </div>
                        </div>

                        <?php
                            $mysqli->close();
                        ?>
                    </div>

                    <!-- Map Area -->
                    <div class="mapArea">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2946.2690875585604!2d25.5711639!3d42.400714699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a86a6ed8f009bd%3A0x9b28a6a11c26f997!2z0KLRgNCw0LrQuNC50YHQutC4INGD0L3QuNCy0LXRgNGB0LjRgtC10YI!5e0!3m2!1sbg!2sbg!4v1709468809500!5m2!1sbg!2sbg"
                        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Site Footer -->
    <footer>
        <div class="mainContainer">
            <div class="textArea">
                <p>&copy; 2024 All rights reserved.</p>
            </div>
            <div class="socialMediaArea">
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="scripts/navBar.js"></script>
    <script src="scripts/scrollTop.js"></script>
</body>

</html>