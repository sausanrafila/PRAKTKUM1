<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form nilai mahasiswa</title>
    <link rel="stylesheet" href="nilai.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class='container'>
        <form class="form-horizontal p-5"  method="GET" action="array_siswa.php">
            <div class="text-center">
                <h3 class="mb-5 text-mg" >Form Nilai Siswa</h3>
            </div>
            <br>
        <!----> 
            <div class="form-group row">
                <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label >
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="namalengkap_" >
                </div>
            </div>
            <br>
        <!---->
            <div class="form-group row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" name="nim_" >
                </div>
            </div>
            <br>
        <!----->
            <div class="form-group row">
                <label for="matakuliah" class="col-sm-2 col-form-label">Mata Kuliah</label>
                <div class="col-sm-7">
                    <select name="matakuliah_" class="form-control">
                        <option value="DDP">Dasar Dasar Pemrograman</option>
                        <option value="PWL">Pemrograman Web Lanjutan</option>
                        <option value="BD">Basis Data</option>
                        <option value="BI">Bahasa Inggris</option>
                        <option value="JK">Jaringan Komputer</option>
                        <option value="PK">Ppkn</option>
                        <option value="XU">UI & UX</option>
                        <option value="SB">Statistik & Probabilitas</option>
                        <option value="KK">Keterampilan Komunikasi</option>
                    </select>
                </div>
            </div>
            <br>
            <!----->
            <div class="form-group row">
                <label for="nilaiuts" class="col-sm-2 col-form-label">Nilai UTS</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" name="nilaiuts_" >
                </div>
            </div>
            <br>
            <!---->
            <div class="form-group row">
                <label for="nilaiuas" class="col-sm-2 col-form-label">Nilai UAS</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" name="nilaiuas_" >
                </div>
            </div>
            <br>
            <!---->
            <div class="form-group row">
                <label for="nilaitugas" class="col-sm-2 col-form-label">Nilai Tugas</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" name="nilaitugas_"required >
                </div>
            </div>
            <br>
            <!---->
            <div class="text-center">
                <input class="btn" type="submit" style="color:white; background-color:black;" value="simpan" name="proses_"/>
            </div>

        </form>
    </div>
</body>
</html>