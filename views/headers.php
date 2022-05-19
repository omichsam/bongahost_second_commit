  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left text-light">
        <i class="icofont-envelope text-light"></i><a href="mailto:info@bonganet.co.ke">info@bonganet.co.ke</a>
        <i class="icofont-phone"></i> +(254) 723291135 | +(254) 20135291
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <!-- <h1 class="text-main"><a href="index.html"><span>Mamba</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="img/bonganet_logo.png" alt="" class="img-fluid"></a>
      </div>

      
      <nav class="nav-menu float-right d-none d-lg-block text-main font-weight-bold" style="font-size: 20px;">
        <?php require_once('model/dynamic-header.php'); ?>
        <!-- < ?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?> -->

        <!-- < ?php echo $activePage; ?> -->
       
        <!-- < ?php echo $current_page; ?> -->
        <ul>
          <!-- <li>
            <a class="< ?php echo $current_page == 'index.php' ? 'active' : NULL ?>" href="index.php">Home</a>
          </li> -->

          <?php
          if ($activePage == 'index') {
            echo "
            <li class='active'><a href='index.php'>Home</a></li>
            <li><a href='about.php'>About</a></li>
						<li><a href='services.php'>Service</a></li> 
						<li><a href='pricing.php'>Pricing</a></li> 
						<li><a href='contact.php'>Contact</a></li>";
          } 
           if ($activePage == 'about') {
            echo "
            <li ><a href='index.php'>Home</a></li>
            <li class='active'><a href='about.php'>About</a></li>
						<li><a href='services.php'>Service</a></li>
						<li><a href='pricing.php'>Pricing</a></li> 
						<li><a href='contact.php'>Contact</a></li>";
          } 
           if ($activePage == 'services') {
            echo "
            <li><a href='index.php'>Home</a></li>
            <li><a href='about.php'>About</a></li>
						<li class='active'><a href='services.php'>Service</a></li>	
						<li><a href='pricing.php'>Pricing</a></li>
						<li><a href='contact.php'>Contact</a></li>";
          }  if ($activePage == 'pricing') {
            echo "
            <li ><a href='index.php'>Home</a></li>
            <li><a href='about.php'>About</a></li>
						<li><a href='services.php'>Service</a></li> 
						<li class='active'><a href='pricing.php'>Pricing</a></li> 
						<li><a href='contact.php'>Contact</a></li>";
          }  if ($activePage == 'contact') {
            echo "
            <li ><a href='index.php'>Home</a></li>
            <li><a href='about.php'>About</a></li>
						<li><a href='services.php'>Service</a></li> 
						<li><a href='pricing.php'>Pricing</a></li> 
						<li class='active'><a href='contact.php'>Contact</a></li>";
          }

          ?>

          <!-- <li><a href="index.php" class="< ?= ($activePage == 'index') ? 'active' : ''; ?>">Home</a></li> -->
        </ul>
       
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->