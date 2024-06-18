<?php
// Pendekatan OOP
class Segitiga {
private $alas;
private $tinggi;
// Konstruktor
public function _ construct($alas, $tinggi) {
$this->alas = $alas;
$this->tinggi = $tinggi;
}
// Metode untuk menghitung luas segitiga
public function hitungLuas() {
return 0.5 * $this->alas * $this->tinggi;
}
// Getter dan Setter untuk alas
public function setAlas($alas) {
$this->alas = $alas;
}
public function getAlas() {
return $this->alas;
}
// Getter dan Setter untuk tinggi
public function setTinggi($tinggi) {
$this->tinggi = $tinggi;
}
public function getTinggi() {
return $this->tinggi;
}
}
// Membuat objek dari kelas Segitiga
$segitiga = new Segitiga (10, 5);
// Menggunakan metode untuk menghitung luas segitiga
$luas = $segitiga->hitungLuas();
echo "Luas segitiga dengan alas {$segitiga->getAlas()} dan tinggi {$segitiga->getTinggi()} adalah $luas \n";
?>