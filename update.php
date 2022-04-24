<body style="background-color:LightCoral;">
<?php
include "koneksi.php";
$id_erin = $_POST['id_erin'];
$nama_erin = $_POST['nama_erin'];
$email_erin = $_POST['email_erin'];
$alamat_erin = $_POST['alamat_erin'];

$sql = "UPDATE tbl_erin set nama_erin = '$nama_erin', email_erin ='$email_erin', alamat_erin='$alamat_erin' where id_erin=$id_erin";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi update data mahasiswa gagal";
}else{
    echo "Eksekusi update data mahasiswa berhasil<br>";
    echo "<a href='data_erin.php'>Show data</a>";
}

?>
</body>