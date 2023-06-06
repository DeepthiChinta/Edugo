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
    <title>Edugo | IELTS </title>

    <style>
        .main_body
       {
        pointer-events: none;
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
            <li> <a href="admin_IELTS_regfees.php"> Registration Fee </a>  </li>
            <li> <a href="admin_IELTS_eligibility.php"> Eligibility </a>  </li>
            <li> <a href="admin_IELTS_examdate.php"> Exam Date </a>  </li>
            <li> <a href="admin_IELTS_syllabus.php"> Syllabus </a>  </li>
            <li> <a href="admin_IELTS_exampattern.php"> Exam Pattern </a>  </li>
            <li> <a href="admin_IELTS_prevPapers.php"> Previous Papers </a>  </li>
            <li> <a href="admin_IELTS_topclgs.php">Top Colleges </a> </li>
            
        </ul>

    </div>

    <div class="girl_sidebar" style="position:fixed;left:1200px;top:150px;">
        <img src="girl_standing.jpg" width="300px" height="450px">

    </div>

    <div class="main_body">

       <h1> Top Colleges </h1>

       <h3> US Universities Accepting IELTS Scores </h3>

       <table> 

        <tr>
            <th>Name of Institute</th>
            <th>IELTS Scores</th>
        </tr>

        <tr>
            <td> Massachusetts Institute Of Technology </td>
            <td> 7.0 </td>
        </tr>

        <tr>
            <td> Harvard University </td>
            <td> 6.5 </td>
        </tr>

        <tr>
            <td> Princeton University </td>
            <td> 8.0 </td>
        </tr>

        <tr>
            <td> Columbia University </td>
            <td> 7.0 </td>
        </tr>

        <tr>
            <td> California Institute of technology </td>
            <td> 7.8 </td>
        </tr>

        <tr>
            <td> Stanford university </td>
            <td> 7.0 </td>
        </tr>

        <tr>
            <td> University of Chicago </td>
            <td> 7.0 </td>
        </tr>

       </table>

       <h3> UK Universities Accepting IELTS scores </h3>

       <table>

        <tr>
            <th> Name of institute </th>
            <th> IELTS score </th>
        </tr>

        <tr>
            <td> University of Cambridge </td>
            <td> 8.5 </td>
        </tr>

        <tr>
            <td> University of Oxford </td>
            <td> 7.0 </td>
        </tr>

        <tr>
            <td> University of London</td>
            <td> 7.0 </td>
        </tr>

        <tr>
            <td> University of  Manchester </td>
            <td> 7.0 </td>
        </tr>

        <tr>
            <td> University of Leeds </td>
            <td> 8.3 </td>
        </tr>

        <tr>
            <td> University of Birmingham </td>
            <td> 8.0 </td>
        </tr>

       </table>

       <h3> Canadian Universities Accepting IELTS Scores  </h3>

       <table>

        <tr>
            <th> Name of institute </th>
            <th> IELTS score </th>
        </tr>

        <tr>
            <td> University of Tornoto </td>
            <td> 8.0 </td>
        </tr>

        <tr>
            <td> University of British Colombia </td>
            <td> 7.0 </td>
        </tr>

        <tr>
            <td> University of Montreal </td>
            <td> 6.5 </td>
        </tr>

        <tr>
            <td> University of Alberta </td>
            <td> 7.0 </td>
        </tr>

        <tr>
            <td> University of  Calgary </td>
            <td> 8.0 </td>
        </tr>


       </table>

       <h3> Australian Universities Accepting IELTS Scores </h3>

       <table>

        <tr>
            <th> Name of institute </th>
            <th> IELTS score </th>
        </tr>

        <tr> 
            <tr> University of Melbourne </tr>
            <tr> 7.9 </tr>
        </tr>

        <tr> 
            <tr> University of Sydney </tr>
            <tr> 7.0 </tr>
        </tr>

        <tr> 
            <tr> University of QuuensLand </tr>
            <tr> 8.7 </tr>
        </tr>

        <tr> 
            <tr> University of Adelaide </tr>
            <tr> 7.9 </tr>
        </tr>

        <tr> 
            <tr> University of Western Australia </tr>
            <tr> 8.2 </tr>
        </tr>

        <tr> 
            <tr> University of Wollongong	</tr>
            <tr> 6.1 </tr>
        </tr>

      </table>

      <h3> New Zealand Universities Accepting IELTS Scores </h3>

      <table>
        <tr>
            <th>Name of Institute</th>
            <th>IELTS Scores</th>
        </tr>

        <tr>
            <td>University of AuckLand</td>
            <td>8.0 </td>
        </tr>

        <tr>
            <td>University of Canterbury </td>
            <td> 8.0 </td>
        </tr>

        <tr>
            <td> University of  Otago </td>
            <td> 8.0 </td>
        </tr>

        <tr>
            <td> University of  Victoria </td>
            <td> 7.0 </td>
        </tr>

        <tr>
            <td> University of Waikato </td>
            <td> 8.0 </td>
        </tr>

        <tr>
            <td> Auckland University of technology </td>
            <td> 8.0 </td>
        </tr>

      </table>



       

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
