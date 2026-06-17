<?php
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    // Properti tambahan sesuai soal
    private $bantalSelimutPack;
    private $layananButler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $bantalSelimutPack, $layananButler) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    public function hitungTotalHarga() {
        // Contoh logika: Ada tambahan biaya IDr 75.000 untuk kelas VIP Velvet
        $biayaTambahanVelvet = 75000;
        return ($this->harga_dasar_tiket * $this->jumlah_kursi) + $biayaTambahanVelvet;
    }

    public function tampilkanInfoFasilitas() {
        return "Fasilitas Velvet: Paket Bantal & Selimut (" . $this->bantalSelimutPack . "), Layanan Butler: " . $this->layananButler . ".";
    }
}