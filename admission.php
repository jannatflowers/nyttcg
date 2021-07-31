<!DOCTYPE html>
<html lang="en">
 <head>
 <!--meta tags -->
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- font-awesome link -->
 <script src="https://kit.fontawesome.com/d93a79b9b9.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet"> 
<!-- CSS links -->
 <link rel="stylesheet" href="css/bootstrap.css">

 <link rel="stylesheet" href="css/meadia.css">
  <link rel="stylesheet" href="css/slick.css">
 <link rel="stylesheet" href="css/slick-theme.css">
 <link rel="stylesheet" href="css/style.css">
  <title>NYTTCGG ADMISSION</title>
</head>
<body>
 <!-- header start -->
 <header class="header-sticky">
   <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="img-fluid logoimg"></a>
        <button class="navbar-toggler mytogl" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
          <ul class="navbar-nav  ml-auto text-uppercase">
            <li class="nav-item"> <a class="nav-link " href="index.html">Home</a></li>
            <li class="nav-item"> <a class="nav-link " href="aboutus.html">About Us</a> </li>
            <li class="nav-item"> <a class="nav-link" href="courses.html">Courses</a> </li><li class="nav-item"> <a class="nav-link active" href="admission.php">Admission</a> </li>
            
            <li class="nav-item "> <a class="nav-link " href="result.php">Result</a> </li>
            
            <li class="nav-item"> <a class="nav-link" href="contact.html">Contact Us</a> </li>
          </ul>
        </div>
      </nav>
   </div>
 </header>
<!-- Admission form start -->
<section class="contact">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-10  col-sm-10 col-12">
              <div class="oursertop contact_title abouttitle text-center">
              <h1>ADMISSION FORM</h1>
                <p>The main purpose here is to make you able to use the graphic design, 
                The main purpose here is to make you able to use the graphic design, web Please fill up your most important informatiom.  </p>
            </div>
          </div>
    </div>
  </div>
</section>
 <!-- admissiontest  -->
<section class="admission form">
  <div class="container">
    <div class="row justify-content-center">   
    <div class="col-lg-8 col-sm-12 col-10">
      <form class="form_table myform" action="admision_info/student_info.php"  method="post" enctype="multipart/form-data">
      <!-- name -->
      <div class="form-group row ">
        <label for="name" class="col-lg-4 col-sm-3 col-3 col-form-label lable_text">Full Name</label>
        <div class="col-lg-8 col-sm-9 col-8">
          <input type="text" class="form-control allbg" id="name" name="name" placeholder="Enter Your Name">
        </div>
      </div>
      <!-- father name -->
      <div class="form-group row">
        <label for="f_name" class="col-lg-4 col-sm-3 col-3 col-form-label lable_text">Father Name</label>
        <div class="col-lg-8 col-sm-9 col-8">
          <input type="text" class="form-control allbg" id="f_name" name="f_name" placeholder="Enter Your Father Name">
        </div>
      </div>
      <!-- mother name -->
      <div class="form-group row">
        <label for="m_name" class="col-lg-4 col-sm-3 col-3 col-form-label lable_text">Mother Name</label>
        <div class="col-lg-8 col-sm-9 col-8">
          <input type="text" class="form-control allbg" id="m_name" name="m_name" placeholder="Enter Your Mother Name" required>
        </div>
      </div>
      <!-- address -->
      <div class="form-group row">
        <label for="present_adds" class="col-lg-4 col-sm-3 col-3 col-form-label lable_text">Present Address</label>
        <div class="col-lg-8  col-sm-9 col-8">
          <textarea class="form-control allbg" id="present_adds" rows="3" name="present_adds" placeholder="Write Your Present Address"></textarea>
        </div>
      </div>
        <!-- address -->
      <div class="form-group row">
        <label for="perma_adds" class="col-lg-4 col-sm-3 col-3 col-form-label lable_text">permanent Address</label>
        <div class="col-lg-8  col-sm-9 col-8">
          <textarea class="form-control allbg" id="perma_adds" rows="3" name="perma_adds" placeholder="Write Your Permanent Address"></textarea>
        </div>
      </div>
      <!-- email -->
      <div class="form-group row">
        <label for="email" class="col-lg-4 col-sm-3 col-3 col-form-label lable_text">Email</label>
        <div class="col-lg-8 col-sm-9 col-8">
          <input type="email" class="form-control allbg" id="email" name="email" placeholder="Enter Your Email" required>
        </div>
      </div>

         <!-- phone number -->
      <div class="form-group row">
        <label for="phone" class="col-lg-4 col-sm-3 col-3 col-form-label lable_text">Phone Number</label>
        <div class="col-lg-8 col-sm-9 col-8">
          <input type="number" class="form-control allbg" id="phone" name="phone" placeholder="Enter Your Phone Number">
        </div>
      </div>
      <!-- phone number -->
      <div class="form-group row">
        <label for="g_phone" class="col-lg-4 col-sm-3 col-3 col-form-label lable_text">Gaurdian number</label>
        <div class="col-lg-8 col-sm-9 col-8">
          <input type="number" class="form-control allbg" id="g_phone" name="g_phone" placeholder="Enter Your Gaurdian Number">
        </div>
      </div>
      <!-- Educaion Qalification -->
   <div class="row ">
    <div class="col">
      <label for="exam" class="lable_text col-lg-12 col-sm-12 col-12">Last Education Qalification Name Of Examination</label>
     <select class="form-control allbg" id="exam" name="exam" class="form-select col-12" required>
            <option selected>JSC</option>
            <option value="0">SSC</option>
            <option value="1">HSC</option>
            <option value="2">Honor's</option>
            <option value="3">Masters</option>
          </select>
    </div>
  </div>
            <!-- passing year --> 
       <div class="row">
    <div class="col">
      <label for="passing_year" class="lable_text ">Passing Year</label>
      <input type="password" class="form-control allbg " id="passing_year inpu_box" name="passing_year" placeholder="Passing Year">
    </div>
        <!-- date of birth start --> 
    <div class="col">
      <label id="result" class="lable_text">Result</label>
      <input type="password" class="form-control allbg" name="result" name="result"placeholder="Result">
    </div>
  </div>
<!-- blood group start --> 
       <div class="row">
    <div class="col">
      <label for="blood" class="lable_text">Blood Group</label>
      <input type="text" class="form-control allbg" id="blood" name="blood" placeholder="Blood Group">
    </div>
        <!-- date of birth start --> 
    <div class="col">
      <label id="date" class="lable_text">Date Of Birth</label>
      <input type="date" class="form-control allbg" name="date" name="date"placeholder="Last name">
    </div>
  </div>
        <!-- courses -->
    <div class="form-row">
    <div class="form-group col-md-6 col-6">
      <label for="courses" class="lable_text">Interested subject</label>
       <select class="form-control allbg" id="courses inpu_box" name="courses">
            <option>MS Word</option>
            <option>Web Design</option>
            <option>Graphic Design</option>
            <option>Disital Marketing</option>
            <option>others</option>
          </select>
    </div>
    <div class="form-group col-md-6 col-6">
      <label for="imageupload" class="lable_text" >Upload Image</label>
       <input type="file" name="imageupload" class="form-control allbg lable_text">    
    </div>
  </div>
<input type="submit"  class="submit_btn" value="submit" name="submit">
    
</form> 
    </div>
  </div>
</div>
</section>
<section class=" application">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-10  col-sm-10 col-12">
              <div class="appli_procedure text-center">
              <h1>Application Procedure </h1>
                
            </div>
          </div>
    </div>
    <!-- 2nd row -->
        <div class="row justify-content-center">
      <div class="col-lg-8 ">
        <div class="row">
          <div class="col-lg-3 col-md-10  col-sm-10 col-12 stepn_no">
              <p>Step 1 :</p>
          </div>
           <div class="col-lg-7 col-md-10  col-sm-10 col-12 process_no ">
              <p>You Have To Complete All Kind Of Information.</p>
          </div>
        </div>
          <div class="row">
          <div class="col-lg-3 col-md-10  col-sm-10 col-12 stepn_no">
              <p>Step 2 :</p>
          </div>
           <div class="col-lg-7 col-md-10  col-sm-10 col-12 process_no ">
              <p>Click "Submit" Button.</p>
          </div>
        </div>
          <div class="row">
          <div class="col-lg-3 col-md-10  col-sm-10 col-12 stepn_no">
              <p>Step 3 :</p>
          </div>
           <div class="col-lg-7 col-md-10  col-sm-10 col-12 process_no ">
              <p>Pay Full Payment Of Interesting Cours Fee.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- payment system -->
<section class="payment">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-10  col-sm-10 col-12">
              <div class="pament text-center">
              <h1>Payment Way </h1>
                
            </div>
          </div>
    </div>
     <div class="row justify-content-center">
      <div class="col-lg-3 col-md-10  col-sm-10 col-12">
              <div class="pamentimg text-center">
             <img src="images/photo-bikash.jpg" class="img-fluid" alt="paymimg">
             <p>013098788000</p>
             <p>013098788000</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-10  col-sm-10 col-12">
              <div class="pamentimg text-center">
             <img src="images/roketall.png" class="img-fluid" alt="paymimg">
             <p>013098788000</p>
             <p>013098788000</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-10  col-sm-10 col-12">
              <div class="pamentimg text-center">
             <img src="images/banktransfer.jpg" class="img-fluid" alt="paymimg">
             <p>013098788000</p>
             <p>013098788000</p>
            </div>
          </div>
    </div>
  </div>
</section>
<!-- footer start -->
<footer>
  <div class="container-fluid">
    <div class="row  justify-content-center ">
      <div class="col-lg-3 col-md-3 col-sm-3 col-3">
        <div class="footer1">
          <img src="images/logo.png" alt="footerlogo" class="img-fluid">
          <p>start building your creativity website with our awesome template LFWF company</p>
        <i class="fab fa-instagram"></i>
      <i class="fab fa-twitter"></i>
        <i class="fab fa-linkedin-in"></i>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-3">
        <div class="fooer02">
          <h4>Pages</h4>
          <nav class="nav flex-column">
            <a class="nav-link" href="#">About us</a>
            <a class="nav-link" href="#">Our service</a>
            <a class="nav-link" href="#">Contact us</a>
            <a class="nav-link" href="#">Our blog</a>
          </nav>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-3">
        <div class="fooer02">
          <h4>More links</h4>
          <nav class="nav flex-column">
            <a class="nav-link" href="#">Facrbook </a>
            <a class="nav-link" href="#">Twitter</a>
            <a class="nav-link" href="#">Instragram</a>
            <a class="nav-link" href="#">Youtube</a>
          </nav>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 col-3">
        <div class="fooer02">
          <h4>Support</h4>
        <div class="footer_single">
          <address>
            449,Noyapara ,(Opposite of Bornomala School Road) ,<br>
          Donia,jatrabari,Dhaka-1236
          </address>
          <p>saif@nyttcg.com</p>
          <p>+0129767400</p>
        </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <div class="footerbottom">
          <p>Copyright@ 2021 hookoom.com</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--  js links -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
<!-- fixed navbra -->
 <script>
    $(document).ready(function($) {

      /*-- Menu Sticky --*/
      var windows = $(window);
      var sticky = $('.header-sticky')
      windows.on('scroll', function() {
        var scroll = windows.scrollTop();
        if (scroll < 250) {
          sticky.removeClass('stick');
        } else {
          sticky.addClass('stick');
        }
      });

      $(".toggle-menu-icon").click(function(){
        $(".menu").slideToggle();
      })
    });

  </script>
    </body>
</html>