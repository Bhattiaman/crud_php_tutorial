<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/select.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="links/links.php">
</head>
<body>
    <div class="main-div">
        <h1>List of candidates for web developer job</h1>

        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>degree</th>
                            <th>mobile</th>
                            <th>email</th>
                            <th>refer</th>
                            <th>post</th>
                            <th colspan="2">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'dbcon.php';
                            $selectquery = "select  * from registration";
                            $query = mysqli_query($con,$selectquery);
                            while($result = mysqli_fetch_assoc($query)){ 
                        ?>
                        <tr>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['degree']; ?></td>
                            <td><?php echo $result['mobile']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $result['refer']; ?></td>
                            <td><?php echo $result['post']; ?></td>
                            <td><a href="update.php?id=<?php echo $result['id']; ?>">HI</a></td>
                            <td><a href="delete.php?id=<?php echo $result['id']; ?>">HI</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>
</html>
