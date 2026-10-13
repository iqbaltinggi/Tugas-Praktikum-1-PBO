<?php
// 1. Definisi Class
class Mahasiswa {
    // 3 Atribut / Property
    public $nim;
    public $nama;
    public $prodi;

    // Constructor untuk inisialisasi object
    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    // Method 1
    public function tampilkanProfil() {
        return "NIM: " . $this->nim . " | Nama: " . $this->nama;
    }

    // Method 2
    public function getProdi() {
        return "Prodi: " . $this->prodi;
    }
}

// 2. Membuat Minimal 2 Object
$mahasiswa1 = new Mahasiswa("2530521099", "Siregar Budiono", "Teknik Informatika");
$mahasiswa2 = new Mahasiswa("25305210100", "Al Zabar", "Sistem Informasi");

// 3. Menampilkan Informasi
echo $mahasiswa1->tampilkanProfil() . " | " . $mahasiswa1->getProdi() . "<br>";
echo $mahasiswa2->tampilkanProfil() . " | " . $mahasiswa2->getProdi();
?>