<?php
// Pastikan file induk (abstract class) sudah di-import
require_once 'Tiket.php';

class TiketRegular extends Tiket {
    // Properti tambahan khusus untuk kelas Regular (Tahap 4)
    private $tipeAudio;
    private $lokasiBaris;

    // Constructor untuk menginisialisasi properti induk dan properti sendiri
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $tipeAudio, $lokasiBaris) {
        // Memanggil constructor dari abstract class Tiket
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        
        // Mengisi nilai untuk properti tambahan
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }

    /**
     * Logika Bisnis: Total Harga = jumlah_kursi * hargaDasarTiket 
     * (Tarif standar murni tanpa biaya tambahan)
     */
    public function hitungTotalHarga() {
        return $this->jumlah_kursi * $this->harga_dasar_tiket;
    }

    /**
     * Implementasi Method dari Abstract Class (Tahap 4)
     * Menampilkan informasi fasilitas unik Tiket Regular
     */
    public function tampilkanInfoFasilitas() {
        return "Fasilitas Regular: Audio " . $this->tipeAudio . ", Kursi di lokasi baris " . $this->lokasiBaris . ".";
    }
}