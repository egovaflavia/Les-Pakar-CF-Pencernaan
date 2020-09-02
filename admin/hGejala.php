<?php  
	
	require 'header.php';
	
	$id = $_GET["id"];

	if ( hapusGejala($id) > 0 ) {
		echo "
				<script>
					alert('Data Berhasil DiHapus !');
					document.location.href = 'index.php';
				</script>
			";
	}else {
		echo "
				<script>
					alert('Data Gagal Dihapus !');
					document.location.href = 'index.php';
				</script>
			";
	}

?>