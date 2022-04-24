<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <title>Form Tambah Data</title>
</head>
<body style="background-color:LightCoral;">
<?php
 include 'koneksi.php';
$id=$_GET['id'];
$sql = "SELECT * FROM tbl_erin WHERE id_erin =$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}

?>

<h1>Form Tambah Data</h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>

    <form method="post" action="update.php">
        <input type="hidden" name="id_erin" value="<?php echo $row['id_erin']?>">
        Nama  : <input type="text" name="nama_erin" value="<?php echo $row['nama_erin']?>"><br/>
        email : <input type="text" name="email_erin" value="<?php echo $row['email_erin']?>"><br/>
        keterangan : <input type="text" name="alamat_erin" value="<?php echo $row['alamat_erin']?>"><br/>
        <button type="submit">Update</button>
    </form>
<?php }?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>