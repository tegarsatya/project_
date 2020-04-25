<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinymce.init({
		file_browser_callback: function(field, url, type, win) {
			tinyMCE.activeEditor.windowManager.open({
				file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
				title: 'KCFinder',
				width: 700,
				height: 500,
				inline: true,
				close_previous: false
			}, {
				window: win,
				input: field
			});
			return false;
		},
		selector: "#keterangan",
		height: 150,
		plugins: [
			"advlist autolink lists link image charmap print preview anchor",
			"searchreplace visualblocks code fullscreen",
			"insertdatetime media table contextmenu paste"
		],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
	});
</script>
<?php
// Session 
if ($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

if (isset($error)) {
	echo '<div class="alert alert-success">';
	echo $error;
	echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">', '</div>');

echo form_open(base_url('admin/struktur/tambah'));
?>
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label>Judul </label>
			<input type="text" name="judul" class="form-control" value="<?php echo set_value('judul') ?>" required placeholder="Judul Struktur">
		</div>
	</div>

	<div class="col-md-12">
		<div class="form-group">
			<label>Upload gambar</label>
			<input type="file" name="gambar" class="form-control">
		</div>
	</div>

	<div class="col-md-12">
		<div class="form-group">
			<label>Keterangan</label>
			<textarea name="isi" class="form-control" placeholder="Keterangan" id="keterangan"><?php echo set_value('isi') ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" value="save_struktur" class="btn btn-success btn-lg">
		<input type="reset" name="reset" value="Reset" class="btn btn-primary btn-lg">
	</div>
</div>
<?php echo form_close() ?>
