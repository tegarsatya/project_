<nav class="mt-2">
	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
		<li class="nav-item">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-tachometer-alt"></i>
				<p>
					Dashboard
					<i class="right fas"></i>
				</p>
			</a>
		</li>
		<li class="nav-item has-treeview">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-th"></i>
				<p>
					Kegiatan
					<i class="fas fa-angle-left right"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../charts/chartjs.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Data Kegiatan</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../charts/chartjs.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Tambah Data kegiatan</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item has-treeview">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-copy"></i>
				<p>
					Struktur Organisasi
					<i class="fas fa-angle-left right"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../charts/chartjs.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Data Struktur Organisasi</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../charts/chartjs.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Tambah Data Struktu</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item has-treeview">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-chart-pie"></i>
				<p>
					Chart
					<i class="right fas fa-angle-left"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../charts/chartjs.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>ChartJS</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item has-treeview">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-tree"></i>
				<p>
					UI Elements
					<i class="fas fa-angle-left right"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../UI/general.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>General</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../UI/icons.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Icons</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item has-treeview">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-edit"></i>
				<p>
					Forms
					<i class="fas fa-angle-left right"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../forms/validation.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Validation</p>
					</a>
				</li>
			</ul>
		</li>

		<li class="nav-item has-treeview">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-users"></i>
				<p>
					Manajemen admin
					<i class="fas fa-angle-left right"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="<?= base_url('admin/user') ?>" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Data admin Aktif</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/user/tambah') ?>" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Tambah Admin</p>
					</a>
				</li>
			</ul>
		</li>

		<li class="nav-item">
			<a href="<?php echo base_url('login/logout') ?>" class="nav-link">
				<i class="nav-icon fa fa-sign-out-alt"></i>
				<p>
					LOGOUT
				</p>
			</a>
		</li>
		<li class="nav-item has-treeview menu-open">
			<a href="#" class="nav-link ">
				<i class="nav-icon fas fa-table"></i>
				<p>
					Tables
					<i class="fas fa-angle-left right"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../tables/simple.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Simple Tables</p>
					</a>
				</li>
			</ul>
		</li>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?php echo $title ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href=<?php echo base_url('admin/dasbor') ?>">Dasbor</a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/' . $this->uri->segment(2)) ?>"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))) ?></a></li>
						<li class="breadcrumb-item active"><?php echo $title ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<!-- /.card-header -->
					<div class="card-body">
