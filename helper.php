<?php
include_once "conn.php";

function signup($name, $email, $pass, $img)
{
    global $conn;
    if ($name && $email && $pass && $img == true) {
        $target = $_FILES['img']['tmp_name'];
        $folder = "uploads/";
        $target = $folder . basename($_FILES['img']['name']);
        move_uploaded_file($img, $target);
        $sql = "INSERT INTO `tab`(`name`, `email`, `pass`, `img`) VALUES ('$name','$email','$pass','$target')";
        try {
            $result = mysqli_query($conn, $sql);
        } catch (Exception $ex) {
            if ($ex) {
                return die("<script>
                         alert('This Email Already Exists Please Try Other Email');
                         window.location = 'index.php';
                         </script>");
            }
        }
        return $result;
    } else {
        return die("<script>
             alert('Please Fill Complete Registartion Form');
             window.location = 'index.php';
             </script>");
    }
}
if (isset($_POST['submit'])) {
    $registration = signup($_POST['name'], $_POST['email'], $_POST['pass'], $_FILES['img']['tmp_name']);
    if ($registration == true) {
        die("<script>
                     alert('Your Data Submited Successfully');
                     window.location = 'index.php';
                     </script>");
    } else {
        die("<script>
                     alert('Query Error');
                     window.location = 'index.php';
                     </script>");
    }
}