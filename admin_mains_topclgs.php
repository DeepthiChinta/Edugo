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
       table{
        width:100%;
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

    <h1>Top Colleges</h1>

    <strong>JEE 2022 Cut-off Marks & Percentile for Top NITs 2022 Rank-wise, Branch wise
    </strong>

    <br><br>
   
    <table>

        <tr>
            <th>Institutes</th>
            <th>Opening Rank</th>
            <th>Closing Rank</th>
        </tr>

        <tr>
            <td>NIT Agartala</td>
            <td>4,080</td>
            <td>25,735</td>
        </tr>

        <tr>
            <td>NIT Calicut</td>
            <td>470</td>
            <td>17,731</td>
        </tr>

        <tr>
            <td>NIT Delhi</td>
            <td>707</td>
            <td>13,423</td>
        </tr>

        <tr>
            <td>NIT Durgapur</td>
            <td>7,376</td>
            <td>21,206</td>
        </tr>

        <tr>
            <td>NIT Goa</td>
            <td>2,574</td>
            <td>18,383</td>
        </tr>

        <tr>
            <td>NIT Hamirpur</td>
            <td>5,200</td>
            <td>12,743</td>
        </tr>

        <tr>
            <td>NIT Jameshedpur</td>
            <td>3,318</td>
            <td>13,041</td>
        </tr>

        <tr>
            <td>NIT Kurukshetra</td>
            <td>874</td>
            <td>8,916</td>
        </tr>

        <tr>
            <td>NIT Mainpur</td>
            <td>10,577</td>
            <td>38,742</td>
        </tr>


        <tr>
            <td>NIT Meghalaya</td>
            <td>12,185</td>
            <td>34,830</td>
        </tr>

        <tr>
            <td>NIT Mizoram</td>
            <td>8,929</td>
            <td>34,658</td>
        </tr>

        <tr>
            <td>NIT Nagaland</td>
            <td>12,466</td>
            <td>04,511</td>
        </tr>

        <tr>
            <td>NIT Patna</td>
            <td>6,861</td>
            <td>18,903</td>
        </tr>

        <tr>
            <td>NIT Puducherry</td>
            <td>5,377</td>
            <td>22,276</td>
        </tr>

        <tr>
            <td>NIT Raipur</td>
            <td>7,280</td>
            <td>17,664</td>
        </tr>

        <tr>
            <td>NIT Rourkela</td>
            <td>1,005</td>
            <td>6,091</td>
        </tr>

        <tr>
            <td>NIT Sikkim</td>
            <td>9,446</td>
            <td>31,946</td>
        </tr>

        <tr>
            <td>NIT Silchar</td>
            <td>2,797</td>
            <td>15,557</td>
        </tr>

        <tr>
            <td>NIT Srinagar</td>
            <td>3,411</td>
            <td>29,643</td>
        </tr>

        <tr>
            <td>NIT Surathkal</td>
            <td>11</td>
            <td>4,468</td>
        </tr>

        <tr>
            <td>NIT Tiruchirapalli</td>
            <td>1,056</td>
            <td>15,416</td>
        </tr>

        <tr>
            <td>NIT Uttarakhand</td>
            <td>5,535</td>
            <td>19,466</td>
        </tr>

        <tr>
            <td>NIT Warangal</td>
            <td>33</td>
            <td>2,100</td>
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
