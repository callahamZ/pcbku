<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/daftarstyle.css">
    <title>Daftar Pesanan PCB</title>
    <link rel="shortcut icon" href="assets/pcb-board.ico" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="#">
                <img src="assets/pcb-board.png" alt="Logo PCBKU" class="logoimg" />
            </a>
            <h1>PCBKU</h1>
        </div>

        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>

    <section class="main">
        <div class="login">
            <form action="" method="post">
                <div class="sublogin">
                    <h1>Login Admin</h1>
                    <input type="text" name="username" id="" placeholder="Username" class="textinput">
                    <input type="password" name="password" id="" placeholder="Password" class="textinput">
                    <input type="submit" value="Login" name="login">
                </div>

            </form>
        </div>
        <?php
        $sambung = mysqli_connect('localhost', 'root', '', 'pcbku_ilham');

        if (isset($_POST['login']))
            $cek = mysqli_query($sambung, "SELECT * FROM `admin` WHERE `username` = '$_POST[username]' AND `password` = '$_POST[password]'");
        ?>

        <div class="content">
            <h1>Daftar Pesanan</h1>
            <h4>Membutuhkan akses admin</h4>
            <div class="subcontent">
                <table>
                    <thead>
                        <tr>
                            <th>ID Pesanan</th>
                            <th>Atas Nama</th>
                            <th>Material</th>
                            <th>Layer</th>
                            <th>Ukuran</th>
                            <th>Jumlah</th>
                            <th>Tipe</th>
                            <th>Tebal</th>
                            <th>Warna</th>
                            <th>Jasa Kirim</th>
                            <th>Alamat</th>
                            <th>File</th>
                            <th>Status</th>
                            <th>Operasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['login'])) {
                            if ($cek->num_rows > 0) {
                                $data = mysqli_query($sambung, "SELECT * FROM `pesanan`");
                                while ($d = mysqli_fetch_object($data))
                                    echo "<tr>
                                <td> $d->id_pesanan </td>
                                <td> $d->nama </td>
                                <td> $d->material </td>
                                <td> $d->layer </td>
                                <td> $d->ukuran </td>
                                <td> $d->jumlah </td>
                                <td> $d->tipe </td>
                                <td> $d->tebal </td>
                                <td> $d->warna </td>
                                <td> $d->jasa_kirim </td>
                                <td> $d->alamat </td>
                                <td> $d->file </td>
                                <td> $d->status </td>
                                <td><a href='proses.php?id=$d->id_pesanan' target='_blank'>Proses Pesanan</a></td>
                                </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <footer>
        <div>
            <h2>Web ini Dibuat Oleh :</h2><br>
            <p>Muhammad Ilham Kurniawan</p>
            <p>2122500052</p>
            <p>1 D3 ELKA B</p>
        </div>
        <div>
            <h2>Dibimbing Oleh :</h2><br>
            <p>Bpk. Firman Arifin</p>
        </div>

        <h1>PCBKU.COM</h1>

    </footer>
</body>

</html>