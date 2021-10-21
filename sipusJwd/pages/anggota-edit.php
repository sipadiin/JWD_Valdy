<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php
$id_anggota=$_GET['id'];
$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>
<h1 class="h1 border-bottom">Edit Data Anggota</h1>
<div class="col-md-7 col-lg-8">
    <form action="proses/anggota-edit-proses.php" onsubmit="return validateMember()" method="post" name="formEditAnggota">
        <div class="row g-3">
            <div class="col-12">
                <label for="id_anggota" class="form-label">ID Anggota</label>
                <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly>
            </div>

            <div class="col-12">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>"   >
            </div>

            <div class="col-12">
                <label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select"   >
                    <option value="<?php echo $r_tampil_anggota['jeniskelamin']; ?>" select="selected"><?php echo $r_tampil_anggota['jeniskelamin']; ?></option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>

            <div class="col-12">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $r_tampil_anggota['alamat']; ?>"   >
            </div>

            <div class="col-12 text-center">
                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
            </div>
        </div>
    </form>
</div>
<script>

    function validateMember() {
        let nama = document.forms["formEditAnggota"]["nama"].value;
        if (nama === "") {
            alert("Nama tidak boleh kosong");
            return false;
        }
        return true;
    }
</script>