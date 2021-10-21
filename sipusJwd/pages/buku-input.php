<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<h1 class="h1 border-bottom">Input Data Buku</h1>
<div class="col-md-7 col-lg-8">
    <form action="proses/buku-input-proses.php" method="post" onsubmit="return validateBook()" name="formBuku">
        <div class="row g-3">
            <div class="col-12">
                <label for="id_buku" class="form-label">ID Buku</label>
                <?php include "koneksi.php";
                $sql = mysqli_query($db, "select max(idbuku) as maxID from tbbuku");
                $data = mysqli_fetch_array($sql);

                $kode = $data['maxID'];
                $kode++;
                ?>
                <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?php echo $kode; ?>"
                       readonly required>
            </div>

            <div class="col-12">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Input Judul Buku"
                        >
            </div>

            <div class="col-12">
                <label for="Kategori" class="form-label">Kategori</label>
                <select name="kategori" class="form-select"  >
                    <option value="" select="selected">-Pilih-</option>
                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                    <option value="Ilmu Agama">Ilmu Agama</option>
                    <option value="Karya Sastra">Karya Sastra</option>
                </select>
            </div>

            <div class="col-12">
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang"
                       placeholder="Input Nama Pengarang"  >
            </div>

            <div class="col-12">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Input Penerbit"
                        >
            </div>

            <div class="col-12 text-center">
                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
            </div>
        </div>
    </form>
</div>

<script>
    function validateBook() {
        let judulbuku = document.forms["formBuku"]["judul_buku"].value;
        if (judulbuku === "") {
            alert("Nama buku tidak boleh kosong");
            return false;
        }
        return true;

        let kategori = document.forms["formBuku"]["kategori"].value;
        if (kategori === "") {
            alert("Kategori tidak boleh kosong");
            return false;
        }
        return true;

        let pengarang = document.forms["formBuku"]["pengarang"].value;
        if (pengarang === "") {
            alert("Pengarang tidak boleh kosong");
            return false;
        }
        return true;

        let penerbit = document.forms["formBuku"]["penerbit"].value;
        if (penerbit === "") {
            alert("Penerbit tidak boleh kosong");
            return false;
        }
        return true;
    }

</script>