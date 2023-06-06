<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="pages_1.css">
    <link rel="stylesheet" href="pages.css">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comme&family=Courgette&family=Fugaz+One&family=Roboto+Slab&family=Tangerine:wght@700&display=swap" rel="stylesheet">

     <!-- For bars and cancel icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- Google Icons -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
 
     <!-- Footer Social Apps -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 

    <link rel="icon" href="favicon.ico" type="image/icon type">
    <title>Edugo | CAT </title>
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

<input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>

    <div class="sidebar" style="position:fixed;padding-top:30px;top:-15px;left:1px;padding-left:5px;padding-right:55px;">

        <ul>
            <li> <a href="admin_cat_regfee.php"> Registration Fee </a>  </li>
            <li> <a href="admin_cat_eligibility.php"> Eligibility </a>  </li>
            <li> <a href="admin_cat_examdate.php"> Exam Date </a>  </li>
            <li> <a href="admin_cat_syllabus.php"> Syllabus </a>  </li>
            <li> <a href="admin_cat_exampattern.php"> Exam Pattern </a>  </li>
            <li> <a href="admin_cat_cutoff.php"> Cut Off </a>  </li>
            <li> <a href="admin_cat_previouspapers.php"> Previous Papers </a>  </li>
            <li> <a href="admin_cat_topclgs.php">Top Colleges </a> </li>
            
        </ul>

    </div>
   

    <div class="girl_sidebar" style="position:fixed;left:1200px;top:150px;">
        <img src="girl_standing.jpg" width="300px" height="450px">

    </div>


    <div class="main_body">
        <h1>Eligiblity</h1>
        <p>Every year, IIM CAT publishes information about CAT exam eligibility criteria.
            The authority has the complete right to withdraw your application at any time during the selection process 
            if there are disparities in your eligibility. 
            So, before registering for the exam, you should examine the CAT Eligibility 2023.</p>
        <p>The candidates must note that the exam conducting authority CAT IIM had made some changes in CAT eligibility due to the last 2 years 
            of covid 19 pandemic. So, it is very important for all aspiring candidates to check the official 
            CAT exam eligibility for IIM very carefully to avoid later-stage discrepancies.</p>
        <h3>The key criteria for CAT eligibility are summarised in the table below.</h3>
        <table style="height: 210px; width: 100%;" width="100%">
            <tr style="height: 28px;">
                <th style="height: 28px;" width="35%">Components</th>
                <th style="height: 28px;" width="35%">Details</th>
            </tr>
            <tr style="height: 28px;">
                <td style="height: 28px;" width="35%">CAT age limit</td>
                <td style="height: 28px;" width="35%">None</td>
            </tr>
            <tr style="height: 28px;">
                <td style="height: 28px;" width="35%">Educational Eligibility</td>
                <td style="height: 28px;" width="35%">Graduate</td>
            </tr>
            <tr style="height: 28px;">
                <td style="height: 28px;" width="35%">Work Experience</td>
                <td style="height: 28px;" width="35%">None</td>
            </tr>
            <tr style="height: 28px;">
                <td style="height: 28px;" width="35%">Minimum Marks in Graduation</td>
                <td style="height: 28px;" width="35%">50% (45% for Reserved Category)</td>
            </tr>
            <tr style="height: 28px;">
                <td style="height: 28px;" width="35%">Reservation</td>
                <td style="height: 28px;" width="35%">As per Category</td>
            </tr>
        </table>
        <h3>CAT Eligibility: Reservation Details</h3>
        <p>The IIMs have included some reservations for the different category students applying for any of the business administration programmes.
        The reservation details of the IIMs are explained below in a comprehensive way.</p>
        <table style="height: 210px; width: 100%;" width="100%">
            <tr style="height: 28px;">
                <th style="height: 28px;" width="35%">Category</th>
                <th style="height: 28px;" width="35%">Reserved Percentage</th>
            </tr>
            <tr style="height: 28px;" >
                <td style="height: 28px;" width="35%">SC (Scheduled Caste)</td>
                <td style="height: 28px;" width="35%">15%</td>
            </tr>
            <tr style="height: 28px;">
                <td style="height: 28px;" width="35%">ST (Scheduled Tribe)</td>
                <td style="height: 28px;" width="35%">7.5%</td>
            </tr>
            <tr style="height: 28px;" >
                <td style="height: 28px;" width="35%">NC-OBC (Non-creamy Other Backward Classes)</td>
                <td style="height: 28px;" width="35%">27%</td>
            </tr>
            <tr style="height: 28px;" >
                <td style="height: 28px;" width="35%">Economically Weaker Sections (EWS)</td>
                <td style="height: 28px;" width="35%">up to 10%</td>
            </tr>
            <tr style="height: 28px;">
                <td style="height: 28px;" width="35%">PWD (Person With Disability)</td>
                <td style="height: 28px;" width="35%">5%</td>
            </tr>
        </table>
        <p>It should be noted that the candidates belonging to any of the above-mentioned castes are required to upload the caste certificate during registration and carry a photocopy of it during document verification. For further details about the caste certificate, check the below-given article.</p>
    </div>
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

                <li> <a href="admin_homepg.php">Home</a> </li>                <br>
                <li> <a href="admin_homepg.php">Exams</a> </li>               <br>
                <li> <a href="admin_homepg.php">Study Materials</a> </li>     <br> 
               
                <li> <a href="add_file.php">Add File </a> </li>          <br>

            </ul>

        </div>


        <div class="services">

        <ul>
        <li> <a href="admin_Mains_home.php">Jee Mains</a> </li>                        <br>
        <li> <a href="admin_adv_home.php">Jee Advanced</a> </li>                     <br>
        <li> <a href="admin_eamcet_home.php">Eamcet</a> </li>                           <br>
        <li> <a href="admin_GRE_home.php">GRE</a> </li>                              <br>
        <li> <a href="admin_IELTS_Home.php">Ielts</a> </li>                            <br>
        <li> <a href="admin_toefl_home.php">Toefl</a> </li>                            <br>
        <li> <a href="admin_CAT_Home.php">Cat</a> </li>                              <br><br>
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