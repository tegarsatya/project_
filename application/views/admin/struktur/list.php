<?php
// Form buka utk delete multiple
echo form_open(base_url('admin/struktur/proses'));
?>
<p>
	<div class="btn-group">
		<a href="<?php echo base_url('admin/struktur/tambah') ?>" class="btn btn-success btn-lg">
			<i class="fa fa-plus"></i> Tambah Baru</a>
	</div>
</p>
<div class="table-responsive mailbox-messages">
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Judul</th>
				<th>Isi</th>
				<th>gambar</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Looping data user dg foreach
			$i = 1;
			foreach ($struktur as $str) {
			?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $str->judul ?></td>
					<td><?php echo $str->isi ?></td>
					<td>
						<img src="<?php echo base_url('assets/upload/image/thumbs/' . $str->gambar) ?>" class="img img-responsive" width="60">
					</td>
					<td>
						<div class="btn-group">
							<a href="<?php echo base_url('admin/struktur/edit/' . $str->id_str) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
							<a href="<?php echo base_url('admin/struktur/delete/' . $str->id_str) ?>" class="btn btn-primary btn-sm" onClick="return confirm('Yakin ingin menghapus user ini?')"><i class="fa fa-trash-o"></i>Hapus</a>
						</div>
					</td>
				</tr>
			<?php $i++;
			} //End loopin
			?>
		</tbody>
	</table>
</div>

<?php
// Form tutup
echo form_close();
?>
