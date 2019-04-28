<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $lahir=$_POST['lahir'];
 $kelamin=$_POST['kelamin'];
 $alamat=$_POST['alamat'];
 $pekerjaan=$_POST['pekerjaan'];
 $q=mysqli_query($con,"INSERT INTO `cordova2` (`nama`,`lahir`,`kelamin`,`alamat`,`pekerjaan`) VALUES ('$nama','$lahir','$kelamin','$alamat','$pekerjaan')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>