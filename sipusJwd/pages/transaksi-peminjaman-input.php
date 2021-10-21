<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<h1 class="h1 border-bottom">Input Transaksi Peminjaman</h1>
<div class="col-md-7 col-lg-8">
    <form action="proses/transaksi-peminjaman-input-proses.php" method="post" onsubmit="return validateBorrow()"
          name="formBorrow">
        <div class="row g-3">
            <div class="col-12">
                <label for="id_transaksi" class="form-label">ID Transaksi</label>
                <?php include "koneksi.php";
                $sql = mysqli_query($db, "select max(idtransaksi) as maxID from tbtransaksi");
                $data = mysqli_fetch_array($sql);

                $kode = $data['maxID'];
                $kode++;
                ?>
                <input type="text" class="form-control" id="id_transaksi" name="id_transaksi"
                       value="<?php echo $kode; ?>" readonly  >
            </div>

            <div class="col-12">
                <label for="Anggota" class="form-label">Anggota</label>
                <select name="id_anggota" class="form-select"  >
                    <option value="" select="selected"> Pilih Data Anggota</option>
                    <?php
                    $q_tampil_anggota = mysqli_query($db,
                        "SELECT * FROM tbanggota
							WHERE status='Tidak Meminjam'
							ORDER BY idanggota"
                    );
                    while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
                        echo "<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-12">
                <label for="buku" class="form-label">Buku</label>
                <select name="id_buku" class="form-select"  >
                    <option value="" select="selected"> Pilih Data Buku</option>
                    <?php
                    $q_tampil_buku = mysqli_query($db,
                        "SELECT * FROM tbbuku
							WHERE status='Tersedia'
							ORDER BY idbuku"
                    );
                    while ($r_tampil_buku = mysqli_fetch_array($q_tampil_buku)) {
                        echo "<option value=$r_tampil_buku[idbuku]>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-12">
                <label for="tangga;_pinjam" class="form-label">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="pengarang" name="tgl_pinjam"  >
            </div>

            <div class="col-12 text-center">
                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
            </div>
        </div>
    </form>
</div>


<script>
    function validateBorrow() {
        let nama = document.forms["formBorrow"]["id_anggota"].value;
        if (nama === "") {
            alert("Nama anggota tidak boleh kosong");
            return false;
        }
        return true;

        let buku = document.forms["formBorrow"]["id_buku"].value;
        if (buku === "") {
            alert("Kategori tidak boleh kosong");
            return false;
        }
        return true;

        let pinjam = document.forms["formBorrow"]["tgl_pinjam"].value;
        if (pinjam === "") {
            alert("Mohon isi tanggal pinjam");
            return false;
        }
        return true;

    }
</script>