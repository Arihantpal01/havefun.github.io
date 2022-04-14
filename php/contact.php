
<?php

include 'db.php';


if(isset($_POST['submit'])){
    
    echo '<script>alert("There is a problem while sending your message");</script>';

}
else{
    $Name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$message =$_POST['message'];

    $sql="INSERT INTO `userstable` (`name`, `email`, `phone`, `message`) VALUES ('$Name', '$email', '$phone', '$message');";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    echo "<script>window.location='../contact.html';alert('Your Message Have Been Send');</script>";
    
}

?>