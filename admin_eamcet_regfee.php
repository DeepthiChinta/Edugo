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
    <title>Edugo | Eapcet</title>

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
            <li> <a href="admin_eamcet_regfee.php"> Registration Fee </a>  </li>
            <li> <a href="admin_eamcet_eligibility.php"> Eligibility </a>  </li>
            <li> <a href="admin_eamcet_examdate.php"> Exam Dates </a>  </li>
            <li> <a href="admin_eamcet_syllabus.php"> Syllabus </a>  </li>
            <li> <a href="admin_eamcet_exampattern.php"> Exam Pattern </a>  </li>
            <li> <a href="admin_eamcet_cutoff.php"> Cut Off </a>  </li>
            <li> <a href="admin_eamcet_prevpapers.php"> Previous Papers </a>  </li>
            <li> <a href="admin_eamcet_topclgs.php">Top Colleges </a> </li>
            
        </ul>

    </div>

    <div class="girl_sidebar" style="position:fixed;left:1200px;top:150px;">
        <img src="girl_standing.jpg" width="300px" height="450px">

    </div>

    <div class="main_body">
        <h2>Documents Needed for the Registration Form for the AP EAMCET 2023</h2>
        <table>
        <thead>
        <tr>
        <th><strong>S.NO</strong></th>
        <th><strong>Details Required</strong></th>
        </tr>
        <tr>
        <th>1.</th>
        <th>AP Online/ TS Online Transaction Id. (if payment is being made through AP Online/ TS Online)</th>
        </tr>
        <tr>
        <th>2.</th>
        <th>Qualifying Examination passed or failed, Qualifying Examination Hall Ticket Number</th>
        </tr>
        <tr>
        <th>3.</th>
        <th>Applied for (E), (AM), or both streams (E &amp; AM)</th>
        </tr>
        <tr>
        <th>4.</th>
        <th>Date of Birth, Birth District, Birth State</th>
        </tr>
        <tr>
        <th>5.</th>
        <th>Certificate of SSC or Equivalent Examination Hall Ticket Number</th>
        </tr>
        <tr>
        <th>6.</th>
        <th>Local Status (OU/AU/SVU/ Non- local)</th>
        </tr>
        <tr>
        <th>7.</th>
        <th>Parents&#8217; income (up to Rs. 1.00 lakh, up to Rs. 2.00 lakhs, or more than Rs. 2.0 lakhs)</th>
        </tr>
        <tr>
        <th>8.</th>
        <th>STUDY DETAILS</th>
        </tr>
        <tr>
        <th>9.</th>
        <th>Caste Certificate Category (SC, ST, BC, etc.) and Application Number</th>
        </tr>
        <tr>
        <th>10.</th>
        <th>Special Category (NCC, PH, Sports, CAP, etc.)</th>
        </tr>
        <tr>
        <th>11.</th>
        <th>Aadhaar Card details</th>
        </tr>
        <tr>
        <th>12.</th>
        <th>Ration Card details</th>
        </tr>
        <tr>
        <th>13.</th>
        <th>Economically Weaker Sections Certificate details</th>
        </tr>
        </thead>
        </table>
        <h3>Check out the following points for further information about Registration:</h3>
        <ul>
        <li>Candidates can apply for the exam by visiting the official website and filling out the application form online.</li>
        <li>They can also acquire information about how to fill out the application form by reading the information booklet on the website.</li>
        <li>Applicants must check the eligibility criteria before filling out the application.</li>
        <li>To avoid rejection of the application or cancellation of the candidature at any moment without prior notice, all required information must be provided.</li>
        <li>Only one form must be completed.</li>
        <li>The xerox copy of the filled form must be kept until the admissions process is completed.</li>
        </ul>
        <h2>What is the procedure for filling out the AP EAMCET application form 2023?</h2>
        <p>Candidates who want to apply for the AP EAMCET 2023 must fill out the AP EAMCET application form 2023 online. For filling out the<strong> AP EAMCET 2023 application form</strong>, eligible applicants must follow the processes outlined below. Students can look over the instructions below for reference.</p>
        <ul>
        <li>Visit the official website at sche.ap.gov.in/EAPCET and look for the link to the AP EAPCET/EAMCET 2023 online application form.</li>
        <li>The steps to complete out the AP EAMCET 2023 application form begin with the payment of the application fee on the screen that follows.</li>
        </ul>
        <h3>EAMCET Application Fee</h3>
        <p>To begin with, filling out the AP EAMCET application form 2023, candidates must first go to AP EAMCET registration 2023 and click on step 1 of fee payment, complete the basic information, and then pay the required application fee. Check out the following information.</p>
        <ul>
        <li>Roll number for the qualifying exam.</li>
        <li>The name of the candidate.</li>
        <li>Date of birth of the candidate.</li>
        <li>mobile phone number</li>
        <li>The email address of the candidate.</li>
        <li>Streaming (engineering, agriculture and medical or both).</li>
        <li>Payment method.</li>
        </ul>
        <p>During AP EAMCET registration 2023, candidates must pay the application cost online via net banking, credit card, or debit card. The payment amount is the same for all types of candidates.</p>
        <h3><strong>AP EAMCET Application Form 2023 Fee</strong></h3>
        <table>
        <thead>
        <tr>
        <th>Stream</th>
        <th>OC</th>
        <th>BC</th>
        <th>SC/ST</th>
        </tr>
        <tr>
        <th>Engineering</th>
        <th>Rs 600</th>
        <th>Rs 550</th>
        <th>Rs 500</th>
        </tr>
        <tr>
        <th>Agriculture</th>
        <th>Rs 600</th>
        <th>Rs 550</th>
        <th>Rs 500</th>
        </tr>
        <tr>
        <th>Both Engineering and Agriculture</th>
        <th>Rs 1200</th>
        <th>Rs 1100</th>
        <th>Rs 1000</th>
        </tr>
        </thead>
        </table>
        <p>Following successful payment, the candidate&#8217;s transaction data will appear on the website, which should be noted for future reference. After that, they must click on &#8216;advance to fill application&#8217; to continue.</p>
        <h3>AP EAMCET Application form 2023</h3>
        <p>Candidates will be able to fill out the AP EAMCET application form after making a successful payment. The information you&#8217;ve already entered, such as your name and payment reference ID, will appear on the screen. In addition, candidates will be required to fill out the following information:</p>
        <ol>
        <li>Name, father&#8217;s name, mother&#8217;s name, gender, birth district, birth state, Aadhaar card number, parents&#8217; annual income, candidate&#8217;s category and associated details (reserved or unreserved), and bank details are all required.</li>
        <li>Candidates will be needed to enter all communication information, including their full address, phone number, and email address</li>
        <li>Candidates will be needed to submit data of the institutes attended from class 6 to intermediate examination year of passing, medium of instruction including that of year of passing, and any vocational courses in this section.</li>
        <li>This part comprises CET specifics such as the necessity for an Urdu translator, AP EAMCET test centre preferences, and the candidate&#8217;s image and signature in the specified format being uploaded.</li>
        </ol>
        <h4>Specifications for Image</h4>
        <table>
        <thead>
        <tr>
        <th><strong>File</strong></th>
        <th><strong>Size</strong></th>
        <th><strong>File format</strong></th>
        </tr>
        <tr>
        <th>Candidate’s Photograph</th>
        <th>Less than 30 KB</th>
        <th>JPG</th>
        </tr>
        <tr>
        <th>Candidate’s Signature</th>
        <th>Less than 15 KB</th>
        <th>JPG</th>
        </tr>
        </thead>
        </table>
        <ul>
        <li>Candidates must tick the column adjacent to the declaratory statement after inputting all of the material and then click the &#8216;SUBMIT&#8217; button.</li>
        <li>The following page will display all of the information supplied by candidates in the AP EAPCET 2023 application form, which must be double-checked before applicants can select &#8216;MODIFY&#8217; or &#8216;CONFIRM&#8217;.</li>
        </ul>
        <p>Following that, the AP EAMCET 2023 registration number will display on the screen, along with the option to &#8216;Print EAMCET Application&#8217; for future reference.</p>
        <h2>Application Correction Window for the AP EAMCET</h2>
        <p>Candidates who successfully submit the AP EAMCET application form can use the application correction window provided by JNTUK. Following the completion of the application procedure, this online window will be made available. The authority allows candidates to correct any inaccuracies (if any) in their application form even after it has been submitted.</p><br>
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
