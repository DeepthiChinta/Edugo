<?php
$conn= new mysqli("localhost","root","","edugodb");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$user=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pswd'];
$cnfpass=$_POST['cnfpswd'];

$sql="SELECT * FROM users WHERE email='$email'";
$res=mysqli_query($conn,$sql);

if($res->num_rows>0)
{
    echo '<script>alert("Already existing");
    window.location.href="Signin.php";</script>';
}

else
{
    if ($pass == $cnfpass)
    {
      $sql="INSERT INTO users(username,email,password) VALUES('$user','$email','$pass')";
      $res=mysqli_query($conn,$sql);
      if($res)
    {
        session_start();
        $_SESSION['email']=$email;

       echo '<script>alert("Successfully Registered");
       window.location.href="interests.php";</script>';
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    } 
    else
    {
        echo '<script>alert("password and the confirm password should be same");
        window.location.href="index.php";</script>';
    }
    $conn->close();
}
?>