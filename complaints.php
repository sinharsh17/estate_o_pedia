<?php
            if (isset($_POST['name'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "estate_o_pedia";
                $connection = mysqli_connect($host, $username, $password, $dbname);
                if (!$connection) {
                    die("Connection failed!" . mysqli_connect_error());
                }
                
                    $sql = "INSERT INTO complaints (name,email,subject,message) VALUES ('$name','$email','$subject','$message');";
                    
                    // echo $sql;
                    if ($connection->query($sql) == true) {
                        echo "success";
                    } else {
                        echo "error" . mysqli_error($connection);
                    }
                    mysqli_close($connection);
                }
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
            <a href="complaints.php">Complaints</a>
        </nav>

        <div class="icons">
            <div id="menu-bars" class="fas fa-bars"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="credentials.php" class="fas fa-user"></a>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <form action="complaints.php" method="POST">

            <h3>file your complaint here</h3>


            <div class="inputBox">
                <input type="text" name="name" placeholder="name" id="name">
                <input type="text" name="email" placeholder="email" id="email">
                <input type="text" name="subject" placeholder="subject" id="subject">
                <textarea name="message" placeholder="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <div class="buttons-container">
                <input type="submit" value="file complaint" class="btn">
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

    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> properties </h1>

        <div class="box-container">

            <div class="box">
                <div class="image-container">
                    <img src=" images/img-1.jpg" alt="">
                    <div class="info">
                        <h3>3 days ago</h3>
                        <h3>for rent</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>1</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>4</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>$25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>jogeshwari west, mumbai, india - 400104</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src=" images/img-2.jpg" alt="">
                    <div class="info">
                        <h3>6 days ago</h3>
                        <h3>for sell</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>2</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>7</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>$25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>jogeshwari west, mumbai, india - 400104</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src=" images/img-3.jpg" alt="">
                    <div class="info">
                        <h3>1 days ago</h3>
                        <h3>for rent</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>1</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>6</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>$25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>jogeshwari west, mumbai, india - 400104</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src=" images/img-4.jpg" alt="">
                    <div class="info">
                        <h3>9 days ago</h3>
                        <h3>for rent</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>2</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>6</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>jogeshwari west, mumbai, india - 400104</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src=" images/img-5.jpg" alt="">
                    <div class="info">
                        <h3>10 days ago</h3>
                        <h3>for sell</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>3</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>8</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>jogeshwari west, mumbai, india - 400104</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image-container">
                    <img src=" images/img-6.jpg" alt="">
                    <div class="info">
                        <h3>3 days ago</h3>
                        <h3>for sell</h3>
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-film">
                            <h3>1</h3>
                        </a>
                        <a href="#" class="fas fa-camera">
                            <h3>4</h3>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                        <h3>25,000/mo</h3>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-envelope"></a>
                        <a href="#" class="fas fa-phone"></a>
                    </div>
                    <div class="location">
                        <h3>modern apartments</h3>
                        <p>jogeshwari west, mumbai, india - 400104</p>
                    </div>
                    <div class="details">
                        <h3> <i class="fas fa-expand"></i> 3500 sqft </h3>
                        <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                        <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">request info</a>
                        <a href="#" class="btn">view details</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- featured section ends -->

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