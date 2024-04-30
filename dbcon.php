<?php

$serer = "localhost";
$user = "root";
$password = "";
$db = "php_tutorial";

$con = mysqli_connect( $serer, $user , $password, $db);

if($con){
    ?>
    <script></script>
<?php  }else{?>
     <script>  </script>
    <?php

}


?>