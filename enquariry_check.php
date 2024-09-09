<?php
include_once("include.php");

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql = "INSERT INTO `enquiry`(`Sno`, `Name`, `Email`, `Mesaage`) VALUES (NULL,'$name','$email','$message')";

$result = mysqli_query($conn, $sql);
echo $result;
if($result == 1){
    header("Location: index.php");
}
else{
    echo "error hai bhai";
}


?>