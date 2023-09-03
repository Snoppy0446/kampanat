<?php
require_once'../database/db_connection.php';
session_start();
$sql = "SELECT*FROM users";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>UserList</title>
</head>

<body>
<div class="container">
    <h1> User data </h1>
        <table class="table">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <a href = "adduser.php" class="btn btn-success mb-3">
                        Add
                    </a>
                </div>
            </div>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>E-mail</th>
                    

                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result)>0):?>
                    <?php while ($row = mysqli_fetch_assoc($result)):?>
                    <tr>
                         <td><?php echo $row["id"];?></td>
                         <td><?php echo $row["username"];?></td>
                         <td><?php echo $row["password"];?></td>
                         <td><?php echo $row["email"];?></td>

                    </tr>
                    <?php endwhile;?>
                    <?php else:?>
                    <tr>
                        <td colspan ="3"> No users </td>
                    </tr>
                    <?php endif;?>
            </tbody>
        </table>
</div>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

<?php
mysqli_close($conn);
?>