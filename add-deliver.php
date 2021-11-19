<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "naturalm_wp", "M{_^mSv7gkWQ", "naturalm_eserbil");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$name = $_POST['name'];

// Attempt insert query execution
$sql = "INSERT INTO delivers (name) VALUES ('$name')";
if(mysqli_query($link, $sql)){
    header("Location: https://eserbil.fashionoasis.eu/delivers.php");;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
