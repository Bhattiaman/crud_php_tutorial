<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="links/inks.php">
</head>
<body>
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 20px;">Welcome!</h2>
        <p class="message">Please fill all the details carefully. This form can change your life!</p>
        <form id="loginForm" action="<?php echo htmlentities($_SERVER['PHP_SELF ']) ?>" method="POST">
          
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email ID:</label>
            <input type="email" id="email" name="email" required>



            <label for="mobile">Mobile Number:</label>
            <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required>

            <label for="qualification">Qualification:</label>
            <input type="text" id="qualification" name="degree" required>


            <label for="references">Any References:</label>
            <input type="text" id="references" name="refer">

            
            
            <label for="language">language</label>
            <input type="text" id="language" name="lang" required>

           
            <input type="submit" name="submit" value="Register">
            <a href="select.php" >Check Form</a>
        </form>
    </div>
</body>
</html>


<?php
    include 'dbcon.php';
    if(isset($_POST['submit'])){

        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $degree = mysqli_real_escape_string($con, $_POST['degree']);
        $refer = mysqli_real_escape_string($con, $_POST['refer']);
        $lang = mysqli_real_escape_string($con, $_POST['lang']);

        $insertquery = "INSERT INTO registration(name, email, mobile, degree, refer, lang) VALUES('$name','$email','$mobile','$degree','$refer','$lang')";

        $query = mysqli_query($con,$insertquery);
        if($query){
            ?>
            <script>alert('Inserted successfully');</script>
            <?php
        }else{
            ?><script>alert('no inserted');</script>
            <?php
        }
        }

    
?>