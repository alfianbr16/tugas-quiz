<?php include("config.php");?>
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
    <h3>Absensi Mahasiswa</h3>
</header>

<nav>
    <a href="form_absensi.php">[+] Tambah Data</a>
</nav>
<br>
<table border="1">
    <thead>
        <tr>
            <th>Npm</th>
            <th>Nama</th>
            <th>Matakuliah</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql="SELECT * FROM absensi";
        $query=mysqli_query($db,$sql);

        while($absensi=mysqli_fetch_array($query)){
            echo"<tr>";
            echo"<td>".$absensi['Npm']."</td>";
            echo"<td>".$absensi['Nama']."</td>";
            echo"<td>".$absensi['Matakuliah']."</td>";
            
            echo"<td>";
            echo"<a href='edit.php?id=".$absensi['Npm']."'>Edit</a> | ";
            echo"<a href='delet.php?id=".$absensi['Npm']."'>Hapus</a> | ";
            echo"</td>";
            echo"</tr>";
        }
        ?>
    </tbody>
    </table>
    <p>Total:<?php echo mysqli_num_rows($query) ?></p>
</body>
</html>