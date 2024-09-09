<?php
include_once("include.php");

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone-number"];

$sql = "INSERT INTO `registation`(`Sno`, `Name`, `Email`, `Phone`) VALUES (NULL,'$name','$email','$phone')";

$result = mysqli_query($conn, $sql);
echo $result;
if($result == 1){
    header("Location: index.php");
}
else{
    echo "error hai bhai";
}


?>