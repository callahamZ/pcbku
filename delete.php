!

<?php
$sambung = mysqli_connect('localhost', 'root', '', 'pcbku_ilham');

$hapus = mysqli_query($sambung, "DELETE FROM `pesanan` WHERE `pesanan`.`id_pesanan` = '$_GET[idDel]'");
if ($hapus) {
    echo "terhapus";
}

?>