<body style="background-color:LightCoral;">
<?php
include "koneksi.php";

// $id_erin = $_POST['id_erin'];
$nama_erin = $_POST['nama_erin'];
$email_erin = $_POST['email_erin'];
$alamat_erin = $_POST['alamat_erin'];

$sql = "INSERT INTO tbl_erin VALUES(null,'$nama_erin','$email_erin','$alamat_erin')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi tambah data  gagal";
}else{
    echo "Eksekusi tambah data berhasil<br>";
    echo "<a href='data_erin.php'>Show data</a>";
}
?>
</body>