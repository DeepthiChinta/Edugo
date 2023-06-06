<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comme&family=Courgette&family=Fugaz+One&family=Roboto+Slab&family=Tangerine:wght@700&display=swap" rel="stylesheet">

    <!-- For bars and cancel icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    
    <link rel="stylesheet" href="contact_us.css">

    <link rel="icon" href="favicon.ico" type="image/icon type">


    <title>EduGo | Contact Us</title>


</head>

<body>

<nav>

<img class="Logo" src="Logo_new.jpeg" width="140px" height="50px">

<ul>
  <li><a href="Homepg.php">Home</a></li>

  <div class="user-menu"> <li> <a href="#"> Exams </a> </li>
  <ul class="menu-options">
    <li> <a href="Mains_home.php">JEE Mains</a> </li>
    <li> <a href="adv_home.php">JEE Advanced</a> </li>
    <li> <a href="eamcet_home.php">EAPCET</a> </li>
    <li> <a href="GRE_home.php">GRE</a> </li>
    <li> <a href="IELTS_Home.php">IELTS</a> </li>
    <li> <a href="toefl_home.php">TOEFL</a> </li>
    <li> <a href="CAT_Home.php">CAT</a> </li>
  </div>
</div>

<div class="user-menu"> <li> <a href="#"> Study Materials </a> </li>
  <ul class="menu-options">
    <li> <a href="mains_materials.php">JEE Mains</a> </li>
    <li> <a href="adv_materials.php">JEE Advanced</a> </li>
    <li> <a href="eamcet_materials.php">EAPCET</a> </li>
    <li> <a href="gre_materials.php">GRE</a> </li>
    <li> <a href="ielts_materials.php">IELTS</a> </li>
    <li> <a href="toefl_materials.php">TOEFL</a> </li>
    <li> <a href="cat_materials.php">CAT</a> </li>
  </div>
</div>

  <li><a href="rank_predictor.php">Rank Predictor</a></li>
  
  <li><a href="contact_us_page.php">Contact Us</a></li>

  <div class="user-menu">
    <div class="user-profile">
        <span class="material-symbols-outlined">
            person
            </span>
    </div>
    
    <ul class="menu-options">
      <li><a href="user_profile.php">Profile</a></li>
      <li><a href="edit_profile.php">Edit Profile</a></li>
      <li><a href="Signin.php"> <span class="material-symbols-outlined">
        logout
        </span>Logout</a></li>
    </ul>
  </div>

</ul>
</nav>

    <div class="details"> 
      
      <form id="query_details" action="contact_us_db.php" method="POST" onsubmit="send_query_mail_to_admin()">

       <label>Name</label> <br> <input type="text" name="username" id="username">                              <br><br>

       <label>Phone Number</label> <br> <input type="text" name="num" placeholder="0123456789" id="num">          <br><br>

       <label>Message/Query<label> <br> <textarea name="msg" rows="5" cols="50" id="msg">     </textarea>                  <br><br>


       <input type="submit" value="Send"> 
 
      </form>

    </div>


    <footer>

        <div class="edugo">

            <ul>
                <li>EduGo</li>  <br>
                <li>Sangivalasa</li> <br>
                <li>Tagarapuvalsa</li> <br>
                <li>Phone : 1234567890</li> <br>
                <li>Email : solutionsedugo@gmail.com</li> <br>
            </ul>

        </div>

        <div class="useful_links">

            <ul>

                <li> <a href="Homepg.php">Home</a> </li>                <br>
                <li> <a href="Homepg.php">Exams</a> </li>               <br>
                <li> <a href="Homepg.php">Study Materials</a> </li>     <br> 
                <li> <a href="rank_predictor.php">Rank Predictor</a> </li>       <br>
                <li> <a href="contact_us_page.php">Contact Us </a> </li>          <br>

            </ul>

        </div>


        <div class="services">

        <ul>
            <li> <a href="Mains_home.php">Jee Mains</a> </li>                        <br>
            <li> <a href="adv_home.php">Jee Advanced</a> </li>                     <br>
            <li> <a href="eamcet_home.php">Eamcet</a> </li>                           <br>
            <li> <a href="GRE_home.php">GRE</a> </li>                              <br>
            <li> <a href="IELTS_Home.php">Ielts</a> </li>                            <br>
            <li> <a href="toefl_home.php">Toefl</a> </li>                            <br>
            <li> <a href="CAT_Home.php">Cat</a> </li>                              <br><br>
        </ul>
        </div>

        <div class="social_apps">
            <ul>
                <li> <img src="Logo_new.jpeg" width="140px" height="50px"> <div class="our_app">Our App </div> </li>
                <li> Follow us on </li>

                <li> <a href="#" class="fa fa-facebook"></a>
                     <a href="#" class="fa fa-twitter"></a>
                     <a href="#" class="fa fa-linkedin"></a>
                     <a href="#" class="fa fa-youtube"></a>
                     <a href="#" class="fa fa-instagram"></a>  
                     <a href="#" class="fa fa-reddit"></a>   
                </li>
            </ul>
        </div>

    </footer>

</body>
</html>