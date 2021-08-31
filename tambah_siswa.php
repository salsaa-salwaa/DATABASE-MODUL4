<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <h3>Tambah Siswa</h3>
        <form action = "proses_tambah_siswa.php" method = "post">
            Nama Siswa : 
            <input type = "text" name = "NAMA_SISWA" value = "" class = "form-control">
            Tanggal Lahir :
            <input type = "date" name = "TANGGAL_LAHIR" value = "" class = "form-control">
            Gender :
            <select name = "GENDER" class = "form-control">
                <option></option>
                <option value = "L">Laki-laki</option>
                <option value = "P">Perempuan</option>
            </select>
            Alamat : 
            <textarea name = "ALAMAT" class = "form-control" rows = "4"></textarea>
            Kelas :
            <select name = "ID_KELAS" class = "form-control">
                <option></option>
                <?php
                include "koneksi.php";
                $qry_kelas = mysqli_query ($conn,"select * from kelas");
                while ($data_kelas = mysqli_fetch_array($qry_kelas)){
                    echo '<option value="'.$data_kelas['ID_KELAS'].'">'.$data_kelas['NAMA_KELAS'].'</option>';
                }
                ?>
            </select>
            Jurusan
            <select name="ID_JURUSAN" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_jurusan=mysqli_query($conn,"select * from jurusan");
            while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
                echo '<option value="'.$data_jurusan['ID_JURUSAN'].'">'.$data_jurusan['NAMA_JURUSAN'].'</option>';    
            }
            ?>
            </select>
            Username :
            <input type = "text" name = "USERNAME" value = "" class ="form-control">
            Password :
            <input type = "password" name = "PASSWORD" value = "" class ="form-control">
            <input type = "submit" name = "simpan" value = "Tambah Siswa" class ="btn btn-primary">
            </form>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
            </body>
            </html>






