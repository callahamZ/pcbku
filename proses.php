<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/prosesstyle.css">
    <title>Proses Pesanan</title>
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
            <li><a href="order.php">Order</a></li>
            <li><a href="daftarpesanan.php">Daftar Pesanan</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>

    <section class="main">
        <div class="content">
            <h1>PESANAN
                <?= $_GET['id'] ?> :
            </h1>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sambung = mysqli_connect('localhost', 'root', '', 'pcbku_ilham');
                        $data = mysqli_query($sambung, "SELECT * FROM `pesanan` WHERE `pesanan`.`id_pesanan` = '$_GET[id]'");
                        while ($d = mysqli_fetch_object($data)) {
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
                                </tr>";
                            $imgpath = 'pesanan/' . $_GET['id'] . '_' . $d->file;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="bottomdiv">
                <div>
                    <h3>Desain PCB :</h3>
                    <img src="<?= $imgpath ?>" alt="gambar desain pcb" class="desainpcb">
                </div>
                <div class="operasi">
                    <h3>Operasi :</h3>
                    <form action="" method="post">
                        <input type="submit" value="Tandai Sebagai Selesai" name="selesai" class="hijau"><br>
                        <input type="submit" value="Hapus Pesanan" name="hapus" class="merah">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    $sambung = mysqli_connect('localhost', 'root', '', 'pcbku_ilham');

    if (isset($_POST['selesai'])) {
        $selesai = mysqli_query($sambung, "UPDATE `pesanan` SET `status` = 'Selesai' WHERE `pesanan`.`id_pesanan` = '$_GET[id]'");

        if ($selesai)
            echo "<script>alert('Pesanan telah ditandai sebagai selesai');
            window.close();</script>";
    }

    if (isset($_POST['hapus'])) {
        $hapus = mysqli_query($sambung, "DELETE FROM `pesanan` WHERE `pesanan`.`id_pesanan` = '$_GET[id]'");
        if (($hapus) && (unlink($imgpath)))
            echo "<script>alert('Pesanan ini telah dihapus');
        window.close();</script>";
    }
    ?>

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