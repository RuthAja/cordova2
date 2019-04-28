<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $lahir=$_POST['lahir'];
 $kelamin=$_POST['kelamin'];
 $alamat=$_POST['alamat'];
 $pekerjaan=$_POST['pekerjaan'];
 $q=mysqli_query($con,"UPDATE `cordova2` SET `nama`='$nama',`lahir`='$lahir',`kelamin`='$kelamin',`alamat`='$alamat',`pekerjaan`='$pekerjaan'   where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>