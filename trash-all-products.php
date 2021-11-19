<?php

include "database.php"; // Using database connection file here
$sql = "INSERT INTO products_trash (product_id, name, deliver, date) 
SELECT product_id,name,deliver,date FROM products";
if (mysqli_query($conn, $sql)) {
    $sqll = "DELETE from products ";
        if(mysqli_query($conn,$sqll)){
    header("Location: https://eserbil.fashionoasis.eu/welcome.php");;
        }
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
