<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css"  href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>data erin</title>
</head>
<body  style="background-color:LightCoral;">
<h1>Data </h1>
<a href="form_erin.php">Tambah data</a>
<table width="90%" border="5" cellspacing="10">
    <tr style="background-color: brown;">
        <td>ID </td>
        <td>Nama </td>
        <td>Email</td>
        <td>Alamat</td>
        <td>Action</td>
    </tr>
        <?php
        include 'koneksi.php';
        $sql="SELECT * FROM tbl_erin";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td><?=$row['id_erin'];?></td>
            <td><?=$row['nama_erin'];?></td>
            <td><?=$row['email_erin'];?></td>
            <td><?=$row['alamat_erin'];?></td>
            <td><a href="form_edit.php?id=<?=$row['id_erin']?>"> Edit</a> | <a href="delete.php?id=<?=$row['id_erin']?>"> Delete</td>
        </tr>
        <?php }
        ?> 
</table>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
