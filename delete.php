<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM tbl_erin WHERE id_erin =$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data gagal";
}else{
    echo "Data mahasiswa berhasil di delete<br>";
    echo "<a href='data_erin.php'> Show data</a>";
}

?>