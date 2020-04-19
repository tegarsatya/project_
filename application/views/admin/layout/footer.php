<script>
	tinymce.init({
		selector: '#isi',
		height: 300,
		plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
		toolbar: 'formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
		visual_table_class: 'tiny-table',
		fontsize_formats: "8px 10px 12px 14px 18px 24px 36px"
	});
</script>

<script>
	tinymce.init({
		selector: '.textarea',
		height: 300,
		plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
		toolbar: 'formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
		visual_table_class: 'tiny-table',
		fontsize_formats: "8px 10px 12px 14px 18px 24px 36px"
	});
</script>
<script>
	tinymce.init({
		selector: '.textareatengah',
		height: 500,
		plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
		toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
		visual_table_class: 'tiny-table'
	});
</script>
<!-- SWEETALERT -->
	<?php if ($this->session->flashdata('sukses')) { ?>
		<script>
			swal("Berhasil", "<?php echo $this->session->flashdata('sukses'); ?>", "success")
		</script>
	<?php } ?>

	<?php if (isset($error)) { ?>
		<script>
			swal("Oops...", "<?php echo strip_tags($error); ?>", "warning")
		</script>
	<?php } ?>

	<?php if ($this->session->flashdata('warning')) { ?>
		<script>
			swal("Oops...", "<?php echo $this->session->flashdata('warning'); ?>", "warning")
		</script>
	<?php } ?>
	<?php
	$sek  = date('Y');
	$awal = $sek - 100;
	?>
<script>
	$(".datepicker").datepicker({
		inline: true,
		changeYear: true,
		changeMonth: true,
		dateFormat: "yy-mm-dd",
		yearRange: "<?php echo $awal ?>:<?php echo date('Y') ?>"
	});

	$(".tanggal").datepicker({
		inline: true,
		changeYear: true,
		changeMonth: true,
		dateFormat: "dd-mm-yy",
		yearRange: "<?php echo $awal ?>:<?php echo date('Y') ?>"
	});
</script>
<script>
	// Sweet alert
	function confirmation(ev) {
		ev.preventDefault();
		var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
		console.log(urlToRedirect); // verify if this is the right URL
		swal({
				title: "Yakin ingin menghapus data ini?",
				text: "Data yang sudah dihapus tidak dapat dikembalikan",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				// redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
				if (willDelete) {
					// Proses ke URL
					window.location.href = urlToRedirect;
				}
			});
	}

	// Kirim ulang
	function kirim(ev) {
		ev.preventDefault();
		var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
		console.log(urlToRedirect); // verify if this is the right URL
		swal({
				title: "Yakin Ingin Mengirim Surat Ini?",
				text: "Pengiriman Surat Sebaiknya Kurang dari 200 Kali/jam agar tidak terkena Blokir Server. Klik CANCEL untuk membatalkan. Klik OK untuk mengirim surat.",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				// redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
				if (willDelete) {
					// Proses ke URL
					window.location.href = urlToRedirect;
				}
			});
	}
	// Akses
	// Sweet alert
	function akses(ev) {
		ev.preventDefault();
		var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
		console.log(urlToRedirect); // verify if this is the right URL
		swal({
				title: "Yakin ingin memberi akses?",
				text: "Data yang diberi akses akan bisa login",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				// redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
				if (willDelete) {
					// Proses ke URL
					window.location.href = urlToRedirect;
				}
			});
	}
</script>

					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<footer class="main-footer">
	<div class="float-right d-none d-sm-block">
		<b>Version</b> 3.0.4
	</div>
	<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
	reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>
</body>

</html>
