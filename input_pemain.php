<?php
require "koneksi.php";
$koneksi = $con;
function insert_pemain($function){
    $nama = $_POST["nama"];
    $asal_negara = $_POST["asal_negara"];
    $posisi = $_POST["posisi"];
    $nomor_punggung = $_POST["nomor_punggung"];
    $input = "INSERT INTO pemain(nama, asal_negara, posisi, nomor_punggung) VALUES ('$nama','$asal_negara','$posisi','$no_punggung')";
    mysqli_query($function, $input);
    echo "<script>alert('Data telah tersimpan.');
    document.location='index.php'</script>";
    }
    if(isset($_POST["simpan"])){
        insert_pemain($koneksi);
    }
?>