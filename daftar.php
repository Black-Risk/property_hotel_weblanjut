<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Daftar Member Visitor</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+1234567890">+1234567890</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                            </ul>

                            <ul>
                                <li><a href="daftar.php">Sign Up</a></li>
                            </ul>

                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your home</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/hero2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your dream house</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/hero3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your perfect house</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Search for your home</p>
                        </div>
                        <!-- Search Form -->
                        <form method="POST" action="daftar.php" onsubmit="return isi_form()" autocomplete="off">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-10">
                                    <div class="form-group">
                                        <p>First Name : </p>
                                        <input type="text" name="first_name" placeholder="First name" size="30" id="id_first_name" autofocus="autofocus" required="required">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-10">
                                    <div class="form-group">
                                        <p>Last Name : </p>
                                        <input type="text" name="last_name" placeholder="Last name" size="30" id="id_last_name" required="required">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-10">
                                    <div class="form-group">
                                        <p>Email : </p>
                                        <input type="email" name="email_visitor" placeholder="Email" size="30" id="id_email_visitor" required="required">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-10">
                                        <div class="form-group">
                                            <p>Password : </p>
                                            <input type="password" name="password" placeholder="Password" size="30" id="id_password" required="required">
                                        </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-10">
                                        <div class="form-group">
                                            <p>Phone Number : </p>
                                            <input type="text" name="no_telp" placeholder="Phone Number" size="30" id="id_no_telp" required="required">
                                        </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-10">
                                        <div class="form-group">
                                            <p>Region : </p>
                                            <input type="text" name="region" placeholder="Region" size="30" id="id_region" required="required">
                                        </div>
                                </div>


                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn" name="signup">SIGN UP</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <?php
		if(isset($_POST['signup']))
		{
			//echo $_POST['nim']."<br>";
			
			$first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email_visitor = $_POST['email_visitor'];
			$password = $_POST['password'];
			$no_telp = $_POST['no_telp'];
			$region = $_POST['region'];

			include('koneksi.php');

			$koneksi = new mysqli($host, $user, $pass, $db) or die("Koneksi Database Gagal");

			$sql = " INSERT INTO `visitor_member` (`first_name`, `last_name`, `email_visitor`, `password`, `no_telp`, `region`) VALUES ('$first_name', '$last_name', '$email_visitor', '$password', '$no_telp', '$region'); ";

			$hasil = $koneksi->query($sql);

			if($koneksi)
			{
				echo "<script type='text/javascript'>alert('Successfully Registered! Please Login!');
				window.location='index.html';
				</script>";
			}

			else
			{
				echo "<script type='text/javascript'>alert('Fail to Registered! Please Try Again!');
				window.location='daftar.php';
				</script>";
			}

		}
			

	?>
        

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>
