<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pemantauan Alat Pemadan Kebakaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script src="angular.min.js"></script>
    <script>
        function isi_form()
        {
            var carinamapemilik = document.getElementById("id_carinamapemilik").value;
			if(carinamapemilik == "")
			{
				alert ("Pencarian tidak boleh kosong!");
				return false;
			}
        }
    </script>
    
</head>
<body ng-controller="MainController">
    <table>
        <thead>
            <form method="POST" action="cari.php" onsubmit="return isi_form()">
                <tr>
                    <td>Cari : </td>
                    <td><input type="text" name="carinamapemilik" placeholder="Cari Nama Pemilik" autofocus="autofocus" id="id_carinamapemilik" size="30"></td>
                    <td><input type="submit" name="klikcari" value="Cari"></td>
                </tr>
            </form>
        </thead>
    </table>

    <table>
        <thead>
            <form method="POST" action="home.php">
                <tr>
                    <td><input type="submit" value="Kembali ke sebelumnya"></td>
                </tr>
            </form>
        </thead>
    </table>

    

    <table border="2" align="center" width="100%">
        <thead>
                <tr>
                    <th width="2.20%"> No </th>
                    <th width="7.50%"> ID Pemilik </th>
                    <th> Nama Pemilik </th>
                    <th> Email Pemilik </th>
                    <th width="15.00%"> Jenis Pemadam Kebakaran </th>
                    <th width="8.50%"> Tanggal Terakhir Isi </th>
                    <th width="8.50%"> Tanggal Kadaluarsa </th>
                    <th width="8.50%"> Tanggal Maintenance </th>
                    <th width="6.50%"> QR Codes </th>
                    <th width="7.25%"> Action Data </th>
                 </tr>
        </thead>

        <tbody>
            <?php 
                $carinamapemilik = $_POST['carinamapemilik'];

                include "koneksi.php";

                session_start();

				if($_SESSION['status'] != "login")
				{
					echo "<script type='text/javascript'>alert('Maaf, Anda Belum Login!')
					window.location='index.php';</script>"; 
				}

                //Merupakan banyak data yang ditampilkan pada setiap halaman (paging)
				$batas = 20; 					
				
				if(isset($_GET["page"]))
				{
					$page = $_GET["page"];
				}
				
				else
				{
					$page = 1;
				}
				
                $starts_from =($page-1) * $batas;
                
                $nomor = 1;

                $query = mysqli_query($koneksi, "SELECT * FROM `pemadam` WHERE `nama_pemilik` LIKE '%$carinamapemilik%' ");
                
                while($data = mysqli_fetch_array($query))
                {
                    $tanggal_isi = date('d M Y', strtotime($data['tanggal_isi']));
                    $tanggal_expire = date('d M Y', strtotime($data['tanggal_expire']));
                    $data['tanggal_maintenance'] = date('d M Y', strtotime($data['tanggal_maintenance']));
                    
                    echo "<tr height='50' data-ng-repeat='(x) in data | filter:{nama_pemilik:cariNama}'>
                                <td align='center'>$nomor</td>
                                <td align='center'>$data[id_pemadam]</td>
                                <td align='center'>$data[nama_pemilik]</td>
                                <td align='center'>$data[email_pemilik]</td>
                                <td align='center'>$data[jenis_pemadam]</td>
                                <td align='center'>$tanggal_isi</td>
                                <td align='center'>$tanggal_expire</td>
                                <td align='center'>$data[tanggal_maintenance]</td>
                                <td align='center'>
                                    <a href='qrcode_users.php?id_pemadam=$data[id_pemadam]'>QR Codes!</a>
                                </td>
                                <td>
                                    <a href='edit_data.php?id_pemadam=$data[id_pemadam]'>Edit | </a>
                                    <a href='hapus_data.php?id_pemadam=$data[id_pemadam]'>Hapus</a>
                                </td>
                            </tr>

                            
                    ";

                    $nomor++;
                    
                }

            ?>
        </tbody>
        
    </table>

    <?php
        include "koneksi.php";

        $sql = mysqli_query($koneksi, "SELECT COUNT(id_pemadam) FROM pemadam");
        $row = mysqli_fetch_row($sql);
        
        $total_data = $row[0];
        $total_halaman = ceil($total_data / $batas);
        
        $pagLink = "<div align='center'>";
        for($i=1; $i<=$total_halaman; $i++)
        {
            $pagLink .= "<a href='home.php?page=".$i."'>".$i."&nbsp;&nbsp;"."</a>";
        };
        
        echo "$pagLink&nbsp;&nbsp;"."</div>";
        
    ?>
        
        <form method="POST" action="tambah_baru.php">
            <input type="submit" name="tambah_baru" value="Tambah Baru!">
        </form>

        <br>

        <form method="POST" action="logout.php">
            <input type="submit" name="logout" value="Logout!">
        </form>
    
</body>
</html>