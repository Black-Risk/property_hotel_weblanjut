<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Add the Property</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

    <?php
		session_start();

		if($_SESSION['status'] != "login")
		{
			echo "<script type='text/javascript'>alert('Maaf, Anda Belum Login!')
			window.location='index.html';</script>"; 
		}

	?>

</head>

<body>
    <?php
        include "koneksi.php";

        $query = mysqli_query($koneksi, "SELECT * FROM `profil_agen` WHERE `email_agen` = '".$_SESSION['email_agen']."' ");
        $data = mysqli_fetch_array($query);
        
        echo "<p align='center'> Selamat datang, " .$data['email_agen'];
    ?>

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
                                <li><a href="logout.php">LOGOUT</a></li>
                            </ul>
                            <ul>
                                <li><a href="tampil_semua_properti.php">List Property</a></li>
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
                                <h2 data-animation="fadeInUp" data-delay="100ms">Add The Property</h2>
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
                                <h2 data-animation="fadeInUp" data-delay="100ms">Add The Property</h2>
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
                                <h2 data-animation="fadeInUp" data-delay="100ms">Add The Property</h2>
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
                            <p>ADD THE PROPERTY</p>
                        </div>
                        
                        

                        <!-- Search Form -->
                        <form method="POST" action="tambah_property.php" onsubmit="return isi_form()" autocomplete="off">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-10">
                                    <div class="form-group">
                                        <p>Property Name : </p>
                                        <input type="text" name="judul" placeholder="Property Name" size="50" id="id_judul_properti" autofocus="autofocus" required="required">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-10">
                                    <div class="form-group">
                                        <p>Address : </p>
                                        <input type="text" name="alamat" placeholder="Address" size="50" id="id_alamat" required="required">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-10">
                                    <div class="form-group">
                                        <p>Spesification : </p>
                                        <textarea name="spesifikasi" style="resize:none" class="textarea" placeholder="Property Spesification" cols="50" rows="20" id="id_spesifikasi" required="required"></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-10">
                                    <div class="form-group">
                                        <p>Property Type </p>
                                        <select class="form-control" id="id_jenis_properti" name="jenis_properti">
                                                    <option value="Apartment">Apartment</option>
                                                    <option value="Land">Land</option>
                                                    <option value="Villas">Villas</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-10">
                                        <div class="form-group">
                                            <p>Price : </p>
                                            <input type="number" name="harga" placeholder="Price" size="50" id="id_number" required="required">
                                        </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-10">
                                        <div class="form-group">
                                            <p>Property Image : </p>
                                            <input type="file" name="foto_rmh" required="required" accept="image/*">
                                        </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-10">
                                        <div class="form-group">
                                            <p>Number of Bedroom(s) : </p>
                                            <input type="number" name="jml_kamartdr" min="1" placeholder="Number of Bedroom" cols="50" id="id_jml_kamartdr" required="required">
                                        </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-10">
                                        <div class="form-group">
                                            <p>Number of Toilet(s) : </p>
                                            <input type="number" name="jml_wc" min="1" placeholder="Number of Toilet" id="id_jml_wc" required="required">
                                        </div>
                                </div>

                                <input type="hidden"  size="50" name="email_agen" value="<?php echo $data['email_agen'];?>">

                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn" name="add_property">ADD PROPERTY</button>
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
		if(isset($_POST['add_property']))
		{	
			$judul = $_POST['judul'];
            $alamat = $_POST['alamat'];
            $spesifikasi = $_POST['spesifikasi'];
			$jenis_properti = $_POST['jenis_properti'];
			$harga = $_POST['harga'];
            $foto_rmh = $_POST['foto_rmh'];
            $jml_kamartdr = $_POST['jml_kamartdr'];
            $jml_wc = $_POST['jml_wc'];
            $email_agen = $_POST['email_agen'];

			include('koneksi.php');

			$koneksi = new mysqli($host, $user, $pass, $db) or die("Koneksi Database Gagal");

			$sql = " INSERT INTO `properti` (`judul`, `alamat`, `spesifikasi`, `jenis_properti`, `harga`, `foto_rmh`, `jml_kamartdr`, `jml_wc`, `email_agen`) VALUES ('$judul', '$alamat', '$spesifikasi', '$jenis_properti', '$harga', '$foto_rmh', '$jml_kamartdr', '$jml_wc', '$email_agen'); ";

			$hasil = $koneksi->query($sql);

			if($koneksi)
			{
				echo "<script type='text/javascript'>alert('Successfully Added Property!');
				window.location='tambah_property.php';
				</script>";
			}

			else
			{
				echo "<script type='text/javascript'>alert('Fail to Add Property! Please Try Again!');
				window.location='tambah_property.php';
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
