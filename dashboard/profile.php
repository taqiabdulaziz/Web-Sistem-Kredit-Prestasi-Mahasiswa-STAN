<?php
include('../session.php');
$query = 'SELECT * FROM mahasiswa';
$hasil_query = mysqli_query($connection,$query);

echo "<table border='1' align='center' rules='all'>";

echo '<tr bgcolor="blue" style="padding: 10px" style="color:white" align="center">';
echo '<td>npm</td>';
echo '<td>nama</td>';
echo '<td>program studi</td>';
echo '<td>semester</td>';
echo '<td>kelas</td>';
echo '<td>Hapus</td>';
echo '</tr>';

$nomer=1;
while ($row = mysqli_fetch_object($hasil_query)) {
  echo '<td>'. $row->npm .'</td>';
  echo '<td>'. $row->nama .'</td>';
  echo '<td>'. $row->progstud .'</td>';
  echo '<td>'. $row->semester .'</td>';
  echo '<td>'. $row->kelas .'</td>';
  echo '<td align="center"> <a href="href_exam_form.php?nis=' . $row->nis . '">  x  </a> </td>';
  echo '</tr>';
$nomer++;
}
echo '</table>';
?>
