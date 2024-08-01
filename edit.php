<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="styles/edit.css">
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
    <main>
        <div class="mainContainer">
            <div class="box">
                <h1 class="formName">Edit</h1>

                <?php
                    require 'inc/db.inc'; 
                    $table = "content";

                    $id = $_GET['id'];
                    $query = "SELECT * FROM $table WHERE id = $id";
                    $result = $mysqli->query($query);
                    $row = $result->fetch_assoc();

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $title = $_POST['title'];
                        $text = $_POST['text'];
                        $imgURL = $_POST['imgURL'];

                        $update_query = "UPDATE $table SET title='$title', text='$text', imgURL='$imgURL' WHERE id=$id";
                        $update_result = $mysqli->query($update_query);

                        if ($update_result) {
                            header("Location: index.php");
                            exit;
                        } else {
                            echo "An error occurred while updating data: " . $mysqli->error;
                        }
                    }
                ?>

                <form method="post">
                    <div>
                        <label for="title">Title</label><br>
                        <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>"><br>
                    </div>
                    <div>
                        <label for="text">Text</label><br>
                        <textarea id="text" name="text"><?php echo $row['text']; ?></textarea>
                    </div>
                    <div>
                        <label for="imgURL">Image URL</label><br>
                        <input type="text" id="imgURL" name="imgURL" value="<?php echo $row['imgURL']; ?>"><br>
                    </div>
                    <div>
                        <button type="submit" class="submitBtn">Save</button>
                    </div>
                </form>

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