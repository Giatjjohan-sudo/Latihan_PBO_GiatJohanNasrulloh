-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2026 at 01:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_pbo_ti1c_giatjohannasrulloh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` int NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int NOT NULL,
  `harga_dasar_tiket` decimal(10,2) NOT NULL,
  `jenis_studio` enum('regular','IMAX','Velvet') NOT NULL,
  `tipe_audio` varchar(50) DEFAULT NULL,
  `lokasi_baris` varchar(50) DEFAULT NULL,
  `kacamata_3d_id` varchar(50) DEFAULT NULL,
  `efek_gerak_fitur` varchar(100) DEFAULT NULL,
  `bantal_selimut_pack` varchar(50) DEFAULT NULL,
  `layanan_butler` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `bantal_selimut_pack`, `layanan_butler`) VALUES
(64, 'Avenger: Secret Wars', '2026-07-01 13:00:00', 120, '50000.00', 'regular', 'Dolby Digital 5.1', 'Baris A-M', NULL, NULL, NULL, NULL),
(65, 'Batman: Resurrection', '2026-07-01 15:30:00', 120, '50000.00', 'regular', 'Dolby Digital 5.1', 'Baris A-M', NULL, NULL, NULL, NULL),
(66, 'Spiderman: Homebound', '2026-07-01 18:00:00', 100, '55000.00', 'regular', 'Standard Stereo', 'Baris B-K', NULL, NULL, NULL, NULL),
(67, 'Detective Conan Movie', '2026-07-02 11:00:00', 150, '45000.00', 'regular', 'Dolby Digital 5.1', 'Baris A-O', NULL, NULL, NULL, NULL),
(68, 'Jujutsu Kaisen: Origin', '2026-07-02 14:00:00', 150, '45000.00', 'regular', 'Dolby Digital 5.1', 'Baris A-O', NULL, NULL, NULL, NULL),
(69, 'The Conjuring 4', '2026-07-02 21:00:00', 100, '55000.00', 'regular', 'Dolby Atmos', 'Baris C-L', NULL, NULL, NULL, NULL),
(70, 'Interstellar 2', '2026-07-03 19:00:00', 120, '55000.00', 'regular', 'Dolby Atmos', 'Baris A-M', NULL, NULL, NULL, NULL),
(71, 'Dune: Part Three', '2026-07-01 12:00:00', 300, '95000.00', 'IMAX', 'IMAX 12-Channel', 'Baris Premium A-Z', 'SG-3D-001', 'Dual Laser Projection', NULL, NULL),
(72, 'Avatar: The Tulkun Rider', '2026-07-01 16:00:00', 300, '110000.00', 'IMAX', 'IMAX 12-Channel', 'Baris Premium A-Z', 'SG-3D-002', '4K Laser High Frame Rate', NULL, NULL),
(73, 'Interstellar 2', '2026-07-01 20:00:00', 250, '95000.00', 'IMAX', 'IMAX 6-Channel', 'Baris Center D-V', 'SG-3D-003', '70mm Film Simulation', NULL, NULL),
(74, 'Star Wars: New Jedi Order', '2026-07-02 13:00:00', 300, '95000.00', 'IMAX', 'IMAX 12-Channel', 'Baris Premium A-Z', 'SG-3D-004', 'Dual Laser Projection', NULL, NULL),
(75, 'Inception: Dreamscape', '2026-07-02 17:00:00', 250, '95000.00', 'IMAX', 'IMAX 6-Channel', 'Baris Center D-V', 'SG-3D-005', 'Standard Laser', NULL, NULL),
(76, 'Top Gun: Ace', '2026-07-03 14:00:00', 300, '110000.00', 'IMAX', 'IMAX 12-Channel', 'Baris Premium A-Z', 'SG-3D-006', 'High Frame Rate 3D', NULL, NULL),
(77, 'Avenger: Secret Wars', '2026-07-03 18:00:00', 300, '110000.00', 'IMAX', 'IMAX 12-Channel', 'Baris Premium A-Z', 'SG-3D-007', 'Dual Laser Projection', NULL, NULL),
(78, 'The Great Gatsby: Luxury', '2026-07-01 14:00:00', 40, '250000.00', 'Velvet', 'Dolby Atmos VIP', 'Sofa Bed A1-A5', NULL, NULL, 'Premium Silk Pack', 'Personal Butler - Adi'),
(79, 'Titanic: Anniversary', '2026-07-01 18:30:00', 40, '250000.00', 'Velvet', 'Dolby Atmos VIP', 'Sofa Bed B1-B5', NULL, NULL, 'Premium Silk Pack', 'Personal Butler - Siti'),
(80, 'La La Land: Symphony', '2026-07-01 21:30:00', 30, '275000.00', 'Velvet', 'Dolby Atmos VIP', 'Sofa Bed C1-C4', NULL, NULL, 'Executive Wool Pack', 'Personal Butler - Budi'),
(81, 'The Godfather: Legacy', '2026-07-02 15:00:00', 40, '250000.00', 'Velvet', 'Dolby Atmos VIP', 'Sofa Bed A1-A5', NULL, NULL, 'Premium Silk Pack', 'Personal Butler - Adi'),
(82, 'Breakfast at Tiffany', '2026-07-02 19:00:00', 30, '275000.00', 'Velvet', 'Dolby Atmos VIP', 'Sofa Bed C1-C4', NULL, NULL, 'Executive Wool Pack', 'Personal Butler - Rian'),
(83, 'Gladiator II', '2026-07-03 16:00:00', 40, '250000.00', 'Velvet', 'Dolby Atmos VIP', 'Sofa Bed B1-B5', NULL, NULL, 'Premium Silk Pack', 'Personal Butler - Siti'),
(84, 'Avatar: The Tulkun Rider', '2026-07-03 20:00:00', 30, '300000.00', 'Velvet', 'Dolby Atmos VIP', 'Sofa Bed C1-C4', NULL, NULL, 'Executive Wool Pack', 'Personal Butler - Rian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
