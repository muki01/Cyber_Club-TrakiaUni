<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="styles/aboutUs.css">
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
                    <li><a href="aboutUs.php" class="active">About Us</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
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

                <section>
                    <div class="aboutUsArea">
                        <?php
                            require 'inc/db.inc'; 
                            $table = "content";

                            $name1 = "AboutUs";
                            $query1 = "SELECT * FROM $table WHERE name = '$name1'";
                            $result1 = $mysqli->query($query1);
                            $row1 = $result1->fetch_assoc();
                        ?>

                        <h2 class="headline"><?php echo $row1['title']; ?></h2>
                        <p>
                            <?php echo $row1['text']; ?>
                        </p>
                        <div class="admin-btns">
                            <a class="edit-btn" href="edit.php?id=<?php echo $row1['id']; ?>">Edit</a>
                        </div>

                        <?php
                        $mysqli->close();
                        ?>
                    </div>

                    <hr>
                    <div class="partnersArea">
                        <h2 class="headline">Партньори</h2>
                        <div class="partners">
                            <div class="partner">
                                <img src="images/ISACA-background.png">
                            </div>
                            <div class="partner">
                                <img src="images/ISACA-background.png">
                            </div>
                            <div class="partner">
                                <img src="images/ISACA-background.png">
                            </div>
                            <div class="partner">
                                <img src="images/ISACA-background.png">
                            </div>
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