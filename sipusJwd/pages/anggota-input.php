<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<h1 class="h1 border-bottom">Input Data Anggota</h1>
<div class="col-md-7 col-lg-8">
    <form action="proses/anggota-input-proses.php" onsubmit="return validateMember()" method="post" name="formAnggota">
        <div class="row g-3">
            <div class="col-12">
                <label for="id_anggota" class="form-label">ID Anggota</label>
                <?php include "koneksi.php";
                $sql = mysqli_query($db, "select max(idanggota) as maxID from tbanggota");
                $data = mysqli_fetch_array($sql);

                $kode = $data['maxID'];
                $kode++;
                ?>
                <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?php echo $kode; ?>"
                       readonly required>

            </div>

            <div class="col-12">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
            </div>

            <div class="col-12">
                <label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select">
                    <option value="" select="selected">-Pilih-</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>

            <div class="col-12">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Input Alamat">
            </div>

            <div class="col-12 text-center">
                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
            </div>
        </div>
    </form>
</div>

<script>
    function validateMember() {
        let nama = document.forms["formAnggota"]["nama"].value;
        if (nama === "") {
            alert("Nama tidak boleh kosong");
            return false;
        }
        return true;
    }
</script>