<?php
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
    // Properti tambahan sesuai soal
    private $kacamata3dId;
    private $efekGerakFitur;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $kacamata3dId, $efekGerakFitur) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    public function hitungTotalHarga() {
        // Contoh logika: Ada tambahan biaya IDr 25.000 untuk pengalaman IMAX
        $biayaTambahanIMAX = 25000;
        return ($this->harga_dasar_tiket * $this->jumlah_kursi) + $biayaTambahanIMAX;
    }

    public function tampilkanInfoFasilitas() {
        return "Fasilitas IMAX: Menggunakan Kacamata 3D ID: " . $this->kacamata3dId . ", Fitur Efek Gerak: " . $this->efekGerakFitur . ".";
    }
}