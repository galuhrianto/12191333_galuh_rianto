<main>
<div id="page-content-container">
    <div class="container-fluid">
<div class="page-header">
	<h3>Data Anggota</h3>
</div>
<a href="<?php echo base_url().'admin/tambah_anggota'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Anggota Baru</a>
<br><br>
<div class="table-responsive">
	<table class="table table-bordered table-striped tabel-hover" id = "table-datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>ID Anggota</th>
				<th>Nama Anggota</th>
				<th>Jenis Kelamin</th>
				<th>No Telpon</th>
				<th>Alamat</th>
				<th>Email</th>
                <th>Password</th>
                <th>Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($anggota as $a) {
				?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $a->id_anggota ?></td>
				<td><?php echo $a->nama_anggota ?></td>
				<td><?php echo $a->gender ?></td>
				<td><?php echo $a->no_telp ?></td>
				<td><?php echo $a->alamat ?></td>
				<td><?php echo $a->email ?></td>
                <td><?php echo $a->password ?></td>
				<td nowrap="nowrap">
					<a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_anggota/'.$a->id_anggota; ?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
					<a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_anggota/'.$a->id_anggota; ?>"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>	
			<?php }?>
		</tbody>
	</table>	
</div>
</div>
</div>
			</main>