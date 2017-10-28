<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- for unminified version add this -->
	<link rel="stylesheet" type="text/css" href="font/fonts.css" />
	<!-- for minified version add this -->
	<link rel="stylesheet" type="text/css" href="font/fonts.min.css" />

  </head>
  <body>

    <div class="bg-header"></div>
    <div class="header">
    	<div class="container">
    		<img src="img/logo.png"/>
    		<h3>Politeknik Keuangan<br/>Negara STAN
    		</h3>
    		<h4>Sistem Kredit Prestasi Mahasiswa</h4>
    	</div>
    </div>
    <div class="container sem-header">
        <form method="post">
    <table>
        <tr>
<!--
            <td>Tahun Akademik</td>
            <td>
                <select name="filterth">
                    <?php
                    $i = 1;
                    $th_awal = 2015;
                    $th_akhir = 2016;
                    while ($i <= 10) {
                        echo '<option value="'.$th_awal.'-'.$th_akhir.'">'.$th_awal.'-'.$th_akhir.'</option>';
                        $i = $i + 1;
                        $th_awal = $th_awal+1;
                        $th_akhir = $th_akhir +1;}
                    ?>
                </select>
            </td>
-->
            <td>Semester</td>
            <td>
                <select name="filtersms">
                    <option value="1">Satu</option>
                    <option value="2">Dua</option>
                    <option value="3">Tiga</option>
                    <option value="4">Empat</option>
                    <option value="5">Lima</option>
                    <option value="6">Enam</option>
                    <option value="7">Tujuh</option>
                    <option value="8">Delapan</option>
                </select>
            </td>
            <td><input type="submit" name="cari" value="Cari"></td>
        </tr>
    </table>
        </form>


        <h4>Rencana Prestasi Mahasiswa Sem. Ganjil 2017</h4>
    <a href="add_KRP.php"><div class=button>Tambah KRP</div></a>
    </div>

    <?php
    include('../session.php');

         if (isset($_POST['cari'])) {
         //$filterth = $_POST['filterth'];
         $filtersms = $_POST['filtersms'];
         switch ($filtersms) {
        case "1":
        $th = $tha;
        break;
        case "2":
        $th = $tha+1;
        break;
        case "3":
        $th = $tha+1;
        break;
        case "4":
        $th = $tha+2;
        break;
        case "5":
        $th = $tha+2;
        break;
        case "6":
        $th = $tha+3;
        break;
        case "7":
        $th = $tha+3;
        break;
        case "8":
        $th = $tha+4;
        break;}

        if ($th%2==0) {
        $query = "SELECT * FROM kegiatan a inner join mahasiswa b on a.npm=b.npm WHERE a.npm='$user_check' and tgl_mulai >= '$th-01-31' or tgl_selesai <= '$th/09/01'";
        $hasil_query = mysqli_query($connection,$query);
    echo '<div class="table">';
    	echo '<div class="container">';
			echo'<table class="table-hover" style="width:100%">';
				echo '<tr><th colspan="13" class="table-header">Tri Dharma Perguruan Tinggi</th></tr>';
  				echo '<tr>';
    				echo '<th>No</th>';
    				echo '<th>KRPM</th>';
    				echo '<th>Kode</th>';
    				echo '<th>Nama</th>';
    				echo '<th>Lingkup</th>';
    				echo '<th>Tgl Mulai</th>';
    				echo '<th>Tgl Selesai</th>';
    				echo '<th>Nilai</th>';
    				echo '<th>Keterangan</th>';
    				echo '<th>Dokumen</th>';
    				echo '<th>Hapus</th>';
    				echo '<th>Edit</th>';
    				echo '<th>Status</th>';
  				echo'</tr>';
          $nomer=1;
          while ($row = mysqli_fetch_object($hasil_query)) {
  				echo '<tr>';
          echo '<td>'. $nomer++ .'</td>';
          echo '<td>'. $row->krpm .'</td>';
          echo '<td>'. $row->kode .'</td>';
          echo '<td>'. $row->nama_kegiatan .'</td>';
          echo '<td>'. $row->lingkup .'</td>';
          echo '<td>'. $row->tgl_mulai .'</td>';
          echo '<td>'. $row->tgl_selesai .'</td>';
          echo '<td>'. $row->nilai .'</td>';
          echo '<td>'. $row->keterangan .'</td>';
          echo '<td>'. '<a href="upload/'. $row->dokumen . '" target="_blank"><img src="upload/'. $row->dokumen . '" class="img-responsive" style="height:150px;width:auto;">' .'</td>';
          echo '<td><a href="#"> Hapus </td>';
          echo '<td><a href="#"> Edit </td>';
              if (is_null($row->status)) {$stats = "Belum diverifikasi";}
              else if ($row->status = 0) $stats = "Ditolak";
              else $stats = "Diterima";
          echo '<td>'. $stats .'</td>';

  				echo '</tr>';
          $nomer++;
          }
			echo'</table>';
    	echo'</div>';
    echo'</div>';}



             else {
                 $th2=$th+1;
                 $query = "SELECT * FROM kegiatan a inner join mahasiswa b on a.npm=b.npm WHERE a.npm='$user_check' and tgl_mulai >= '$th-08-31' and tgl_mulai <= '$th2/02/28'";
        $hasil_query = mysqli_query($connection,$query);
    echo '<div class="table">';
    	echo '<div class="container">';
			echo'<table class="table-hover" style="width:100%">';
				echo '<tr><th colspan="13" class="table-header">Tri Dharma Perguruan Tinggi</th></tr>';
  				echo '<tr>';
    				echo '<th>No</th>';
    				echo '<th>KRPM</th>';
    				echo '<th>Kode</th>';
    				echo '<th>Nama</th>';
    				echo '<th>Lingkup</th>';
    				echo '<th>Tgl Mulai</th>';
    				echo '<th>Tgl Selesai</th>';
    				echo '<th>Nilai</th>';
    				echo '<th>Keterangan</th>';
    				echo '<th>Dokumen</th>';
    				echo '<th>Hapus</th>';
    				echo '<th>Edit</th>';
    				echo '<th>Status</th>';
  				echo'</tr>';
          $nomer=1;
          while ($row = mysqli_fetch_object($hasil_query)) {
  				echo '<tr>';
          echo '<td>'. $nomer++ .'</td>';
          echo '<td>'. $row->krpm .'</td>';
          echo '<td>'. $row->kode .'</td>';
          echo '<td>'. $row->nama_kegiatan .'</td>';
          echo '<td>'. $row->lingkup .'</td>';
          echo '<td>'. $row->tgl_mulai .'</td>';
          echo '<td>'. $row->tgl_selesai .'</td>';
          echo '<td>'. $row->nilai .'</td>';
          echo '<td>'. $row->keterangan .'</td>';
          echo '<td>'. '<a href="upload/'. $row->dokumen . '" target="_blank"><img src="upload/'. $row->dokumen . '" class="img-responsive" style="height:150px;width:auto;">' .'</td>';
          echo '<td><a href="#"> Hapus </td>';
          echo '<td><a href="#"> Edit </td>';
              if (is_null($row->status)) {$stats = "Belum diverifikasi";}
              else if ($row->status = 0) $stats = "Ditolak";
              else $stats = "Diterima";
          echo '<td>'. $stats .'</td>';

  				echo '</tr>';
          $nomer++;
          }
			echo'</table>';
    	echo'</div>';
    echo'</div>';
             }
         }
        else {
    $query = "SELECT * FROM kegiatan WHERE npm='$user_check'";
    $hasil_query = mysqli_query($connection,$query);
    echo '<div class="table">';
    	echo '<div class="container">';
			echo'<table class="table-hover" style="width:100%">';
				echo '<tr><th colspan="13" class="table-header">Tri Dharma Perguruan Tinggi</th></tr>';
  				echo '<tr>';
    				echo '<th>No</th>';
    				echo '<th>KRPM</th>';
    				echo '<th>Kode</th>';
    				echo '<th>Nama</th>';
    				echo '<th>Lingkup</th>';
    				echo '<th>Tgl Mulai</th>';
    				echo '<th>Tgl Selesai</th>';
    				echo '<th>Nilai</th>';
    				echo '<th>Keterangan</th>';
    				echo '<th>Dokumen</th>';
    				echo '<th>Hapus</th>';
    				echo '<th>Edit</th>';
    				echo '<th>Status</th>';
  				echo'</tr>';
          $nomer=1;
          while ($row = mysqli_fetch_object($hasil_query)) {
  				echo '<tr>';
          echo '<td>'. $nomer++ .'</td>';
          echo '<td>'. $row->krpm .'</td>';
          echo '<td>'. $row->kode .'</td>';
          echo '<td>'. $row->nama_kegiatan .'</td>';
          echo '<td>'. $row->lingkup .'</td>';
          echo '<td>'. $row->tgl_mulai .'</td>';
          echo '<td>'. $row->tgl_selesai .'</td>';
          echo '<td>'. $row->nilai .'</td>';
          echo '<td>'. $row->keterangan .'</td>';
          echo '<td>'. '<a href="upload/'. $row->dokumen . '" target="_blank"><img src="upload/'. $row->dokumen . '" class="img-responsive" style="height:150px;width:auto;">' .'</td>';
          echo '<td><a href="#"> Hapus </td>';
          echo '<td><a href="#"> Edit </td>';
              if (is_null($row->status)) {$stats = "Belum diverifikasi";}
              else if ($row->status = 0) $stats = "Ditolak";
              else $stats = "Diterima";
          echo '<td>'. $stats .'</td>';

  				echo '</tr>';
          $nomer++;
          }
			echo'</table>';
    	echo'</div>';
    echo'</div>';}
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript">
  		$( function() {
    		$( "#datepicker" ).datepicker();
  		} );
    </script>
  </body>
</html>
