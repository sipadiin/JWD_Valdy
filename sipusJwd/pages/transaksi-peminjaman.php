<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div id="label-page"><h3>Transaksi Peminjaman</h3></div>
<div id="content">
    <p id="tombol-tambah-container"><a href="index.php?p=transaksi-peminjaman-input" class="tombol">Transaksi Baru</a>
    </p>
    <table id="tabel-tampil">
        <tr>
            <th id="label-tampil-no">No
            </td>
            <th>ID Transaksi</th>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th id="label-opsi3">Opsi</th>
        </tr>
        <?php

        $sql = "SELECT tbtransaksi.*,tbanggota.*,tbbuku.*
		FROM tbtransaksi,tbanggota,tbbuku
		WHERE tbtransaksi.idanggota=tbanggota.idanggota
		AND tbtransaksi.idbuku=tbbuku.idbuku
		AND tbtransaksi.tglkembali='0000-00-00'
		ORDER BY tbtransaksi.idtransaksi DESC";

        $q_transaksi = mysqli_query($db, $sql);

        $nomor = 1;
        while ($r_transaksi = mysqli_fetch_array($q_transaksi)) {
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $r_transaksi['idtransaksi']; ?></td>
                <td><?php echo $r_transaksi['idanggota']; ?></td>
                <td><?php echo $r_transaksi['nama']; ?></td>
                <td><?php echo $r_transaksi['idbuku']; ?></td>
                <td><?php echo $r_transaksi['judulbuku']; ?></td>
                <td><?php echo $r_transaksi['tglpinjam']; ?></td>
                <td>
                    <div class="tombol-opsi-container btn-secondary"><a
                                href="cetak/nota-peminjaman.php?&id=<?php echo $r_transaksi['idtransaksi']; ?>"
                                target="_blank" class="tombol">Cetak Nota</a></div>
                    <div class="tombol-opsi-container btn-danger"><a
                                href="#" onclick="hapusTransaksi('<?php echo $r_transaksi['idtransaksi']; ?>')"
                                class="tombol">Pengembalian</a></div>

                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<script>
    function hapusTransaksi(id) {
        var r = confirm("Apakah anda yakin akan menghapus data transaksi " + id + " ?");
        if (r == true) {
            txt = "Data berhasil dihapus";

        } else {
            txt = "Data tidak jadi dihapus";

        }
        alert(txt);
        window.location.href = 'proses/pengembalian-proses.php?id=' + id;
    }
</script>