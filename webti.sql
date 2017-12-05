-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 05:32 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webti`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievementdosen`
--

CREATE TABLE `achievementdosen` (
  `ID` int(4) NOT NULL,
  `NIDN` varchar(25) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Prestasi` text,
  `Tanggal` date DEFAULT NULL,
  `Keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `achievementdosen`
--

INSERT INTO `achievementdosen` (`ID`, `NIDN`, `Nama`, `Prestasi`, `Tanggal`, `Keterangan`) VALUES
(1, '140810140063', 'ilyas abduttawab', 'hahahaha', '2017-11-17', 'heeehh');

-- --------------------------------------------------------

--
-- Table structure for table `achievementmhs`
--

CREATE TABLE `achievementmhs` (
  `ID` int(4) NOT NULL,
  `NPM` varchar(25) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Prestasi` text,
  `Tanggal` date DEFAULT NULL,
  `Keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `achievementmhs`
--

INSERT INTO `achievementmhs` (`ID`, `NPM`, `Nama`, `Prestasi`, `Tanggal`, `Keterangan`) VALUES
(6, '140810140058', 'Fahmi Surya Nugraha', 'nutri food leadership award', '2017-11-08', 'juara 1 leadership di nutrifood');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rememberToken` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`, `rememberToken`) VALUES
(1, 'admin', 'admin', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `ID` int(11) NOT NULL,
  `NPM` varchar(20) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Pembimbing` varchar(50) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Penguji` varchar(50) DEFAULT NULL,
  `Judul` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`ID`, `NPM`, `Nama`, `Pembimbing`, `Tanggal`, `Penguji`, `Judul`) VALUES
(1, '140810140063', 'Jordy Saragih', 'Dr. Atje Setiawan A., M.kom', '2016-01-08', 'Dr. Juli Rejito', 'Sistem Informasi Persediaan Barang Berbasis Web dan Sistem Monitoring Berbasis Mobile pada Perusahaan Distribusi');

-- --------------------------------------------------------

--
-- Table structure for table `dedicationdosen`
--

CREATE TABLE `dedicationdosen` (
  `ID` int(4) NOT NULL,
  `NIDN` varchar(12) DEFAULT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `Tempat` varchar(30) DEFAULT NULL,
  `Jenis` varchar(100) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dedicationdosen`
--

INSERT INTO `dedicationdosen` (`ID`, `NIDN`, `Nama`, `Tempat`, `Jenis`, `Tanggal`) VALUES
(1, '214141123', 'Erick Paulus', 'lalal', 'Emergency Capacity Buliding-Joint Need Assessment (ECB-JNA Project) ', '2007-01-17'),
(90, '214141123', 'Erick Paulus', 'lalal', 'Emergency Capacity Buliding-Joint Need Assessment (ECB-JNA Project) ', '2007-01-17'),
(91, '140810140063', 'ilyas abduttawab', 'jakarta timur', 'Pengabdian', '2017-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `dedicationmhs`
--

CREATE TABLE `dedicationmhs` (
  `ID` int(4) NOT NULL,
  `NPM` varchar(12) NOT NULL DEFAULT '',
  `Nama` varchar(30) DEFAULT NULL,
  `Tempat` varchar(30) DEFAULT NULL,
  `Jenis` varchar(200) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dedicationmhs`
--

INSERT INTO `dedicationmhs` (`ID`, `NPM`, `Nama`, `Tempat`, `Jenis`, `Tanggal`) VALUES
(1, '140810140005', 'Rifqi Aditya Riadhi ', 'Fakultas FMIPA', 'Fun with Multimedia: SMP Muhamadiah Jatinangor', '2017-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `ID` int(4) NOT NULL,
  `NIDN` varchar(12) NOT NULL DEFAULT '',
  `Nama` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`ID`, `NIDN`, `Nama`, `Email`, `gambar`) VALUES
(2, '12345', 'juli', 'ajajaja', '5031992668_84ae250f7c_b.jpg'),
(1, '1401294141', 'Erick Paulus', 'Erickpaulus@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `ID` int(4) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int(11) NOT NULL,
  `title` varchar(12) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `ID` int(4) NOT NULL,
  `NPM` varchar(12) NOT NULL DEFAULT '',
  `Nama` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(4) NOT NULL,
  `Judul` varchar(30) DEFAULT NULL,
  `Isi` text,
  `gambar` varchar(100) DEFAULT NULL,
  `Tag` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `Judul`, `Isi`, `gambar`, `Tag`) VALUES
(1, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsumaasdasdas</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, 'What'),
(2, 'Why do we use it?', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', NULL, 'Why'),
(3, 'Where does it come from?', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', NULL, 'Where'),
(4, 'Where can I get some?', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', NULL, 'Where'),
(5, 'The standard Lorem', '<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>', NULL, 'THe'),
(6, 'Section 1.10.32', '<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>', NULL, 'Section'),
(7, '1940', '<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>', NULL, '1940'),
(8, 'aku anak sehat', '<p>oahl;h aka akhdlaahsd kahdalh dakkakakakakakakkakakakka babababab</p>', 'eek.jpg', 'hahahahaah'),
(9, 'lkakllskalkkajhk', '<p>jhgdkjahkkdsaliiollkdajlsk</p>', '5031992668_84ae250f7c_b.jpg', 'hdsalkkldallllalal'),
(10, 'lkjlkdslklksl;slslslk', '<p>ksljfsla;ada</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>a</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>a</p>', '5031992668_84ae250f7c_b.jpg', 'jkhajkdakkkakka'),
(11, 'sdfghj', '<p>dfghuskkakakakaakak</p>', 'Untitled Diagram.png', 'kjshjj');

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE `partnership` (
  `ID` int(4) NOT NULL,
  `Partner` varchar(30) NOT NULL DEFAULT '',
  `Program` varchar(30) DEFAULT NULL,
  `Jenis` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partnership`
--

INSERT INTO `partnership` (`ID`, `Partner`, `Program`, `Jenis`) VALUES
(1, 'Abduttawab Foundation', 'Scholarship', '????');

-- --------------------------------------------------------

--
-- Table structure for table `publicationdosen`
--

CREATE TABLE `publicationdosen` (
  `ID` int(4) NOT NULL,
  `NIDN` varchar(12) NOT NULL DEFAULT '',
  `Nama` varchar(30) DEFAULT NULL,
  `Judul` varchar(30) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Keterangan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publicationdosen`
--

INSERT INTO `publicationdosen` (`ID`, `NIDN`, `Nama`, `Judul`, `Tanggal`, `Keterangan`) VALUES
(1, '124141', 'Erick Paulus', NULL, NULL, NULL),
(2, '124141', 'Erick Paulus', NULL, NULL, NULL),
(3, '124141', 'Erick Paulus', 'lalalal', '2017-01-17', 'lalaal'),
(4, '124141', 'Erick Paulus', 'lalalal', '2017-01-17', 'lalaal');

-- --------------------------------------------------------

--
-- Table structure for table `publicationmhs`
--

CREATE TABLE `publicationmhs` (
  `ID` int(4) NOT NULL,
  `NPM` varchar(12) NOT NULL DEFAULT '',
  `Nama` varchar(30) DEFAULT NULL,
  `Judul` varchar(30) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Keterangan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publicationmhs`
--

INSERT INTO `publicationmhs` (`ID`, `NPM`, `Nama`, `Judul`, `Tanggal`, `Keterangan`) VALUES
(1, '140810140031', 'Aini Novianty', 'Pembangunan Irigasi', '2007-12-17', 'Delegasi Huawei'),
(2, 'b', 'sbsbs', 'sbbsbsbbs', '2017-11-04', 'sbsbs');

-- --------------------------------------------------------

--
-- Table structure for table `researchdosen`
--

CREATE TABLE `researchdosen` (
  `ID` int(4) NOT NULL,
  `NIDN` varchar(12) DEFAULT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `Judul` varchar(500) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Jenis` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `researchdosen`
--

INSERT INTO `researchdosen` (`ID`, `NIDN`, `Nama`, `Judul`, `Tanggal`, `Jenis`) VALUES
(1, '140810140063', 'ilyas abduttawab', 'lll', '2017-11-09', 'llaalala');

-- --------------------------------------------------------

--
-- Table structure for table `researchmhs`
--

CREATE TABLE `researchmhs` (
  `ID` int(4) NOT NULL,
  `NPM` varchar(12) NOT NULL DEFAULT '',
  `Nama` varchar(30) DEFAULT NULL,
  `Judul` varchar(50) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `Jenis` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `researchmhs`
--

INSERT INTO `researchmhs` (`ID`, `NPM`, `Nama`, `Judul`, `Tanggal`, `Jenis`) VALUES
(1, '140810140063', 'Ilyas Abduttawab', 'lalaalall', '2009-09-18', 'lalaaalla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievementdosen`
--
ALTER TABLE `achievementdosen`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `achievementmhs`
--
ALTER TABLE `achievementmhs`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `dedicationdosen`
--
ALTER TABLE `dedicationdosen`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `dedicationmhs`
--
ALTER TABLE `dedicationmhs`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIDN`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NPM`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `partnership`
--
ALTER TABLE `partnership`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `publicationdosen`
--
ALTER TABLE `publicationdosen`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `publicationmhs`
--
ALTER TABLE `publicationmhs`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `researchdosen`
--
ALTER TABLE `researchdosen`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `researchmhs`
--
ALTER TABLE `researchmhs`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievementdosen`
--
ALTER TABLE `achievementdosen`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `achievementmhs`
--
ALTER TABLE `achievementmhs`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dedicationdosen`
--
ALTER TABLE `dedicationdosen`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `dedicationmhs`
--
ALTER TABLE `dedicationmhs`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `partnership`
--
ALTER TABLE `partnership`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publicationdosen`
--
ALTER TABLE `publicationdosen`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publicationmhs`
--
ALTER TABLE `publicationmhs`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `researchdosen`
--
ALTER TABLE `researchdosen`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `researchmhs`
--
ALTER TABLE `researchmhs`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
