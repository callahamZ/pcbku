<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/orderstyle.css">
  <title>Pesan Sekarang</title>
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
      <li><a href="daftarpesanan.php">Daftar Pesanan</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
  </nav>

  <section class="section1">
    <div class="main">
      <h1>Pesan Sekarang</h1>
      <form action="" method="post" enctype="multipart/form-data">
        <table>
          <tr>
            <td style="width: 10vw;">File pcb</td>
            <td><input type="file" name="file" id=""></td>
          </tr>
          <tr>
            <td>Tipe Produk PCB</td>
            <td>
              <input type="radio" name="tipe" id="" value="standar" checked>
              <label for="standar">PCB Standar</label>
              <input type="radio" name="tipe" id="" value="otomotif">
              <label for="otomotif">Standar Otomotif</label>
              <input type="radio" name="tipe" id="" value="presisi">
              <label for="presisi">PCB Presisi Tinggi</label>
            </td>
          </tr>
          <tr>
            <td style="height: 5vh; vertical-align: bottom; font-weight: bold;">
              Spesifikasi PCB</td>
          </tr>
          <tr>
            <td>Material Dasar</td>
            <td>
              <input type="radio" name="material" id="" value="FR-4" checked>
              <label for="FR-4">FR-4</label>
              <input type="radio" name="material" id="" value="Rogers">
              <label for="Rogers">Rogers</label>
              <input type="radio" name="material" id="" value="Teflon">
              <label for="Teflon">Teflon</label>
            </td>
          </tr>
          <tr>
            <td>Layer</td>
            <td>
              <input type="radio" name="layer" id="" value="1">
              <label for="1">1</label>
              <input type="radio" name="layer" id="" value="2" checked>
              <label for="2">2</label>
              <input type="radio" name="layer" id="" value="4">
              <label for="4">4</label>
              <input type="radio" name="layer" id="" value="6">
              <label for="6">6</label>
              <input type="radio" name="layer" id="" value="8">
              <label for="8">8</label>
              <input type="radio" name="layer" id="" value="10">
              <label for="10">10</label>
            </td>
          </tr>
          <tr>
            <td>Ukuran</td>
            <td>
              <input type="number" name="ukuranx" id="" class="textinput" style="width: 40px; height: 18px;"> x
              <input type="number" name="ukurany" id="" class="textinput" style="width: 40px; height: 18px;">
              <select name="satuan[]" id="">
                <option value="cm">cm</option>
                <option value="mm">mm</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Jumlah</td>
            <td><input type="number" name="jumlah" id="" class="textinput" style="width: 40px; height: 18px;"></td>
          </tr>
          <tr>
            <td>Ketebalan</td>
            <td>
              <input type="radio" name="tebal" id="" value="0.6">
              <label for="0.6">0.6</label>
              <input type="radio" name="tebal" id="" value="0.8">
              <label for="0.8">0.8</label>
              <input type="radio" name="tebal" id="" value="1.0">
              <label for="1.0">1.0</label>
              <input type="radio" name="tebal" id="" value="1.2">
              <label for="1.2">1.2</label>
              <input type="radio" name="tebal" id="" value="1.6" checked>
              <label for="1.6">1.6</label>
              <input type="radio" name="tebal" id="" value="2.0">
              <label for="2.0">2.0</label>
            </td>
          </tr>
          <tr>
            <td>Warna Dasar</td>
            <td>
              <input type="radio" name="warna" id="" value="hijau" checked>
              <label for="hijau">Hijau</label>
              <input type="radio" name="warna" id="" value="ungu">
              <label for="ungu">Ungu</label>
              <input type="radio" name="warna" id="" value="kuning">
              <label for="kuning">Kuning</label>
              <input type="radio" name="warna" id="" value="merah">
              <label for="merah">Merah</label>
              <input type="radio" name="warna" id="" value="biru">
              <label for="biru">Biru</label>
              <input type="radio" name="warna" id="" value="hitam">
              <label for="hitam">Hitam</label>
              <input type="radio" name="warna" id="" value="putih">
              <label for="putih">Putih</label>
            </td>
          </tr>
          <tr>
            <td style="height: 5vh; vertical-align: bottom; font-weight: bold;">Pemesanan</td>
          </tr>
          <tr>
            <td>Pesanan atas nama</td>
            <td><input type="text" name="nama" id="" class="textinput" style="height: 18px;"></td>
          </tr>
          <tr>
            <td>Jasa pengiriman</td>
            <td>
              <input type="radio" name="pengiriman" id="" value="J&T">
              <label for="JnT">J&T</label>
              <input type="radio" name="pengiriman" id="" value="JNE">
              <label for="JNE">JNE</label>
              <input type="radio" name="pengiriman" id="" value="SiCepat">
              <label for="SiCepat">SiCepat</label>
              <input type="radio" name="pengiriman" id="" value="PosIndo">
              <label for="PosIndo">Pos Indonesia</label>
            </td>
          </tr>
          <tr>
            <td>Alamat pengiriman</td>
            <td><textarea name="alamat" id="" cols="30" rows="10" class="textinput" style="resize: none;"></textarea>
            </td>
          </tr>
          <tr>
            <td></td>
            <td style="height: 8vh; vertical-align: bottom;"><input type="submit" value="PESAN" name="pesan" class="">
            </td>
          </tr>



        </table>


      </form>
    </div>

    <div class="iklan">
      Space Iklan hehehe
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


  <?php
  $sambung = mysqli_connect('localhost', 'root', '', 'pcbku_ilham');

  if (isset($_POST['pesan'])) {
    $id = date("YmdHis");
    $ukuran = $_POST['ukuranx'] . 'x' . $_POST['ukurany'] . $_POST['satuan'][0];

    $namafile = $_FILES['file']['name'];
    $filepath = "pesanan/" . $id . '_' . $namafile;
    move_uploaded_file($_FILES['file']['tmp_name'], $filepath);

    $data = mysqli_query($sambung, "INSERT INTO `pesanan` (`id_pesanan`, `nama`, `material`, `layer`, `ukuran`, `jumlah`, `tipe`, `tebal`, `warna`, `jasa_kirim`, `alamat`, `file`, `status`) VALUES ('$id', '$_POST[nama]', '$_POST[material]', '$_POST[layer]', '$ukuran', '$_POST[jumlah]', '$_POST[tipe]', '$_POST[tebal]', '$_POST[warna]', '$_POST[pengiriman]', '$_POST[alamat]', '$namafile', 'On Process')");

    echo '<script>alert("Pesanan telah dibuat!");</script>';
  }
  ?>

</body>

</html>