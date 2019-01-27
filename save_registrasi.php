<?php 
include "koneksi.php";
# Baca variabel Form (If Register Global ON)
$TxtNama 	= $_POST['TxtNama'];
$RbKelamin 	= $_POST['cbojk'];
$TxtAlamat 	= $_POST['TxtAlamat'];
$jns_peternakan=$_POST['cbopeternakan'];
$email=$_POST['textemail'];
$NOIP = $_SERVER['REMOTE_ADDR'];
# Validasi Form

    $NOIP = $_SERVER['REMOTE_ADDR'];
	$sqldel = "DELETE FROM tmp_pasien";	mysql_query($sqldel, $koneksi);
			  
	$sql  = " INSERT INTO peternak (nama,kelamin,jenis_ayam, alamat, email, tanggal) 
		 	  VALUES ('$TxtNama','$RbKelamin', '$jns_peternakan','$TxtAlamat','$email',NOW())";
	mysql_query($sql) 
		  or die ("SQL Error 2".mysql_error());
	
	$sqlhapus = "DELETE FROM  diagnosa ";
	mysql_query($sqlhapus, $koneksi) or die ("SQL Error 1".mysql_error());
	
	$sqlhapus2 = "DELETE FROM tmp_analisa ";
	mysql_query($sqlhapus2, $koneksi) or die ("SQL Error 2".mysql_error());
			
	$sqlhapus3 = "DELETE FROM tmp_gejala ";
	mysql_query($sqlhapus3, $koneksi) or die ("SQL Error 3".mysql_error());
	echo "<meta http-equiv='refresh' content='0; url=proses-diagnosa.php?top=konsultasifm.php'>";

?>
	