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
    <title>Edugo | GRE </title>

    <style>
        .main_body
       {
        pointer-events: none;
       }
       .new_files table,tr,td{
            width:500px;
            line-height: 50px;
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
                <li> <a href="admin_GRE_regfees.php"> Registration Fee </a>  </li>
                <li> <a href="admin_GRE_eligibility.php"> Eligibility </a>  </li>
                <li> <a href="admin_GRE_examdate.php"> Exam Date </a>  </li>
                <li> <a href="admin_GRE_syllabus.php"> Syllabus </a>  </li>
                <li> <a href="admin_GRE_exampattern.php"> Exam Pattern </a>  </li>
                <li> <a href="admin_GRE_cutoff.php"> Cut Off </a>  </li>
                <li> <a href="admin_GRE_prevPapers.php"> Previous Papers </a>  </li>
                <li> <a href="admin_GRE_topclgs.php">Top Colleges </a> </li>
                
            </ul>

            </div>

    <div class="girl_sidebar" style="position:fixed;left:1200px;top:150px;">
        <img src="girl_standing.jpg" width="300px" height="450px">

    </div>


    <div class="main_body">
        <h2>Previous Papers of GRE</h2>
        <p>In this page we are providing downloadable PDFs of all GRE Questions Papers (Previous years) with answer keys and detailed solutions from 1991 to 2022.  GRE 2017, 2018 and 2019 papers were conducted in 2 slots.</p>
        <p>GRE 2020 to GRE 2022 papers were conducted in 3 slots. The Question papers for these years are available slot wise.</p>
        <p>We strongly advice serious GRE aspirants to scan though all the GRE questions papers one by one to get the feel of the toughness level,GRE syllabus, and the understand the gradual changes in GRE Paper pattern as well.<br />
        
            For serious aspirants who would like to test themselves with the actual GRE papers, we are also providing separate section-wise questions with solutions for GRE 2018, GRE 2019, GRE 2020, GRE 2021 and GRE 2022.</p>
            <p>For your reference, GRE question papers before 2009 were paper pencil based. From 2009 onward GRE has gone online and since then there is drastic change in the paper pattern.</p>
            <p>Also, GRE has started releasing GRE papers from 2017 onward, hence there is no official GRE question papers available from 2009, 2010, 2011, 2012, 2013, 2014, 2015 and 2016.</p>
            <h3 id="2022">GRE 2022 Question Paper PDF</h3>
        <hr />
        <table>
        <tbody>
        <tr>
        <td>GRE 2022 Question Paper </td>
        <td><a  href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2010-Sample--Question-Paper-1/"  download="">Download PDF</a></td>
        </tr>
        <tr>
        <td>GRE 2022 Question Paper</td>
        <td><a href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2011Sample-Question-Paper-2/" download="">Download PDF</a></td>
        </tr>
        <tr>
        <td>GRE 2022 Question Paper </td>
        <td><a  href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2012-Sample-Question-Paper-3/"  download="">Download PDF</a></td>
        </tr>
        </tbody>
        </table>
        <h3 id="2021">GRE 2021 Question Paper PDF</h3>
        <hr />
        <table>
        <tbody>
        <tr>
        <td>GRE 2021 Question Paper </td>
        <td><button><a class="bttn-danger" href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2013-Sample-Question-Paper-4/" target="_blank" rel="noopener">Download</a></button></td>
        </tr>
        <tr>
        <td>GRE 2020 Question Paper</td>
        <td><button><a class="bttn-danger" href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2014-Sample-Question-Paper-5/" target="_blank" rel="noopener">Download</a></button></td>
        </tr>
        <tr>
        <td>GRE 2020 Question Paper </td>
        <td><button><a class="bttn-danger" href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2015-Sample-Question-Paper-6/" target="_blank" rel="noopener">Download</a></button></td>
        </tr>
        </tbody>
        </table>
        <hr />
        <h3 id="2020">GRE 2020 Question Paper PDF</h3>
        <hr />
        <table>
        <tbody>
        <tr>
        <td>GRE 2020 Question Paper </td>
        <td><button><a class="bttn-danger" href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2016-Sample-Question-Paper-7/" target="_blank" rel="noopener">Download</a></button></td>
        </tr>
        <tr>
        <td>GRE 2020 Question Paper </td>
        <td><button><a class="bttn-danger" href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2017-Sample-Question-Paper-8/" target="_blank" rel="noopener">Download</a></button></td>
        </tr>
        <tr>
        <td>GRE 2020 Question Paper (Slot 3) with Solutions</td>
        <td><button><a class="bttn-danger" href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2018-Sample-Question-Paper-9/" target="_blank" rel="noopener">Download</a></button></td>
        </tr>
        </tbody>
        </table>
        <hr />
        <h3 id="2019">GRE 2019 Question Paper PDF</h3>
        <hr />
        <table>
        <tbody>
        <tr>
        <td>GRE 2019 Question Paper </td>
        <td><button><a class="bttn-danger" href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2019-Sample-Question-Paper-10/" target="_blank" rel="noopener">Download</a></button></td>
        </tr>
        <tr>
        <td>GRE 2019 Question Papers</td>
        <td><button><a class="bttn-danger" href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2010-Sample--Question-Paper-1/" target="_blank" rel="noopener">Download</a></button></td>
        </tr>
        </tbody>
        </table>
        <hr />
        <h3 id="2018">GRE 2018 Question Paper PDF</h3>
        <hr />
        <table>
        <tbody>
        <tr>
        <td>GRE 2018 Question Paper </td>
        <td><button><a class="bttn-danger" href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2011Sample-Question-Paper-2/" target="_blank" rel="noopener">Download</a></button></td>
        </tr>
        <tr>
        <td>GRE 2018 Question Papers</td>
        <td><button><a class="bttn-danger"  href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2012-Sample-Question-Paper-3/" target="_blank" rel="noopener">Download</a></button></td>
        </tr>
        </tbody>
        </table>
        <hr />
        <h3 id="2017">GRE 2017 Question Paper PDF</h3>
        <hr />
        <table>
        <tbody>
        <tr>
        <td>GRE 2017 Question Paper </td>
        <td><button><a class="bttn-danger"  href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2013-Sample-Question-Paper-4/"  target="_blank" rel="noopener">Download</a></button></td>
        </tr>
        <tr>
        <td>GRE 2017 Question Papers</td>
        <td><button><a class="bttn-danger"  href="https://firstranker.com/frv2pdf.php/GRE/2010-2019/GRE-2014-Sample-Question-Paper-5/"  target="_blank" rel="noopener">Download</a></button></td>
        </tr>
        </tbody>
        </table>
        
    </div>

</div>
    </div>


    <div class="new_files">

    
       <?php 
        $conn=new mysqli("localhost","root","","edugodb");
        if($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT url,title FROM files WHERE exam='gre' ";
        $res= mysqli_query($conn,$sql); 

        if ($res->num_rows>0) {

         ?>

            <center> <h1> Newly Uploaded Files </h1>  </center>
            <table>

                <tr> 

                    <th style="position:relative;left:400px;"> Paper  Title  </th>
                    <th style="position:relative;left:350px;"> Paper Link    </th>
                    
                </tr>

                <tr>

        
        <?php while ($row = mysqli_fetch_assoc($res)) {  ?>

              <td style="position:relative;left:400px;font-family: 'Comme', sans-serif;font-family: 'Roboto Slab', serif;"> <?php echo $row['title'] ?>  </td>
              <td style="position:relative;left:400px;font-family: 'Comme', sans-serif;font-family: 'Roboto Slab', serif;">  <a href="<?php echo $row['url'] ?>"> Download Now </a>  </td> 

        </tr>
           
            <?php }  ?>

            </table>

        <?php } ?>

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
