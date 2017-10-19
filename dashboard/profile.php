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
  </
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
    <h4>Rencana Prestasi Mahasiswa Sem. Ganjil 2017</h4>

    <a href="#"><div class=button>Tambah KRP</div></a>
    </div>

    <?php
    include('../session.php');
    $query = "SELECT * FROM kegiatan WHERE npm='$user_check'";
    // $query = 'SELECT kegiatan.krpm, kegiatan.kode, kegiatan.nama_kegiatan, kegiatan.lingkup, kegiatan.tgl_mulai, kegiatan.tgl_selesai, kegiatan.nilai,
    // kegiatan.keterangan
    // FROM kegiatan
    // INNER JOIN mahasiswa ON kegiatan.npm=mahasiswa.npm';
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
    				echo '<th>edit</th>';
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
          echo '<td>'. $row->dokumen .'</td>';
          echo '<td>'. $row->nilai .'</td>';
          echo '<td>'. $row->nilai .'</td>';
          echo '<td>'. $row->status .'</td>';
  				echo '</tr>';
          $nomer++;
          }
			echo'</table>';
    	echo'</div>';
    echo'</div>';
    ?>

<?php
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
    				echo '<th>edit</th>';
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
          echo '<td>'. $row->dokumen .'</td>';
          echo '<td>'. $row->nilai .'</td>';
          echo '<td>'. $row->nilai .'</td>';
          echo '<td>'. $row->status .'</td>';
  				echo '</tr>';
          $nomer++;
          }
			echo'</table>';
    	echo'</div>';
    echo'</div>';
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
