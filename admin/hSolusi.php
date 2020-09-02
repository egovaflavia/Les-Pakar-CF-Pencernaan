<?php  
	
	require 'header.php';
	
	$id = $_GET["id"];

	if ( hapusSolusi($id) > 0 ) {
		echo "
				<script>
					alert('Data Berhasil DiHapus !');
					document.location.href = 'tSolusi.php';
				</script>
			";
	}else {
		echo "
				<script>
					alert('Data Gagal Dihapus !');
					document.location.href = 'tSolusi.php';
				</script>
			";
	}

?>