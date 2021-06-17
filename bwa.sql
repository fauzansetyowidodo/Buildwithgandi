-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Jun 2021 pada 15.53
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16970432_bwa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(100) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `isi` longtext NOT NULL,
  `tanggal` date NOT NULL DEFAULT '1999-01-01',
  `id_user` int(100) NOT NULL,
  `id_kategori_artikel` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `foto`, `isi`, `tanggal`, `id_user`, `id_kategori_artikel`) VALUES
(2, 'PHP', 'php (1).png', '<p>Pengertian PHP<strong>, PHP Adalah</strong>&nbsp;bahasa scripting server-side, Bahasa&nbsp;pemrograman yang digunakan untuk mengembangkan situs web statis atau situs web dinamis atau aplikasi Web. PHP singkatan dari&nbsp;<em>Hypertext Pre-processor</em>, yang sebelumnya disebut&nbsp;<em>Personal Home Pages</em>.</p>\r\n\r\n<p>Script sendiri merupakan sekumpulan instruksi pemrograman yang ditafsirkan pada saat runtime. Sedangkan Bahasa scripting adalah bahasa yang menafsirkan skrip saat runtime. Dan biasanya tertanam ke dalam lingkungan perangkat lunak lain.</p>\r\n\r\n<p>Karena php merupakan scripting server-side maka jenis bahasa pemrograman ini nantinya script/program tersebut akan dijalankan/diproses oleh server. Berbeda dengan javascript yang client-side.</p>\r\n\r\n<p>PHP adalah bahasa pemrograman umum yang berarti php dapat disematkan ke dalam kode HTML, atau dapat digunakan dalam kombinasi dengan berbagai sistem&nbsp;<a href=\"https://www.jagoanhosting.com/blog/template-wordpress-gratis-2019/\">templat web</a>, sistem manajemen konten web, dan kerangka kerja web.</p>\r\n', '2021-06-02', 1, 2),
(3, 'Java', 'java (1).png', '<p>Java adalah bahasa pemrograman yang multi platform dan multi device. Sekali anda menuliskan sebuah program dengan menggunakan Java, anda dapat menjalankannya hampir di semua komputer dan perangkat lain yang support Java, dengan sedikit perubahan atau tanpa perubahan sama sekali dalam kodenya. Aplikasi dengan berbasis Java ini dikompulasikan ke dalam p-code dan bisa dijalankan dengan Java Virtual Machine. Fungsionalitas dari Java ini dapat berjalan dengan platform&nbsp;<a href=\"https://belajar-komputer-mu.com/pengertian-sistem-operasi-komputer-operating-system/\" target=\"_blank\">sistem operasi</a>&nbsp;yang berbeda karena sifatnya yang umum dan non-spesifik.</p>\r\n\r\n<p>Slogan Java adalah &acirc;&euro;&oelig;Tulis sekali, jalankan di manapun&acirc;&euro;. Sekarang ini Java menjadi sebuah bahasa pemrograman yang populer dan dimanfaatkan secara luas untuk pengembangan perangkat lunak. Kebanyakan perangkat lunak yang menggunakan&nbsp;<a href=\"https://belajar-komputer-mu.com/pengertian-pemrograman-java-kelebihan-dan-kekurangan/\" target=\"_blank\">Java</a>&nbsp;adalah ponsel feature dan ponsel pintar atau smartphone</p>\r\n', '2021-06-02', 1, 1),
(4, 'Phyton', 'python (1).png', '<p>Python adalah salah satu bahasa pemrograman yang dapat melakukan eksekusi sejumlah instruksi multi guna secara langsung (interpretatif) dengan metode orientasi objek. Python adalah bahasa pemrograman yang paling mudah dipahami. Python dibuat oleh programmer Belanda bernama Guido Van Rossum.</p>\r\n\r\n<p>Di era digital segala profesi yang berkaitan dengan teknologi dan komputer dianggap menjanjikan di masa depan, salah satunya adalah<em>&nbsp;programmer</em>. Banyak hal yang bisa Anda ciptakan saat menekuni dunia&nbsp;<em>programmer</em>, seperti<em>&nbsp;software,</em>&nbsp;aplikasi pada&nbsp;<em>smartphone,&nbsp;</em>program GUI, program CLI,&nbsp;<em>Internet of Things, games</em>&nbsp;dan lain-lainnya. Untuk dapat membuat itu semua, seorang&nbsp;<em>programmer</em>&nbsp;harus menguasai bahasa pemrograman.. Ada banyak bahasa pemrograman yang bisa dipelajari, namun banyak yang merekomendasikan Python sebagai salah satu bahasa pemrograman. Mengapa demikian? Banyak yang berasumsi bahwa Python lebih mudah dimengerti dibandingkan bahasa pemrograman lainnya. Informasi selengkapnya akan dipaparkan pada artikel berikut ini.</p>\r\n', '2021-06-02', 1, 1),
(5, 'HTML', 'html (1).png', '<p><strong>Desain</strong>&nbsp;biasa diterjemahkan sebagai&nbsp;<a href=\"https://id.wikipedia.org/wiki/Seni\">seni</a>&nbsp;terapan,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Arsitektur\">arsitektur</a>, dan berbagai pencapaian kreatif lainnya. Dalam sebuah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Kalimat\">kalimat</a>, kata &quot;desain&quot; bisa digunakan, baik sebagai&nbsp;<a href=\"https://id.wikipedia.org/wiki/Kata_benda\">kata benda</a>&nbsp;maupun&nbsp;<a href=\"https://id.wikipedia.org/wiki/Kata_kerja\">kata kerja</a>. Sebagai kata kerja, &quot;desain&quot; memiliki arti &quot;proses untuk membuat dan menciptakan objek baru&quot;. Sebagai kata benda, &quot;desain&quot; digunakan untuk menyebut hasil akhir dari sebuah proses kreatif, baik itu berwujud sebuah rencana, proposal, atau berbentuk benda nyata.</p>\r\n', '2021-06-05', 1, 2),
(6, 'Apa itu JSON ?', 'json_logo-555px.png', '<p><strong>JSON</strong>&nbsp;(dilafalkan &quot;Jason&quot;), singkatan dari&nbsp;<em>JavaScript Object Notation</em>&nbsp;(<a href=\"https://id.wikipedia.org/wiki/Bahasa_Indonesia\">bahasa Indonesia</a>: notasi objek JavaScript), adalah suatu&nbsp;<a href=\"https://id.wikipedia.org/w/index.php?title=Format&amp;action=edit&amp;redlink=1\">format</a>&nbsp;ringkas pertukaran data&nbsp;<a href=\"https://id.wikipedia.org/wiki/Komputer\">komputer</a>. Formatnya berbasis teks dan terbaca-manusia serta digunakan untuk merepresentasikan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Struktur_data\">struktur data</a>&nbsp;sederhana dan&nbsp;<a href=\"https://id.wikipedia.org/w/index.php?title=Larik_asosiatif&amp;action=edit&amp;redlink=1\">larik asosiatif</a>&nbsp;(disebut objek). Format JSON sering digunakan untuk mentransmisikan data terstruktur melalui suatu koneksi jaringan pada suatu proses yang disebut&nbsp;<a href=\"https://id.wikipedia.org/wiki/Serialisasi\">serialisasi</a>. Aplikasi utamanya adalah pada pemrograman&nbsp;<a href=\"https://id.wikipedia.org/wiki/Aplikasi_web\">aplikasi web</a>&nbsp;<a href=\"https://id.wikipedia.org/wiki/AJAX\">AJAX</a>&nbsp;dengan berperan sebagai alternatif terhadap penggunaan tradisional format&nbsp;<a href=\"https://id.wikipedia.org/wiki/XML\">XML</a>.</p>\r\n\r\n<p>Walaupun JSON didasarkan pada subset&nbsp;<a href=\"https://id.wikipedia.org/wiki/Bahasa_pemrograman\">bahasa pemrograman</a>&nbsp;<a href=\"https://id.wikipedia.org/wiki/JavaScript\">JavaScript</a>&nbsp;(secara spesifik, edisi ketiga standar ECMA-262, Desember 1999&nbsp;<a href=\"https://id.wikipedia.org/wiki/JSON#cite_note-1\">[1]</a>) dan umumnya digunakan dengan bahasa tersebut, JSON dianggap sebagai format data yang tak tergantung pada suatu bahasa. Kode untuk pengolahan dan pembuatan data JSON telah tersedia untuk banyak jenis bahasa pemrograman. Situs json.org menyediakan daftar komprehensif pengikatan JSON yang tersedia, disusun menurut bahasa.</p>\r\n', '2021-06-05', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id_kategori_artikel` int(100) NOT NULL,
  `kategori_artikel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`id_kategori_artikel`, `kategori_artikel`) VALUES
(1, 'Enterprenuer'),
(2, 'Logika'),
(4, 'Elektronika'),
(5, 'Bussiness'),
(6, 'Internet of Things');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_kelas`
--

CREATE TABLE `kategori_kelas` (
  `id_kategori_kelas` int(100) NOT NULL,
  `kategori_kelas` varchar(1000) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_kelas`
--

INSERT INTO `kategori_kelas` (`id_kategori_kelas`, `kategori_kelas`, `deskripsi`) VALUES
(2, 'Programming', '<p>Java adalah bahasa pemrograman tingkat tinggi yang berorientasi objek (OOP)&nbsp;</p>\r\n'),
(4, 'Design', '<p><strong>Desain</strong>&nbsp;biasa diterjemahkan&nbsp;</p>\r\n'),
(5, 'Networking', '<p>dengan.</p>\r\n'),
(6, 'Machine Learning', '<p>disiplin ilmu yang mencakup perancangan dan pengembangan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Algoritme\">algoritme</a>&nbsp;yang memungkinkan komputer untuk mengembangkan perilaku berdasarkan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Data\">data</a>&nbsp;empiris, seperti dari sensor data&nbsp;<a href=\"https://id.wikipedia.org/wiki/Basis_data\">basis data</a>. Sistem pembelajar dapat memanfaatkan contoh (data) untuk menangkap ciri yang diperlukan dari probabilitas yang mendasarinya (yang tidak diketahui). Data dapat dilihat sebagai contoh yang menggambarkan hubungan antara variabel yang diamati. Fokus besar penelitian pemelajaran mesin adalah bagaimana mengenali secara otomatis pola kompleks dan membuat keputusan cerdas berdasarkan data. Kesukarannya terjadi karena himpunan semua peri laku yang mungkin, dari semua masukan yang dimungkinkan, terlalu besar untuk diliput oleh himpunan contoh pengamatan (data pelatihan). Karena itu pembelajar harus merampatkan (generalisasi) perilaku dari contoh yang ada untuk menghasilkan keluaran yang berguna dalam kasus-kasus baru.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `id_mentor` int(100) NOT NULL,
  `id_kategori_kelas` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `foto`, `nama_kelas`, `deskripsi`, `id_mentor`, `id_kategori_kelas`) VALUES
(6, 'osk.PNG', 'hari raya', '<p>wwwwwwwww</p>\r\n', 2, 2),
(7, 'uiux.png', 'Kelas Design Thinking', '<p>Desain UI adalah keindahan tampilan, Desain UX adalah kepuasan menggunakan produk</p>\r\n', 4, 4),
(8, 'tuple-300x189.png', 'Machine learning with phyton', '<p>Kelas phyton advanced</p>\r\n', 8, 6),
(9, '002.png', 'Static Routing menggunakan Mikrotik', '<p><strong>Perutean statis</strong>&nbsp;adalah bentuk&nbsp;<a href=\"https://id.wikipedia.org/wiki/Perutean\">perutean</a>&nbsp;yang terjadi ketika&nbsp;<a href=\"https://id.wikipedia.org/wiki/Perute\">perute</a>&nbsp;menggunakan entri&nbsp;</p>\r\n', 2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(100) NOT NULL,
  `foto_konten` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `foto_konten`, `judul`, `isi`) VALUES
(3, 'wallpaperflare.com_wallpaper (2).jpg', 'Tentang perusahaan kami', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo'),
(4, 'Resep-BabiPanggangCrispy-SiaoBak2528CrispyRoastedPorkBelly2529.png', 'The little nightmares', '<p>sdawadw</p>\r\n'),
(5, 'Calendar.svg', 'Design', '<p>Sekarang belajar desain itu bisa kalian lakukan dimana saja bahkan tanpa perlu keluar rumah lho. Menarik kan? Kamu tetap bisa produktif walau dari rumah</p>\r\n'),
(6, 'athletic-club-madrid.svg', 'Coding', '<p>Awali langkah menjadi programmer dengan mengikuti program pembelajaran berdasarkan kebutuhan industri</p>\r\n'),
(7, 'facebook-3-2.svg', 'Networking', '<p>Dengan mengetahui prinsip dari komputer networling maka kita pun bisa lebih bijaksana dalam memanfaatkan sumber daya sistem IT yang ada.</p>\r\n'),
(8, 'football.svg', 'Digital Marketing', '<p>Belajar teknis digital marketing kini sangat bermanfaat terutama untuk membantu meningkatkan pemasaran usaha atau jasa.</p>\r\n'),
(9, 'ilya-pavlov-OqtafYT5kTw-unsplash.jpg', 'Learn With Gandi', '<p>Website untuk belajar design dan code dari mentor yang sangat berpengalaman di bidangnya masing-masing.</p>\r\n'),
(10, '002-min.png', 'About Us', '<p>Buildwith gandi merupakan sebuah website yang memberikan layanan kurusus dalam skill IT yang mengikuti perkembangan zaman</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentor`
--

CREATE TABLE `mentor` (
  `id_mentor` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_pekerjaan` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mentor`
--

INSERT INTO `mentor` (`id_mentor`, `nama`, `foto`, `email`, `role_pekerjaan`, `deskripsi`) VALUES
(2, 'sapudi gunandar', 'SHAR.1764.476.2.jpg', 'admin@google.com', 'Product Manager', '<p>Sapudi Gunandar adalah seorang Product Manager di Gojek</p>\r\n'),
(4, 'Gandi wirapeta', 'team-1.jpg', 'asek@gmail.com', 'Network Administrator', '<p>Gandi Wirapeta merupakan seorang network administror di perusahaan cisco</p>\r\n'),
(8, 'Galih Sandhika', 'mourinho.jpg', 'galih@email.com', 'Fullstack Web Developer', '<p>Galih Sandhika&nbsp; merupakan programmer fullstack yang berfokus di bahasa PHP dan framework Laravel 8</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `foto`, `email`, `username`, `password`, `level`) VALUES
(1, 'Revanta Aryadi Wafeeq', 'WhatsApp Image 2021-05-27 at 3.42.04 PM.jpeg', 'revanta@student.ub.ac.id', 'revan', '66cca4f80d1138dcd0c942f18504f4b8', 'Superadmin'),
(2, 'Seno Nugraha', 'Colbalt_blade.jpg', 'seno@email.com', 'seno', 'fa472db1114a7e002c4edcd25ab9bc27', 'Admin'),
(5, 'Gandi Wirapeta', 'WhatsApp Image 2021-06-07 at 12.31.49.jpeg', 'gandiwira4@gmail.com', 'gandiwirp_', 'ef94b1ef99fd605d9d8e14e6c7696068', 'Admin'),
(6, 'Fauzan Athallah Setyowidodo', '1618115346615.jpg', 'fauzanathallah@student.ub.ac.id', 'fauzan', 'eacaf53cb2b533a68baa765faedf7e59', 'Superadmin'),
(7, 'Muhammad Davva Pratama', 'Davva.jpg', 'davvapratama21@gmail.com', 'dava', 'af3d6c25fd83baac19265daafc91a2a8', 'Superadmin'),
(8, 'Yulisa Dewi Musarofah', 'IMG_1114 (2).JPG', 'yulisadewi95@gmail.com', 'yulisa', '270aaedcc1c81354191c50009c41da73', 'Superadmin'),
(9, 'Galih Bagus Prasojo', 'WhatsApp Image 2021-06-07 at 18.48.58.jpeg', 'bagusprasojogalih15@gmail.com', 'galih', '027dc74f0bbf09a61a36ec7f0d9e08ca', 'Superadmin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori_kelas` (`id_kategori_artikel`);

--
-- Indeks untuk tabel `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id_kategori_artikel`);

--
-- Indeks untuk tabel `kategori_kelas`
--
ALTER TABLE `kategori_kelas`
  ADD PRIMARY KEY (`id_kategori_kelas`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_mentor` (`id_mentor`),
  ADD KEY `id_kategori_kelas` (`id_kategori_kelas`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id_mentor`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  MODIFY `id_kategori_artikel` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori_kelas`
--
ALTER TABLE `kategori_kelas`
  MODIFY `id_kategori_kelas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id_mentor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_1` FOREIGN KEY (`id_kategori_artikel`) REFERENCES `kategori_artikel` (`id_kategori_artikel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_1` FOREIGN KEY (`id_kategori_kelas`) REFERENCES `kategori_kelas` (`id_kategori_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_2` FOREIGN KEY (`id_mentor`) REFERENCES `mentor` (`id_mentor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
