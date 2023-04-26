<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<link rel="stylesheet" href="style.css">

<?php
session_start();

$neighbourhood = $_SESSION['neighbourhood'];
$city = $_SESSION['city'];
$minimum_expected_price = $_SESSION['minimum_expected_price'];
$maximum_expected_price = $_SESSION['maximum_expected_price'];
$property_status = $_SESSION['property_status'];
$property_type = $_SESSION['property_type'];
$bhk = $_SESSION['bhk'];
$amenities = $_SESSION['amenities'];
$bathrooms = $_SESSION['bathrooms'];

$host = "localhost";
$username = "root";
$password = "";
$dbname = "estate_o_pedia";

//Procedural
$connection = mysqli_connect($host, $username, $password, $dbname);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT neighbourhood,city,minimum_expected_price,maximum_expected_price,property_status,property_type,bhk,amenities,bathrooms FROM sell where neighbourhood='$neighbourhood' AND city='$city' AND minimum_expected_price='$minimum_expected_price' AND maximum_expected_price='$maximum_expected_price' AND property_status='$property_status' AND property_type='$property_type' AND bhk='$bhk' AND amenities='$amenities' AND bathrooms='$bathrooms'";

if (mysqli_query($connection, $query)) {
    // echo "Select Succesful!";
} else {
    echo "Select Query Failed" . mysqli_error($connection);
}

$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $neighbourhood = $row['neighbourhood'];
        $city = $row['city'];
        $minimum_expected_price = $row['minimum_expected_price'];
        $maximum_expected_price = $row['maximum_expected_price'];
        $property_status = $row['property_status'];
        $property_type = $row['property_type'];
        $bhk = $row['bhk'];
        $amenities = $row['amenities'];
        $bathrooms = $row['bathrooms'];
    }
} else {
    echo "No results found!";
}
mysqli_close($connection);
?>

<html>
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
    <section class="featured" id="featured">
        <div class="box-container">
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
                    <h3>₹
                        <?php echo $minimum_expected_price?> - ₹
                        <?php echo $maximum_expected_price?>
                    </h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>
                        <?php echo $neighbourhood?>
                    </h3>
                    <h2>
                        <?php echo $city?>
                    </h2>
                    <p></p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i>
                    <?php echo $property_status?>
                </h3>
                <h3> <i class="fas fa-expand"></i>
                <?php echo $property_type?>
            </h3>
            <h3> <i class="fas fa-bed"></i>
            <?php echo $bhk?>
                    </h3>
                    <h3> <i class="fas fa-expand"></i>
                        <?php echo $amenities?>
                    </h3>
                    <h3> <i class="fas fa-bath"></i>
                        <?php echo $bathrooms?>
                    </h3>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">request info</a>
                    <a href="#" class="btn">view details</a>
                </div>
            </div>
        </div>
    </div>
</section>

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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62209.80291809714!2d77.66271080026743!3d12.964640753794447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae11f35d0dfc83%3A0x30cfa512d80115f9!2sWhitefield%2C%20Bengaluru%2C%20Karnataka%2C%20India!5e0!3m2!1sen!2sjp!4v1682313545126!5m2!1sen!2sjp">
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

</html>