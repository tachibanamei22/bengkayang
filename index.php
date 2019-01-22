<html>
<head>
    <title>Preview Page</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

    <header>
    	<ul>
    		<li><a href="index.php">Home</a></li>
    		<li><a href="input.php">Tambah</a></li>
    	</ul>
    </header>
    
    <?php include "koneksi.php";
    $gambar = mysqli_query($conn, "SELECT * FROM foto");
    while($hasil = mysqli_fetch_array($gambar)){
	?>

	<div class="box">
		<img style="width: 300px" src="gambar/<?php echo $hasil['gambar']; ?>" />
		<?php echo $hasil['deskripsi']; ?>
	</div>
<?php }?>
</body>