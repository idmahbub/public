DROP TABLE cbt_admin;

CREATE TABLE `cbt_admin` (
  `Urut` int(11) NOT NULL auto_increment,
  `XSekolah` varchar(250) collate latin1_general_ci NOT NULL,
  `XStatus` varchar(1) collate latin1_general_ci NOT NULL,
  `user` varchar(150) collate latin1_general_ci NOT NULL,
  `password` varchar(150) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO cbt_admin VALUES("2","","","admin","adminwoka");



DROP TABLE cbt_jawaban;

CREATE TABLE `cbt_jawaban` (
  `Urutan` int(11) NOT NULL auto_increment,
  `Urut` int(11) NOT NULL,
  `XNomerSoal` int(11) NOT NULL,
  `XKodeSoal` varchar(10) collate latin1_general_ci NOT NULL,
  `XTokenUjian` varchar(5) collate latin1_general_ci NOT NULL,
  `XA` int(11) NOT NULL,
  `XB` int(11) NOT NULL,
  `XC` int(11) NOT NULL,
  `XD` int(11) NOT NULL,
  `XE` int(11) NOT NULL,
  `XJawaban` varchar(1) collate latin1_general_ci NOT NULL,
  `XKodeJawab` varchar(2) collate latin1_general_ci NOT NULL,
  `XNilaiJawab` varchar(1) collate latin1_general_ci NOT NULL,
  `XNilai` int(11) NOT NULL,
  `XRagu` varchar(1) collate latin1_general_ci NOT NULL,
  `XTglJawab` date NOT NULL,
  `XJamJawab` time NOT NULL,
  `XKunciJawaban` varchar(1) collate latin1_general_ci NOT NULL,
  `XUserJawab` varchar(20) collate latin1_general_ci NOT NULL,
  `Campur` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Urutan`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO cbt_jawaban VALUES("1","1","14","AK-001","XGHXJ","1","2","3","4","5","C","XC","3","0","","2016-12-03","11:59:41","1","K05101171014","XGHXJ");
INSERT INTO cbt_jawaban VALUES("2","2","13","AK-001","XGHXJ","1","2","3","4","5","A","XA","1","0","","2016-12-03","11:59:46","2","K05101171014","XGHXJ");
INSERT INTO cbt_jawaban VALUES("3","3","12","AK-001","XGHXJ","1","2","3","4","5","E","XE","5","0","","2016-12-03","11:59:51","3","K05101171014","XGHXJ");
INSERT INTO cbt_jawaban VALUES("4","4","11","AK-001","XGHXJ","1","2","3","4","5","A","XA","1","0","","2016-12-03","11:59:54","4","K05101171014","XGHXJ");



DROP TABLE cbt_kelas;

CREATE TABLE `cbt_kelas` (
  `Urut` int(11) NOT NULL auto_increment,
  `XKodeLevel` varchar(5) collate latin1_general_ci NOT NULL,
  `XLevelKelas` varchar(5) collate latin1_general_ci NOT NULL,
  `XKodeKelas` varchar(10) collate latin1_general_ci NOT NULL,
  `XStatusKelas` varchar(1) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO cbt_kelas VALUES("1","SMK","XII","TKJ","1");
INSERT INTO cbt_kelas VALUES("2","SMK","XII","TPE","1");
INSERT INTO cbt_kelas VALUES("3","SMK","XII","TITL","1");
INSERT INTO cbt_kelas VALUES("4","SD","I","IA","");
INSERT INTO cbt_kelas VALUES("6","SMP","VII","B","");
INSERT INTO cbt_kelas VALUES("7","SMP","VIII","c","");
INSERT INTO cbt_kelas VALUES("9","SMK","XII","Akuntansi","1");



DROP TABLE cbt_mapel;

CREATE TABLE `cbt_mapel` (
  `Urut` int(11) NOT NULL auto_increment,
  `XKodeKelas` varchar(10) collate latin1_general_ci NOT NULL,
  `XKodeMapel` varchar(10) collate latin1_general_ci NOT NULL,
  `XNamaMapel` varchar(30) collate latin1_general_ci NOT NULL,
  `XKodeSoal` varchar(10) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO cbt_mapel VALUES("15","","SMK15","BAHASA LAMPUNG","");
INSERT INTO cbt_mapel VALUES("3","","SMK3","BAHASA INGGRIS TEKNIK","");
INSERT INTO cbt_mapel VALUES("4","","SMK4","BAHASA INGGRIS PARIWISATA","");
INSERT INTO cbt_mapel VALUES("5","","SMK5","MATEMATIKA TEKNIK","");
INSERT INTO cbt_mapel VALUES("6","","SMK6","MATEMATIKA PARIWISATA","");
INSERT INTO cbt_mapel VALUES("7","","SMK7","PRODUKTIF TKJ","");
INSERT INTO cbt_mapel VALUES("8","","SMK8","PRODUKTIF RPL","");
INSERT INTO cbt_mapel VALUES("9","","SMK9","PRODUKTIF TB","");
INSERT INTO cbt_mapel VALUES("10","","SMK10","PRODUKTIF MM","");
INSERT INTO cbt_mapel VALUES("11","","SMK11","PRODUKTIF TGB","");
INSERT INTO cbt_mapel VALUES("12","","SMK12","PRODUKTIF TKBB","");
INSERT INTO cbt_mapel VALUES("13","","SMK13","PRODUKTIF TPE","");
INSERT INTO cbt_mapel VALUES("14","","SMK14","PRODUKTIF TITL","");
INSERT INTO cbt_mapel VALUES("16","","SMK100","BAHASA ARAB","");
INSERT INTO cbt_mapel VALUES("17","","SMP01","MATEMATIKA","");
INSERT INTO cbt_mapel VALUES("21","","SMK001","PRODUKTIF AKUNTANSI","");
INSERT INTO cbt_mapel VALUES("22","","SMK212","PROD.AKUNTANSI","");



DROP TABLE cbt_siswa;

CREATE TABLE `cbt_siswa` (
  `Urut` int(11) NOT NULL auto_increment,
  `XNomerUjian` varchar(20) collate latin1_general_ci NOT NULL,
  `XNIK` varchar(10) collate latin1_general_ci NOT NULL,
  `XNamaSiswa` varchar(255) collate latin1_general_ci NOT NULL,
  `XKodeKelas` varchar(10) collate latin1_general_ci NOT NULL,
  `XNamaKelas` varchar(10) collate latin1_general_ci NOT NULL,
  `XJenisKelamin` varchar(1) collate latin1_general_ci NOT NULL,
  `XPassword` varchar(150) collate latin1_general_ci NOT NULL,
  `XFoto` varchar(250) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO cbt_siswa VALUES("1","K05101171014","10-117-101","IKA PUJI ASTUTIK","Akuntansi","XII","P","UBK4450","");
INSERT INTO cbt_siswa VALUES("2","K05101171023","10-117-102","INA NURINDAH QISTHI","Akuntansi","XII","P","UBK4454","");
INSERT INTO cbt_siswa VALUES("3","K05101171032","10-117-103","JULIA SABRINA PUTRI","Akuntansi","XII","P","UBK4460","");
INSERT INTO cbt_siswa VALUES("4","K05101171049","10-117-104","LUSIANAWIDIASTUTI","Akuntansi","XII","P","UBK4471","");
INSERT INTO cbt_siswa VALUES("5","K05101171058","10-117-105","LUTHFIYANAN MUCHSINAH","Akuntansi","XII","P","UBK4472","");
INSERT INTO cbt_siswa VALUES("6","K05101171067","10-117-106","NAHLA NATHA ARISTA","Akuntansi","XII","P","UBK4496","");
INSERT INTO cbt_siswa VALUES("7","K05101171076","10-117-107","NUR ASMAIYAH","Akuntansi","XII","P","UBK4515","");
INSERT INTO cbt_siswa VALUES("8","K05101171094","10-117-109","NUR FAIDATUL HASANAH","Akuntansi","XII","P","UBK4519","");
INSERT INTO cbt_siswa VALUES("9","K05101171103","10-117-110","NUR ZULIANA","Akuntansi","XII","P","UBK4534","");
INSERT INTO cbt_siswa VALUES("10","K05101171129","10-117-112","PINTAN NURUL ARIFIN","Akuntansi","XII","P","UBK4536","");
INSERT INTO cbt_siswa VALUES("11","K05101171138","10-117-113","PRIHATIN NINGRUM","Akuntansi","XII","P","UBK4538","");
INSERT INTO cbt_siswa VALUES("12","K05101171147","10-117-114","PUTRI CHUSNANIAH","Akuntansi","XII","P","UBK4541","");
INSERT INTO cbt_siswa VALUES("13","K05101171156","10-117-115","RISKA DEWI SAFITRI","Akuntansi","XII","P","UBK4551","");
INSERT INTO cbt_siswa VALUES("14","K05101171165","10-117-116","RIZKI AYU SONIA","Akuntansi","XII","P","UBK4555","");
INSERT INTO cbt_siswa VALUES("15","K05101171174","10-117-117","ROHMATUL BARIROH L FAIQOH","Akuntansi","XII","P","UBK4559","");
INSERT INTO cbt_siswa VALUES("16","K05101171192","10-117-119","SULISSTIYANI","Akuntansi","XII","P","UBK4587","");
INSERT INTO cbt_siswa VALUES("17","K05101171209","10-117-120","SUSANTI NUR AFIDAH","Akuntansi","XII","P","UBK4588","");
INSERT INTO cbt_siswa VALUES("18","K05101171218","10-117-121","TRI NOVIYANTI LUCKYTA","Akuntansi","XII","P","UBK4593","");
INSERT INTO cbt_siswa VALUES("19","K05101171227","10-117-122","VENI KARTIKA SARI","Akuntansi","XII","P","UBK4596","");
INSERT INTO cbt_siswa VALUES("20","K05101171236","10-117-123","YULI ANDRIANARTO","Akuntansi","XII","P","UBK4608","");
INSERT INTO cbt_siswa VALUES("21","K05101171245","10-117-124","YULITA HARDINI AKBAR","Akuntansi","XII","P","UBK4612","");
INSERT INTO cbt_siswa VALUES("22","K05101171254","10-117-125","AINNAYAH AMY FERONNICA","Akuntansi","XII","P","UBK4366","");
INSERT INTO cbt_siswa VALUES("23","K05101171263","10-117-126","AMELLI APRINI MACHFUD","Akuntansi","XII","P","UBK4374","");
INSERT INTO cbt_siswa VALUES("24","K05101171645","10-117-164","SOFIA RACHMAH SABILLA","Akuntansi","XII","P","UBK4584","");
INSERT INTO cbt_siswa VALUES("25","K05101171654","10-117-165","SUCI RODHIYAH SARI","Akuntansi","XII","P","UBK4586","");
INSERT INTO cbt_siswa VALUES("26","K05101171663","10-117-166","TAZKIYATUL LAILIYAH IMRON","Akuntansi","XII","P","UBK4589","");
INSERT INTO cbt_siswa VALUES("27","K05101171672","10-117-167","TITAH RIZKY DWI ANGGRAINI","Akuntansi","XII","P","UBK4591","");
INSERT INTO cbt_siswa VALUES("28","K05101171689","10-117-168","ZA1DATUR RIZQIYAH","Akuntansi","XII","P","UBK4613","");
INSERT INTO cbt_siswa VALUES("29","K05101171698","10-117-169","ALFIYATUL KHASANAH","Akuntansi","XII","P","UBK4369","");
INSERT INTO cbt_siswa VALUES("30","K05101171716","10-117-171","ALVIVAH DEWI","Akuntansi","XII","P","UBK4372","");
INSERT INTO cbt_siswa VALUES("31","K05101171725","10-117-172","ANISA FIRDAUSI","Akuntansi","XII","P","UBK4380","");
INSERT INTO cbt_siswa VALUES("32","K05101171734","10-117-173","AN ISA VIRDATUL JANNAH","Akuntansi","XII","P","UBK4381","");
INSERT INTO cbt_siswa VALUES("33","K05101171743","10-117-174","AQNES BRILIYANA MAHARDHIKA","Akuntansi","XII","P","UBK4384","");
INSERT INTO cbt_siswa VALUES("34","K05101171752","10-117-175","AULIA PRADANI NURROCHMAH","Akuntansi","XII","P","UBK4393","");
INSERT INTO cbt_siswa VALUES("35","K05101171769","10-117-176","DELLYA FEBRIANI","Akuntansi","XII","P","UBK4404","");
INSERT INTO cbt_siswa VALUES("36","K05101171778","10-117-177","DHEA ELSIYA FEBRIANI","Akuntansi","XII","P","UBK4407","");
INSERT INTO cbt_siswa VALUES("37","K05101171787","10-117-178","DINDA RASI AGUSTIEN","Akuntansi","XII","P","UBK4414","");
INSERT INTO cbt_siswa VALUES("38","K05101171796","10-117-179","FARAH DILA LEG A","Akuntansi","XII","P","UBK4424","");
INSERT INTO cbt_siswa VALUES("39","K05101171805","10-117-180","FITRIA RUSILAWATI","Akuntansi","XII","P","UBK4434","");
INSERT INTO cbt_siswa VALUES("40","K05101171814","10-117-181","FUJI ISNAWATI","Akuntansi","XII","P","UBK4440","");
INSERT INTO cbt_siswa VALUES("41","K05101171832","10-117-183","IMROATUL FADHIILAH","Akuntansi","XII","P","UBK4453","");
INSERT INTO cbt_siswa VALUES("42","K05101171858","10-117-185","LARAS AYUNINGTYAS","Akuntansi","XII","P","UBK4468","");
INSERT INTO cbt_siswa VALUES("43","K05101171867","10-117-186","NAFISATUL ISNAINIYAH","Akuntansi","XII","P","UBK4494","");
INSERT INTO cbt_siswa VALUES("44","K05101171876","10-117-187","NOVITA INDAH SUKMA","Akuntansi","XII","P","UBK4512","");
INSERT INTO cbt_siswa VALUES("45","K05101171885","10-117-188","NUR AZIZAH","Akuntansi","XII","P","UBK4516","");
INSERT INTO cbt_siswa VALUES("46","K05101171894","10-117-189","NUR HAYATI","Akuntansi","XII","P","UBK4520","");
INSERT INTO cbt_siswa VALUES("47","K05101171912","10-117-191","NUR KHALIDAH AHMAD","Akuntansi","XII","P","UBK4523","");
INSERT INTO cbt_siswa VALUES("48","A1","A1","A1","TKJ","XII","L","A1","");



DROP TABLE cbt_siswa_ujian;

CREATE TABLE `cbt_siswa_ujian` (
  `Urut` int(11) NOT NULL auto_increment,
  `XNomerUjian` varchar(15) collate latin1_general_ci NOT NULL,
  `XKodeKelas` varchar(10) collate latin1_general_ci NOT NULL,
  `XKodeMapel` varchar(10) collate latin1_general_ci NOT NULL,
  `XKodeSoal` varchar(10) collate latin1_general_ci NOT NULL,
  `XJumSoal` int(11) NOT NULL,
  `XTglUjian` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `XJamUjian` time NOT NULL,
  `XMulaiUjian` time NOT NULL,
  `XLastUpdate` time NOT NULL,
  `XSisaWaktu` varchar(8) collate latin1_general_ci NOT NULL,
  `XLamaUjian` varchar(8) collate latin1_general_ci NOT NULL,
  `XTargetUjian` time NOT NULL,
  `XTokenUjian` varchar(60) collate latin1_general_ci NOT NULL,
  `XSelesaiUjian` time NOT NULL,
  `XStatusUjian` varchar(1) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO cbt_siswa_ujian VALUES("1","K05101171014","Akuntansi","SMK001","AK-001","30","2016-12-03 11:59:59","19:00:00","19:12:16","11:59:59","","01:17:44","00:00:00","UXTRU","00:00:00","9");
INSERT INTO cbt_siswa_ujian VALUES("2","K05101171014","Akuntansi","SMK212","AK-212","40","2016-12-03 11:59:59","05:21:00","05:22:07","11:59:59","","01:58:53","00:00:00","QPGFH","00:00:00","9");
INSERT INTO cbt_siswa_ujian VALUES("3","A1","TKJ","SMK7","AK-001","4","2016-12-02 09:31:52","07:44:00","07:44:09","09:31:52","","01:29:51","00:00:00","PBCPK","00:00:00","9");
INSERT INTO cbt_siswa_ujian VALUES("4","K05101171014","Akuntansi","SMK5","AK-001","4","2016-12-03 11:59:59","11:58:00","11:59:35","11:59:59","","01:28:25","00:00:00","XGHXJ","00:00:00","9");



DROP TABLE cbt_soal;

CREATE TABLE `cbt_soal` (
  `Urut` int(11) NOT NULL auto_increment,
  `XKodeMapel` varchar(10) collate latin1_general_ci NOT NULL,
  `XKodeSoal` varchar(10) collate latin1_general_ci NOT NULL,
  `XKodeKelas` varchar(5) collate latin1_general_ci NOT NULL,
  `XNomerSoal` int(11) NOT NULL,
  `XRagu` varchar(1) collate latin1_general_ci NOT NULL,
  `XTanya` text collate latin1_general_ci NOT NULL,
  `XAudioTanya` varchar(255) collate latin1_general_ci NOT NULL,
  `XVideoTanya` text collate latin1_general_ci NOT NULL,
  `XGambarTanya` text collate latin1_general_ci NOT NULL,
  `XJawab1` text collate latin1_general_ci NOT NULL,
  `XJawab2` text collate latin1_general_ci NOT NULL,
  `XJawab3` text collate latin1_general_ci NOT NULL,
  `XJawab4` text collate latin1_general_ci NOT NULL,
  `XJawab5` text collate latin1_general_ci NOT NULL,
  `XGambarJawab1` varchar(255) collate latin1_general_ci NOT NULL,
  `XGambarJawab2` varchar(255) collate latin1_general_ci NOT NULL,
  `XGambarJawab3` varchar(255) collate latin1_general_ci NOT NULL,
  `XGambarJawab4` varchar(255) collate latin1_general_ci NOT NULL,
  `XGambarJawab5` varchar(255) collate latin1_general_ci NOT NULL,
  `XKunciJawaban` varchar(1) collate latin1_general_ci NOT NULL,
  `Xidacak` int(1) NOT NULL,
  PRIMARY KEY  (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=212 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO cbt_soal VALUES("145","SMK001","AK-001","","14","","iaan barang A-1 selama bulan Juli 2013 sebagai berikut : <br />- Persediaan per 1 Juli 6.500 kg @Rp 1.000,00 <br />- Juli 8 Pembelian 8.000 kg @ Rp. 1.100,00 <br />- Juli 8 Penjualan 10.000 kg <br />Dari data diatas harga pokok persediaan pada tanggal 8 juli setelah transaksi berjumlah&hellip;&hellip;&hellip;.","","","","Rp. 4.500.000,00","Rp. 4.950.000,00","Rp. 8.150.000,00","Rp. 8.700.000,00","Rp. 10.000.000,00","","","","","","1","0");
INSERT INTO cbt_soal VALUES("144","SMK001","AK-001","","13","","Perusahaan menggunakan Metode FIFO perpetual dalam mengelolah persediaan. <br />Data persediaan selama Bulan Desember 2012 adalah sebagai berikut : <br />1. Persediaan awal&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.400 Unit @ Rp 440,00 <br />2. Pembelian&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;...800 Unit @ Rp 480,00 <br />3. Pembelian&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;600 Unit @ Rp 600,00 <br />4. Pembelian&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;200 Unit @ Rp 440,00 <br />5. Penjualan&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;500 Unit @ Rp 600,00 <br />maka laba penjualan barang dagang selama Bulan Desember sebesar&hellip;&hellip;.","","","","Rp.94,000.00","Rp.112,000.00","Rp.280,000.00","Rp.76,000.00","Rp.80,000.00","","","","","","2","0");
INSERT INTO cbt_soal VALUES("143","SMK001","AK-001","","12","","Salah satu cara penggunaan media komunikasi yaitu………..","","","","Media komunikasi via pos","Media komunikasi majalah dan koran","Media komunikasi internet","Media komunikasi televisi dan radio","Media komunikasi audio visual","","","","","","3","0");
INSERT INTO cbt_soal VALUES("142","SMK001","AK-001","","11","","If 15.00 units are on hand at December 31, the cost of ending inventory under FIFO is .........","","","","15,000,000.00","16,000,000.00","17,000,000.00","18,000,000.00","15,500,000.00","","","","","","4","0");
INSERT INTO cbt_soal VALUES("141","SMK001","AK-001","","10","","PT. Sari Asri menghapuskan piutang dagangnya Rp. 1.500.000,00 dengan metode pencatatan penghapusan tidak langsung. Jurnal yang dibuat adalah &hellip;&hellip;.","","","","Kerugian piutang Rp. 1.500.000,00 <br />Piutang dagang Rp. 1.500.000,00","Kerugian piutang Rp. 1.500.000,00 <br />Cadangan kerugian piutang Rp. 1.500.000,00","Kerugian piutang Rp. 1.500.000,00 <br />Kas Rp. 1.500.000,00","Kas Rp. 1.500.000,00 <br />Piutang dagang Rp. 1.500.000,00","Cadangan kerugian piutang Rp. 1.500.000,00<br /> Piutang dagang Rp. 1.500.000,00","","","","","","5","0");
INSERT INTO cbt_soal VALUES("140","SMK001","AK-001","","9","","Mutasi kartu piutang yang benar adalah ……..","","","","Penjualan secara kredit masuk mutasi kredit","Penghapusan piutang masuk mutasi debet","Pelunasan piutang masuk mutasi kredit","Retur penjualan masuk mutasi debet","Saldo piutang normal sebelah kredit","","","","","","1","0");
INSERT INTO cbt_soal VALUES("139","SMK001","AK-001","","8","","Dari akun-akun dibawah ini, tidak termasuk kelompok akun riiil ( real account ) adalah …","","","","Piutang usaha ( account receivable )","Asuransi dibayar dimuka ( Prepaid insurance )","Hutang wesel ( notes payable )","Beban perlengkapan kantor ( Office supplies expense )","Peralatan toko ( store equipment )","","","","","","2","0");
INSERT INTO cbt_soal VALUES("138","SMK001","AK-001","","7","","Akun hutang dagang dalam buku besar suatu perusahaan pada tanggal 31 Desember 2003 menunjukkan data sebagai berikut : 15 Dari data diatas, pernyataan-pernyataan dibawah ini benar kecuali ….","","","","Akun hutang dagang menunjukkan saldo kredit","Hutang yang dibayar sampai dengan 31 Desember 2003 berjumlah Rp 20.000.000,00","Pinjaman yang diterima sampai dengan 31 Desember 2003 untuk penambahan modal pemilik perusahaan berjumlah Rp 35.400.000,00","Hutang yang terjadi sampai 31 Desember 2003 berjumlah Rp 35.400.000,00","Hutang perusahaan yang belum dibayar per 31 Desember 2003 sebesar Rp 15.400.000,00","","","","","","3","0");
INSERT INTO cbt_soal VALUES("137","SMK001","AK-001","","6","","Akun piutang dagang dalam buku besar suatu perusahaan untuk bulan juli 2003 menunjukkan data sebagai berikut : 14 Berdasarkan data akun diatas penjualan secara kredit dalam bulan juli 2003 berjumlah","","","","Rp.9,800,000.00","Rp.11,800,000.00","Rp.15,200,000.00","Rp.17,200,000.00","Rp.27,000,000.00","","","","","","4","0");
INSERT INTO cbt_soal VALUES("136","SMK001","AK-001","","5","","Pada tanggal 5 Agustus 2013 dilakukan pembelian senilai Rp. 10.000.000,00 secara kredit dengan syarat 2/10.EOM. Pada tanggal 10 Agustus 2013 dilakukan pembayaran atas pembelian tersebut. Jurnal yang dibuat tanggal 10 Agustus 2013 adalah &hellip;&hellip;","","","","Utang dagang Rp. 10.000.000,00 <br />Kas Rp. 10.000.000,00","Pembelian Rp. 10.000.000,00 <br />Kas Rp. 10.000.000,00","Utang dagang Rp. 10.000.000,00 <br />Potongan pembelian Rp. 200.000,00 <br />Kas Rp. 9.800.000,00","Utang dagang Rp. 10.000.000,00 <br />Potongan pembelian Rp. 1.000.000,00 <br />Kas Rp. 9.000.000,00","Pembelian Rp. 10.000.000,00 <br />Potongan pembelian Rp. 200.000,00 <br />Kas Rp. 9.800.000,00","","","","","","4","0");
INSERT INTO cbt_soal VALUES("132","SMK001","AK-001","","1","","Yang dimaksud dengan prosedur kerja adalah ….","","","","Rangkaian tata kerja yang membentuk suatu kebulatan pola tertentu dalam rangka melaksanakan suatu bidang pekerjaan","Suatu urutan tahap demi tahap, serta jalan yang harus ditempuh dalam rangka penyelesaian suatu bidang tugas.","Cara-cara pelaksanaan kerja yang seefesien mungkin atas suatu tugas dengan memperhatikan segi-segi tujuan, peralatan, waktu yang tersedia.","Standar tertulis yang digunakan untuk menggerakkan kelompok dalam mencapai tujuan organisasi","Suatu pedoman untuk melaksanakan segala kegiatan yang berhubungan dengan operasional perusahaan.","","","","","","3","0");
INSERT INTO cbt_soal VALUES("135","SMK001","AK-001","","4","","Penyebab perbedaan saldo Kas PT. Mahakam dengan saldo rekening Koranya dari bank antara lain: <br />1. setoran dalam perjalanan Rp.2.400.000,00<br /> 2. Bank telah berhasil menagih piutang wesel perusahaan nominal Rp. 6.000.000,00 bunga Rp. 60.000,00, biaya penagihan Rp. 100.000,00 <br />3. Jasa giro dari bank Rp. 1.200.000,00 dan biaya administrasi bank yang dibebankan Rp. 800.000,00 <br />Berdasarkan data di atas dalam menyusun rekonsiliasi bank yang pengaruh menambah catatan perusahaan sebesar &hellip;","","","","Rp. 6.000.000,00","Rp. 5.960.000,00","Rp. 6.360.000,00","Rp. 7.260.000,00","Rp. 7.160.000,00","","","","","","2","0");
INSERT INTO cbt_soal VALUES("134","SMK001","AK-001","","3","","Salah satu penyebab terjadinya perbedaan saldo kas suatu perusahaan dengan saldo rekening Koran dari banknya adalah cek yang diterima dari debitur sebesar Rp. 5.000.000,00 dan telah disetor ke bank oleh bank di tolak karena dananya kurang. jurnal penyesuaian yang dibuat adalah &hellip;","","","","Piutang dagang Rp. 5.000.000 <br />Kas Rp. 5.000.000","Kas Rp. 5.000.000 <br />Piutang dagang Rp. 5.000.000","Piutang dagang Rp. 5.000.000 <br />Penjualan Rp. 5.000.000","Kas Rp. 5.000.000 <br />Penjualan Rp. 5.000.000","Piutang dagang Rp. 5.000.000 <br />Rekening koran Rp. 5000.000","","","","","","1","0");
INSERT INTO cbt_soal VALUES("133","SMK001","AK-001","","2","","Penyebab perbedaan saldo Kas PT. Mahakam dengan saldo rekening Koranya dari bank antara lain: 1. setoran dalam perjalanan Rp.1.400.000,00 2. Bank telah berhasil menagih piutang wesel perusahaan nominal Rp. 6.000.000,00 bunga Rp. 60.000,00, biaya penagihan Rp. 200.000,00 3. Jasa giro dari bank Rp. 2.200.000,00 dan biaya administrasi bank yang dibebankan Rp. 800.000,00 Berdasarkan data di atas dalam menyusun rekonsiliasi bank yang pengaruh mengurang catatan perusahaan sebesar …","","","","Rp. 900.000,00","Rp. 800.000,00","Rp.200.000,00","Rp.1.000.000,00","Rp. 1.060.000,00","","","","","","4","0");
INSERT INTO cbt_soal VALUES("146","SMK001","AK-001","","15","","Kartu yang digunakan untuk mencatat aktiva bernilai relatif kecil, tetapi mempunyai masa penggunaan lebih dari satu tahun fungsi dari kartu","","","","Kartu Induk Aktiva tetap","Kartu Eksploitasi aktiva tetap","Kartu aktiva tetap","Kartu inventaris aktiva tetap","Kartu Penyusutan aktiva tetap","","","","","","3","0");
INSERT INTO cbt_soal VALUES("147","SMK001","AK-001","","16","","Pada tanggal 5 Januari 2009, PT Regita Ramadhani menukar sebuah kendaraan lama dengan kendaraan baru dengan harga pasar Rp 170.000.000,00 kendaraan lama diperoleh dengan harga Rp 120.000.000,00 telah disusutkan sebesar Rp. 60.000.000,00. Dalam pertukaran tersebut PT Regita Ramadhani menyerahkan uang tunai sebesar Rp 105.000.000,00 buatlah jurnalnya","","","","Kendaraan Rp. 65.000.000,00 <br />Akum Peny Kendaraan Rp. 60.000.000,00 <br />Kendaraan (Lama) Rp. 120.000.000,00 <br />Laba Pertukaran Rp. 5.000.000,00","Kendaraan Rp. 65.000.000,00 <br />Akum Peny Kendaraan Rp. 60.000.000,00 <br />Kendaraan (Lama) Rp. 120.000.000,00 <br />Rugi Pertukaran Rp. 5.000.000,00","Kendaraan Rp. 65.000.000,00 <br />Akum Peny Kendaraan Rp. 60.000.000,00 <br />Rugi Pertukaran Rp. 5.000.000,00 <br />Kendaraan (Lama) Rp. 130.000.000,00","Kendaraan Rp. 65.000.000,00 <br />Akum Peny Kendaraan Rp. 60.000.000,00 <br />Laba Pertukaran Rp. 5.000.000,0 <br />Kendaraan (Lama) Rp. 130.000.000,00","Kendaraan Rp. 120.000.000,00 <br />Kendaraan (Lama) Rp. 120.000.000,00","","","","","","5","0");
INSERT INTO cbt_soal VALUES("148","SMK001","AK-001","","17","","Pengertian utang lancar adalah .......","","","","kewajiban perusahaan untuk membayar berupa uang kepada pihak lain pada tanggal jatuh tempo","kewajiban perusahaan untuk membayar kepada leveransir berupa uang pada tanggal jatuh tempo","kewajiban perusahaan untuk membayar pada pihak yang meminjamkan uang pada perusahaan","kewajiban perusahaan untuk membayar pada tanggal jatuh tempo berupa uang atau barang","kewajiban perusahaan untuk membayar pada pemerintah berupa uang atau barang","","","","","","2","0");
INSERT INTO cbt_soal VALUES("149","SMK001","AK-001","","18","","Jika diketahui data sebagai berikut: <br />Saldo awal utang sebesar Rp 2.470.000, <br />Pembelian kredit sebesar Rp 4.250.000 , <br />Retur pembelian sebesar Rp 450.000. <br />Berdasarkan data mutasi utang di atas, maka saldo utangnya adalah sebesar.....","","","","Rp.2,020,000.00","Rp.6,270,000.00","Rp.6,702,000.00","Rp.2,692,000.00","Rp.6,720,000.00","","","","","","3","0");
INSERT INTO cbt_soal VALUES("150","SMK001","AK-001","","19","","Biaya bahan penolong, upah tak langsung dan semua biaya produksi, yang tidak dapat dibebankan kepada suatu unit pekerjaan/ hasil produksi tertentu disebut……","","","","Biaya bahan baku","Biaya primer","Biaya konversi","Biaya overhead pabrik","Biaya langsung","","","","","","1","0");
INSERT INTO cbt_soal VALUES("151","SMK001","AK-001","","20","","Sebuah perusahaan manufaktur membebankan biaya produksi atas dasar tarif BOP dibebankan pada suatu produk atas dasar jam kerja mesin, Jam kerja mesin yang dianggarkan pada kapasitas normal selama 20.000 jam Taksiran Bop sebesar Rp 15.000.000,-. Jam kerja mesin yang sesungguhnya dapat dicapai 24.000. Berdasarkan diatas tariff BOP adalah sebesar&hellip;&hellip;.","","","","Rp.300.00","Rp.450.00","Rp.500.00","Rp.750.00","Rp.1,000.00","","","","","","4","0");
INSERT INTO cbt_soal VALUES("152","SMK001","AK-001","","21","","Data biaya yang di keluarkan PT Mahendra selama Bulan Desember 2012 sebagai berikut :<br /><br /> 1. Biaya bahan baku&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..Rp 2.500.000,00 <br />2. Biaya tenaga langsung&hellip;&hellip;&hellip;&hellip;...Rp 2.000.000,00 <br />3. Biaya listrik kantor&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;Rp 400.000,00 <br />4. Penyusutan gedung kantor&hellip;&hellip;&hellip;Rp 1.000.000,00 <br />5. Biaya pemasaran&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;Rp 300.000,00 <br />6. Gaji kantor&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.Rp 500.000,00 <br />7. Gaji penjualan&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;Rp 400.000,00 <br />8. Bahan penolong&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.Rp 800.000,00 <br /><br />Berdasarkan data tersebut yang merupakan biaya produksi Bulan Desember sebesar&hellip;&hellip;..","","","","Rp. 2.000.000,-","Rp. 2.200.000,-","Rp. 3.000.000,-","Rp. 4.500.000,-","Rp. 5.300.000,-","","","","","","1","0");
INSERT INTO cbt_soal VALUES("153","SMK001","AK-001","","22","","Dalam buku besar PD MELATI per 31 Desember 2012 diantaranya terdapat perkiraan-perkiraan dengan saldo sebagai berikut : <br /><br />Persediaan (1 Januari) Rp 2.800.000,00 <br />PembelianRp 45.300.000,00 <br />Beban angkut pembelianRp 1.800.000,00 <br />Retur pembelian Rp 750.000,00 <br />Potongan pembelianRp 1.200.000,00 <br />PenjualanRp 74.550.000,00 <br />Retur penjualan Rp 600.000,00 <br />Potongan penjualanRp 450.000,00 <br /><br />Selain data di atas, setelah diperiksa dan dihitung persediaan barang per 31 Desember 2012 seharga Rp 3.100.000,00 Dari data di atas laba kotor yang diperoleh PD MELATI dalam periode tahun 2012 adalah .............","","","","Rp.23,600,000.00","Rp.26,250,000.00","Rp.26,400,000.00","Rp.27,450,000.00","Rp.28,650,000.00","","","","","","5","0");
INSERT INTO cbt_soal VALUES("154","SMK001","AK-001","","23","","Berikut ini merupakan peran K3 dalam produktifitas kerja, kecuali ……….","","","","Setiap tenaga kerja berhak mendapatkan perlindungan atas keselamatannya","Setiap orang yang berada di tempat kerja perlu terjamin keselamatannya","Setiap sumber produksi perlu dipakai dan dipergunakan secara aman dan efesien","Untuk mengurangi biaya perusahaan","Untuk meningkatkan produktifitas","","","","","","4","0");
INSERT INTO cbt_soal VALUES("155","SMK001","AK-001","","24","","Jurnal penutup ( Closing entries) adalah :","","","","Jurnal yang dibuat untuk memindahkan saldo akun-akun aktiva, kewajiban, dan ekuitas sehinga akun-akun yang bersangkutan bersaldo nol.","Jurnal yang dibuat untuk memindahkan saldo akun-akun pendapatan dan beban sehingga saldo akun yang bersangkutan sesuai dengan saldo yang seharusnya.","Jurnal yang dibuat untuk memindahkan saldo akun-akun yang bersifat sementara sehingga akun- akun yang bersangkutan bersaldo nol.","Jurnal yang dibuat untu koreksi kesalahan pencatatan yang dilakukan dalam buku jurnal","Jurnal yang dibuat untuk mencatat transaksi yang terjadi pada akhir periode akuntansi.","","","","","","3","0");
INSERT INTO cbt_soal VALUES("156","SMK001","AK-001","","25","","Tuan Basri mempunyai istri yg tidak bekerja dan memiliki 3 anak, bekerja pada perusahaan PT. JAYA ABADI dengan gaji sebulan Rp 4.000.000,00. Maka besarnya Pph terutang perbulan Tuan Badri adalah sebesar......","","","","Rp.50,000.00","Rp.55,000.00","Rp.60,000.00","Rp.65,000.00","Rp.70,000.00","","","","","","2","0");
INSERT INTO cbt_soal VALUES("157","SMK001","AK-001","","26","","Besarnya PTKP Tahun 2013 untuk K/I/1 adalah.......","","","","Rp.28,350,000.00","Rp.30,375,000.00","Rp.24,300,000.00","Rp.26,350,000.00","Rp.32,500,000.00","","","","","","1","0");
INSERT INTO cbt_soal VALUES("158","SMK001","AK-001","","27","","Besarnya PTKP Tahun 2013 untuk K/O/0 adalah.......","","","","Rp.28,350,000.00","Rp.30,375,000.00","Rp.24,300,000.00","Rp.26,350,000.00","Rp.32,500,000.00","","","","","","3","0");
INSERT INTO cbt_soal VALUES("159","SMK001","AK-001","","28","","Perintah Untuk menyisipkan kolom adalah","","","","Shift cell up","Shift Cell Left","Shift Cells Down","Entire Row","Entire Column","","","","","","5","0");
INSERT INTO cbt_soal VALUES("160","SMK001","AK-001","","29","","Langkah yang tepat untuk membuat file baru adalah","","","","File => New=>OK","Office Button =>New=>BlankWorkbook=>Create","Office Button =>New=>Create","File => New =>Blank Workbook => Create","Office Button =>Blank Workbook => Ok","","","","","","2","0");
INSERT INTO cbt_soal VALUES("161","SMK001","AK-001","","30","","Dari data diatas penulisan rumus yang tepat untuk sel A12 Adalah","","","","=IF(C5-C11;”Laba”;”rugi”)","=IF(C5;C11;”Laba;rugi)","=IF(C5>C11;”Laba”;”rugi”)","=IF(C5>C11;Laba;rugi)","=IF(C5","","","","","","3","0");
INSERT INTO cbt_soal VALUES("162","SMK001","AK-001","","31","","Menu/toolbar (Explore) yang dilingkari di atas berfungsi untuk…..","","","","Mengaktifkan salah satu data akuntansi yang pernah anda buat sebelumnya","Membuat data akuntansi baru","Mengaktifkan contoh data akuntansi clearwater Pty Ltd.","Mengetahui berbagai penjelasan tambahan fasilitas dibandingkan dengan versi sebelumnya","Mengakhiri pemakaian program MYOB Accounting","","","","","","2","0");
INSERT INTO cbt_soal VALUES("163","SMK001","AK-001","","32","","Icon inventory berfungsi untuk","","","","Fasilitas pencarian transaksi","Membuat data konsumen dan pemasok","Menanpilkan laporan yang telah dibuat MYOB","Pencatatan data persediaan barang yang diperjual belikan","Menghitung laba yang diperoleh perusahaan","","","","","","1","0");
INSERT INTO cbt_soal VALUES("164","SMK001","AK-001","","33","","Dari bukti transaksi diatas dimasukkan pada fitur myob","","","","Banking-Receive Money","Banking-Spend Money","Sales -Enter Sales","Purchases-Enter Purchases","Accounts- Record Jurnal Entry","","","","","","3","0");
INSERT INTO cbt_soal VALUES("165","SMK001","AK-001","","34","","Salah satu syarat effisiensi kerja adalah ekonomis artinya","","","","Penggunaan tenaga kerja yang terampil sehingga meningkatkan produktivitas","Pemanfaatan biaya, tenaga kerja, peralatan, waktu, dan ruangan yang tepat","Adanya pembagian kerja yang nyata berdasarkan kemampuan kerja dan waktu yang tersedia","Kegiatan yang dilaksanakan tepat waktu dan tepat sasaran, sehingga tidak banyak menimbulkan pemborosan.","Pemanfaatan sumber-sumber produksi dengan tepat dan dapat dipertanggung jawabkan","","","","","","4","0");
INSERT INTO cbt_soal VALUES("166","SMK001","AK-001","","35","","Dari bukti transaksi diatas dimasukkan pada fitur myob","","","","Banking-Receive Money","Banking-Spend Money","Sales -Enter Sales","Purchases-Enter Purchases","Accounts- Record Jurnal Entry","","","","","","2","0");
INSERT INTO cbt_soal VALUES("167","SMK001","AK-001","","36","","Dibawah ini yang merupakan faktor penyebab timbulnya kecelakaan kerja adalah","","","","Faktor lingkungan fisisk tenaga kerja seperti mesin, gedung, ruang peralatan","Faktor keserasian kombinasi faktor – faktor produksi yang dikelola dalam perusahaan","Faktor kelalaian perusahaan","Faktor kelalaian pimpinan dalam pengambilan keputusan","Faktor terjadinya bencana alam","","","","","","1","0");
INSERT INTO cbt_soal VALUES("168","SMK001","AK-001","","37","","Apabila barang yang diterima pembeli ternyata sebagian rusak atau tidak sesuai dengan pesanan, maka pembeli menyampaikan sebuah nota kepada penjual yang disebut……..","","","","Nota penjual","Nota piutang","Nota kas","Nota debet","Nota kredit","","","","","","4","0");
INSERT INTO cbt_soal VALUES("169","SMK001","AK-001","","38","","Pada tanggal 1 januari PT “SATRIA” membeli perlengkapan toko dari PT “TARUNA” Sebesar Rp. 100.000,00 secara tunai. Maka transaksi tersebut dicatat dalam bukti……","","","","Bilyet giro","Faktur","Nota kontan","Kuitansi","Cek","","","","","","2","0");
INSERT INTO cbt_soal VALUES("170","SMK001","AK-001","","39","","Salah satu ciri pencatatan dana kas kecil dengan metode Fluktuasi adalah…","","","","dana kas kecil berubah","dana kas kecil naik","dana kas kecil tetap","dana kas kecil turun","dana kas kecil habis","","","","","","1","0");
INSERT INTO cbt_soal VALUES("171","SMK001","AK-001","","40","","Berdasarkan perhitungan fisik kas pada akhir periode tertentu terdiri atas :<br /> <br />20 lembar @ Rp. 50.000,00 = Rp. 1.000.000,00 <br />300 lembar @Rp. 20.000,00 = Rp. 6.000.000,00 <br />200 lembar @Rp. 10.000,00 = Rp. 2.000.000,00 <br />100 lembar @Rp. 5.000,00 = Rp. 500.000,00 <br />150 lembar @Rp. 1.000,00 = Rp. 150.000,00 <br />60 lembar @Rp. 500,00 = Rp. 30.000,00 <br />Jumlah &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip; = Rp. 9.680.000,00 <br /><br />Sedangkan menurut perkiraan kas bersaldo Rp. 9.630.000,00, selisih kas adalah &hellip;","","","","Kas Rp. 50.000 <br />Selisih kas Rp. 50.000","Selisih kas Rp. 50.000 <br />Kas Rp. 50.000","Rugi/laba Rp. 50.000 <br />Kas Rp. 50.000","Kas Rp. 50.000 <br />Rugi/laba Rp. 50.000","Kas Rp. 50.000 <br />Kelebihan kas Rp. 50.000","","","","","","3","0");
INSERT INTO cbt_soal VALUES("172","SMK212","AK-212","","1","","Yang dimaksud dengan prosedur kerja adalah ….","","","","Rangkaian tata kerja yang membentuk suatu kebulatan pola tertentu dalam rangka melaksanakan suatu bidang pekerjaan","Suatu urutan tahap demi tahap, serta jalan yang harus ditempuh dalam rangka penyelesaian suatu bidang tugas.","Cara-cara pelaksanaan kerja yang seefesien mungkin atas suatu tugas dengan memperhatikan segi-segi tujuan, peralatan, waktu yang tersedia.","Standar tertulis yang digunakan untuk menggerakkan kelompok dalam mencapai tujuan organisasi","Suatu pedoman untuk melaksanakan segala kegiatan yang berhubungan dengan operasional perusahaan.","","","","","","3","0");
INSERT INTO cbt_soal VALUES("173","SMK212","AK-212","","2","","Penyebab perbedaan saldo Kas PT. Mahakam dengan saldo rekening Koranya dari bank antara lain: <br /><br />1. setoran dalam perjalanan Rp.1.400.000,00 <br />2. Bank telah berhasil menagih piutang wesel perusahaan nominal Rp. 6.000.000,00 bunga Rp. 60.000,00, biaya penagihan Rp. 200.000,00 <br />3. Jasa giro dari bank Rp. 2.200.000,00 dan biaya administrasi bank yang dibebankan Rp. 800.000,00 <br /><br />Berdasarkan data di atas dalam menyusun rekonsiliasi bank yang pengaruh mengurang catatan perusahaan sebesar &hellip;","","","","Rp. 900.000,00","Rp. 800.000,00","Rp.200.000,00","Rp.1.000.000,00","Rp. 1.060.000,00","","","","","","4","0");
INSERT INTO cbt_soal VALUES("174","SMK212","AK-212","","3","","Salah satu penyebab terjadinya perbedaan saldo kas suatu perusahaan dengan saldo rekening Koran dari banknya adalah cek yang diterima dari debitur sebesar Rp. 5.000.000,00 dan telah disetor ke bank oleh bank di tolak karena dananya kurang. jurnal penyesuaian yang dibuat adalah …","","","","Piutang dagang Rp. 5.000.000 Kas Rp. 5.000.000","Kas Rp. 5.000.000 Piutang dagang Rp. 5.000.000","Piutang dagang Rp. 5.000.000 Penjualan Rp. 5.000.000","Kas Rp. 5.000.000 Penjualan Rp. 5.000.000","Piutang dagang Rp. 5.000.000 Rekening koran Rp. 5000.000","","","","","","1","0");
INSERT INTO cbt_soal VALUES("175","SMK212","AK-212","","4","","Penyebab perbedaan saldo Kas PT. Mahakam dengan saldo rekening Koranya dari bank antara lain: 1. setoran dalam perjalanan Rp.2.400.000,00 2. Bank telah berhasil menagih piutang wesel perusahaan nominal Rp. 6.000.000,00 bunga Rp. 60.000,00, biaya penagihan Rp. 100.000,00 3. Jasa giro dari bank Rp. 1.200.000,00 dan biaya administrasi bank yang dibebankan Rp. 800.000,00 Berdasarkan data di atas dalam menyusun rekonsiliasi bank yang pengaruh menambah catatan perusahaan sebesar …","","","","Rp. 6.000.000,00","Rp. 5.960.000,00","Rp. 6.360.000,00","Rp. 7.260.000,00","Rp. 7.160.000,00","","","","","","2","0");
INSERT INTO cbt_soal VALUES("176","SMK212","AK-212","","5","","Pada tanggal 5 Agustus 2013 dilakukan pembelian senilai Rp. 10.000.000,00 secara kredit dengan syarat 2/10.EOM. Pada tanggal 10 Agustus 2013 dilakukan pembayaran atas pembelian tersebut. Jurnal yang dibuat tanggal 10 Agustus 2013 adalah ……","","","","Utang dagang Rp. 10.000.000,00 Kas Rp. 10.000.000,00","Pembelian Rp. 10.000.000,00 Kas Rp. 10.000.000,00","Utang dagang Rp. 10.000.000,00 Potongan pembelian Rp. 200.000,00 Kas Rp. 9.800.000,00","Utang dagang Rp. 10.000.000,00 Potongan pembelian Rp. 1.000.000,00 Kas Rp. 9.000.000,00","Pembelian Rp. 10.000.000,00 Potongan pembelian Rp. 200.000,00 Kas Rp. 9.800.000,00","","","","","","4","0");
INSERT INTO cbt_soal VALUES("177","SMK212","AK-212","","6","","Akun piutang dagang dalam buku besar suatu perusahaan untuk bulan juli 2003 menunjukkan data sebagai berikut : 14 Berdasarkan data akun diatas penjualan secara kredit dalam bulan juli 2003 berjumlah","","","","$9,800,000.00","$11,800,000.00","$15,200,000.00","$17,200,000.00","$27,000,000.00","","","","","","4","0");
INSERT INTO cbt_soal VALUES("178","SMK212","AK-212","","7","","Akun hutang dagang dalam buku besar suatu perusahaan pada tanggal 31 Desember 2003 menunjukkan data sebagai berikut : 15 Dari data diatas, pernyataan-pernyataan dibawah ini benar kecuali ….","","","","Akun hutang dagang menunjukkan saldo kredit","Hutang yang dibayar sampai dengan 31 Desember 2003 berjumlah Rp 20.000.000,00","Pinjaman yang diterima sampai dengan 31 Desember 2003 untuk penambahan modal pemilik perusahaan berjumlah Rp 35.400.000,00","Hutang yang terjadi sampai 31 Desember 2003 berjumlah Rp 35.400.000,00","Hutang perusahaan yang belum dibayar per 31 Desember 2003 sebesar Rp 15.400.000,00","","","","","","3","0");
INSERT INTO cbt_soal VALUES("179","SMK212","AK-212","","8","","Dari akun-akun dibawah ini, tidak termasuk kelompok akun riiil ( real account ) adalah …","","","","Piutang usaha ( account receivable )","Asuransi dibayar dimuka ( Prepaid insurance )","Hutang wesel ( notes payable )","Beban perlengkapan kantor ( Office supplies expense )","Peralatan toko ( store equipment )","","","","","","2","0");
INSERT INTO cbt_soal VALUES("180","SMK212","AK-212","","9","","Mutasi kartu piutang yang benar adalah ……..","","","","Penjualan secara kredit masuk mutasi kredit","Penghapusan piutang masuk mutasi debet","Pelunasan piutang masuk mutasi kredit","Retur penjualan masuk mutasi debet","Saldo piutang normal sebelah kredit","","","","","","1","0");
INSERT INTO cbt_soal VALUES("181","SMK212","AK-212","","10","","PT. Sari Asri menghapuskan piutang dagangnya Rp. 1.500.000,00 dengan metode pencatatan penghapusan tidak langsung. Jurnal yang dibuat adalah …….","","","","Kerugian piutang Rp. 1.500.000,00 Piutang dagang Rp. 1.500.000,00","Kerugian piutang Rp. 1.500.000,00 Cadangan kerugian piutang Rp. 1.500.000,00","Kerugian piutang Rp. 1.500.000,00 Kas Rp. 1.500.000,00","Kas Rp. 1.500.000,00 Piutang dagang Rp. 1.500.000,00","Cadangan kerugian piutang Rp. 1.500.000,00 Piutang dagang Rp. 1.500.000,00","","","","","","5","0");
INSERT INTO cbt_soal VALUES("182","SMK212","AK-212","","11","","If 15.00 units are on hand at December 31, the cost of ending inventory under FIFO is .........","","","","15,000,000.00","16,000,000.00","17,000,000.00","18,000,000.00","15,500,000.00","","","","","","4","0");
INSERT INTO cbt_soal VALUES("183","SMK212","AK-212","","12","","Salah satu cara penggunaan media komunikasi yaitu………..","","","","Media komunikasi via pos","Media komunikasi majalah dan koran","Media komunikasi internet","Media komunikasi televisi dan radio","Media komunikasi audio visual","","","","","","3","0");
INSERT INTO cbt_soal VALUES("184","SMK212","AK-212","","13","","Perusahaan menggunakan Metode FIFO perpetual dalam mengelolah persediaan. Data persediaan selama Bulan Desember 2012 adalah sebagai berikut : 1. Persediaan awal……………….400 Unit @ Rp 440,00 2. Pembelian……………………...800 Unit @ Rp 480,00 3. Pembelian………………………600 Unit @ Rp 600,00 4. Pembelian………………………200 Unit @ Rp 440,00 5. Penjualan………………………500 Unit @ Rp 600,00 maka laba penjualan barang dagang selama Bulan Desember sebesar…….","","","","$94,000.00","$112,000.00","$280,000.00","$76,000.00","$80,000.00","","","","","","2","0");
INSERT INTO cbt_soal VALUES("185","SMK212","AK-212","","14","","iaan barang A-1 selama bulan Juli 2013 sebagai berikut : - Persediaan per 1 Juli 6.500 kg @Rp 1.000,00 - Juli 8 Pembelian 8.000 kg @ Rp. 1.100,00 - Juli 8 Penjualan 10.000 kg Dari data diatas harga pokok persediaan pada tanggal 8 juli setelah transaksi berjumlah……….","","","","Rp. 4.500.000,00","Rp. 4.950.000,00","Rp. 8.150.000,00","Rp. 8.700.000,00","Rp. 10.000.000,00","","","","","","1","0");
INSERT INTO cbt_soal VALUES("186","SMK212","AK-212","","15","","Kartu yang digunakan untuk mencatat aktiva bernilai relatif kecil, tetapi mempunyai masa penggunaan lebih dari satu tahun fungsi dari kartu","","","","Kartu Induk Aktiva tetap","Kartu Eksploitasi aktiva tetap","Kartu aktiva tetap","Kartu inventaris aktiva tetap","Kartu Penyusutan aktiva tetap","","","","","","3","0");
INSERT INTO cbt_soal VALUES("187","SMK212","AK-212","","16","","Pada tanggal 5 Januari 2009, PT Regita Ramadhani menukar sebuah kendaraan lama dengan kendaraan baru dengan harga pasar Rp 170.000.000,00 kendaraan lama diperoleh dengan harga Rp 120.000.000,00 telah disusutkan sebesar Rp. 60.000.000,00. Dalam pertukaran tersebut PT Regita Ramadhani menyerahkan uang tunai sebesar Rp 105.000.000,00 buatlah jurnalnya","","","","Kendaraan Rp. 65.000.000,00 Akum Peny Kendaraan Rp. 60.000.000,00 Kendaraan (Lama) Rp. 120.000.000,00 Laba Pertukaran Rp. 5.000.000,00","Kendaraan Rp. 65.000.000,00 Akum Peny Kendaraan Rp. 60.000.000,00 Kendaraan (Lama) Rp. 120.000.000,00 Rugi Pertukaran Rp. 5.000.000,00","Kendaraan Rp. 65.000.000,00 Akum Peny Kendaraan Rp. 60.000.000,00 Rugi Pertukaran Rp. 5.000.000,00 Kendaraan (Lama) Rp. 130.000.000,00","Kendaraan Rp. 65.000.000,00 Akum Peny Kendaraan Rp. 60.000.000,00 Laba Pertukaran Rp. 5.000.000,0 Kendaraan (Lama) Rp. 130.000.000,00","Kendaraan Rp. 120.000.000,00 Kendaraan (Lama) Rp. 120.000.000,00","","","","","","5","0");
INSERT INTO cbt_soal VALUES("188","SMK212","AK-212","","17","","Pengertian utang lancar adalah .......","","","","kewajiban perusahaan untuk membayar berupa uang kepada pihak lain pada tanggal jatuh tempo","kewajiban perusahaan untuk membayar kepada leveransir berupa uang pada tanggal jatuh tempo","kewajiban perusahaan untuk membayar pada pihak yang meminjamkan uang pada perusahaan","kewajiban perusahaan untuk membayar pada tanggal jatuh tempo berupa uang atau barang","kewajiban perusahaan untuk membayar pada pemerintah berupa uang atau barang","","","","","","2","0");
INSERT INTO cbt_soal VALUES("189","SMK212","AK-212","","18","","Jika diketahui data sebagai berikut: Saldo awal utang sebesar Rp 2.470.000, Pembelian kredit sebesar Rp 4.250.000 , Retur pembelian sebesar Rp 450.000. Berdasarkan data mutasi utang di atas, maka saldo utangnya adalah sebesar.....","","","","$2,020,000.00","$6,270,000.00","$6,702,000.00","$2,692,000.00","$6,720,000.00","","","","","","3","0");
INSERT INTO cbt_soal VALUES("190","SMK212","AK-212","","19","","Biaya bahan penolong, upah tak langsung dan semua biaya produksi, yang tidak dapat dibebankan kepada suatu unit pekerjaan/ hasil produksi tertentu disebut……","","","","Biaya bahan baku","Biaya primer","Biaya konversi","Biaya overhead pabrik","Biaya langsung","","","","","","1","0");
INSERT INTO cbt_soal VALUES("191","SMK212","AK-212","","20","","Sebuah perusahaan manufaktur membebankan biaya produksi atas dasar tarif BOP dibebankan pada suatu produk atas dasar jam kerja mesin, Jam kerja mesin yang dianggarkan pada kapasitas normal selama 20.000 jam Taksiran Bop sebesar Rp 15.000.000,-. Jam kerja mesin yang sesungguhnya dapat dicapai 24.000. Berdasarkan diatas tariff BOP adalah sebesar…….","","","","$300.00","$450.00","$500.00","$750.00","$1,000.00","","","","","","4","0");
INSERT INTO cbt_soal VALUES("192","SMK212","AK-212","","21","","Data biaya yang di keluarkan PT Mahendra selama Bulan Desember 2012 sebagai berikut : 1. Biaya bahan baku………………..Rp 2.500.000,00 2. Biaya tenaga langsung…………...Rp 2.000.000,00 3. Biaya listrik kantor………………Rp 400.000,00 4. Penyusutan gedung kantor………Rp 1.000.000,00 5. Biaya pemasaran…………………Rp 300.000,00 6. Gaji kantor……………………….Rp 500.000,00 7. Gaji penjualan……………………Rp 400.000,00 8. Bahan penolong………………….Rp 800.000,00 Berdasarkan data tersebut yang merupakan biaya produksi Bulan Desember sebesar……..","","","","Rp. 2.000.000,-","Rp. 2.200.000,-","Rp. 3.000.000,-","Rp. 4.500.000,-","Rp. 5.300.000,-","","","","","","1","0");
INSERT INTO cbt_soal VALUES("193","SMK212","AK-212","","22","","Dalam buku besar PD MELATI per 31 Desember 2012 diantaranya terdapat perkiraan-perkiraan dengan saldo sebagai berikut : Persediaan (1 Januari) Rp 2.800.000,00 PembelianRp 45.300.000,00 Beban angkut pembelianRp 1.800.000,00 Retur pembelian Rp 750.000,00 Potongan pembelianRp 1.200.000,00 PenjualanRp 74.550.000,00 Retur penjualan Rp 600.000,00 Potongan penjualanRp 450.000,00 Selain data di atas, setelah diperiksa dan dihitung persediaan barang per 31 Desember 2012 seharga Rp 3.100.000,00 Dari data di atas laba kotor yang diperoleh PD MELATI dalam periode tahun 2012 adalah .............","","","","$23,600,000.00","$26,250,000.00","$26,400,000.00","$27,450,000.00","$28,650,000.00","","","","","","5","0");
INSERT INTO cbt_soal VALUES("194","SMK212","AK-212","","23","","Berikut ini merupakan peran K3 dalam produktifitas kerja, kecuali ……….","","","","Setiap tenaga kerja berhak mendapatkan perlindungan atas keselamatannya","Setiap orang yang berada di tempat kerja perlu terjamin keselamatannya","Setiap sumber produksi perlu dipakai dan dipergunakan secara aman dan efesien","Untuk mengurangi biaya perusahaan","Untuk meningkatkan produktifitas","","","","","","4","0");
INSERT INTO cbt_soal VALUES("195","SMK212","AK-212","","24","","Jurnal penutup ( Closing entries) adalah :","","","","Jurnal yang dibuat untuk memindahkan saldo akun-akun aktiva, kewajiban, dan ekuitas sehinga akun-akun yang bersangkutan bersaldo nol.","Jurnal yang dibuat untuk memindahkan saldo akun-akun pendapatan dan beban sehingga saldo akun yang bersangkutan sesuai dengan saldo yang seharusnya.","Jurnal yang dibuat untuk memindahkan saldo akun-akun yang bersifat sementara sehingga akun- akun yang bersangkutan bersaldo nol.","Jurnal yang dibuat untu koreksi kesalahan pencatatan yang dilakukan dalam buku jurnal","Jurnal yang dibuat untuk mencatat transaksi yang terjadi pada akhir periode akuntansi.","","","","","","3","0");
INSERT INTO cbt_soal VALUES("196","SMK212","AK-212","","25","","Tuan Basri mempunyai istri yg tidak bekerja dan memiliki 3 anak, bekerja pada perusahaan PT. JAYA ABADI dengan gaji sebulan Rp 4.000.000,00. Maka besarnya Pph terutang perbulan Tuan Badri adalah sebesar......","","","","$50,000.00","$55,000.00","$60,000.00","$65,000.00","$70,000.00","","","","","","2","0");
INSERT INTO cbt_soal VALUES("197","SMK212","AK-212","","26","","Besarnya PTKP Tahun 2013 untuk K/I/1 adalah.......","","","","$28,350,000.00","$30,375,000.00","$24,300,000.00","$26,350,000.00","$32,500,000.00","","","","","","1","0");
INSERT INTO cbt_soal VALUES("198","SMK212","AK-212","","27","","Besarnya PTKP Tahun 2013 untuk K/O/0 adalah.......","","","","$28,350,000.00","$30,375,000.00","$24,300,000.00","$26,350,000.00","$32,500,000.00","","","","","","3","0");
INSERT INTO cbt_soal VALUES("199","SMK212","AK-212","","28","","Perintah Untuk menyisipkan kolom adalah","","","","Shift cell up","Shift Cell Left","Shift Cells Down","Entire Row","Entire Column","","","","","","5","0");
INSERT INTO cbt_soal VALUES("200","SMK212","AK-212","","29","","Langkah yang tepat untuk membuat file baru adalah","","","","File => New=>OK","Office Button =>New=>BlankWorkbook=>Create","Office Button =>New=>Create","File => New =>Blank Workbook => Create","Office Button =>Blank Workbook => Ok","","","","","","2","0");
INSERT INTO cbt_soal VALUES("201","SMK212","AK-212","","30","","Dari data diatas penulisan rumus yang tepat untuk sel A12 Adalah","","","","=IF(C5-C11;”Laba”;”rugi”)","=IF(C5;C11;”Laba;rugi)","=IF(C5>C11;”Laba”;”rugi”)","=IF(C5>C11;Laba;rugi)","=IF(C5","","","","","","3","0");
INSERT INTO cbt_soal VALUES("202","SMK212","AK-212","","31","","Menu/toolbar (Explore) yang dilingkari di atas berfungsi untuk…..","","","","Mengaktifkan salah satu data akuntansi yang pernah anda buat sebelumnya","Membuat data akuntansi baru","Mengaktifkan contoh data akuntansi clearwater Pty Ltd.","Mengetahui berbagai penjelasan tambahan fasilitas dibandingkan dengan versi sebelumnya","Mengakhiri pemakaian program MYOB Accounting","","","","","","2","0");
INSERT INTO cbt_soal VALUES("203","SMK212","AK-212","","32","","Icon inventory berfungsi untuk","","","","Fasilitas pencarian transaksi","Membuat data konsumen dan pemasok","Menanpilkan laporan yang telah dibuat MYOB","Pencatatan data persediaan barang yang diperjual belikan","Menghitung laba yang diperoleh perusahaan","","","","","","1","0");
INSERT INTO cbt_soal VALUES("204","SMK212","AK-212","","33","","Dari bukti transaksi diatas dimasukkan pada fitur myob","","","","Banking-Receive Money","Banking-Spend Money","Sales -Enter Sales","Purchases-Enter Purchases","Accounts- Record Jurnal Entry","","","","","","3","0");
INSERT INTO cbt_soal VALUES("205","SMK212","AK-212","","34","","Salah satu syarat effisiensi kerja adalah ekonomis artinya","","","","Penggunaan tenaga kerja yang terampil sehingga meningkatkan produktivitas","Pemanfaatan biaya, tenaga kerja, peralatan, waktu, dan ruangan yang tepat","Adanya pembagian kerja yang nyata berdasarkan kemampuan kerja dan waktu yang tersedia","Kegiatan yang dilaksanakan tepat waktu dan tepat sasaran, sehingga tidak banyak menimbulkan pemborosan.","Pemanfaatan sumber-sumber produksi dengan tepat dan dapat dipertanggung jawabkan","","","","","","4","0");
INSERT INTO cbt_soal VALUES("206","SMK212","AK-212","","35","","Dari bukti transaksi diatas dimasukkan pada fitur myob","","","","Banking-Receive Money","Banking-Spend Money","Sales -Enter Sales","Purchases-Enter Purchases","Accounts- Record Jurnal Entry","","","","","","2","0");
INSERT INTO cbt_soal VALUES("207","SMK212","AK-212","","36","","Dibawah ini yang merupakan faktor penyebab timbulnya kecelakaan kerja adalah","","","","Faktor lingkungan fisisk tenaga kerja seperti mesin, gedung, ruang peralatan","Faktor keserasian kombinasi faktor – faktor produksi yang dikelola dalam perusahaan","Faktor kelalaian perusahaan","Faktor kelalaian pimpinan dalam pengambilan keputusan","Faktor terjadinya bencana alam","","","","","","1","0");
INSERT INTO cbt_soal VALUES("208","SMK212","AK-212","","37","","Apabila barang yang diterima pembeli ternyata sebagian rusak atau tidak sesuai dengan pesanan, maka pembeli menyampaikan sebuah nota kepada penjual yang disebut……..","","","","Nota penjual","Nota piutang","Nota kas","Nota debet","Nota kredit","","","","","","4","0");
INSERT INTO cbt_soal VALUES("209","SMK212","AK-212","","38","","Pada tanggal 1 januari PT “SATRIA” membeli perlengkapan toko dari PT “TARUNA” Sebesar Rp. 100.000,00 secara tunai. Maka transaksi tersebut dicatat dalam bukti……","","","","Bilyet giro","Faktur","Nota kontan","Kuitansi","Cek","","","","","","2","0");
INSERT INTO cbt_soal VALUES("210","SMK212","AK-212","","39","","Salah satu ciri pencatatan dana kas kecil dengan metode Fluktuasi adalah…","","","","dana kas kecil berubah","dana kas kecil naik","dana kas kecil tetap","dana kas kecil turun","dana kas kecil habis","","","","","","1","0");
INSERT INTO cbt_soal VALUES("211","SMK212","AK-212","","40","","Berdasarkan perhitungan fisik kas pada akhir periode tertentu terdiri atas : 20 lembar @ Rp. 50.000,00 = Rp. 1.000.000,00 300 lembar @Rp. 20.000,00 = Rp. 6.000.000,00 200 lembar @Rp. 10.000,00 = Rp. 2.000.000,00 100 lembar @Rp. 5.000,00 = Rp. 500.000,00 150 lembar @Rp. 1.000,00 = Rp. 150.000,00 60 lembar @Rp. 500,00 = Rp. 30.000,00 Jumlah …………………… = Rp. 9.680.000,00 Sedangkan menurut perkiraan kas bersaldo Rp. 9.630.000,00, selisih kas adalah …","","","","Kas Rp. 50.000 Selisih kas Rp. 50.000","Selisih kas Rp. 50.000 Kas Rp. 50.000","Rugi/laba Rp. 50.000 Kas Rp. 50.000","Kas Rp. 50.000 Rugi/laba Rp. 50.000","Kas Rp. 50.000 Kelebihan kas Rp. 50.000","","","","","","3","0");



DROP TABLE cbt_ujian;

CREATE TABLE `cbt_ujian` (
  `Urut` int(11) NOT NULL auto_increment,
  `XKodeKelas` varchar(10) collate latin1_general_ci NOT NULL,
  `XKodeMapel` varchar(10) collate latin1_general_ci NOT NULL,
  `XKodeSoal` varchar(10) collate latin1_general_ci NOT NULL,
  `XJumSoal` int(11) NOT NULL,
  `XTglUjian` date NOT NULL,
  `XJamUjian` time NOT NULL,
  `XBatasMasuk` time NOT NULL,
  `XSisaWaktu` varchar(8) collate latin1_general_ci NOT NULL,
  `XLamaUjian` varchar(8) collate latin1_general_ci NOT NULL,
  `XTokenUjian` varchar(60) collate latin1_general_ci NOT NULL,
  `XStatusUjian` varchar(1) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Urut`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;




