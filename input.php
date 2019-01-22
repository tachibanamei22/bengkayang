<?php include 'koneksi.php'; ?>
<html>
<head>
    <title>Upload Page</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

    <header>
    	<ul>
    		<li><a href="index.php">Home</a></li>
    		<li><a href="input.php">Tambah</a></li>
    	</ul>
    </header>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="foto"/><br><br>
        <input type="text" name="nama" placeholder="Masukkan Keterangan Foto" /><br><br>
        <input type="submit" name="simpan" value="Simpan Foto" /><br>
    </form>

<?php
    if(isset($_POST['simpan'])){
        $folder = "./gambar/";
        $name_p = $_FILES['foto']['name'];
        $sumber_p = $_FILES['foto']['tmp_name'];
        move_uploaded_file($sumber_p, $folder.$name_p);
        $insert = mysqli_query($conn,"INSERT INTO foto VALUES (NULL,'".$name_p."','".$_POST['nama']."')");

        if($insert){
            echo "Data Disimpan";
        }else{
            echo "Gagal Menyimpan";
        }
    }
?>

</body>
</html>