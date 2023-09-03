<div class="container">
    <h2 class="my-4">Procduct List</h2>
<div class="row"></div>
    <?php
    require_once('../database/db_connection.php');
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            echo '<div class="col=md-4">';
            echo '<div class="card product-crad">';
            echo 'img src="'. $row ['image'] . '" class="card-img-top" alt="Product image">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['name'].'</h5>';
            echo '<p class="card=text">Price: '. $row['price'] . '</p>'; 
            echo '/div';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo"<p>NO product found</p>";
    }

    mysqli_close($conn);
    ?>
</div>
