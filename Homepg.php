<!DOCTYPE html>
<html lang="en">
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

    
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="pages.css">

    <link rel="icon" href="favicon.ico" type="image/icon type">


    <script src="home.js"></script>                 <!-- FOr tagline and para to appear -->

    <script defer src="home_feature.js"></script>   <!-- Intersction Observer-->

    <title>Edugo | Home</title>
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

     <div class="container">
        <p class="hidden">Learning Today,<br>Leading Tomorrow<br>
            <p class="tagline">We here to guide you </p>
    </div>

    
    <div class="exams">
        <h1>Explore Exams</h1>

        <table>

            <tr>

                <td> <button> <a href="Mains_home.php"> <img src="mains_icon.jpeg"> </button>  </td>
                <td> <button> <a href="adv_home.php"> <img src="advanced_icon.jpeg">     </a>           </button></td>
                <td> <button> <a href="eamcet_home.php"> <img src="eamcet_icon.jpeg">               </button></td>
                <td> <button> <a href="GRE_home.php"> <img src="gre_icon.jpeg">  </button></td>
            </tr>
            <tr class="second_row">
                <td> <button> <a href="IELTS_Home.php"> <img src="ielts_icon.jpeg"> </button></td>                
                <td> <button> <a href="toefl_home.php"> <img src="tofel_icon.jpeg"> </button></td>
                <td> <button> <a href="CAT_Home.php">   <img src="cat_icon.jpeg"> </button></td>
            </tr>

        </table>

    </div>

    <br><br>

    <div class="features">
        <h1>Why EduGo?</h1>

        <section class="hidden_feature">
            <img style="position:relative;left:200px" src="prev_que_image.jpeg" >
            <p style="margin-left:300px">Get a head start on your exam preparation with our extensive collection of previous year question papers! We provides you with access to a wide range of past exam papers, giving you the opportunity to practice and familiarize yourself with the format and types of questions you can expect to encounter. With our feature, you can boost your confidence and increase your chances of success in the exam</p>
        </section>

        <section class="hidden_feature">
            <p style="margin-left:200px;margin-right: 100px;">Take your exam preparation to the next level with our comprehensive study materials! We offer a wide range of resources to help you ace your exams, including practice tests, study guides, and expert tips. Our study materials are designed to help you understand key concepts, master difficult topics, and feel confident on exam day. Start preparing today and take the first step towards your success!</p>
            <img src="study_materials_image.jpeg">
        </section>

        <section class="hidden_feature">
            <img style="position:relative;left:200px" src="detailed_info_image.jpeg">
            <p style="margin-left:300px">Get access to all the information you need to succeed! Our feature provides detailed information about various exams, including exam patterns, important topics, previous year question papers, and more. With our feature, you can stay ahead of the competition and prepare more effectively for your exams.</p>
        </section>

        <section class="hidden_feature">
            <p style="margin-left:200px;margin-right: 100px;">Stay up-to-date with our personalized notifications feature! Simply choose your interests and get notified when anything related is uploaded to our webpage. Our feature saves you time by delivering the content you care about straight to your inbox. You never miss out on important updates again!</p>
            <img src="notifications_image.jpeg">
        </section>
       
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