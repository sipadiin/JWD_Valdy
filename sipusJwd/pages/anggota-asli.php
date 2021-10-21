<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div id="label-page"><h3>Tampil Data Anggota</h3></div>
<div id="content">
    <p id="tombol-tambah-container"><a href="index.php?p=anggota-input" class="tombol">Tambah Anggota</a></p>
    <table id="tabel-tampil">
        <tr>
            <th id="label-tampil-no">No
            </td>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th id="label-opsi">Opsi</th>
        </tr>


        <?php
        $sql = "SELECT * FROM tbanggota ORDER BY idanggota DESC";
        $q_tampil_anggota = mysqli_query($db, $sql);

        $nomor = 1;
        while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)){
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $r_tampil_anggota['idanggota']; ?></td>
            <td><?php echo $r_tampil_anggota['nama']; ?></td>
            <td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
            <td><?php echo $r_tampil_anggota['alamat']; ?></td>
            <td>
                <div class="tombol-opsi-container"><a
                            href="cetak/cetak-kartu-identitas-anggota.php?id=<?php echo $r_tampil_anggota['danggota]; ?>" 
					target="_blank" class="tombol">Cetak Kartu</a></div>

				<div class="tombol-opsi-container"><a href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>