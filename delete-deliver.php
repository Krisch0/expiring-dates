<?php

include "database.php"; // Using database connection file here

if( (isset($_GET['id'])) && (is_numeric($_GET['id']))){
    $id =$_GET['id'];
}
$sql = "DELETE FROM delivers WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: https://eserbil.fashionoasis.eu/delivers.php");;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
