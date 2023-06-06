
<?php 

session_start();
$conn=new mysqli("localhost","root","","edugodb");
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

//Mains

$jee_mains = "SELECT username,email from users WHERE jee_mains = 1";
$res_mains = mysqli_query($conn,$jee_mains);


$mains_count = "SELECT count(*) as num FROM users WHERE jee_mains = 1";
$res_mains_count = mysqli_query($conn,$mains_count);

$mains_count_num = mysqli_fetch_assoc($res_mains_count)['num'];


//Advanced

$jee_adv = "SELECT username,email from users WHERE advanced = 1";
$res_adv = mysqli_query($conn,$jee_adv);



$adv_count = "SELECT count(*) as num FROM users WHERE advanced = 1";
$res_adv_count = mysqli_query($conn,$adv_count);

$adv_count_num = mysqli_fetch_assoc($res_adv_count)['num'];


//Eamcet
$eamcet = "SELECT username,email from users WHERE eamcet = 1";
$res_eamcet = mysqli_query($conn,$eamcet);



$eamcet_count = "SELECT count(*) as num FROM users WHERE eamcet = 1";
$res_eamcet_count = mysqli_query($conn,$eamcet_count);

$eamcet_count_num = mysqli_fetch_assoc($res_eamcet_count)['num'];

//GRE
$gre = "SELECT username,email from users WHERE gre = 1";
$res_gre = mysqli_query($conn,$gre);



$gre_count = "SELECT count(*) as num FROM users WHERE gre = 1";
$res_gre_count = mysqli_query($conn,$gre_count);

$gre_count_num = mysqli_fetch_assoc($res_gre_count)['num'];


//Ielts
$ielts = "SELECT username,email from users WHERE ielts = 1";
$res_ielts = mysqli_query($conn,$ielts);



$ielts_count = "SELECT count(*) as num FROM users WHERE ielts = 1";
$res_ielts_count = mysqli_query($conn,$ielts_count);

$ielts_count_num = mysqli_fetch_assoc($res_ielts_count)['num'];


//Toefl 
$tofel = "SELECT username,email from users WHERE tofel = 1";
$res_tofel = mysqli_query($conn,$tofel);



$tofel_count = "SELECT count(*) as num FROM users WHERE tofel = 1";
$res_tofel_count = mysqli_query($conn,$tofel_count);

$tofel_count_num = mysqli_fetch_assoc($res_tofel_count)['num'];

//Cat
$cat = "SELECT username,email from users WHERE cat = 1";
$res_cat = mysqli_query($conn,$cat);


$cat_count = "SELECT count(*) as num FROM users WHERE cat = 1";
$res_cat_count = mysqli_query($conn,$cat_count);

$cat_count_num = mysqli_fetch_assoc($res_cat_count)['num'];


?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">  <!-- features para -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Fugaz+One&display=swap" rel="stylesheet"> <!-- for why edugo? explore exams -->

     <!-- For bars and cancel icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Footer Social Apps -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <link rel="stylesheet" href="dashboard.css">
    <link rel="icon" href="favicon.ico" type="image/icon type">


    <script src="home.js"></script>                 <!-- FOr tagline and para to appear -->

    <script defer src="home_feature.js"></script>   <!-- Intersction Observer-->

    <title>Edugo | DashBoard</title>
</head>

<body>

<nav>

<img class="Logo" src="Logo_new.jpeg" width="140px" height="50px">

<ul>
  <li><a href="Homepg.php">Home</a></li>

  <div class="user-menu"> <li> <a href="#"> Exams </a> </li>
  <ul class="menu-options">
    <li> <a href="admin_Mains_home.php">JEE Mains</a> </li>
    <li> <a href="admin_adv_home.php">JEE Advanced</a> </li>
    <li> <a href="admin_eamcet_home.php">EAPCET</a> </li>
    <li> <a href="admin_GRE_home.php">GRE</a> </li>
    <li> <a href="admin_IELTS_Home.php">IELTS</a> </li>
    <li> <a href="admin_toefl_home.php">TOEFL</a> </li>
    <li> <a href="admin_CAT_Home.php">CAT</a> </li>
  </div>
</div>

<div class="user-menu"> <li> <a href="#"> Study Materials </a> </li>
  <ul class="menu-options">
    <li> <a href="admin_mains_materials.php">JEE Mains</a> </li>
    <li> <a href="admin_adv_materials.php">JEE Advanced</a> </li>
    <li> <a href="admin_eamcet_materials.php">EAPCET</a> </li>
    <li> <a href="admin_gre_materials.php">GRE</a> </li>
    <li> <a href="admin_ielts_materials.php">IELTS</a> </li>
    <li> <a href="admin_toefl_materials.php">TOEFL</a> </li>
    <li> <a href="admin_cat_materials.php">CAT</a> </li>
  </div>
</div>

  
  <li><a href="add_file.php">Add File</a></li>

  <div class="user-menu">
    <div class="user-profile">
        <span class="material-symbols-outlined">
            person
            </span>
    </div>
    
    <ul class="menu-options">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="Signin.php"> <span class="material-symbols-outlined">
        logout
        </span>Logout</a></li>
    </ul>
  </div>

</ul>
</nav>

    <div class="girl_image" style="position:relative;left:356px;top:100px;">
        <img src="little-girl-holding-white-board-vector-6127930-removebg-preview.png" width="500px" height="500px">
    </div>


    <div class="details" style="border:5px solid #859292dc;">

    <h2> JEE MAINS  - 

    <?php echo $mains_count_num ?> has been registered. </h2>  

    
            <?php if($mains_count_num>0) { ?>

                <table>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>

                <?php while ($row = mysqli_fetch_assoc($res_mains)) {  ?>

                    <tr>
                        <td> <?php echo $row['username']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                    </tr>

               <?php } }

               else {
                echo "---";
               } ?>
            
        </tbody>
    </table>

    <h2> ADVANCED  - 

    <?php echo $adv_count_num ?> has been registered. </h2>  

    
            <?php if($adv_count_num>0) { ?>
                <table>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
               <?php while ($row = mysqli_fetch_assoc($res_adv)) {  ?>
                    
                    <tr>
                        <td> <?php echo $row['username']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                    </tr>
               <?php }}

               else {
                echo "---";
               } ?>
            
        </tbody>
    </table>

    <h2> EAMCET - 

    <?php echo $eamcet_count_num ?> has been registered. </h2>  


            <?php if($eamcet_count_num>0) { ?>
                <table>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>


                <?php while ($row = mysqli_fetch_assoc($res_eamcet)) {  ?>

                    <tr>
                        <td> <?php echo $row['username']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                    </tr>
               <?php }}

               else {
                echo "---";
               } ?>
            
        </tbody>
    </table>

    <h2> GRE - 

    <?php echo $gre_count_num ?> has been registered. </h2>  

            <?php if($gre_count_num>0) { ?>
                <table>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>

                <?php while ($row = mysqli_fetch_assoc($res_gre)) {  ?>


                    <tr>
                        <td> <?php echo $row['username']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                    </tr>
               <?php }}

               else {
                echo "---";
               } ?>
            
        </tbody>
    </table>

    <h2> IELTS - 

    <?php echo $ielts_count_num ?> has been registered. </h2>  

            <?php if($ielts_count_num>0) {  ?>
                <table>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>

                <?php while ($row = mysqli_fetch_assoc($res_ielts)) {  ?>

                    <tr>
                        <td> <?php echo $row['username']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                    </tr>
               <?php }}

               else {
                echo "---";
               } ?>
            
        </tbody>
    </table>

    <h2> TOEFL - 

    <?php echo $tofel_count_num ?> has been registered. </h2>  

            <?php if($tofel_count_num>0) { ?>
                <table>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>

             <?php   while ($row = mysqli_fetch_assoc($res_tofel)) {  ?>
                    <tr>
                        <td> <?php echo $row['username']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                    </tr>
               <?php }}

               else {
                echo "---";
               } ?>
            
        </tbody>
    </table>

    <h2> CAT - 

    <?php echo $cat_count_num ?> has been registered. </h2>  

            <?php if($cat_count_num>0) { ?>
                <table>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>

                <?php while ($row = mysqli_fetch_assoc($res_cat)) {  ?>

                    <tr>
                        <td> <?php echo $row['username']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                    </tr>
               <?php }}

               else {
                echo "---";
               } ?>
            
        </tbody>
    </table>

            </div>


</html>

