-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 10:47 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrutan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangpenghuni`
--

CREATE TABLE `barangpenghuni` (
  `idsimpan` int(11) NOT NULL,
  `tglmaskbarang` date NOT NULL,
  `nmbarang` varchar(40) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tglsrtditerima` date NOT NULL,
  `idpenghuni` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangpenghuni`
--

INSERT INTO `barangpenghuni` (`idsimpan`, `tglmaskbarang`, `nmbarang`, `jumlah`, `tglsrtditerima`, `idpenghuni`) VALUES
(1, '2018-03-09', 'Ponsel', 2, '2018-03-07', 8),
(2, '2018-03-07', 'Dompet', 1, '2018-03-14', 9);

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `idkunjungan` int(11) NOT NULL,
  `nmpengunjung` varchar(40) NOT NULL,
  `barangbawaan` varchar(40) NOT NULL,
  `tglkunjungan` date NOT NULL,
  `idpenghuni` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`idkunjungan`, `nmpengunjung`, `barangbawaan`, `tglkunjungan`, `idpenghuni`) VALUES
(1, 'Asno veri', 'Rokok dan Nasi', '2018-05-02', 8),
(2, 'Romi Sahputra', 'Nasi ', '2018-05-13', 46),
(3, 'Maman Abdurrahman', 'Rokok', '2018-05-13', 49);

-- --------------------------------------------------------

--
-- Table structure for table `narapidana`
--

CREATE TABLE `narapidana` (
  `idnapi` int(11) NOT NULL,
  `jenisnapi` varchar(40) NOT NULL,
  `tglmasuk` date NOT NULL,
  `nosrtputusan` varchar(15) NOT NULL,
  `pasal` varchar(40) NOT NULL,
  `asalpenyidik` varchar(40) NOT NULL,
  `jenishukuman` varchar(40) NOT NULL,
  `lamahukuman` int(11) NOT NULL,
  `tglsrtputusan` date NOT NULL,
  `tglhbshukuman` date NOT NULL,
  `tglpembebasan` date NOT NULL,
  `idpenghuni` int(11) DEFAULT NULL,
  `jenislama` char(20) DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narapidana`
--

INSERT INTO `narapidana` (`idnapi`, `jenisnapi`, `tglmasuk`, `nosrtputusan`, `pasal`, `asalpenyidik`, `jenishukuman`, `lamahukuman`, `tglsrtputusan`, `tglhbshukuman`, `tglpembebasan`, `idpenghuni`, `jenislama`, `status`) VALUES
(5, ' B3', '2018-05-09', 'Srt/0909/B0A09/', '13A.Khup/199', 'Kepolres', 'Kurungan', 3, '0000-00-00', '2018-05-12', '2018-05-12', 16, 'hari', 'Bebas'),
(7, 'B1', '2018-05-01', 'Srt/0909/B0A09/', '13A.Khup13/0A', 'Pengadilan Negri Batusangkar', 'Kurungan', 5, '2018-04-30', '0000-00-00', '2023-05-01', 46, 'tahun', ''),
(8, 'B1', '2018-05-02', 'Srt/0909/B0A09/', '13A.Khup/199/090/AS', 'Pengadilan Negri Batusangkar', 'Kurungan', 3, '2018-05-01', '0000-00-00', '2021-05-02', 47, 'tahun', ''),
(9, 'B1', '2018-05-03', 'Srt/0909/B0A09/', '13A.Khup/199', 'Kejaksaan', 'Kurungan', 4, '2018-05-01', '0000-00-00', '2022-05-03', 48, 'tahun', ''),
(10, 'B2a', '2018-05-03', 'Srt/0909/B0A09/', '13A.Khup/199', 'Kepolres', 'Kurungan', 5, '2018-05-02', '0000-00-00', '2023-05-03', 49, 'tahun', ''),
(11, 'B2a', '2018-05-04', 'Srt/0909/B0A09/', '13A.Khup13/0A', 'Kejaksaan', 'Kurungan', 3, '2018-05-02', '0000-00-00', '2021-05-04', 50, 'tahun', ''),
(12, 'B2b', '2018-05-03', 'Srt/0909/B0A09/', '13A.Khup/199', 'Pengadilan Negri Batusangkar', 'Kurungan', 5, '2018-05-01', '0000-00-00', '2023-05-03', 51, 'tahun', ''),
(13, 'B2b', '2018-05-02', 'Srt/0909/B0A09/', '13A.Khup13/0A', 'Pengadilan Negri Batusangkar', 'Kurungan', 3, '2018-05-01', '0000-00-00', '2021-05-02', 52, 'tahun', ''),
(14, 'B3', '2018-05-01', 'Srt/0909/B0A09/', '13A.Khup13/0A', 'Kepolres', 'Kurungan', 5, '2018-04-30', '0000-00-00', '2023-05-01', 53, 'tahun', ''),
(15, 'B3', '2018-05-01', 'Srt/0909/B0A09/', '13A.Khup13/0A', 'Pengadilan Negri Batusangkar', 'Kurungan', 5, '2018-05-07', '0000-00-00', '2023-05-01', 54, 'tahun', ''),
(16, 'B1', '2018-05-02', 'Srt/0909/B0A09/', '13A.Khup13/0A', 'Kepolres', 'Kurungan', 4, '2018-05-01', '0000-00-00', '2022-05-02', 57, 'tahun', ''),
(17, 'B1', '2018-05-02', 'Srt/0909/B0A09/', '13A.Khup/199', 'Kejaksaan', 'Kurungan', 5, '2018-05-01', '0000-00-00', '2023-05-02', 58, 'tahun', ''),
(18, 'B1', '2018-05-02', 'Srt/0909/B0A09/', '13A.Khup/199/090/AS', 'Kejaksaan', 'Kurungan', 3, '2018-05-01', '0000-00-00', '2021-05-02', 59, 'tahun', ''),
(19, 'B2a', '2018-05-02', 'Srt/0909/B0A09/', '13A.Khup/199', 'Kejaksaan', 'Kurungan', 12, '2018-05-01', '0000-00-00', '2030-05-02', 60, 'tahun', ''),
(20, 'B2a', '2018-05-02', 'Srt/0909/B0A09/', '13A.Khup13/0A', 'Kepolres', 'Kurungan', 3, '2018-05-01', '0000-00-00', '2021-05-02', 61, 'tahun', ''),
(21, 'B1', '2018-05-02', 'Srt/0909/B0A09/', '13A.Khup/199/090/AS', 'Kejaksaan', 'Kurungan', 5, '2018-05-01', '0000-00-00', '2023-05-02', 62, 'tahun', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `idpelangr` int(11) NOT NULL,
  `tglpengaduan` date NOT NULL,
  `nmpengadu` varchar(40) NOT NULL,
  `ketpengadu` varchar(40) NOT NULL,
  `nmsaksi` varchar(40) NOT NULL,
  `ketterdakwa` varchar(40) NOT NULL,
  `pelanggaran` varchar(40) NOT NULL,
  `jnshukuman` varchar(40) NOT NULL,
  `lmhukuman` int(11) NOT NULL,
  `tglmulai` date NOT NULL,
  `tglakhir` date NOT NULL,
  `idpenghuni` int(11) DEFAULT NULL,
  `jenislama` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`idpelangr`, `tglpengaduan`, `nmpengadu`, `ketpengadu`, `nmsaksi`, `ketterdakwa`, `pelanggaran`, `jnshukuman`, `lmhukuman`, `tglmulai`, `tglakhir`, `idpenghuni`, `jenislama`) VALUES
(2, '2018-05-11', 'Aqil Takhril  ', 'Saudara Imam Berkelahi', 'Ilham', 'Terdakwa Menagkuik Pelangaranya', 'Berkelahi', 'Larangan Besuk', 3, '2018-05-12', '2018-05-15', 12, 'hari');

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `idpenghuni` int(11) NOT NULL,
  `nmpenghuni` varchar(40) NOT NULL,
  `tgllahir` date NOT NULL,
  `tptlahir` varchar(40) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `pendidikan` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `agama` varchar(40) NOT NULL,
  `ket` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penghuni`
--

INSERT INTO `penghuni` (`idpenghuni`, `nmpenghuni`, `tgllahir`, `tptlahir`, `jk`, `pekerjaan`, `pendidikan`, `alamat`, `agama`, `ket`) VALUES
(2, 'Tiara Okta', '1996-02-06', 'Padang Panjang', 'Perempuan', 'Mahasiswa', 'Sma', 'Padang', 'Islam', ''),
(3, 'Arief Wanyofi', '1992-02-06', 'Batusangkar', 'Laki-laki', 'Pns', 'S1', 'Tj.Alama/Batusangkar ', 'Hindu', ''),
(4, 'Rizki Firdaus', '1995-01-02', 'Padang Pariaman', 'Laki-laki', 'Wirausaha', 'S1', 'Padang', 'Islam', ''),
(5, 'Rada Kofalen', '1981-02-03', 'Batusangkar', 'Perempuan', 'Wirausaha', 'Sma', 'Salimapung/Batusangkar', 'Islam', ''),
(6, 'Adriani Kalwaski', '1992-02-06', 'Padang Pariaman', 'Perempuan', 'Pns', 'S1', 'Batusangkar', 'Hindu', ''),
(7, 'Asri Imam', '1996-01-31', 'Batusangkar', 'Laki-laki', 'Mahasiswa', 'Sma', 'Tj.Alama/Batusangkar ', 'Hindu', ''),
(8, 'irdwati', '2006-01-03', 'Batusangkar', 'Perempuan', 'Wirausaha', 'Sma', 'Batusangkar', 'Budha', ''),
(9, 'Aditya fernananda', '1997-02-03', 'Padang Pariaman', 'Laki - laki', 'Mahasiswa', 'Sma', 'Batusangkar', 'Hindu', ''),
(10, 'Arief wan yofi', '1974-01-16', 'Padang Panjang', 'Laki - laki', 'Tani', 'Sma', 'Salimapung/Batusangkar', 'Islam', ''),
(11, 'widia', '1996-01-09', 'Padang Pariaman', 'Laki-laki', 'Wirausaha', 'S1', 'Salimapung/Batusangkar', 'Hindu', ''),
(12, 'Toe Musafri', '1983-01-03', 'Pesisir Selatan', 'Laki - laki', 'Petani', 'Sma', 'Padang Panjang', 'Hindu', ''),
(13, 'Erlanga', '1995-01-22', 'Batusangkar', 'Laki - laki', 'Wirausaha', 'Sma', 'Batusangkar', '', ''),
(14, 'Erlanga', '1991-01-29', 'Batusangkar', 'Laki - laki', 'Wirausaha', 'Sma', 'Batusangkar', 'Budha', ''),
(15, 'Ilham Novesatrio', '1994-01-03', 'Batusangkar', 'Laki-laki', 'Wirausaha', 'Sma', 'Padang Panjang', 'Kisten', ''),
(16, ' Ade Irawan', '0000-00-00', ' Pesisir Selatan', 'Laki - laki', ' Wirausaha', ' S1', ' Padang,Kec.Lubeg', 'Islam', ' '),
(17, 'Ameliza Deviona', '1996-02-07', 'Padang', 'Perempuan', 'Mahasiswa', 'Sma', 'Padang', 'Islam', ''),
(18, ' Anisa Putri', '0000-00-00', ' Palembang', 'Perempuan', ' Mahasiswa', ' Sma', ' Padang', 'Islam', ' '),
(19, 'Astuti Marianti', '1977-02-22', 'Bukitinggi', 'Perempuan', 'Wirausaha', 'Sma', 'Batusangkar', 'Budha', ''),
(20, ' Azlan Afisi', '0000-00-00', ' Payakumbuh', 'Laki-laki', ' Wirausaha', ' S1', ' Padang', 'Islam', ' '),
(21, 'Doni Damara', '1990-01-09', 'Padang Sidimpuan', 'Laki-laki', 'Mahasiswa', 'SMP', 'Padang', 'Kisten', ''),
(22, 'Ananda Rizki ', '1980-01-08', 'Sijunjuang', 'Laki-laki', 'PNS', 'S1', 'Sawahlunto', 'Islam', ''),
(23, 'Nikma Ayuni', '1996-01-02', 'Batusangkar', 'Perempuan', 'Mahasiswa', 'Sma', 'Padang', 'Islam', ''),
(24, 'Mesi Novela', '1990-02-06', 'Bukitinggi', 'Laki-laki', 'Wirausaha', 'Sma', 'Padang', 'Kisten', ''),
(25, 'Roni Irsal', '2001-02-20', 'Batusangkar', 'Laki-laki', 'Petani', 'Sma', 'Padang', 'Islam', ''),
(26, 'Nurfaizi', '1994-02-01', 'Payakumbuh', 'Laki-laki', 'Wirausaha', 'Wiraswsta', 'Padang', 'Kisten', ''),
(27, 'Adiyasandi', '1986-01-06', 'Pesisir Selatan', 'Laki-laki', 'Mahasiswa', 'Sma', 'Padang Panjang', 'Budha', ''),
(28, 'Doni Ariadi', '1990-02-06', 'Payakumbuh', 'Laki-laki', 'Wirausaha', 'Sma', 'Batusangkar', 'Hindu', ''),
(29, 'Vivi Adiya', '1992-01-28', 'Pesisir Selatan', 'Perempuan', 'Wirausaha', 'Sma', 'Payakumbuh', 'Islam', ''),
(30, 'Adek Ramadhan', '1993-02-26', 'Batusangkar', 'Laki-laki', 'PNS', 'S1', 'Padang Panjang', 'Budha', ''),
(31, 'Asnoveri', '1988-01-13', 'Batusangkar', 'Laki-laki', 'PNS', 'S1', 'Padang', 'Islam', ''),
(32, 'Vela Alia', '1980-01-29', 'Pesisir Selatan', 'Perempuan', 'Wirausaha', 'S1', 'Padang,Kec.Lubeg', 'Budha', ''),
(33, 'Ani Sofrida', '1988-06-07', 'Padang', 'Perempuan', 'PNS', 'S1', 'Padang Panjang', 'Budha', ''),
(34, 'Isma Ayuni', '1988-01-14', 'Payakumbuh', 'Perempuan', 'Karywati', 'S1', 'Bukitinggi', 'Kisten', ''),
(35, 'Edo Purnama', '1976-05-10', 'Batusangkar', 'Laki-laki', 'PNS', 'S1', 'Padang Panjang', 'Kisten', ''),
(36, 'Rahma Delvia', '1989-02-07', 'Payakumbuh', 'Perempuan', 'Wirausaha', 'S1', 'Payakumbuh', 'Kisten', ''),
(37, 'Eko Saputra', '1980-02-05', 'Batusangkar', 'Laki-laki', 'PNS', 'S1', 'Padang Panjang', 'Islam', ''),
(38, 'Rehan Alfares', '1995-01-17', 'Bukitinggi', 'Laki-laki', 'Mahasiswa', 'Sma', 'Padang Panjang', 'Islam', ''),
(39, ' s', '0000-00-00', '  Batusangkar', 'Laki-laki', '  Wirausaha', '  S1', '  Padang', 'Islam', '  '),
(40, 'Anisa Putri', '1987-06-17', 'Bukitinggi', 'Perempuan', 'PNS', 'S1', 'Padang Panjang', 'Kisten', ''),
(41, 'Ade Irawan', '1993-02-16', 'Palembang', 'Laki-laki', 'Wirausaha', 'D3', 'Padang Panjang', 'Hindu', ''),
(42, 'Ameliza Deviona', '1988-06-07', 'Pesisir Selatan', 'Perempuan', 'PNS', 'S1', 'Batusangkar', 'Islam', ''),
(43, 'Toe Musafri', '1991-02-19', 'Payakumbuh', 'Laki-laki', 'Petani', 'SMP', 'Payakumbuh', 'Kisten', ''),
(44, 'Ayu Makfiroh', '1992-07-16', 'Bukitinggi', 'Perempuan', 'Wirausaha', 'Sma', 'Padang Panjang', 'Islam', ''),
(45, 'Nikma Ayuni', '1984-05-14', 'Padang', 'Perempuan', 'Karywati', 'Sma', 'Padang', 'Islam', ''),
(46, 'Adek Ramadhan', '1990-01-15', 'Batusangkar', 'Laki - laki', 'Wirausaha', 'S1', 'Batusangkar', 'Islam', ''),
(47, 'Ananda Rizki ', '1998-06-17', 'Pesisir Selatan', 'Laki - laki', 'Mahasiswa', 'Sma', 'Batusangkar', 'Budha', ''),
(48, 'Nurfaizi', '1980-06-18', 'Payakumbuh', 'Laki - laki', 'PNS', 'S1', 'Padang', 'Hindu', ''),
(49, 'Edo Purnama', '1980-02-05', 'Palembang', 'Laki - laki', 'PNS', 'S1', 'Batusangkar', '', ''),
(50, 'Ameliza Deviona', '1993-02-17', 'Padang', '', 'Karywati', 'Sma', 'Padang Panjang', 'Kisten', ''),
(51, 'Ilham Novesatrio', '1995-06-06', 'Batusangkar', 'Laki - laki', 'Mahasiswa', 'Sma', 'Batusangkar', '', ''),
(52, 'Suryani', '1996-02-13', 'Pesisir Selatan', 'Perempuan', 'Wirausaha', 'Sma', 'Padang', 'Islam', ''),
(53, 'Adiyasandi', '1979-02-21', 'Payakumbuh', 'Laki - laki', 'Petani', 'SMP', 'Batusangkar', 'Islam', ''),
(54, 'Laila turahmi', '1987-06-16', 'Bukitinggi', 'Perempuan', 'PNS', 'S1', 'Batusangkar', 'Kisten', ''),
(55, 'Ayu Sita', '1988-02-09', 'Batusangkar', 'Perempuan', 'PNS', 'S1', 'Padang', 'Kisten', ''),
(56, 'Mesi Novela', '1997-01-13', 'Pesisir Selatan', 'Perempuan', 'Mahasiswa', 'Sma', 'Padang', '', ''),
(57, 'Fani Azizah', '1985-06-11', 'Pesisir Selatan', 'Perempuan', 'Wirausaha', 'Sma', 'Padang', 'Islam', ''),
(58, 'Amelia Oktayani', '1986-06-17', 'Batusangkar', 'Perempuan', 'PNS', 'S1', 'Padang Panjang', 'Kisten', ''),
(59, 'Maria Yufelinda', '1998-06-10', 'Payakumbuh', 'Perempuan', 'Mahasiswa', 'Sma', 'Payakumbuh', 'Islam', ''),
(60, 'Dian Oktawani', '1990-06-14', 'Bukitinggi', 'Perempuan', 'Wirausaha', 'S1', 'Padang Panjang', 'Kisten', ''),
(61, 'Fazilah Ayni', '1990-06-22', 'Padang', 'Perempuan', 'Karywati', 'Sma', 'Padang', 'Islam', ''),
(62, 'Salmi Jamal', '1985-06-11', 'Batusangkar', 'Laki - laki', 'Petani', 'Sma', 'Batusangkar', 'Islam', '');

-- --------------------------------------------------------

--
-- Table structure for table `remisi`
--

CREATE TABLE `remisi` (
  `idremisi` int(11) NOT NULL,
  `tglremisi` date NOT NULL,
  `isiremisi` varchar(40) NOT NULL,
  `jnsremisi` varchar(40) NOT NULL,
  `jmlremisi` int(11) NOT NULL,
  `idnapi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remisi`
--

INSERT INTO `remisi` (`idremisi`, `tglremisi`, `isiremisi`, `jnsremisi`, `jmlremisi`, `idnapi`) VALUES
(5, '2018-05-22', 'remisi hari raya', 'Kusus', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tahanan`
--

CREATE TABLE `tahanan` (
  `idtahanan` int(11) NOT NULL,
  `jnstahanan` varchar(40) NOT NULL,
  `instansi` varchar(40) NOT NULL,
  `tglsrtpenahanan` date NOT NULL,
  `nosrtpenahanan` varchar(15) NOT NULL,
  `pasal` varchar(40) NOT NULL,
  `tglmasuk` date NOT NULL,
  `nosrtprpnjpenahann` varchar(15) NOT NULL,
  `tglsrprpnjpenahanan` date NOT NULL,
  `tglprtpnjangan` date NOT NULL,
  `tglpengalihan` date NOT NULL,
  `tglpembebasan` date NOT NULL,
  `tglpemindahan` date NOT NULL,
  `nopelimpahan` varchar(15) NOT NULL,
  `tglsrtpelimpahan` date NOT NULL,
  `tglsrtputusan` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `idpenghuni` int(11) DEFAULT NULL,
  `nosrtpengalihan` varchar(15) DEFAULT NULL,
  `nosrtpemindahan` varchar(15) DEFAULT NULL,
  `nosrtputusan` varchar(15) DEFAULT NULL,
  `dialihkanke` varchar(15) DEFAULT NULL,
  `tglkeluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahanan`
--

INSERT INTO `tahanan` (`idtahanan`, `jnstahanan`, `instansi`, `tglsrtpenahanan`, `nosrtpenahanan`, `pasal`, `tglmasuk`, `nosrtprpnjpenahann`, `tglsrprpnjpenahanan`, `tglprtpnjangan`, `tglpengalihan`, `tglpembebasan`, `tglpemindahan`, `nopelimpahan`, `tglsrtpelimpahan`, `tglsrtputusan`, `status`, `idpenghuni`, `nosrtpengalihan`, `nosrtpemindahan`, `nosrtputusan`, `dialihkanke`, `tglkeluar`) VALUES
(2, ' A.III', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-03-01', 'per/09.09jbk/aa', '2018-05-10', '2018-09-01', '2018-05-12', '2018-07-01', '2018-05-10', '09/plmp/ooia', '2018-05-11', '2018-05-12', 'Bebas', 2, 'fsasfsdf', 'cdas', 'Srt/0909/B0A09/', 'Tahanan Kota', '2018-05-24'),
(3, ' A.III', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-02-11', 'per/panj/0909/a', '2018-04-13', '2018-05-11', '0000-00-00', '2018-04-11', '0000-00-00', '', '0000-00-00', '0000-00-00', 'Bebas', 3, NULL, NULL, 'Srt/0909/B0A09/', NULL, '2018-05-12'),
(4, ' A.III', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-02-08', '', '0000-00-00', '0000-00-00', '0000-00-00', '2018-04-08', '0000-00-00', '', '0000-00-00', '0000-00-00', 'Bebas', 4, NULL, NULL, 'Bbs/1/pen/2018.', NULL, '2018-04-09'),
(5, ' A.III', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-03-10', '', '0000-00-00', '0000-00-00', '0000-00-00', '2018-04-10', '0000-00-00', '', '0000-00-00', '0000-00-00', 'Bebas', 5, NULL, NULL, 'Bbs/1/pen/2018.', NULL, '2018-04-14'),
(31, 'A.I', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-05-07', '', '0000-00-00', '0000-00-00', '0000-00-00', '2018-06-07', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 39, NULL, NULL, NULL, NULL, '0000-00-00'),
(32, ' A.III', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-05-09', '', '0000-00-00', '0000-00-00', '0000-00-00', '2018-07-09', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 40, NULL, NULL, NULL, NULL, '0000-00-00'),
(33, ' A.III', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-05-12', '', '0000-00-00', '0000-00-00', '0000-00-00', '2018-10-12', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 41, NULL, NULL, NULL, NULL, '0000-00-00'),
(34, ' A.III', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-05-08', '', '0000-00-00', '0000-00-00', '0000-00-00', '2018-09-08', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 42, NULL, NULL, NULL, NULL, '0000-00-00'),
(35, ' A.III', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-05-09', '', '0000-00-00', '0000-00-00', '0000-00-00', '2018-06-09', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 43, NULL, NULL, NULL, NULL, '0000-00-00'),
(36, ' A.III', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-05-08', '', '0000-00-00', '0000-00-00', '0000-00-00', '2018-09-08', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 44, NULL, NULL, NULL, NULL, '0000-00-00'),
(37, ' A.III', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-05-16', '', '0000-00-00', '0000-00-00', '0000-00-00', '2018-06-16', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 45, NULL, NULL, NULL, NULL, '0000-00-00'),
(38, ' A.III', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-05-01', '', '0000-00-00', '0000-00-00', '0000-00-00', '2018-05-05', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 55, NULL, NULL, NULL, NULL, '0000-00-00'),
(39, ' A.III', 'Kepolisian', '2018-05-02', '09/09/AFGH/WE90', '13A.Khup13/0A', '2018-05-02', '', '0000-00-00', '0000-00-00', '0000-00-00', '2018-05-04', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 56, NULL, NULL, NULL, NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `level` varchar(20) NOT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `image` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `pass`, `level`, `jk`, `nama`, `kontak`, `email`, `image`) VALUES
('Admin', 'admin', 'admin', 'laki-laki', 'Rijalul Fikri', '22121', 'riaj13@gmail.com', 'img_avatar3.png'),
('Pegawai', 'pegawai', 'pegawai', 'laki-laki', 'Ali Sofyan', '2e1', 'sofyn09@gmail.com', 'img_avatar5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangpenghuni`
--
ALTER TABLE `barangpenghuni`
  ADD PRIMARY KEY (`idsimpan`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`idkunjungan`);

--
-- Indexes for table `narapidana`
--
ALTER TABLE `narapidana`
  ADD PRIMARY KEY (`idnapi`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`idpelangr`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`idpenghuni`);

--
-- Indexes for table `remisi`
--
ALTER TABLE `remisi`
  ADD PRIMARY KEY (`idremisi`);

--
-- Indexes for table `tahanan`
--
ALTER TABLE `tahanan`
  ADD PRIMARY KEY (`idtahanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangpenghuni`
--
ALTER TABLE `barangpenghuni`
  MODIFY `idsimpan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `idkunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `narapidana`
--
ALTER TABLE `narapidana`
  MODIFY `idnapi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `idpelangr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `idpenghuni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `remisi`
--
ALTER TABLE `remisi`
  MODIFY `idremisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tahanan`
--
ALTER TABLE `tahanan`
  MODIFY `idtahanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
