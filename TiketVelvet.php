<?php
// Pastikan file induk (abstract class) sudah di-import
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    // Properti tambahan khusus untuk kelas Velvet (Tahap 4)
    private $bantalSelimutPack;
    private $layananButler;

    // Constructor untuk menginisialisasi properti induk dan properti sendiri
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $bantalSelimutPack, $layananButler) {
        // Memanggil constructor dari abstract class Tiket
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        
        // Mengisi nilai untuk properti tambahan
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    /**
     * Logika Bisnis: Total Harga = (jumlah_kursi * hargaDasarTiket) * 1.50
     * (Dikenakan surcharge/biaya tambahan kelas premium sebesar 50% dari total harga dasar)
     */
    public function hitungTotalHarga() {
        return ($this->jumlah_kursi * $this->harga_dasar_tiket) * 1.50;
    }

    /*
     * Menampilkan informasi fasilitas unik Tiket Velvet
     */
    public function tampilkanInfoFasilitas() {
        return "Fasilitas Velvet: Paket Bantal & Selimut (" . $this->bantalSelimutPack . "), Layanan Butler: " . $this->layananButler . ".";
    }
}