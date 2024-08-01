<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="styles/details.css">
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
                    <li><a href="events.php" class="active">Events</a></li>
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
                <div class="postArea">
                    <div class="textArea">
                        <h1>Cyber Security and New Technologies</h1>
                        <hr>
                        <div class="options">
                            <h2><i class="fa-regular fa-calendar"></i> March 14, 2024</h2>
                            <h2><i class="far fa-clock"></i> 11:00</h2>
                            <h2><i class="fa-solid fa-location-dot"></i> Академичен Информационен Център</h2>
                            <!-- <a href="" class="like"><i class="fa-regular fa-heart"></i> Like </a> -->
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus sit distinctio saepe nemo aut
                            libero sed, tempora, voluptas deserunt impedit quod necessitatibus commodi ad. Officia
                            repellendus illum vitae tempore? Numquam.Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Natus sit distinctio saepe nemo aut libero sed, tempora, voluptas deserunt impedit
                            quod necessitatibus commodi ad. Officia repellendus illum vitae tempore? Numquam.Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit. Natus sit distinctio saepe nemo aut libero
                            sed, tempora, voluptas deserunt impedit quod necessitatibus commodi ad. Officia repellendus
                            illum vitae tempore? Numquam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus
                            sit distinctio saepe nemo aut libero sed, tempora, voluptas deserunt impedit quod
                            necessitatibus commodi ad. Officia repellendus illum vitae tempore? Numquam.</p>
                        <div class="btnArea">
                            <a href="#" class="btn">Join Now</a>
                        </div>
                        <div class="admin-btns">
                            <a href="#" class="edit-btn">Edit</a>
                            <a href="#" class="dell-btn">Delete</a>
                        </div>
                    </div>
                    <div class="photoArea">
                        <img src="./images/event.jpg" alt="">
                    </div>
                </div>
                <div class="moreArea">
                    <h1>Upcoming events</h1>
                    <hr>
                    <div class="postsArea">
                        <div class="post">
                            <a href=""><img src="./images/event.jpg"></a>
                            <a href="">
                                <h2>Cyber Security and New Technologies</h2>
                            </a>
                        </div>
                        <div class="post">
                            <a href=""><img src="./images/event.jpg"></a>
                            <a href="">
                                <h2>Event Name</h2>
                            </a>
                        </div>
                        <div class="post">
                            <a href=""><img src="./images/event.jpg"></a>
                            <a href="">
                                <h2>Event Name</h2>
                            </a>
                        </div>
                        <div class="post">
                            <a href=""><img src="./images/event.jpg"></a>
                            <a href="">
                                <h2>Event Name</h2>
                            </a>
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