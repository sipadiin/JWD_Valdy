<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE HTML>

<html>
<head>
    <script>
        function ageCalculator() {
            var userinput = document.getElementById("DOB").value;
            var dob = new Date(userinput);
            if (userinput == null || userinput == '') {
                document.getElementById("message").innerHTML = "**Choose a date please!";
                return false;
            } else {

                var month_diff = Date.now() - dob.getTime();
                var age_dt = new Date(month_diff);
                var year = age_dt.getUTCFullYear();
                var age = Math.abs(year - 1991);
                return document.getElementById("result").innerHTML = age;
            }
        }
    </script>


	<script src="validasi.js"></script>

    <title>Halaman Login</title>
</head>

<body>

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <form method="post" action='' name="frmdaftar" onsubmit='return cekform()'>
                <div class="mb-3">
                    <label for="pic" class="form-label">Profile Picture</label> <br>
                    <input type="file" name="fileToUpload" id="pic" required>
                </div>
                <div class="mb-3">
                    <label for="fName" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="fName" required>
                </div>
                <div class="mb-3">
                    <label for="sName" class="form-label">Nama Panggilan</label>
                    <input type="text" class="form-control" id="sName" required>
                </div>
                <div class="mb-3">
                    <label for="bPlace" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="bPlace" required>
                </div>
                <div class="mb-3">
                    <label for="bDate" class="form-label">Tanggal Lahir</label>
                    <input type=date class="form-control" id=DOB onchange="ageCalculator()">
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Usia</label>
                    <input type="number" id="result" readonly>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="gender" required>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Kota Tinggal</label>
                        <input type="text" class="form-control" id="city">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">No. HP</label>
                        <input type="number" class="form-control" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="socMed" class="form-label">Social Media</label>
                        <input type="text" class="form-control" id="socMed">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                    <input type="reset" class="btn btn-primary" name="reset" value="Reset">
            </form>
        </div>
    </div>
</div>


</body>
</html>