<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php
$id_buku = $_GET['id'];
$q_tampil_buku = mysqli_query($db, "SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
$r_tampil_buku = mysqli_fetch_array($q_tampil_buku);

?>
<h1 class="h1 border-bottom">Edit Data Buku</h1>
<div class="col-md-7 col-lg-8">
    <form action="proses/buku-edit-proses.php" method="post" onsubmit="return validateEditBook()" name="formEditBuku">
        <div class="row g-3">
            <div class="col-12">
                <label for="id_buku" class="form-label">ID Buku</label>
                <input type="text" class="form-control" id="id_buku" name="id_buku"
                       value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly>
            </div>

            <div class="col-12">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku"
                       value="<?php echo $r_tampil_buku['judulbuku']; ?>">
            </div>

            <div class="col-12">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori"
                       value="<?php echo $r_tampil_buku['kategori']; ?>">
            </div>

            <div class="col-12">
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang"
                       value="<?php echo $r_tampil_buku['pengarang']; ?>">
            </div>

            <div class="col-12">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit"
                       value="<?php echo $r_tampil_buku['penerbit']; ?>">
            </div>

            <div class="col-12 text-center">
                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
            </div>
        </div>
    </form>
</div>


<script>
    function validateEditBook() {
        let judulbuku = document.forms["formEditBuku"]["judul_buku"].value;
        if (judulbuku === "") {
            alert("Nama buku tidak boleh kosong");
            return false;
        }
        return true;

        let kategori = document.forms["formEditBuku"]["kategori"].value;
        if (kategori === "") {
            alert("Kategori tidak boleh kosong");
            return false;
        }
        return true;

        let pengarang = document.forms["formEditBuku"]["pengarang"].value;
        if (pengarang === "") {
            alert("Pengarang tidak boleh kosong");
            return false;
        }
        return true;

        let penerbit = document.forms["formEditBuku"]["penerbit"].value;
        if (penerbit === "") {
            alert("Penerbit tidak boleh kosong");
            return false;
        }
        return true;
    }

</script>