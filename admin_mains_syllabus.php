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
    
    <h1>Syllabus</h1>

    <p class="Intro">     
       <strong>NTA</strong> i.e. the National Testing Agency has released the short notification for the JEE Mains 2023. With this, the official JEE Main syllabus for 2023 is out as well. This can help students to analyze the topics and chapters they’ll have to study and prepare the time table for the same. This shall also help in understanding the concepts, overall. 
    </p>
        
    <table class="div_1">

        <tr>
            <th style="position:relative;left:-130px;">Mathematics</th>
            <th style="position:relative;left:-180px;">Physics</th>
        </tr>

        <tr>
            <td>Sets</td>
            <td>Physics and Measurement</td>
        </tr>

        <tr>
            <td>Relations</td>
            <td>Kinematics </td>
        </tr>

        <tr>
            <td>Matrices and Deteminants</td>
            <td>Laws of Motion</td>
        </tr>

        <tr>
            <td>Mathematical Induction</td>
            <td>Work, Energy, and Power</td>
        </tr>

        <tr>
            <td>Permutations and Combinations</td>
            <td>Rotational Motion</td>
        </tr>

        <tr>
            <td>Binomial Theorem and its Simple Applications</td>
            <td>Gravitation </td>
        </tr>

        <tr>
            <td>Sequences and Series</td>
            <td>Properties of Solids and Liquids</td>
        </tr>

        <tr>
            <td>Limit, Continuity, and Differentiability</td>
            <td>Thermodynamics</td>
        </tr>

        <tr>
            <td>Integral Calculus</td>
            <td>Kinetic Theory of Gases</td>
        </tr>

        <tr>
            <td>Differential Equations</td>
            <td>Oscillations and Waves</td>
        </tr>

        <tr>
            <td>Co-ordinate Geometry</td>
            <td>Electrostatics</td>
        </tr>

        <tr>
            <td>Three Dimensional Geometry</td>
            <td>Current Electricity</td>
        </tr>

        <tr>
            <td>Vector Algebra</td>
            <td>Magnetic effects of Current and Magnetism</td>
        </tr>

        <tr>
            <td>Statistics & Probability</td>
            <td>Electromagnetic Induction and Alternating Currents</td>
        </tr>

        <tr>
            <td>Trigonometry</td>
            <td>Electromagnetic Waves</td>
        </tr>

        <tr>
            <td>Mathematical Reasoning</td>
            <td>Optics</td>
        </tr>

        <tr>
            <td></td>
            <td>Dual Nature of Matter and Radiation</td>
        </tr>

        <tr>
            <td></td>
            <td>Atoms and Nuclei</td>
        </tr>

        <tr>
            <td></td>
            <td>Electromagnetic Devices</td>
        </tr>

        <tr>
            <td></td>
            <td>Communication Systems</td>
        </tr>

    </table>

    <strong class="sideheading">Chemistry</strong>

    <table class="div_2">

        <tr>
            <th>SECTION A - ORGANIC CHEMISTRY</th>
            <th>SECTION B - INORGANIC CHEMISTRY</th>
            <th>SECTION C - ORGANIC CHEMISTRY</th>
        </tr>

        <tr>
            <td>Basic Concepts in Chemistry</td>
            <td>Classification of Elements and Periodicity in Chemistry</td>
            <td>Purification and Characteristics of Organic Compounds</td>
        </tr>

        <tr>
            <td>States of Matter</td>
            <td>General Principles and Processes of Isolation of Metals</td>
            <td>Some Basic Principle of Organic Chemistry</td>
        </tr>

        <tr>
            <td>Atomic Structure</td>
            <td>Hydrogen</td>
            <td>Hydrocarbons</td>
        </tr>

        <tr>
            <td>Chemical Bonding and Molecular Structure</td>
            <td>S-Block Elements- Alkali and Alkaline Earth Metals</td>
            <td>Organic Compounds Containing Halogens</td>
        </tr>

        <tr>
            <td>Chemical Thermodynamics</td>
            <td>P-Block Elements</td>
            <td>Organic Compounds Containing Oxygen</td>
        </tr>

        <tr>
            <td>Solutions</td>
            <td>D and F Block Elements</td>
            <td>Organic Compounds Containing Nitrogen</td>
        </tr>

        <tr>
            <td>Equilibrium</td>
            <td>Co-Ordination Compounds</td>
            <td>Biomolecules</td>
        </tr>

        <tr>
            <td>Redox reactions and Electrochemistry</td>
            <td>Environmental Chemistry</td>
            <td>Polymers</td>
        </tr>

        <tr>
            <td>Chemical Kinetics</td>
            <td></td>
            <td>Chemistry in Everyday Life</td>
        </tr>

        <tr>
            <td>Surface Chemistry</td>
            <td></td>
            <td>Principles Related to Practical Chemistry</td>
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
