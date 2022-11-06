
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ServicX</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <a class="navbar-brand d-none d-lg-flex" href="index.html">
              <span>
                ServicX
              </span>
            </a>
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +91-7206601716
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : pushkardahal916@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand d-lg-none" href="index.html">
              <span>
                ServicX
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link pl-lg-0" href="index.html">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="why.html">Why Us</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php">Contact Us <span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/crud_clone/project/customer-create.php" target="_blank">Submit Request</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="/loginsystem/logout.php">Log out</a>
                </li>
              </ul>
              <from class="search_form">
                <input type="text" class="form-control" placeholder="Search here...">
                <button class="" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </from>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding">
  <?php include('message.php'); ?>

    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div class="form_container">
          <form action="" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" name="a" class="form-control" placeholder="First Name" />
                </div>
                <div class="form-group col-md-6">
                  <input type="text" name="b" class="form-control" placeholder="Last Name" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="email" name="c" class="form-control" placeholder="Email" />
                </div>
                <div class="form-group col-md-6">
                  <input type="text" name="d" class="form-control" placeholder="Phone Number" />
                </div>
              </div>
              <div class="form-group ">
                <input type="text" name="e" class="message-box" placeholder="Message" />
              </div>
              <div class="btn-box">
                <button name="s" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto footer-col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a class="active" href="index.html">
                Home
              </a>
              <a class="" href="service.html">
                Services
              </a>
              <a class="" href="about.html">
                About
              </a>
              <a class="" href="why.html">
                Why Us
              </a>
              <a class="" href="contact.php">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Info
            </h4>
            <div class="contact_link_box">
              <p>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  #22/7,Phagwara,Punjab-144401
                </span>
              </p>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +91-7206601716
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  pushkardahal916@gmail.com
                </span>
              </a>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span>
                  Mon-Sat: 09.00 am - 06.00 pm
                </span>
              </p>
              <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span>
                  Sunday: closed
                </span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 footer-col">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-info">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="#">ServicX</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>









<?php
// session_start();
$con = mysqli_connect("localhost","root","","contact");
if(isset($_POST['s']))
{
    $name = mysqli_real_escape_string($con, $_POST['a']);
    $l_name = mysqli_real_escape_string($con, $_POST['b']);
    $email = mysqli_real_escape_string($con, $_POST['c']);
    $phone = mysqli_real_escape_string($con, $_POST['d']);
    $msg = mysqli_real_escape_string($con, $_POST['e']);

    $query = "INSERT INTO contact (`first name`, `last name`, `email`, `phone no.`, `message`) VALUES ('$name','$l_name','$email','$phone','$msg')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: contact.php");
        exit(0);
    }
    else
    {
         $_SESSION['message'] = "Student Not Created";
        header("Location: contact.php");
        exit(0);
    }
}

?>