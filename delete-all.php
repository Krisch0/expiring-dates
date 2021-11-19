<?php

include "database.php"; // Using database connection file here

$sql = "DELETE from products_trash";
if (mysqli_query($conn, $sql)) {
    header("Location: welcome.php");;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
