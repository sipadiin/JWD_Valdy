<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div id="content">
    <table id="tabel-tampil">

        <html>
        <body>
        <h2> Pinjam </h2>
        <form method='post' action="cetak/cetak-transaksi-peminjaman-pengembalian.php">
            <table>
                <tr>
                    <td> Tanggal Awal Peminjaman</td>
                    <td>:</td>
                    <td><input type='date' name='tglawal'></td>
                </tr>
                <tr>
                    <td> Tanggal Akhir Pengembalian</td>
                    <td>:</td>
                    <td><input type='date' name='tglakhir'></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit"> Cetak</button>
                        </button> </button>
                </tr>
            </table>
        </form>
        </body>
        </html>


