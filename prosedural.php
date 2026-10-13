<?php
$nama = "Jeki";
$prodi = "Kimia";

function tampilkanMahasiswa($nama, $prodi) {
    return "Nama: " . $nama . " | Prodi: " . $prodi;
}

echo tampilkanMahasiswa($nama, $prodi);
?>