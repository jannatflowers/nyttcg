
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
 
 <!-- slick slider start -->
  <link rel="stylesheet" href="css/slick.css">
 <link rel="stylesheet" href="css/slick-theme.css">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/meadia.css">
 <link rel="stylesheet" href="css/style.css">
 

  <title>NYTTCGG HOME</title>
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
      <div class="collapse navbar-collapse menu " id="navbarSupportedContent">
             <ul class="navbar-nav  ml-auto text-uppercase">
            <li class="nav-item"> <a class="nav-link " href="index.html">Home</a></li>
            <li class="nav-item"> <a class="nav-link " href="aboutus.html">About Us</a> </li>
            <li class="nav-item"> <a class="nav-link " href="courses.html">Courses</a> </li><li class="nav-item"> <a class="nav-link" href="admission.php">Admission</a> </li>
            
            <li class="nav-item "> <a class="nav-link active" href="result.php">Result</a> </li>
            
            <li class="nav-item"> <a class="nav-link " href="contact.html">Contact Us</a> </li>
          </ul>
        </div>
      </nav>
   </div>
 </header>
<!-- header end -->
<section class="contact">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-10  col-sm-10 col-12">
              <div class="oursertop contact_title abouttitle text-center">
              <h1>Result</h1>
                <p>The main purpose here is to make you able to use the graphic design, 
                The main purpose  Please fill up your most important informatiom.  </p>
            </div>
          </div>
    </div>
  </div>
</section>
<section class="admissionform">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8 col-sm-12 col-8 ">
        <form>
          <!-- name -->
          <div class="form-row">
                <div class="form-group col-lg-6 col-md-6">
      <label for="name" class="lable_text">Full Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Email">
    </div>
 
  </div>
  <!-- email -->
  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="inputPassword4" class="lable_text">Registation Number</label>
      <input type="password" class="form-control lable_text" id="inputPassword4" placeholder="Password">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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
    <!-- isotop start -->
<script>