<?php
require_once 'Tiket.php';

class TiketRegular extends Tiket {
    // Properti tambahan sesuai soal
    private $tipeAudio;
    private $lokasiBaris;

    // Constructor untuk menangkap data induk + properti tambahan
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $tipeAudio, $lokasiBaris) {
        // Memanggil constructor dari class Tiket (induk)
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }

    // Mengimplementasikan metode abstrak hitungTotalHarga
    public function hitungTotalHarga() {
        // Contoh logika: harga dasar dikali jumlah kursi (sesuaikan jika ada ketentuan harga lain)
        return $this->harga_dasar_tiket * $this->jumlah_kursi;
    }

    // Mengimplementasikan metode abstrak tampilkanInfoFasilitas
    public function tampilkanInfoFasilitas() {
        return "Fasilitas Regular: Audio " . $this->tipeAudio . ", Kursi di baris " . $this->lokasiBaris . ".";
    }
}