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
    <title>EdUGo | JEE_Mains</title>

    <style>
        .main_body
       {
        pointer-events: none;
       }
       table,tr,th,td{
        border: 2px solid black;
        border-collapse: collapse;
       }
    </style>
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
            <li> <a href="admin_mains_regfee.php"> Registration Fee </a>  </li>
            <li> <a href="admin_mains_eligibility.php"> Eligibility </a>  </li>
            <li> <a href="admin_mains_examdate.php"> Exam Date </a>  </li>
            <li> <a href="admin_mains_syllabus.php"> Syllabus </a>  </li>
            <li> <a href="admin_mains_exampattern.php"> Exam Pattern </a>  </li>
            <li> <a href="admin_mains_cutoff.php"> Cut Off </a>  </li>
            <li> <a href="admin_previouspapers_mains.php"> Previous Papers </a>  </li>
            <li> <a href="admin_mains_topclgs.php">Top Colleges </a> </li>
            
        </ul>

    </div>

    <div class="girl_sidebar" style="position:fixed;left:1200px;top:150px;">
        <img src="girl_standing.jpg" width="300px" height="450px">

    </div>


    <div class="main_body">
   
    <h1>Exam Pattern</h1>

    <br>

    <h3>JEE Main Paper 1</h3>
    <p>Paper 1 is for B.E/B. Tech candidates consist of three subjects namely Physics, Chemistry, Mathematics. Each subject carries 30 questions. A total of 300 marks are allotted in paper 1. To know the exam pattern in detail go through the table below.</p>

    <table>

      <tr>
        <th>Subject</th>
        <th>Section A(Number of questions)</th>
        <th>Section B(Number of questions)</th>
        <th>Marks</th>
      </tr>

      <tr>
        <td>Mathematics</td>
        <td>20</td>
        <td>10</td>
        <td>100</td>
      </tr>

      <tr>
        <td>Physics</td>
        <td>20</td>
        <td>10</td>
        <td>100</td>
      </tr>

      <tr>
        <td>Chemistry</td>
        <td>20</td>
        <td>10</td>
        <td>100</td>
      </tr>

      <tr>
        <td>Total</td>
        <td colspan="2">90</td>
        <td>300</td>
      </tr>

    </table>

    <p>Below is the marking scheme</p>

    <table>

      <tr>
        <td rowspan="3">Marking Scheme for MCQs</td>
        <td>Correct Answer or the Most Appropriate Answer</td>
        <td>Four marks (+4)</td>
      </tr>

      <tr>
        <td>Incorrect Answer</td>
        <td>Minus one mark (-1)</td>
      </tr>

      <tr>
        <td>Unanswered / Marked for Review</td>
        <td>No mark(0)</td>
      </tr>

      <tr>
        <td rowspan="3">Marking Scheme for questions for which the answer is a Numerical</td>
        <td>Correct Answer or the Most Appropriate Answer</td>
        <td>Four marks (+4)</td>
      </tr>

      <tr>
        <td>Incorrect Answer</td>
        <td>Minus one mark (-1)</td>
      </tr>

      <tr>
        <td>Unanswered / Marked for Review</td>
        <td>No mark(0)</td>
      </tr>

    </table>

    <h2>JEE Main Exam Pattern Paper 2A(B.Arch)</h2>
    <p>JEE Main paper 2 consists of B.Arch / B.Planning courses. The exam pattern for B.Arch and B.Planning is different from each other. Below is the exam pattern for B.Arch(2A).</p>

    <table>

      <tr>
        <th>Subject</th>
        <th>Number of Questions</th>
        <th>Marks</th>
      </tr>

      <tr>
        <td>Part I: Mathematics</td>
        <td>20* (Section A) and 10* (Section B)</td>
        <td>100</td>
      </tr>

      <tr>
        <td>Part II: Aptitude Test</td>
        <td>50</td>
        <td>200</td>
      </tr>

      <tr>
        <td>Part III: Drawing Test</td>
        <td>02</td>
        <td>100</td>
      </tr>

      <tr>
        <td>Total</td>
        <td>82</td>
        <td>400</td>
      </tr>

    </table>

    <p>Below is the marking scheme</p>

    <table>

      <tr>
        <td rowspan="3">Marking Scheme for MCQs</td>
        <td>Correct Answer or the Most Appropriate Answer</td>
        <td>Four marks (+4)</td>
      </tr>

      <tr>
        <td>Incorrect Answer</td>
        <td>Minus one mark (-1)</td>
      </tr>

      <tr>
        <td>Unanswered / Marked for Review</td>
        <td>No mark(0)</td>
      </tr>

      <tr>
        <td rowspan="3">Marking Scheme for questions for which the answer is a Numerical</td>
        <td>Correct Answer or the Most Appropriate Answer</td>
        <td>Four marks (+4)</td>
      </tr>

      <tr>
        <td>Incorrect Answer</td>
        <td>Minus one mark (-1)</td>
      </tr>

      <tr>
        <td>Unanswered / Marked for Review</td>
        <td>No mark(0)</td>
      </tr>

      <tr>
        <td>Marking Scheme for Drawing Test(Part III)</td>
        <td colspan="2">Two questions are to be evaluated out of 100 marks.</td>
      </tr>

    </table>

    <h2>JEE Main Exam Pattern Paper 2B(B.Planning)</h2>
    <p>Below is the detailed exam pattern for B. Planning for JEE Main 2023.</p>

    <table>

      <tr>
        <th>Subject</th>
        <th>Number of Questions</th>
        <th>Marks</th>
      </tr>

      <tr>
        <td>Part I: Mathematics</td>
        <td>20* (Section A) and 10* (Section B)</td>
        <td>100</td>
      </tr>

      <tr>
        <td>Part II: Aptitude Test</td>
        <td>50</td>
        <td>200</td>
      </tr>

      <tr>
        <td>Part III: Planning</td>
        <td>25</td>
        <td>100</td>
      </tr>

      <tr>
        <td>Total</td>
        <td>105</td>
        <td>400</td>
      </tr>

    </table>

    <p>Below is the marking scheme</p>

    <table>

      <tr>
        <td rowspan="3">Marking Scheme for MCQs</td>
        <td>Correct Answer or the Most Appropriate Answer</td>
        <td>Four marks (+4)</td>
      </tr>

      <tr>
        <td>Incorrect Answer</td>
        <td>Minus one mark (-1)</td>
      </tr>

      <tr>
        <td>Unanswered / Marked for Review</td>
        <td>No mark(0)</td>
      </tr>

      <tr>
        <td rowspan="3">Marking Scheme for questions for which the answer is a Numerical</td>
        <td>Correct Answer or the Most Appropriate Answer</td>
        <td>Four marks (+4)</td>
      </tr>

      <tr>
        <td>Incorrect Answer</td>
        <td>Minus one mark (-1)</td>
      </tr>

      <tr>
        <td>Unanswered / Marked for Review</td>
        <td>No mark(0)</td>
      </tr>

    </table>

    <br><br><br>

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
