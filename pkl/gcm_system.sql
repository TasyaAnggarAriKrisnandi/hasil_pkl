-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2022 pada 04.07
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcm system`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `approval`
--

CREATE TABLE `approval` (
  `Id_Approval` int(11) NOT NULL,
  `Issue_Date` date NOT NULL,
  `Requestor` varchar(50) NOT NULL,
  `Request_Type` varchar(50) NOT NULL,
  `Product_Category` varchar(50) NOT NULL,
  `Device_Type` varchar(50) NOT NULL,
  `Sharp_Model_Name` varchar(50) NOT NULL,
  `Similar_Model` varchar(50) NOT NULL,
  `SAP_Model_Name` varchar(50) NOT NULL,
  `D_Code_SAP` varchar(50) NOT NULL,
  `A3_Model_Name` varchar(50) NOT NULL,
  `Ext_No` float NOT NULL,
  `LASER` varchar(50) NOT NULL,
  `No_of_Rank` float NOT NULL,
  `Ship_Qty` varchar(50) NOT NULL,
  `Lot_Making_Qty` varchar(50) NOT NULL,
  `LOT_Qty` varchar(50) NOT NULL,
  `Min_Qty` varchar(50) NOT NULL,
  `Yield` varchar(50) NOT NULL,
  `ST` varchar(50) NOT NULL,
  `Notes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `approval`
--

INSERT INTO `approval` (`Id_Approval`, `Issue_Date`, `Requestor`, `Request_Type`, `Product_Category`, `Device_Type`, `Sharp_Model_Name`, `Similar_Model`, `SAP_Model_Name`, `D_Code_SAP`, `A3_Model_Name`, `Ext_No`, `LASER`, `No_of_Rank`, `Ship_Qty`, `Lot_Making_Qty`, `LOT_Qty`, `Min_Qty`, `Yield`, `ST`, `Notes`) VALUES
(1, '2022-08-17', 'oke', 'New Model', 'LASER', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 1, 'Single laser 5.6', 1, '1', '1', '2000', '1', '1', '1', 'tes'),
(2, '2022-08-17', 'oke', 'New Model', 'LASER', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 1, 'Single laser 5.6', 1, '1', '1', '2000', '1', '1', '1', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `Username`, `Password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mis check list`
--

CREATE TABLE `mis check list` (
  `id_MIS_Check_List` int(11) NOT NULL,
  `GCM_Reg_Date` date NOT NULL,
  `Flow` varchar(50) NOT NULL,
  `Process_ID` varchar(50) NOT NULL,
  `Label_Pattern` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mis check list`
--

INSERT INTO `mis check list` (`id_MIS_Check_List`, `GCM_Reg_Date`, `Flow`, `Process_ID`, `Label_Pattern`) VALUES
(1, '2022-03-25', 'Violet Loser', 'BC 26', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `Username`, `name`, `email`, `password`, `section`, `state`, `level`) VALUES
(48, 'Yarnes Amir', 'Yanes Amir', 'yarnes@ssi.sharp-world.com', '000068', 'Production Section ', 'Approver', '7'),
(62, 'gzbs118202', 'Yukiro Kita', 'kita@ssi.sharp-world.com', 'gzbs118202', 'QA Section', 'Approver', '3'),
(66, '000434', 'Zinatur Rahmah', 'zinatur@ssi.sharp-world.com', '000434', 'Engineering Section', 'Origiator', '4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`Id_Approval`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `approval`
--
ALTER TABLE `approval`
  MODIFY `Id_Approval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
