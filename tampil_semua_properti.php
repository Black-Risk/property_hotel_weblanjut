<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome Back, Agent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script src="angular.min.js"></script>
</head>
<body ng-controller="MainController">
    <table border="2" align="center" width="100%">
        <thead>
                <tr>
                    <th width="2.20%"> No </th>
                    <th width="7.50%"> Property Name </th>
                    <th> Address </th>
                    <th> Spesification </th>
                    <th width="15.00%"> Property Type </th>
                    <th width="8.50%"> Price </th>
                    <th width="8.50%"> Number of Bedroom(s) </th>
                    <th width="8.50%"> Number of Toilet(s) </th>
                    <th>Agent Email</th>
                    <th width="7.25%"> Action Data </th>
                 </tr>
        </thead>

        <input type="hidden"  size="50" name="email_agen" value="<?php echo $data['email_agen'];?>">

        <tbody>
            <?php
                include "koneksi.php";

                session_start();

				if($_SESSION['status'] != "login")
				{
					echo "<script type='text/javascript'>alert('login First!')
					window.location='index.html';</script>"; 
                }
                
                //$email_agen = $_POST['email_agen'];

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

                $query = mysqli_query($koneksi, "SELECT * FROM `properti` ORDER BY `judul` = 'judul' ");
                
                while($data = mysqli_fetch_array($query))
                {
                    echo "<tr height='50'>
                                <td align='center'>$nomor</td>
                                <td align='center'>$data[judul]</td>
                                <td align='center'>$data[alamat]</td>
                                <td align='center'>$data[spesifikasi]</td>
                                <td align='center'>$data[jenis_properti]</td>
                                <td align='center'>$data[harga]</td>
                                <td align='center'>$data[jml_kamartdr]</td>
                                <td align='center'>$data[jml_wc]</td>
                                <td align='center'>$data[email_agen]</td>
                                <td>
                                    <a href='edit_data.php?judul=$data[judul]'>Edit | </a>
                                    <a href='hapus_data.php?judul=$data[judul]'>Hapus</a>
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

        $sql = mysqli_query($koneksi, "SELECT COUNT(judul) FROM properti");
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
        
        <form method="POST" action="tambah_property.php">
            <input type="submit" name="tambah_baru" value="Add New Property!">
        </form>

        <br>

        <form method="POST" action="logout.php">
            <input type="submit" name="logout" value="Logout!">
        </form>
    
</body>
</html>