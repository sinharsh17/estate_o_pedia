<?php
//This script will handle login
session_start();

// // check if the user is already logged in
// if(isset($_SESSION['username']))
// {
//     header("location: welcome.php");
//     exit;
// }
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }

echo $username,$password;
if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corredct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>

<html>

<head>
    <title>real estate website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <a href="index.php" class="logo"><span>Estate-o-</span>Pedia</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#agents">agents</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <div id="menu-bars" class="fas fa-bars"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="../../wt/index.php" class="fas fa-home"></a>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <form action="" method="post">

            <h3>Login to your Estate-O-Pedia Account</h3>


            <div class="inputBox">

                <input type="text" name="username" placeholder="Username" id="username">
                <input type="password" name="password" placeholder="password" id="password">
            </div>
            <div class="buttons-container">
                <button type="submit" class="btn">Login</button>
            </div>
            <!-- <input type="submit" value="search property" class="btn"> -->
        </form>
    </section>

    <!-- home section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src=" images/s-1.png" alt="">
                <h3>buying home</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga
                    ad? Perspiciatis, autem officiis?</p>
                <a href="learnmorebh.php" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src=" images/s-2.png" alt="">
                <h3>renting home</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga
                    ad? Perspiciatis, autem officiis?</p>
                <a href="learnmorerh.php" class="btn">learn more</a>
            </div>

            <div class="box">
                <img src=" images/s-3.png" alt="">
                <h3>selling home</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga
                    ad? Perspiciatis, autem officiis?</p>
                <a href="learnmoresh.php" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- agents section starts  -->

    <section class="agents" id="agents">

        <h1 class="heading"> professional <span>agents</span> </h1>

        <div class="box-container">

            <div class="box">
                <a href="#" class="fas fa-envelope"></a>
                <a href="#" class="fas fa-phone"></a>
                <img src=" images/pic-1.png" alt="">
                <h3>Harshit Singh</h3>
                <span>agent</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <a href="#" class="fas fa-envelope"></a>
                <a href="#" class="fas fa-phone"></a>
                <img src=" images/pic-2.png" alt="">
                <h3>Anvi Panwar</h3>
                <span>agent</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <a href="#" class="fas fa-envelope"></a>
                <a href="#" class="fas fa-phone"></a>
                <img src=" images/pic-4.png" alt="">
                <h3>Dechamma PT</h3>
                <span>agent</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

        </div>

    </section>

    <!-- agents section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="icons-container">

            <div class="icons">
                <img src=" images/icon-1.png" alt="">
                <h3>phone number</h3>
                <p>+123-456-7890</p>
                <p>+111-222-3333</p>
            </div>

            <div class="icons">
                <img src=" images/icon-2.png" alt="">
                <h3>email address</h3>
                <p> estate-o-pedia@gmail.com </p>
                <p> estate-o-pedia@gmail.com </p>
            </div>

            <div class="icons">
                <img src=" images/icon-3.png" alt="">
                <h3>office address</h3>
                <p>jogeshwari, mumbai, india - 400104</p>
            </div>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="footer-container">

            <div class="box-container">

                <div class="box">
                    <h3>branch location</h3>
                    <a href="#">Bangalore</a>
                    <a href="#">Delhi</a>
                    <a href="#">Chennai</a>
                    <a href="#">Mumbai</a>
                </div>

            </div>

            <div class="credit">created by <span>Students of 4BCA-A</span> | all rights reserved! </div>

        </div>

    </section>

    <!-- footer section ends -->

    <!-- javascript part  -->
    <script>

        let menu = document.querySelector('#menu-bars');
        let navbar = document.querySelector('.navbar');

        menu.onclick = () => {
            navbar.classList.toggle('active');
            menu.classList.toggle('fa-times');
        }

        window.onscroll = () => {
            navbar.classList.remove('active');
            menu.classList.remove('fa-times');
        }

    </script>

</body>

</html>
