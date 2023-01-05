<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi mahasiswa</title>
</head>
<body>
    <header>
        <h3>Daftar Absensi 1B|ULBI</h3>
    </header>

    <form action="proses_absensi.php" method="POST">
        <fieldset>
    <p>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" placeholder="nama lengkap">
    </p>
    <p>
        <label for="npm">Npm:</label>
        <textarea name="npm"></textarea> 
    </p>
    <p>
        <label for="mata_kuliah">Mata Kuliah:</label>
        <select name="mata_kuliah">
        <option >Pemrograman</option>
        <option >Alogoritma</option>
        <option >Literasi Teknologi</option>
        </select>
    </p>
    <p>
        <label for="pertemuan">Pertemuan:</label>
        <select name="Pertemuan">
        <option >1</option>
        <option >2</option>
        <option >3</option>
        <option >4</option>
        <option >5</option>
        </select>
    </p>
    <p>
        <input type="submit" value="Daftar" nama="daftar" />
    </p>
        </fieldset>
    </form>
</body>
</html>