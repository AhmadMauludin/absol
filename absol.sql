-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2026 at 01:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absol`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id_absen` int(11) NOT NULL,
  `id_dataabsen` int(11) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `status` enum('hadir','ijin','sakit','alfa') DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_absen`
--

INSERT INTO `tb_absen` (`id_absen`, `id_dataabsen`, `qrcode`, `status`, `keterangan`) VALUES
(722, 10, '122204 - Agus Ramdani Alfariji', 'hadir', NULL),
(723, 10, '122217 - Indra Lesmana Permana', 'alfa', NULL),
(724, 10, '122220 - Kosasih', 'alfa', NULL),
(725, 10, '122225 - Muhammad Naufal Kholil', 'alfa', NULL),
(726, 10, '122234 - Reihan Iqbal Prasetio', 'alfa', NULL),
(727, 10, '123101 - Abdul Hadi', 'hadir', NULL),
(728, 10, '123102 - Abdul Ihsan Sadiqin', 'alfa', NULL),
(729, 10, '123103 - Abian Aeruliansyah', 'alfa', NULL),
(730, 10, '123104 - Agus Suhendar', 'alfa', NULL),
(731, 10, '123105 - Ahmad Rizki Mubarok', 'alfa', NULL),
(732, 10, '123109 - Arya Aidil Nugraha', 'alfa', NULL),
(733, 10, '123110 - Azzam Althaaf Dzaki', 'alfa', NULL),
(734, 10, '123111 - Eki Ramdani', 'alfa', NULL),
(735, 10, '123112 - Evan Maulidin', 'alfa', NULL),
(736, 10, '123113 - Fadli Nur Fadillah', 'alfa', NULL),
(737, 10, '123114 - Fajar Hanafi', 'alfa', NULL),
(738, 10, '123116 - Gauza Dafa Alfaiz', 'alfa', NULL),
(739, 10, '123117 - Hamdan Hilmawan', 'alfa', NULL),
(740, 10, '123118 - Jajang Jaenudin', 'alfa', NULL),
(741, 10, '123119 - Jajang Putra Permana', 'alfa', NULL),
(742, 10, '123120 - Luthfi Adriansyah', 'alfa', NULL),
(743, 10, '123121 - Muhamad Shidqi Zaidan Khoirusabri', 'alfa', NULL),
(744, 10, '123123 - Muhamad Azzam Ramadhan', 'alfa', NULL),
(745, 10, '123127 - Muhammad Aditya Ramli', 'alfa', NULL),
(746, 10, '123129 - Muhammad Ikhwan Fauzan', 'alfa', NULL),
(747, 10, '123130 - Muhammad Ilham Firdaus', 'alfa', NULL),
(748, 10, '123132 - Muhammad Rauf Rizqullah', 'alfa', NULL),
(749, 10, '123133 - Muhammad Reza Nugraha', 'alfa', NULL),
(750, 10, '123134 - Muhammad Risal Al Hafiizh', 'alfa', NULL),
(751, 10, '123141 - Reffa Jaelani', 'alfa', NULL),
(752, 10, '123142 - Reza As Suhendar', 'alfa', NULL),
(753, 10, '123143 - Ribat Dudiara Satya', 'alfa', NULL),
(754, 10, '123145 - Ridwan Arsyil Maulana', 'alfa', NULL),
(755, 10, '123146 - Rizky Sahal Mahpud', 'alfa', NULL),
(756, 10, '123147 - Syairazy Miftahul Arifin Ratnadi', 'alfa', NULL),
(757, 10, '123148 - Wildan Irawan', 'alfa', NULL),
(758, 10, '123149 - Zam Zam Bani Khairi', 'alfa', NULL),
(759, 10, '123402 - Dadan Ramdani', 'alfa', NULL),
(760, 10, '123404 - Muhamad Roby Rahmawan ', 'alfa', NULL),
(761, 10, '123405 - Muhammad Kholil Ash Shidiq', 'alfa', NULL),
(762, 10, '123407 - Rijal Ahmad Tantowi ', 'alfa', NULL),
(763, 10, '123408 - Didit Fathul Mubin', 'alfa', NULL),
(764, 10, '123410 - Fahmi Raafiulhaqq', 'alfa', NULL),
(765, 10, '123411 - Fariq Irsyad ', 'alfa', NULL),
(766, 10, '123412 - Fauzan Hafidz Sundara', 'alfa', NULL),
(767, 10, '123413 - Panji Purnama', 'alfa', NULL),
(768, 10, '123414 - Rendi Nurcahyadin', 'alfa', NULL),
(769, 10, '123415 - Rezza Asrafal Huda', 'alfa', NULL),
(770, 10, '123416 - Rian Nugraha', 'alfa', NULL),
(771, 10, '123417 - Rizqi Muhamad Fahri', 'alfa', NULL),
(772, 10, '124108 - Abdurohman', 'alfa', NULL),
(773, 10, '124109 - Ahmad Bakri', 'alfa', NULL),
(774, 10, '124110 - Aldi Hendra Saputra Sonjaya', 'alfa', NULL),
(775, 10, '124111 - Andri Pirmansyah', 'alfa', NULL),
(776, 10, '124113 - Azam Nur Alamsyah', 'alfa', NULL),
(777, 10, '124115 - Derry Ahmad Al Jabar', 'alfa', NULL),
(778, 10, '124116 - Dimas Nurdiansah', 'alfa', NULL),
(779, 10, '124117 - Erik Permana', 'alfa', NULL),
(780, 10, '124118 - Fathan Rizqillah', 'alfa', NULL),
(781, 10, '124119 - Hasbi Abdul Ghopur', 'alfa', NULL),
(782, 10, '124120 - Ilham Akbar Ramdani', 'alfa', NULL),
(783, 10, '124121 - Ilham Maulana', 'alfa', NULL),
(784, 10, '124122 - Imam Dwi Karman', 'alfa', NULL),
(785, 10, '124123 - Indra Herdiansyah', 'alfa', NULL),
(786, 10, '124124 - Maulana Landif Aritmatika               ', 'alfa', NULL),
(787, 10, '124125 - Muhamad Fauzan Alfariji', 'alfa', NULL),
(788, 10, '124126 - Muhamad Rizky Ramadani', 'alfa', NULL),
(789, 10, '124127 - Muhammad Akmal Ramadhan', 'alfa', NULL),
(790, 10, '124128 - Muhammad Arif Fadliansyah', 'alfa', NULL),
(791, 10, '124130 - Muhammad Hadiningrat Hidayat', 'alfa', NULL),
(792, 10, '124131 - Muhammad Hisyam Zaedan Ibrahim ', 'alfa', NULL),
(793, 10, '124132 - Muhammad Husni Abdul Rouf', 'alfa', NULL),
(794, 10, '124133 - Muhammad Iqbal Maulana Yusuf', 'alfa', NULL),
(795, 10, '124134 - Muhammad Muzakki Rivana', 'alfa', NULL),
(796, 10, '124135 - Muhammad Nizam Al Musyfiq', 'alfa', NULL),
(797, 10, '124138 - Rakha Janvier Rijalluda', 'alfa', NULL),
(798, 10, '124139 - Reva Triana', 'alfa', NULL),
(799, 10, '124141 - Zaenal Muthaqin', 'alfa', NULL),
(800, 10, '124142 - Zain Ahmad Shah Arridho', 'alfa', NULL),
(801, 10, '124143 - Arul Sapari', 'alfa', NULL),
(802, 10, '124401 - Farrel Imadudin Al Ashari', 'alfa', NULL),
(803, 10, '124402 - Gumerlar Ramadhan Nugraha', 'alfa', NULL),
(804, 10, '124403 - Lupi Maulana', 'alfa', NULL),
(805, 10, '124404 - Muhammad Abdul Kholiq', 'alfa', NULL),
(806, 10, '124405 - Muhammad Adzka Satria Pratama', 'alfa', NULL),
(807, 10, '124406 - Nandra Rizky Al Pauzan', 'alfa', NULL),
(808, 10, '124407 - Zahran Fauzan Zamzami', 'alfa', NULL),
(809, 10, '124408 - Hamzah Alafi Iskandar', 'alfa', NULL),
(810, 10, '124409 - Wildan Azmi Muzaki', 'alfa', NULL),
(811, 10, '125410 - Ihsal Salahudin', 'alfa', NULL),
(812, 10, '125411 - Najdi Fahman Dzulhilmi', 'alfa', NULL),
(813, 10, '125412 - Ahmad Khaerul Muiz', 'alfa', NULL),
(814, 10, '125413 - Akmal Muhamad Mumtaz', 'alfa', NULL),
(815, 10, '125414 - Dede Aep Sarifudin', 'alfa', NULL),
(816, 10, '125415 - Faris Ardiansyah', 'alfa', NULL),
(817, 10, '125416 - Fauzi Ilyas Al-Baihaqi', 'alfa', NULL),
(818, 10, '125417 - Hamid Nur Siddiq', 'alfa', NULL),
(819, 10, '125418 - M. Azka Rofi Algiansyah', 'alfa', NULL),
(820, 10, '125420 - Muhamad Dadan', 'alfa', NULL),
(821, 10, '125421 - Muhamad Raihan Nugraha', 'alfa', NULL),
(822, 10, '125423 - Muhammad Fahri', 'alfa', NULL),
(823, 10, '125426 - Muhammad Zidanika Purnama', 'alfa', NULL),
(824, 10, '125427 - Pikry Ainnur Rohman', 'alfa', NULL),
(825, 10, '125428 - Rizki Fadliansyah', 'alfa', NULL),
(826, 10, '125429 - Rizki Hidayatuloh', 'alfa', NULL),
(827, 10, '125430 - Rizqy Aditya Pratama', 'alfa', NULL),
(828, 10, '125431 - Rizwan Muhammad Dani', 'alfa', NULL),
(829, 10, '125432 - Satria Firdaus Pratama', 'alfa', NULL),
(830, 10, '125433 - Ziyan Atha Abdullah', 'alfa', NULL),
(831, 11, '122204 - Agus Ramdani Alfariji', 'alfa', NULL),
(832, 11, '122217 - Indra Lesmana Permana', 'alfa', NULL),
(833, 11, '122220 - Kosasih', 'alfa', NULL),
(834, 11, '122225 - Muhammad Naufal Kholil', 'alfa', NULL),
(835, 11, '122234 - Reihan Iqbal Prasetio', 'alfa', NULL),
(836, 11, '123101 - Abdul Hadi', 'alfa', NULL),
(837, 11, '123102 - Abdul Ihsan Sadiqin', 'alfa', NULL),
(838, 11, '123103 - Abian Aeruliansyah', 'alfa', NULL),
(839, 11, '123104 - Agus Suhendar', 'alfa', NULL),
(840, 11, '123105 - Ahmad Rizki Mubarok', 'alfa', NULL),
(841, 11, '123109 - Arya Aidil Nugraha', 'alfa', NULL),
(842, 11, '123110 - Azzam Althaaf Dzaki', 'alfa', NULL),
(843, 11, '123111 - Eki Ramdani', 'alfa', NULL),
(844, 11, '123112 - Evan Maulidin', 'alfa', NULL),
(845, 11, '123113 - Fadli Nur Fadillah', 'alfa', NULL),
(846, 11, '123114 - Fajar Hanafi', 'alfa', NULL),
(847, 11, '123116 - Gauza Dafa Alfaiz', 'alfa', NULL),
(848, 11, '123117 - Hamdan Hilmawan', 'alfa', NULL),
(849, 11, '123118 - Jajang Jaenudin', 'alfa', NULL),
(850, 11, '123119 - Jajang Putra Permana', 'alfa', NULL),
(851, 11, '123120 - Luthfi Adriansyah', 'alfa', NULL),
(852, 11, '123121 - Muhamad Shidqi Zaidan Khoirusabri', 'alfa', NULL),
(853, 11, '123123 - Muhamad Azzam Ramadhan', 'alfa', NULL),
(854, 11, '123127 - Muhammad Aditya Ramli', 'alfa', NULL),
(855, 11, '123129 - Muhammad Ikhwan Fauzan', 'alfa', NULL),
(856, 11, '123130 - Muhammad Ilham Firdaus', 'alfa', NULL),
(857, 11, '123132 - Muhammad Rauf Rizqullah', 'alfa', NULL),
(858, 11, '123133 - Muhammad Reza Nugraha', 'alfa', NULL),
(859, 11, '123134 - Muhammad Risal Al Hafiizh', 'alfa', NULL),
(860, 11, '123141 - Reffa Jaelani', 'alfa', NULL),
(861, 11, '123142 - Reza As Suhendar', 'alfa', NULL),
(862, 11, '123143 - Ribat Dudiara Satya', 'alfa', NULL),
(863, 11, '123145 - Ridwan Arsyil Maulana', 'alfa', NULL),
(864, 11, '123146 - Rizky Sahal Mahpud', 'alfa', NULL),
(865, 11, '123147 - Syairazy Miftahul Arifin Ratnadi', 'alfa', NULL),
(866, 11, '123148 - Wildan Irawan', 'alfa', NULL),
(867, 11, '123149 - Zam Zam Bani Khairi', 'alfa', NULL),
(868, 11, '123402 - Dadan Ramdani', 'alfa', NULL),
(869, 11, '123404 - Muhamad Roby Rahmawan ', 'alfa', NULL),
(870, 11, '123405 - Muhammad Kholil Ash Shidiq', 'alfa', NULL),
(871, 11, '123407 - Rijal Ahmad Tantowi ', 'alfa', NULL),
(872, 11, '123408 - Didit Fathul Mubin', 'alfa', NULL),
(873, 11, '123410 - Fahmi Raafiulhaqq', 'alfa', NULL),
(874, 11, '123411 - Fariq Irsyad ', 'alfa', NULL),
(875, 11, '123412 - Fauzan Hafidz Sundara', 'alfa', NULL),
(876, 11, '123413 - Panji Purnama', 'alfa', NULL),
(877, 11, '123414 - Rendi Nurcahyadin', 'alfa', NULL),
(878, 11, '123415 - Rezza Asrafal Huda', 'alfa', NULL),
(879, 11, '123416 - Rian Nugraha', 'alfa', NULL),
(880, 11, '123417 - Rizqi Muhamad Fahri', 'alfa', NULL),
(881, 11, '124108 - Abdurohman', 'alfa', NULL),
(882, 11, '124109 - Ahmad Bakri', 'alfa', NULL),
(883, 11, '124110 - Aldi Hendra Saputra Sonjaya', 'alfa', NULL),
(884, 11, '124111 - Andri Pirmansyah', 'alfa', NULL),
(885, 11, '124113 - Azam Nur Alamsyah', 'alfa', NULL),
(886, 11, '124115 - Derry Ahmad Al Jabar', 'alfa', NULL),
(887, 11, '124116 - Dimas Nurdiansah', 'alfa', NULL),
(888, 11, '124117 - Erik Permana', 'alfa', NULL),
(889, 11, '124118 - Fathan Rizqillah', 'alfa', NULL),
(890, 11, '124119 - Hasbi Abdul Ghopur', 'alfa', NULL),
(891, 11, '124120 - Ilham Akbar Ramdani', 'alfa', NULL),
(892, 11, '124121 - Ilham Maulana', 'alfa', NULL),
(893, 11, '124122 - Imam Dwi Karman', 'alfa', NULL),
(894, 11, '124123 - Indra Herdiansyah', 'alfa', NULL),
(895, 11, '124124 - Maulana Landif Aritmatika               ', 'alfa', NULL),
(896, 11, '124125 - Muhamad Fauzan Alfariji', 'alfa', NULL),
(897, 11, '124126 - Muhamad Rizky Ramadani', 'alfa', NULL),
(898, 11, '124127 - Muhammad Akmal Ramadhan', 'alfa', NULL),
(899, 11, '124128 - Muhammad Arif Fadliansyah', 'alfa', NULL),
(900, 11, '124130 - Muhammad Hadiningrat Hidayat', 'alfa', NULL),
(901, 11, '124131 - Muhammad Hisyam Zaedan Ibrahim ', 'alfa', NULL),
(902, 11, '124132 - Muhammad Husni Abdul Rouf', 'alfa', NULL),
(903, 11, '124133 - Muhammad Iqbal Maulana Yusuf', 'alfa', NULL),
(904, 11, '124134 - Muhammad Muzakki Rivana', 'alfa', NULL),
(905, 11, '124135 - Muhammad Nizam Al Musyfiq', 'alfa', NULL),
(906, 11, '124138 - Rakha Janvier Rijalluda', 'alfa', NULL),
(907, 11, '124139 - Reva Triana', 'alfa', NULL),
(908, 11, '124141 - Zaenal Muthaqin', 'alfa', NULL),
(909, 11, '124142 - Zain Ahmad Shah Arridho', 'alfa', NULL),
(910, 11, '124143 - Arul Sapari', 'alfa', NULL),
(911, 11, '124401 - Farrel Imadudin Al Ashari', 'alfa', NULL),
(912, 11, '124402 - Gumerlar Ramadhan Nugraha', 'alfa', NULL),
(913, 11, '124403 - Lupi Maulana', 'alfa', NULL),
(914, 11, '124404 - Muhammad Abdul Kholiq', 'alfa', NULL),
(915, 11, '124405 - Muhammad Adzka Satria Pratama', 'alfa', NULL),
(916, 11, '124406 - Nandra Rizky Al Pauzan', 'alfa', NULL),
(917, 11, '124407 - Zahran Fauzan Zamzami', 'alfa', NULL),
(918, 11, '124408 - Hamzah Alafi Iskandar', 'alfa', NULL),
(919, 11, '124409 - Wildan Azmi Muzaki', 'alfa', NULL),
(920, 11, '125410 - Ihsal Salahudin', 'alfa', NULL),
(921, 11, '125411 - Najdi Fahman Dzulhilmi', 'alfa', NULL),
(922, 11, '125412 - Ahmad Khaerul Muiz', 'alfa', NULL),
(923, 11, '125413 - Akmal Muhamad Mumtaz', 'alfa', NULL),
(924, 11, '125414 - Dede Aep Sarifudin', 'alfa', NULL),
(925, 11, '125415 - Faris Ardiansyah', 'alfa', NULL),
(926, 11, '125416 - Fauzi Ilyas Al-Baihaqi', 'alfa', NULL),
(927, 11, '125417 - Hamid Nur Siddiq', 'alfa', NULL),
(928, 11, '125418 - M. Azka Rofi Algiansyah', 'alfa', NULL),
(929, 11, '125420 - Muhamad Dadan', 'alfa', NULL),
(930, 11, '125421 - Muhamad Raihan Nugraha', 'alfa', NULL),
(931, 11, '125423 - Muhammad Fahri', 'alfa', NULL),
(932, 11, '125426 - Muhammad Zidanika Purnama', 'alfa', NULL),
(933, 11, '125427 - Pikry Ainnur Rohman', 'alfa', NULL),
(934, 11, '125428 - Rizki Fadliansyah', 'alfa', NULL),
(935, 11, '125429 - Rizki Hidayatuloh', 'alfa', NULL),
(936, 11, '125430 - Rizqy Aditya Pratama', 'alfa', NULL),
(937, 11, '125431 - Rizwan Muhammad Dani', 'alfa', NULL),
(938, 11, '125432 - Satria Firdaus Pratama', 'alfa', NULL),
(939, 11, '125433 - Ziyan Atha Abdullah', 'alfa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dataabsen`
--

CREATE TABLE `tb_dataabsen` (
  `id_dataabsen` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` enum('shubuh','dhuhur','ashar','maghrib','isya','lainnya') NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dataabsen`
--

INSERT INTO `tb_dataabsen` (`id_dataabsen`, `tanggal`, `waktu`, `keterangan`) VALUES
(10, '2026-04-06', 'shubuh', ''),
(11, '2026-04-07', 'shubuh', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_santri`
--

CREATE TABLE `tb_santri` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `qrcode` varchar(150) NOT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `asrama` varchar(50) DEFAULT NULL,
  `kamar` varchar(20) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_santri`
--

INSERT INTO `tb_santri` (`nis`, `nama`, `qrcode`, `kelas`, `asrama`, `kamar`, `foto`) VALUES
('122204', 'Agus Ramdani Alfariji', '122204 - Agus Ramdani Alfariji', '4', 'Umar', '', 'Agus Ramdani Alfariji.jpg'),
('122217', 'Indra Lesmana Permana', '122217 - Indra Lesmana Permana', '4', 'Umar', '', 'Indra Lesmana Permana.jpg'),
('122220', 'Kosasih', '122220 - Kosasih', '4', 'Utsman', '', 'Kosasih.jpg'),
('122225', 'Muhammad Naufal Kholil', '122225 - Muhammad Naufal Kholil', '4', 'Utsman', '', 'Muhammad Naufal Kholil.jpg'),
('122234', 'Reihan Iqbal Prasetio', '122234 - Reihan Iqbal Prasetio', '4', 'Umar', '', 'Reihan Iqbal Prasetio.jpg'),
('123101', 'Abdul Hadi', '123101 - Abdul Hadi', '3', 'Umar', '', 'Abdul Hadi.jpg'),
('123102', 'Abdul Ihsan Sadiqin', '123102 - Abdul Ihsan Sadiqin', '3', 'Abu Bakar', '', 'Abdul Ihsan Sadiqin.jpg'),
('123103', 'Abian Aeruliansyah', '123103 - Abian Aeruliansyah', '3', 'Abu Bakar', '', 'Abian Aeruliansyah.jpg'),
('123104', 'Agus Suhendar', '123104 - Agus Suhendar', '3', 'Abu Bakar', '', 'Agus Suhendar.jpg'),
('123105', 'Ahmad Rizki Mubarok', '123105 - Ahmad Rizki Mubarok', '3', 'Umar', '', 'Ahmad Rizki Mubarok.jpg'),
('123109', 'Arya Aidil Nugraha', '123109 - Arya Aidil Nugraha', '3', 'Abu Bakar', '', 'Arya Aidil Nugraha.jpg'),
('123110', 'Azzam Althaaf Dzaki', '123110 - Azzam Althaaf Dzaki', '3', 'Abu Bakar', '', 'Azzam Althaaf Dzaki.jpg'),
('123111', 'Eki Ramdani', '123111 - Eki Ramdani', '3', 'Abu Bakar', '', 'Eki Ramdani.jpg'),
('123112', 'Evan Maulidin', '123112 - Evan Maulidin', '3', 'Abu Bakar', '', 'Evan Maulidin.jpg'),
('123113', 'Fadli Nur Fadillah', '123113 - Fadli Nur Fadillah', '3', 'Abu Bakar', '', 'Fadli Nur Fadillah.jpg'),
('123114', 'Fajar Hanafi', '123114 - Fajar Hanafi', '3', 'Umar', '', 'Fajar Hanafi.jpg'),
('123116', 'Gauza Dafa Alfaiz', '123116 - Gauza Dafa Alfaiz', '3', 'Abu Bakar', '', 'Gauza Dafa Alfaiz.jpg'),
('123117', 'Hamdan Hilmawan', '123117 - Hamdan Hilmawan', '3', 'Abu Bakar', '', 'Hamdan Hilmawan.jpg'),
('123118', 'Jajang Jaenudin', '123118 - Jajang Jaenudin', '3', 'Abu Bakar', '', 'Jajang Jaenudin.jpg'),
('123119', 'Jajang Putra Permana', '123119 - Jajang Putra Permana', '3', 'Abu Bakar', '', 'Jajang Putra Permana.jpg'),
('123120', 'Luthfi Adriansyah', '123120 - Luthfi Adriansyah', '3', 'Abu Bakar', '', 'Luthfi Adriansyah.jpg'),
('123121', 'Muhamad Shidqi Zaidan Khoirusabri', '123121 - Muhamad Shidqi Zaidan Khoirusabri', '3', 'Abu Bakar', '', 'Muhamad Shidqi Zaidan Khoirusabri.jpg'),
('123123', 'Muhamad Azzam Ramadhan', '123123 - Muhamad Azzam Ramadhan', '3', 'Umar', '', 'Muhamad Azzam Ramadhan.jpg'),
('123127', 'Muhammad Aditya Ramli', '123127 - Muhammad Aditya Ramli', '3', 'Abu Bakar', '', 'Muhammad Aditya Ramli.jpg'),
('123129', 'Muhammad Ikhwan Fauzan', '123129 - Muhammad Ikhwan Fauzan', '3', 'Abu Bakar', '', 'Muhammad Ikhwan Fauzan.jpg'),
('123130', 'Muhammad Ilham Firdaus', '123130 - Muhammad Ilham Firdaus', '3', 'Abu Bakar', '', 'Muhammad Ilham Firdaus.jpg'),
('123132', 'Muhammad Rauf Rizqullah', '123132 - Muhammad Rauf Rizqullah', '3', 'Abu Bakar', '', 'Muhammad Rauf Rizqullah.jpg'),
('123133', 'Muhammad Reza Nugraha', '123133 - Muhammad Reza Nugraha', '3', 'Abu Bakar', '', 'Muhammad Reza Nugraha.jpg'),
('123134', 'Muhammad Risal Al Hafiizh', '123134 - Muhammad Risal Al Hafiizh', '3', 'Abu Bakar', '', 'Muhammad Risal Al Hafiizh.jpg'),
('123141', 'Reffa Jaelani', '123141 - Reffa Jaelani', '3', 'Abu Bakar', '', 'Reffa Jaelani.jpg'),
('123142', 'Reza As Suhendar', '123142 - Reza As Suhendar', '3', 'Abu Bakar', '', 'Reza As Suhendar.jpg'),
('123143', 'Ribat Dudiara Satya', '123143 - Ribat Dudiara Satya', '3', 'Abu Bakar', '', 'Ribat Dudiara Satya.jpg'),
('123145', 'Ridwan Arsyil Maulana', '123145 - Ridwan Arsyil Maulana', '3', 'Abu Bakar', '', 'Ridwan Arsyil Maulana.jpg'),
('123146', 'Rizky Sahal Mahpud', '123146 - Rizky Sahal Mahpud', '3', 'Abu Bakar', '', 'Rizky Sahal Mahpud.jpg'),
('123147', 'Syairazy Miftahul Arifin Ratnadi', '123147 - Syairazy Miftahul Arifin Ratnadi', '3', 'Abu Bakar', '', 'Syairazy Miftahul Arifin Ratnadi.jpg'),
('123148', 'Wildan Irawan', '123148 - Wildan Irawan', '3', 'Abu Bakar', '', 'Wildan Irawan.jpg'),
('123149', 'Zam Zam Bani Khairi', '123149 - Zam Zam Bani Khairi', '3', 'Abu Bakar', '', 'Zam Zam Bani Khairi.jpg'),
('123402', 'Dadan Ramdani', '123402 - Dadan Ramdani', '6', 'Utsman', '', 'Dadan Ramdani.jpg'),
('123404', 'Muhamad Roby Rahmawan', '123404 - Muhamad Roby Rahmawan ', '6', 'Utsman', '', 'Muhamad Roby Rahmawan.jpg'),
('123405', 'Muhammad Kholil Ash Shidiq', '123405 - Muhammad Kholil Ash Shidiq', '3', 'Abu Bakar', '', 'Muhammad Kholil Ash Shidiq.jpg'),
('123407', 'Rijal Ahmad Tantowi', '123407 - Rijal Ahmad Tantowi ', '6', 'Abu Bakar', '', 'Rijal Ahmad Tantowi.jpg'),
('123408', 'Didit Fathul Mubin', '123408 - Didit Fathul Mubin', '6', 'Umar', '', 'Didit Fathul Mubin.jpg'),
('123410', 'Fahmi Raafiulhaqq', '123410 - Fahmi Raafiulhaqq', '6', 'Utsman', '', 'Fahmi Raafiulhaqq.jpg'),
('123411', 'Fariq Irsyad', '123411 - Fariq Irsyad ', '6', 'Utsman', '', 'Fariq Irsyad.jpg'),
('123412', 'Fauzan Hafidz Sundara', '123412 - Fauzan Hafidz Sundara', '6', 'Utsman', '', 'Fauzan Hafidz Sundara.jpg'),
('123413', 'Panji Purnama', '123413 - Panji Purnama', '6', 'Abu Bakar', '', 'Panji Purnama.jpg'),
('123414', 'Rendi Nurcahyadin', '123414 - Rendi Nurcahyadin', '6', 'Umar', '', 'Rendi Nurcahyadin.jpg'),
('123415', 'Rezza Asrafal Huda', '123415 - Rezza Asrafal Huda', '6', 'Umar', '', 'Rezza Asrafal Huda.jpg'),
('123416', 'Rian Nugraha', '123416 - Rian Nugraha', '6', 'Abu Bakar', '', 'Rian Nugraha.jpg'),
('123417', 'Rizqi Muhamad Fahri', '123417 - Rizqi Muhamad Fahri', '6', 'Umar', '', 'Rizqi Muhamad Fahri.jpg'),
('124108', 'Abdurohman', '124108 - Abdurohman', '2', 'Abu Bakar', '', 'Abdurohman.jpg'),
('124109', 'Ahmad Bakri', '124109 - Ahmad Bakri', '2', 'Abu Bakar', '', 'Ahmad Bakri.jpg'),
('124110', 'Aldi Hendra Saputra Sonjaya', '124110 - Aldi Hendra Saputra Sonjaya', '2', 'Umar', '', 'Aldi Hendra Saputra Sonjaya.jpg'),
('124111', 'Andri Pirmansyah', '124111 - Andri Pirmansyah', '2', 'Umar', '', 'Andri Pirmansyah.jpg'),
('124113', 'Azam Nur Alamsyah', '124113 - Azam Nur Alamsyah', '2', 'Umar', '', 'Azam Nur Alamsyah.jpg'),
('124115', 'Derry Ahmad Al Jabar', '124115 - Derry Ahmad Al Jabar', '2', 'Umar', '', 'Derry Ahmad Al Jabar.jpg'),
('124116', 'Dimas Nurdiansah', '124116 - Dimas Nurdiansah', '2', 'Umar', '', 'Dimas Nurdiansah.jpg'),
('124117', 'Erik Permana', '124117 - Erik Permana', '2', 'Umar', '', 'Erik Permana.jpg'),
('124118', 'Fathan Rizqillah', '124118 - Fathan Rizqillah', '2', 'Umar', '', 'Fathan Rizqillah.jpg'),
('124119', 'Hasbi Abdul Ghopur', '124119 - Hasbi Abdul Ghopur', '2', 'Umar', '', 'Hasbi Abdul Ghopur.jpg'),
('124120', 'Ilham Akbar Ramdani', '124120 - Ilham Akbar Ramdani', '2', 'Umar', '', 'Ilham Akbar Ramdani.jpg'),
('124121', 'Ilham Maulana', '124121 - Ilham Maulana', '2', 'Umar', '', 'Ilham Maulana.jpg'),
('124122', 'Imam Dwi Karman', '124122 - Imam Dwi Karman', '2', 'Umar', '', 'Imam Dwi Karman.jpg'),
('124123', 'Indra Herdiansyah', '124123 - Indra Herdiansyah', '2', 'Umar', '', 'Indra Herdiansyah.jpg'),
('124124', 'Maulana Landif Aritmatika', '124124 - Maulana Landif Aritmatika               ', '2', 'Utsman', '', 'Maulana Landif Aritmatika.jpg'),
('124125', 'Muhamad Fauzan Alfariji', '124125 - Muhamad Fauzan Alfariji', '2', 'Umar', '', 'Muhamad Fauzan Alfariji.jpg'),
('124126', 'Muhamad Rizky Ramadani', '124126 - Muhamad Rizky Ramadani', '2', 'Umar', '', 'Muhamad Rizky Ramadani.jpg'),
('124127', 'Muhammad Akmal Ramadhan', '124127 - Muhammad Akmal Ramadhan', '2', 'Umar', '', 'Muhammad Akmal Ramadhan.jpg'),
('124128', 'Muhammad Arif Fadliansyah', '124128 - Muhammad Arif Fadliansyah', '2', 'Utsman', '', 'Muhammad Arif Fadliansyah.jpg'),
('124130', 'Muhammad Hadiningrat Hidayat', '124130 - Muhammad Hadiningrat Hidayat', '2', 'Umar', '', 'Muhammad Hadiningrat Hidayat.jpg'),
('124131', 'Muhammad Hisyam Zaedan Ibrahim', '124131 - Muhammad Hisyam Zaedan Ibrahim ', '2', 'Umar', '', 'Muhammad Hisyam Zaedan Ibrahim.jpg'),
('124132', 'Muhammad Husni Abdul Rouf', '124132 - Muhammad Husni Abdul Rouf', '2', 'Umar', '', 'Muhammad Husni Abdul Rouf.jpg'),
('124133', 'Muhammad Iqbal Maulana Yusuf', '124133 - Muhammad Iqbal Maulana Yusuf', '2', 'Umar', '', 'Muhammad Iqbal Maulana Yusuf.jpg'),
('124134', 'Muhammad Muzakki Rivana', '124134 - Muhammad Muzakki Rivana', '2', 'Utsman', '', 'Muhammad Muzakki Rivana.jpg'),
('124135', 'Muhammad Nizam Al Musyfiq', '124135 - Muhammad Nizam Al Musyfiq', '2', 'Utsman', '', 'Muhammad Nizam Al Musyfiq.jpg'),
('124138', 'Rakha Janvier Rijalluda', '124138 - Rakha Janvier Rijalluda', '2', 'Utsman', '', 'Rakha Janvier Rijalluda.jpg'),
('124139', 'Reva Triana', '124139 - Reva Triana', '2', 'Utsman', '', 'Reva Triana.jpg'),
('124141', 'Zaenal Muthaqin', '124141 - Zaenal Muthaqin', '2', 'Umar', '', 'Zaenal Muthaqin.jpg'),
('124142', 'Zain Ahmad Shah Arridho', '124142 - Zain Ahmad Shah Arridho', '2', 'Utsman', '', 'Zain Ahmad Shah Arridho.jpg'),
('124143', 'Arul Sapari', '124143 - Arul Sapari', '2', 'Umar', '', 'Arul Sapari.jpg'),
('124401', 'Farrel Imadudin Al Ashari', '124401 - Farrel Imadudin Al Ashari', '5', 'Abu Bakar', '', 'Farrel Imadudin Al Ashari.jpg'),
('124402', 'Gumerlar Ramadhan Nugraha', '124402 - Gumerlar Ramadhan Nugraha', '5', 'Utsman', '', 'Gumerlar Ramadhan Nugraha.jpg'),
('124403', 'Lupi Maulana', '124403 - Lupi Maulana', '5', 'Utsman', '', 'Lupi Maulana.jpg'),
('124404', 'Muhammad Abdul Kholiq', '124404 - Muhammad Abdul Kholiq', '5', 'Utsman', '', 'Muhammad Abdul Kholiq.jpg'),
('124405', 'Muhammad Adzka Satria Pratama', '124405 - Muhammad Adzka Satria Pratama', '5', 'Umar', '', 'Muhammad Adzka Satria Pratama.jpg'),
('124406', 'Nandra Rizky Al Pauzan', '124406 - Nandra Rizky Al Pauzan', '5', 'Utsman', '', 'Nandra Rizky Al Pauzan.jpg'),
('124407', 'Zahran Fauzan Zamzami', '124407 - Zahran Fauzan Zamzami', '5', 'Utsman', '', 'Zahran Fauzan Zamzami.jpg'),
('124408', 'Hamzah Alafi Iskandar', '124408 - Hamzah Alafi Iskandar', '5', 'Abu Bakar', '', 'Hamzah Alafi Iskandar.jpg'),
('124409', 'Wildan Azmi Muzaki', '124409 - Wildan Azmi Muzaki', '5', 'Umar', '', 'Wildan Azmi Muzaki.jpg'),
('125410', 'Ihsal Salahudin', '125410 - Ihsal Salahudin', '4', 'Utsman', '', 'Ihsal Salahudin.jpg'),
('125411', 'Najdi Fahman Dzulhilmi', '125411 - Najdi Fahman Dzulhilmi', '4', 'Utsman', '', 'Najdi Fahman Dzulhilmi.jpg'),
('125412', 'Ahmad Khaerul Muiz', '125412 - Ahmad Khaerul Muiz', '1', 'Utsman', '', 'Ahmad Khaerul Muiz.jpg'),
('125413', 'Akmal Muhamad Mumtaz', '125413 - Akmal Muhamad Mumtaz', '1', 'Utsman', '', 'Akmal Muhamad Mumtaz.jpg'),
('125414', 'Dede Aep Sarifudin', '125414 - Dede Aep Sarifudin', '1', 'Utsman', '', 'Dede Aep Sarifudin.jpg'),
('125415', 'Faris Ardiansyah', '125415 - Faris Ardiansyah', '1', 'Utsman', '', 'Faris Ardiansyah.jpg'),
('125416', 'Fauzi Ilyas Al-Baihaqi', '125416 - Fauzi Ilyas Al-Baihaqi', '1', 'Utsman', '', 'Fauzi Ilyas Al-Baihaqi.jpg'),
('125417', 'Hamid Nur Siddiq', '125417 - Hamid Nur Siddiq', '1', 'Utsman', '', 'Hamid Nur Siddiq.jpg'),
('125418', 'M. Azka Rofi Algiansyah', '125418 - M. Azka Rofi Algiansyah', '1', 'Utsman', '', 'M. Azka Rofi Algiansyah.jpg'),
('125420', 'Muhamad Dadan', '125420 - Muhamad Dadan', '1', 'Utsman', '', 'Muhamad Dadan.jpg'),
('125421', 'Muhamad Raihan Nugraha', '125421 - Muhamad Raihan Nugraha', '1', 'Utsman', '', 'Muhamad Raihan Nugraha.jpg'),
('125423', 'Muhammad Fahri', '125423 - Muhammad Fahri', '1', 'Utsman', '', 'Muhammad Fahri.jpg'),
('125426', 'Muhammad Zidanika Purnama', '125426 - Muhammad Zidanika Purnama', '1', 'Utsman', '', 'Muhammad Zidanika Purnama.jpg'),
('125427', 'Pikry Ainnur Rohman', '125427 - Pikry Ainnur Rohman', '1', 'Utsman', '', 'Pikry Ainnur Rohman.jpg'),
('125428', 'Rizki Fadliansyah', '125428 - Rizki Fadliansyah', '1', 'Utsman', '', 'Rizki Fadliansyah.jpg'),
('125429', 'Rizki Hidayatuloh', '125429 - Rizki Hidayatuloh', '1', 'Utsman', '', 'Rizki Hidayatuloh.jpg'),
('125430', 'Rizqy Aditya Pratama', '125430 - Rizqy Aditya Pratama', '1', 'Utsman', '', 'Rizqy Aditya Pratama.jpg'),
('125431', 'Rizwan Muhammad Dani', '125431 - Rizwan Muhammad Dani', '1', 'Utsman', '', 'Rizwan Muhammad Dani.jpg'),
('125432', 'Satria Firdaus Pratama', '125432 - Satria Firdaus Pratama', '1', 'Utsman', '', 'Satria Firdaus Pratama.jpg'),
('125433', 'Ziyan Atha Abdullah', '125433 - Ziyan Atha Abdullah', '1', 'Utsman', '', 'Ziyan Atha Abdullah.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `qrcode` (`qrcode`),
  ADD KEY `tb_absen_ibfk_1` (`id_dataabsen`);

--
-- Indexes for table `tb_dataabsen`
--
ALTER TABLE `tb_dataabsen`
  ADD PRIMARY KEY (`id_dataabsen`);

--
-- Indexes for table `tb_santri`
--
ALTER TABLE `tb_santri`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `qrcode` (`qrcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=940;

--
-- AUTO_INCREMENT for table `tb_dataabsen`
--
ALTER TABLE `tb_dataabsen`
  MODIFY `id_dataabsen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD CONSTRAINT `tb_absen_ibfk_1` FOREIGN KEY (`id_dataabsen`) REFERENCES `tb_dataabsen` (`id_dataabsen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_absen_ibfk_2` FOREIGN KEY (`qrcode`) REFERENCES `tb_santri` (`qrcode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
