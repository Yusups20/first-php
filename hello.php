<?php
$nim = "0411500400";
$nama = 'Chotimatul Musyarofah';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>


<?php
$nim = "0411500400";
$nama = 'Chotimatul Musyarofah';
$umur = 23;
$nilai = 82.25;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>