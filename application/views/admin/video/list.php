<?php
// Form buka utk delete multiple
echo form_open(base_url('admin/video/proses'));
?>
<p>
	<div class="btn-group">
		<a href="<?php echo base_url('admin/video/tambah') ?>" class="btn btn-success btn-lg">
			<i class="fa fa-plus"></i> Tambah Baru</a>
	</div>
</p>
<div class="table-responsive mailbox-messages">
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Judul</th>
				<th>Posisi</th>
				<th>Video</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Looping data user dg foreach
			$i = 1;
			foreach ($video as $video) {
			?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $video->judul ?></td>
					<td><?php echo $video->posisi ?></td>
					<td><?php echo $video->video ?></td>
					<td><?php echo $video->keterangan ?> </td>
					<td>
						<div class="btn-group">
							<a href="<?php echo base_url('admin/video/edit/' . $video->id_video) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
							<a href="<?php echo base_url('admin/video/delete/' . $video->id_video) ?>" class="btn btn-primary btn-sm" onClick="return confirm('Yakin ingin menghapus user ini?')"><i class="fa fa-trash-o"></i>Hapus</a>
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
