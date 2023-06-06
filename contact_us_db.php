<?php
session_start();
$conn=new mysqli("localhost","root","","edugodb");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$msg = $_POST['msg'];
$name = $_POST['username'];

$sql = "SELECT * FROM users where email='$_SESSION[email]'";
$res = mysqli_query($conn,$sql);

if($res->num_rows > 0){

    
    if($res->num_rows>0) {

    $sql = "INSERT INTO queries(username,email,msg) values('$name','$_SESSION[email]','$msg')";
    $res = mysqli_query($conn,$sql);
    
    echo '<script> window.location.href="send_query_mail_to_admin.php"; </script>';
 
    }

}

else{
    echo '<script>alert("Invalid EmailId") ; 
    window.location.href="contact_us_page.php"; </script>';
}
?>

