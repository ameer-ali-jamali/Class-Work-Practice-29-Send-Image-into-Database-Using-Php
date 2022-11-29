<?php
include_once "conn.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $tempname = $_FILES['img']['tmp_name'];
    $folder = "uploads/";
    $target = $folder . basename($_FILES['img']['name']);
    move_uploaded_file($tempname, $target);

    $insert = "INSERT INTO `aptech`(`Name`, `Email`, `Password`, `Img`) VALUES ('$name','$email','$pass','$target')";
    $result = mysqli_query($conn, $insert);
}