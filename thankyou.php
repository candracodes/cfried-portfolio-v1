<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "candracodes@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Candra S.C. Fried — UIX Specialist</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="CandraCodes.com is the online portfolio of UX/UI Specialist, Candra Fried. She prides herself on preeminent results achieved over the years, and providing designs and code that have resulted in a client list full of returning customers.">
  <meta name="keywords" content="fried, candra fried, candra s fried, candra s. c. fried, candra sc fried, candra cook fried, candra s. cook fried, candra sc fried, cook, candra cook, candra, candra s. cook, candra s cook, chandra cook, chandra, kandra cook, kendra cook, kendra, web developer, web development, official portfolio for candra cook, portfolio, artist, illustrator, illustration, graphic, graphic design, designer, web, web design, webdesign, web designer, freelance, freelancer, drawings, paintings, draw, paint, design, essential, essential design, essential designer, philadelphia, pennsylvania, dallas, dallas texas, texas, bluphier, fine art, phoenixville, ux, ui, user experience, user interface">
  <meta name="keyphrase" CONTENT="Candra Fried">
  <meta name="author" content="Candra S. Cook Fried">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/refineslide.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
  <!-- Navbar ================================================== -->
  <header>
    <div class="cbp-af-header">
      <div class=" cbp-af-inner">
        <div class="container">
          <div class="row">

            <div class="span6">
              <!-- logo -->
              <div class="logo">
                <h1><a href="/">Candra S.C. Fried</a></h1>
                <!-- <img src="assets/img/logo.png" alt="" /> -->
              </div>
              <!-- end logo -->
            </div>

            <div class="span6">
              <!-- top menu -->
              <div class="navbar">
                <div class="navbar-inner">
                  <nav>
                    <ul class="nav topnav">
                      <li class="dropdown active">
                        <a href="/">Home</a>
                      </li>
                      </li>
                      <li class="dropdown">
                        <a href="#">Pages</a>
                        <ul class="dropdown-menu">
                          <li><a href="about.html">About</a></li>
                          <li><a href="resume.html">Resume</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="#">Portfolio</a>
                        <ul class="dropdown-menu">
                          <li><a href="portfolio-development.html">Development</a></li>
                          <li><a href="portfolio-print.html">Print</a></li>
                          <li><a href="portfolio-art.html">Art</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="contact.html">Contact</a>
                      </li>
                      <li>
                        <a href="https://www.etsy.com/shop/FriedCookieCreations">Store</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <!-- end menu -->
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Subhead ================================================== -->
  <section id="subintro">

    <div class="container">
      <div class="row introTextContainer">
        <div class="span4">
          <h3>Get <strong>in touch</strong></h3>
        </div>
        <div class="span8">
          <ul class="breadcrumb notop">
            <li><a href="/">Home</a><span class="divider">/</span></li>
            <li class="active">Contact</li>
          </ul>
        </div>
      </div>
    </div>

  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <!-- LEFT SIDEBAR -->
        <div class="span4">
          <aside>
            <div class="widget">
              <h4>Get in touch with Candra</h4>
              <ul>
                <!-- <li><label><strong>Phone : </strong></label>
                  <p>
                    +900 888 707 123
                  </p>
                </li> -->
                <li><label><strong>Email : </strong></label>
                  <p>
                    LetsChat@candracodes.com
                  </p>
                </li>
                <!-- <li><label><strong>Office address : </strong></label>
                  <p>
                    Pasar sate tusuk 22A Ave X.300 Peterongan Semarang, Indonesia
                  </p>
                </li> -->
              </ul>
            </div>
            <div class="widget">
              <h4>Social network</h4>
              <ul class="social-links">
                <li><a href="https://www.linkedin.com/in/candracook/" title="Linkedin"><i
                      class="icon-bg-light icon-linkedin icon-circled icon-1x active"></i></a></li>
              </ul>
            </div>
          </aside>
        </div>
        <div class="span8">
          Thank you for your message. Candra will get back to you as soon as possible.
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER ================================================== -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="widget">
            <h5>Where's Candra?</h5>
            <address>
              <strong>
                <i class="icon-map-marker icon-1x"></i> Current Location
              </strong>
              <br>
              Dallas, TX
            </address>
          </div>
        </div>
        <div class="span6">
          <div class="widget">
            <h5>Other Interesting Stuff</h5>
            <ul class="list list-ok">
              <li><a href="https://www.linkedin.com/in/candracook/">Connect via LinkedIn</a></li>
              <li><a href="mailto:letschat@candracodes.com">Email Me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="subfooter">
      <div class="container">
        <div class="row">
          <div class="span12">
            <p>
              &copy; Candra S.C. Fried - All right reserved
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="assets/js/portfolio/setting.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/cbpAnimatedHeader.min.js"></script>
  <script src="assets/js/jquery.refineslide.js"></script>
  <script src="assets/js/jquery.ui.totop.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>