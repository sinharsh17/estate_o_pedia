<?php
require_once "config.php";

$username=$password=$cnfpassword="";
$username_err=$password_err=$cnfpassword_err="";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST["username"]))) {
        $username_err="username cannot be blank";
    }
    else{
        $sql="select id from users where username=?";
        $stmt=mysqli_prepare($conn,$sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt,"s",$param_username);
            $param_username=trim($_POST['username']);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt)==1) {
                    $username_err="this username is already taken";
                }
                else{
                    $username=trim($_POST['username']);
                }
            }
            else{
                echo "something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);
    if (empty(trim($_POST['password']))) {
        $password_err="password cannot be blank";
    }
    elseif (strlen(trim($_POST['password']))<5) {
        $password_err="password cannot be less than 5 characters";
    }
    else{
        $password=trim($_POST['password']);
    }
    if (trim($_POST['password'])!=trim($_POST['cnfpassword'])) {
        $password_err="passwords didn't mathched. Enter again";
    }
    
if(empty($username_err)&&empty($password_err)&&empty($cnfpassword_err)){
    $sql="INSERT INTO users (username,password) values(?,?)";
    $stmt=mysqli_prepare($conn,$sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt,"ss",$param_username,$param_password);
        
        $param_username=$username;
        $param_password=password_hash($password,PASSWORD_DEFAULT);
        
        if (mysqli_stmt_execute($stmt)) {
            header("location: login.php");
        }
        else{
            echo "something went wrong. cannot redirect";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
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
            <a href="complaints.php">Complaints</a>
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
        <?php
            if (isset($_POST['first_name'])) {
                $first_name = $_POST['first_name'];
                $middle_name = $_POST['middle_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];
                $phone_number = $_POST['phone_number'];
                $user_type = $_POST['user_type'];

                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "estate_o_pedia";
                $conn = mysqli_connect($host, $username, $password, $dbname);
                if (!$conn) {
                    die("Connection failed!" . mysqli_connect_error());
                }
                
                if ($user_type=="builder") {
                    $sql = "INSERT INTO builders (first_name,middle_name,last_name,email,phone_number,user_type) VALUES ('$first_name','$middle_name','$last_name','$email','$phone_number','$user_type');";
                    
                    // echo $sql;
                    if ($conn->query($sql) == true) {
                        echo "success";
                    } else {
                        echo "error" . mysqli_error($conn);
                    }
                }

                if ($user_type=="individual") {
                    $sql = "INSERT INTO individuals (first_name,middle_name,last_name,email,phone_number,user_type) VALUES ('$first_name','$middle_name','$last_name','$email','$phone_number','$user_type');";
                    
                    // echo $sql;
                    if ($conn->query($sql) == true) {
                        echo "success";
                    } else {
                        echo "error" . mysqli_error($conn);
                    }
                }

                if ($user_type=="agent") {
                    $sql = "INSERT INTO agents (first_name,middle_name,last_name,email,phone_number,user_type) VALUES ('$first_name','$middle_name','$last_name','$email','$phone_number','$user_type');";
                    
                    // echo $sql;
                    if ($conn->query($sql) == true) {
                        echo "success";
                    } else {
                        echo "error" . mysqli_error($conn);
                    }
                }

                mysqli_close($conn);
            }
        ?>

        <form action="signup.php" method="POST">

            <h3>Signup for an Estate-O-Pedia Account</h3>


            <div class="inputBox">

                <input type="text" name="first_name" placeholder="First Name" id="first_name">
                <input type="text" name="middle_name" placeholder="Middle Name(optional)" id="middle_name">
                <input type="text" name="last_name" placeholder="Last Name" id="last_name">
                <input type="text" name="username" placeholder="Username" id="username">
                <input type="email" name="email" placeholder="Email-Id" id="email">
                <input type="password" name="password" placeholder="password" id="password">
                <input type="password" name="cnfpassword" placeholder="confirm password" id="cnfpassword">
                <input type="text" name="phone_number" placeholder="Phone Number" id="phone_number">
                <select name="user_type" id="user_type">
                    <option value="" disabled hidden selected>User Type</option>
                    <option value="builder">Builder</option>
                    <option value="individual">Individual</option>
                    <option value="agent">Agent</option>
                </select>
            </div>
            <div class="tc_checkbox">
<input id="tc_checkbox" name="termsAndConditions" type="checkbox" value="true"><input type="hidden" name="_termsAndConditions" value="on">
<label for="tc_checkbox">
I agree to Estate-O-Pedia
<a href="http://property.magicbricks.com/terms/terms.html" target="_blank">T&amp;C</a>, <a href="http://property.magicbricks.com/terms/terms.html" target="_blank">Privacy Policy</a>, &amp; <a href="http://property.magicbricks.com/terms/terms.html" target="_blank">Cookie Policy</a>
</label>
            </div>
            <div class="buttons-container">
                <button type="submit" name="submit" class="btn">Signup</button>
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