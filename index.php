<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="styles/style.css">
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
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>

            <div class="rightSide">
                <!-- User Icon -->
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
                <!-- Hamburger -->
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

    <div class="banner">
        <div class="textArea">
            <h2>Trakia University</h2>
            <h1>Cyber Club</h1>
        </div>

    </div>

    <main>
        <img class="shape1" src="./images/shape1.png">
        <img class="shape2" src="./images/shape2.png">
        <div class="mainContainer">
            <?php
                require 'inc/db.inc'; 
                $table = "content";

                $name1 = "Home1";
                $query1 = "SELECT * FROM $table WHERE name = '$name1'";
                $result1 = $mysqli->query($query1);
                $row1 = $result1->fetch_assoc();

                $name2 = "Home2";
                $query2 = "SELECT * FROM $table WHERE name = '$name2'";
                $result2 = $mysqli->query($query2);
                $row2 = $result2->fetch_assoc();
            ?>

            <section class="aboutArea">
                <div class="textArea">
                    <h2><?php echo $row1['title']; ?></h2>
                    <p><?php echo $row1['text']; ?></p>
                </div>
                <div class="photoArea">
                    <img src="<?php echo $row1['imgURL']; ?>" alt="">
                </div>
            </section>
            <div class="admin-btns">
                <a class="edit-btn" href="edit.php?id=<?php echo $row1['id']; ?>">Edit</a>
            </div>

            <hr>
            <section class="testArea">
                <div class="photoArea">
                    <img src="<?php echo $row2['imgURL']; ?>" alt="">
                </div>
                <div class="textArea">
                    <h2><?php echo $row2['title']; ?></h2>
                    <p><?php echo $row2['text']; ?></p>
                </div>
            </section>
            <div class="admin-btns">
                <a class="edit-btn" href="edit.php?id=<?php echo $row2['id']; ?>">Edit</a>
            </div>

            <?php
                $mysqli->close();
            ?>
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

    <button id="back-to-top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    <!-- Scripts -->
    <script src="scripts/navBar.js"></script>
    <script src="scripts/scrollTop.js"></script>
</body>

</html>