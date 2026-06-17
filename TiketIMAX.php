<?php
// Pastikan file induk (abstract class) sudah di-import
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
        private $kacamata3dId;
    private $efekGerakFitur;

    // Constructor untuk menginisialisasi properti induk dan properti sendiri
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $kacamata3dId, $efekGerakFitur) {
        // Memanggil constructor dari abstract class Tiket
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        
        // Mengisi nilai untuk properti tambahan
        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    /**
     * Logika Bisnis: Total Harga = (jumlah_kursi * hargaDasarTiket) + 35000
     * (Dikenakan biaya tambahan teknologi layar lebar IMAX dan audio flat Rp35.000)
     */
    public function hitungTotalHarga() {
        return ($this->jumlah_kursi * $this->harga_dasar_tiket) + 35000;
    }

    /**
     * Implementasi Method dari Abstract Class (Tahap 4)
     * Menampilkan informasi fasilitas unik Tiket IMAX
     */
    public function tampilkanInfoFasilitas() {
        return "Fasilitas IMAX: Kacamata 3D ID (" . $this->kacamata3dId . "), Fitur Efek Gerak: " . $this->efekGerakFitur . ".";
    }
}