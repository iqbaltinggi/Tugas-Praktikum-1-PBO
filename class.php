<!-- Bentuk Awal Class dan Object -->
<?php
class Mahasiswa {
    public $nama;
    public $prodi;

    public function tampilkanInfo() {
        return "Nama: " . $this->nama . " | Prodi: " . $this->prodi;
    }
}

$mhs = new Mahasiswa();
$mhs->nama = "Muhamad Iqbal";
$mhs->prodi = "Informatika";
echo $mhs->tampilkanInfo();
?>