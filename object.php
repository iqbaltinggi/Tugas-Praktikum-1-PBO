<!-- Membuat Lebih dari Satu Object -->
<?php
class Mahasiswa {
    public $nama;
    public function sapa() { return "Halo, " . $this->nama; }
}
$mhs1 = new Mahasiswa(); $mhs1->nama = "Somad";
$mhs2 = new Mahasiswa(); $mhs2->nama = "Rere";
echo $mhs1->sapa() . "<br>" . $mhs2->sapa();
?>