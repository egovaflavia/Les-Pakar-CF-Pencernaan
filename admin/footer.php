<!-- Bootstrap JavaScript -->
<script src="../assets/datepicker/js/bootstrap-datepicker.js"></script>
<script>
	$(document).ready(function() {

		// Month Picker
		$('.tanggal').datepicker({
			format: 'mm-yyyy',
			viewMode: "months",
			minViewMode: "months",
			autoClose: true
		});

		// $("#tutup_modal").click(function(){
		//     window.location.reload(true);
		// });

		$(".edit_gjl").click(function() {
			var element = $(this);
			var idGjl = element.attr("id");
			// alert(idGjl);
			$.ajax({
				type: "POST",
				url: "assets/module/getDataGejala.php",
				data: "idg=" + idGjl,
				dataType: "json",
				success: function(msg) {

					$('#idgj').val(msg[0]);
					$('#kdGjl').val(msg[1]);
					$('#gjl').val(msg[2]);
					$('#aCf').val(msg[3]);

				}
			});
		});

		$(".edit_solusi").click(function() {
			var element = $(this);
			var idSol = element.attr("id");
			// alert(idGjl);
			$.ajax({
				type: "POST",
				url: "assets/module/getDataSolusi.php",
				data: "ids=" + idSol,
				dataType: "json",
				success: function(msg) {

					$('#ids').val(msg[0]);
					$('#kds').val(msg[1]);
					$('#kets').val(msg[2]);

				}
			});
		});

		$(".btn_hasil").click(function() {
			var element = $(this);
			var idHasil = element.attr("id");
			// alert(idGjl);
			$.ajax({
				type: "POST",
				url: "assets/module/getDataHasil.php",
				data: "idh=" + idHasil,
				dataType: "json",
				success: function(msg) {

					$('#kode').val(msg[1]);
					$('#nama').val(msg[2]);
					$('#jk').val(msg[3]);
					$('#umur').val(msg[4]);
					$('#tgl').val(msg[5]);
					$('#tingkat').val(msg[6] + '%');
					// $('#goal').val(msg[7]);
					if (msg[7] == 'S01') {
						$('#goal').val('Dispepsia Fungsional');
					} else if (msg[7] == 'S02') {
						$('#goal').val('Dispepsia Like Ulcer');
					} else if (msg[7] == 'S03') {
						$('#goal').val('Dispepsia Tipe Dismotility');
					} else if (msg[7] == 'S04') {
						$('#goal').val('Tukak Lambung');
					} else if (msg[7] == 'S05') {
						$('#goal').val('Diare tanpa dehidrasi');
					} else if (msg[7] == 'S06') {
						$('#goal').val('Diare dengan dehidrasi sedang');
					} else if (msg[7] == 'S07') {
						$('#goal').val('Diare dengan dehidrasi berat');
					}


				}
			});
		});
	});
</script>

</body>

</html>