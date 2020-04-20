<?php
// Form buka utk delete multiple
echo form_open(base_url('admin/user/proses'));
?>
<p>
	<div class="btn-group">
		<a href="<?php echo base_url('admin/user/tambah') ?>" class="btn btn-success btn-lg">
			<i class="fa fa-plus"></i> Tambah Baru</a>
	</div>
</p>
<div class="table-responsive mailbox-messages">
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>G-Mail</th>
				<th>Username</th>
				<th>Akses Level</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Looping data user dg foreach
			$i = 1;
			foreach ($user as $user) {
				?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $user->nama ?></td>
					<td><?php echo $user->email ?></td>
					<td><?php echo $user->username ?></td>
					<td><?php echo $user->akses_level ?> </td>
					<td>
						<div class="btn-group">
							<a href="<?php echo base_url('admin/user/edit/' . $user->id_user) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
							<a href="<?php echo base_url('admin/user/delete/' . $user->id_user) ?>" class="btn btn-primary btn-sm" onClick="return confirm('Yakin ingin menghapus user ini?')"><i class="fa fa-trash-o"></i>Hapus</a>
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
