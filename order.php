<form action="" method="post" enctype="multipart/form-data">
    File pcb :
    <input type="file" name="file" id="">
    <br>

    Tipe Produk PCB :
    <input type="radio" name="tipe" id="" value="standar" checked>PCB Standar
    <input type="radio" name="tipe" id="" value="otomotif">Standar Otomotif
    <input type="radio" name="tipe" id="" value="presisi">PCB Presisi Tinggi
    <br>

    Spesifikasi PCB<br>

    Material Dasar :
    <input type="radio" name="material" id="" value="Fiber-4" checked>Fiber-4
    <input type="radio" name="material" id="" value="Aluminium">Aluminium
    <input type="radio" name="material" id="" value="Tembaga">Tembaga
    <input type="radio" name="material" id="" value="Rogers">Rogers
    <input type="radio" name="material" id="" value="Teflon">Teflon
    <br>

    Layer :
    <input type="radio" name="layer" id="" value="1">1
    <input type="radio" name="layer" id="" value="2" checked>2
    <input type="radio" name="layer" id="" value="4">4
    <input type="radio" name="layer" id="" value="6">6
    <input type="radio" name="layer" id="" value="8">8
    <input type="radio" name="layer" id="" value="10">10
    <br>

    Ukuran :
    <input type="number" name="ukuranx" id="">x
    <input type="number" name="ukurany" id="">
    <select name="satuan[]" id="">
        <option value="m">m</option>
        <option value="cm" checked>cm</option>
        <option value="mm">mm</option>
    </select>
    <br>

    Jumlah :
    <input type="number" name="jumlah" id="">
    <br>
    
    Ketebalan :
    <input type="radio" name="tebal" id="" value="0.6">0.6
    <input type="radio" name="tebal" id="" value="0.8">0.8
    <input type="radio" name="tebal" id="" value="1.0">1.0
    <input type="radio" name="tebal" id="" value="1.2">1.2
    <input type="radio" name="tebal" id="" value="1.6" checked>1.6
    <input type="radio" name="tebal" id="" value="2.0">2.0
    <br>

    Warna Dasar :
    <input type="radio" name="warna" id="" value="hijau" checked>hijau
    <input type="radio" name="warna" id="" value="ungu">ungu
    <input type="radio" name="warna" id="" value="kuning">kuning
    <input type="radio" name="warna" id="" value="merah">merah
    <input type="radio" name="warna" id="" value="biru">biru
    <input type="radio" name="warna" id="" value="hitam">hitam
    <input type="radio" name="warna" id="" value="putih">putih
    <br>
    
    Pemesanan : <br>
    Pesanan atas nama :
    <input type="text" name="nama" id="">
    <br>

    Jasa pengiriman :
    <input type="radio" name="pengiriman" id="" value="JnT">J&T
    <input type="radio" name="pengiriman" id="" value="JNE">JNE
    <input type="radio" name="pengiriman" id="" value="SiCepat">SiCepat
    <input type="radio" name="pengiriman" id="" value="PosIndo">Pos Indonesia
    <br>

    Alamat pengiriman :
    <textarea name="alamat" id="" cols="30" rows="10"></textarea>
    <br>

    <input type="submit" value="PESAN" name="pesan">

</form>
<?php
    $sambung = mysqli_connect('localhost', 'root', '', 'pcbku_ilham');

    if (isset($_POST['pesan'])) {
        $id = date("YmdHis");
        $ukuran = $_POST['ukuranx'].'x'.$_POST['ukurany'].$_POST['satuan'][0];

        $namafile = $_FILES['file']['name'];
        $filepath = "pesanan/".$id.'_'.$namafile;
        move_uploaded_file($_FILES['file']['tmp_name'], $filepath);

        $data = mysqli_query($sambung, "INSERT INTO `pesanan` (`id_pesanan`, `nama`, `material`, `layer`, `ukuran`, `jumlah`, `tipe`, `tebal`, `warna`, `jasa_kirim`, `alamat`, `file`) VALUES ('$id', '$_POST[nama]', '$_POST[material]', '$_POST[layer]', '$ukuran', '$_POST[jumlah]', '$_POST[tipe]', '$_POST[tebal]', '$_POST[warna]', '$_POST[pengiriman]', '$_POST[alamat]', '$namafile')");
    }
?>