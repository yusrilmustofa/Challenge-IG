<?php
session_start();
include '../koneksi.php';

if (isset($_POST['BtnSimpan'])) {
  $NIS=$_POST['nis'];
  $Nama=$_POST['nama'];
  $Kelas=$_POST['Kelas'];
  $Jurusan=$_POST['Jurusan'];
  $Alamat=$_POST['alamat'];
  $PBO=$_POST['PBO'];
  $WEB=$_POST['WEB'];
  $Basdat=$_POST['Basdat'];
  $Desain=$_POST['Desain'];
  $Progdas=$_POST['Progdas'];

  $sql="INSERT INTO siswa(nis,nama,kelas,jurusan,alamat,WEB,PBO,Basdat,Desain,ProgDas) VALUES('$NIS','$Nama','$Kelas','$Alamat','$Jurusan','$WEB','$PBO','$Basdat','$Desain','$Progdas')";
  $res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
{
   header("Location: form-tambah.php");
}
else
{
   header("Location: ../index.php");
}
}else {
  header("Location:form-tambah.php");
}
 ?>
