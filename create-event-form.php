<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="styles/login.css">
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
                <h1 class="formName">Създай евент</h1>
                <form>
                    <div>
                        <label for="eventName">Име на евент:</label><br>
                        <input type="text" id="eventName" name="eventname" placeholder="Името на евента" class="create-event-form"><br>
                    </div>
                    <div>
                        <label for="location">Местоположение</label><br>
                        <input type="text" id="location" name="location" class="create-event-form" pattern="" placeholder="Местоположение на провеждане"><br>
                    </div>
                    <div>
                        <label for="startsOn">Дата и час</label><br>
                        <input type="datetime-local" id="startsOn" name="startsOn" class="create-event-form" pattern="" placeholder="Дата и час на започване"><br>
                    </div>
                    <div>
                        <label for="photo">Снимка</label><br>
                        <input type="file" id="photo" name="photo" class="create-event-form photo-add" pattern=""><br>
                    </div>
                    <div>
                        <label for="subject">Описание:</label><br>
                        <textarea id="subject" name="subject" rows="4" placeholder="Напиши описание..."></textarea>
                    </div>
                    <div>
                        <button type="button" id="SubmitBtn" onclick="alert('Hello World!')">Изпрати</button>
                    </div>
                </form>
            </div>
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