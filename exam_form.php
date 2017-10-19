
<form action='simpan_mysql.php' method='POST'>
NIS <input type='text' name='txtNIS'><br>
Nama <input type='text' name='txtNama'><br>
Nilai1 <input type='numbers' name='txtNilai1'><br>
Nilai2 <input type='numbers' name='txtNilai2'><br>
Nilai3 <input type='numbers' name='txtNilai3'><br>
<input type='submit' value='simpan' href=><br>



</form>




<?php

include('connect_mysql.php');

$query = 'SELECT * FROM nilai_siswa';
$hasil_query = mysqli_query($koneksi,$query);

echo "<table border='1' align='center' rules='all'>";

echo '<tr bgcolor="blue" style="padding: 10px" style="color:white" align="center">';
echo '<td>Nis</td>';
echo '<td>nilai1</td>';
echo '<td>Nilai2</td>';
echo '<td>Nilai3</td>';
echo '<td>Rata</td>';
echo '<td>Jumlah</td>';
echo '<td>Hapus</td>';
echo '</tr>';

$nomer=1;
while ($row = mysqli_fetch_object($hasil_query)) {
  echo '<td>'. $row->nis .'</td>';
  echo '<td>'. $row->nilai1 .'</td>';
  echo '<td>'. $row->nilai2 .'</td>';
  echo '<td>'. $row->nilai3 .'</td>';
  echo '<td>'. $row->rata .'</td>';
  echo '<td>'. $row->jumlah.'</td>';
  echo '<td align="center"> <a href="href_exam_form.php?nis=' . $row->nis . '">  x  </a> </td>';
  echo '</tr>';
$nomer++;
}
echo '</table>';

?>
