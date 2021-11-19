<?php

include "database.php"; // Using database connection file here

if( (isset($_GET['product_id'])) && (is_numeric($_GET['product_id']))){
    $product_id =$_GET['product_id'];
}
$sql = "INSERT INTO products_trash (product_id, name, deliver, date) 
SELECT product_id,name,deliver,date FROM products WHERE product_id='$product_id'";
if (mysqli_query($conn, $sql)) {
    $sqll = "DELETE from products where product_id='$product_id'";
        if(mysqli_query($conn,$sqll)){
    header("Location: https://eserbil.fashionoasis.eu/welcome.php");;
        }
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
