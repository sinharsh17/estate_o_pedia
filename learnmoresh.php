<?php

?>


<html>

<head>
    <title>real estate website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <a href="index.php" class="logo"><span>Estate-o-</span>Pedia</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#featured">featured</a>
            <a href="#agents">agents</a>
            <a href="#contact">contact</a>
        </nav>
        
        
        <div class="icons">
            <div id="menu-bars" class="fas fa-bars"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="credentials.php" class="fas fa-user"></a>
        </div>
        
    </header>
    
    <!-- header section ends -->

    <section class="services">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo vero praesentium adipisci, perferendis quia placeat maiores numquam labore quo iste soluta nesciunt iure ipsa debitis. Nulla officiis, soluta facilis dolor minima voluptatem aliquid vel adipisci quae cumque veniam nobis maxime magni error a omnis tempore eveniet unde quaerat minus, libero corrupti labore, recusandae quam! Atque officiis velit sapiente similique. Commodi beatae ab aut voluptatibus porro, nisi ducimus optio adipisci, corporis quis dicta quo id! Corporis harum quo laborum natus. Cupiditate, in sapiente sed delectus facere placeat ex culpa nihil ipsam sequi, similique, ratione maxime iste et incidunt! Veritatis, eos rem? Accusamus repellendus eaque aliquid quae saepe laborum cumque praesentium nobis quam ut ex dolor ratione, esse ipsum ullam iste temporibus odit dolorem fugit laboriosam, aut qui architecto quia perspiciatis. Laboriosam accusantium quis at dolorum nemo quisquam, reiciendis id assumenda esse adipisci voluptatem, dolorem voluptatum molestias numquam voluptatibus sint rem in modi culpa. Quidem neque, ab blanditiis fuga quam quibusdam? Hic ut perspiciatis illo enim quis eius ab, aliquam adipisci sint commodi natus nam voluptates esse reiciendis fugiat temporibus atque vero laboriosam voluptas neque amet quas ea praesentium culpa! Cumque ipsa earum sapiente aut perspiciatis in, officiis qui at mollitia architecto magnam cupiditate illo doloremque, natus, modi fugiat enim! Numquam quia est incidunt, obcaecati aut neque nam blanditiis magnam optio rerum, minima in voluptates nemo fugit aperiam. Similique magnam tempore consequatur odio quidem asperiores veniam doloribus inventore unde eius vel modi quis nobis voluptas repellat dolorem nulla error laboriosam, rerum, delectus ipsam voluptatem officiis cum mollitia! Sapiente corporis molestiae cupiditate laudantium saepe nesciunt molestias laborum consectetur esse. Earum non, reprehenderit cum dolore vitae id at, perspiciatis omnis, quia quidem totam ullam? Eligendi mollitia nihil id, ad quaerat laborum enim hic consequatur dignissimos temporibus dolorem, nam deleniti voluptate repudiandae iste, maxime nostrum!

        </p>
    </section>
    <!-- services section starts  -->

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

        <div class="row">

            <?php
            if (isset($_POST['name'])) {
                $name = $_POST['name'];
                $number = $_POST['number'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "estate_o_pedia";
                $conn = mysqli_connect($host, $username, $password, $dbname);
                if (!$conn) {
                    die("Connection failed!" . mysqli_connect_error());
                }
                $sql = "INSERT INTO query VALUES ('$name','$number','$email','$subject','$message');";
                // echo $sql;
                if ($conn->query($sql) == true) {
                    echo "success";
                } else {
                    echo "error" . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
            ?>

            <form action="index.php" method="post">
                <div class="inputBox">
                    <input type="text" name="name" placeholder="name" id="name">
                    <input type="integer" name="number" placeholder="number" id="number">
                </div>
                <div class="inputBox">
                    <input type="email" name="email" placeholder="email" id="email">
                    <input type="text" name="subject" placeholder="subject" id="subject">
                </div>
                <textarea name="message" placeholder="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>

            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1626697480414!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy"></iframe>

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