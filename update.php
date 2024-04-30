<?php

?>
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

        <form id="loginForm" action="" method="POST">
        <?php
    include 'dbcon.php';

    $id = $_GET['id'];
    $selectquery = "select  * from registration where id=$id";
    $query = mysqli_query($con,$selectquery);
    $result = mysqli_fetch_assoc($query);

    if(isset($_POST['submit'])){
        $id = $_GET[ 'id' ];

        
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $degree = mysqli_real_escape_string($con, $_POST['degree']);
        $refer = mysqli_real_escape_string($con, $_POST['refer']);
        $lang = mysqli_real_escape_string($con, $_POST['lang']);

        // $insertquery = "INSERT INTO registration(name, email, mobile, degree, refer, lang) VALUES('$name','$email','$mobile','$degree','$refer','$lang')";

        $updatequery = "update registration set id=$id, name='$name',email='$email',mobile='$mobile',degree='$degree',refer='$refer',lang='$lang' where id=$id";


        $query = mysqli_query($con,$updatequery);
        if($query){
            ?>
            <script>alert('updated successfully');</script>
            <?php
        }else{
            ?><script>alert('no updated');</script>
            <?php
        }
        }

    
?>
            <label for="name">Name:</label>
            <input type="text" id="name" name="user" value=<?php echo $result['name']; ?> required>

            <label for="email">Email ID:</label>
            <input type="email" id="email" name="email"  value=<?php echo $result['email']; ?> required>


            <label for="mobile">Mobile Number:</label>
            <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" value=<?php echo $result['mobile']; ?> required>

            <label for="qualification">Qualification:</label>
            <input type="text" id="qualification" name="degree" value=<?php echo $result['degree']; ?> required>


            <label for="references">Any References:</label>
            <input type="text" id="references" name="refer" value=<?php echo $result['refer']; ?> required>

            
            
            <label for="language">language</label>
            <input type="text" id="language" name="lang" value=<?php echo $result['lang']; ?> required>

           
            <input type="submit" name="submit" value="Update">
            <a href="select.php" >Check Form</a>
        </form>
    </div>
</body>
</html>


