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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO cbt_jawaban VALUES("1","1","1","kimia1","CDUZI","1","2","3","4","5","A","XA","1","1","","2016-11-22","08:12:41","1","a1","CDUZI");
INSERT INTO cbt_jawaban VALUES("2","2","2","kimia1","CDUZI","1","2","3","4","5","A","XA","1","1","0","2016-11-22","08:12:43","1","a1","CDUZI");
INSERT INTO cbt_jawaban VALUES("3","3","3","kimia1","CDUZI","1","2","3","4","5","A","XA","1","1","","2016-11-22","08:12:45","1","a1","CDUZI");
INSERT INTO cbt_jawaban VALUES("4","4","4","kimia1","CDUZI","1","2","3","4","5","B","XB","2","0","","2016-11-22","08:12:48","1","a1","CDUZI");
INSERT INTO cbt_jawaban VALUES("5","5","5","kimia1","CDUZI","1","2","3","4","5","A","XA","1","1","","2016-11-22","08:12:52","1","a1","CDUZI");
INSERT INTO cbt_jawaban VALUES("6","1","1","kimia1","CDUZI","1","2","3","4","5","B","XB","2","0","","2016-11-22","09:11:20","1","a2","CDUZI");
INSERT INTO cbt_jawaban VALUES("7","2","2","kimia1","CDUZI","1","2","3","4","5","A","XA","1","1","0","2016-11-22","09:13:26","1","a2","CDUZI");
INSERT INTO cbt_jawaban VALUES("8","3","3","kimia1","CDUZI","1","2","3","4","5","A","XA","1","1","","2016-11-22","09:13:27","1","a2","CDUZI");
INSERT INTO cbt_jawaban VALUES("9","4","4","kimia1","CDUZI","1","2","3","4","5","A","XA","1","1","","2016-11-22","09:13:32","1","a2","CDUZI");
INSERT INTO cbt_jawaban VALUES("10","5","5","kimia1","CDUZI","1","2","3","4","5","B","XB","2","0","","2016-11-22","09:13:35","1","a2","CDUZI");
INSERT INTO cbt_jawaban VALUES("11","1","1","kimia1","MKRYP","1","2","3","4","5","A","XA","1","1","","2017-01-18","13:13:08","1","a1","MKRYP");
INSERT INTO cbt_jawaban VALUES("12","2","2","kimia1","MKRYP","1","2","3","4","5","B","XB","2","0","0","2017-01-18","13:13:45","1","a1","MKRYP");
INSERT INTO cbt_jawaban VALUES("13","3","3","kimia1","MKRYP","1","2","3","4","5","B","XB","2","0","","2017-01-18","13:13:49","1","a1","MKRYP");
INSERT INTO cbt_jawaban VALUES("14","4","4","kimia1","MKRYP","1","2","3","4","5","B","XB","2","0","","2017-01-18","13:13:24","1","a1","MKRYP");
INSERT INTO cbt_jawaban VALUES("15","5","5","kimia1","MKRYP","1","2","3","4","5","B","XB","2","0","","2017-01-18","13:13:31","1","a1","MKRYP");



DROP TABLE cbt_kelas;

CREATE TABLE `cbt_kelas` (
  `Urut` int(11) NOT NULL auto_increment,
  `XKodeLevel` varchar(5) collate latin1_general_ci NOT NULL,
  `XLevelKelas` varchar(5) collate latin1_general_ci NOT NULL,
  `XKodeKelas` varchar(10) collate latin1_general_ci NOT NULL,
  `XStatusKelas` varchar(1) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO cbt_kelas VALUES("1","SMK","XII","TKJ","1");
INSERT INTO cbt_kelas VALUES("2","SMK","XII","TPE","1");
INSERT INTO cbt_kelas VALUES("3","SMK","XII","TITL","1");
INSERT INTO cbt_kelas VALUES("4","SD","I","IA","");
INSERT INTO cbt_kelas VALUES("6","SMP","VII","B","");
INSERT INTO cbt_kelas VALUES("7","SMP","VIII","c","");



DROP TABLE cbt_mapel;

CREATE TABLE `cbt_mapel` (
  `Urut` int(11) NOT NULL auto_increment,
  `XKodeKelas` varchar(10) collate latin1_general_ci NOT NULL,
  `XKodeMapel` varchar(10) collate latin1_general_ci NOT NULL,
  `XNamaMapel` varchar(30) collate latin1_general_ci NOT NULL,
  `XKodeSoal` varchar(10) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO cbt_siswa VALUES("1","A1","SMK00101","SOKRAN","TKJ","XII","L","A1","");
INSERT INTO cbt_siswa VALUES("2","A2","SMK00102","KARTOLO","TKJ","XII","L","A2","");
INSERT INTO cbt_siswa VALUES("4","A4","SMK00104","SAPARI","TKJ","XII","L","A4","");
INSERT INTO cbt_siswa VALUES("5","A5","SMK00105","TINI","TKJ","XII","L","A5","");
INSERT INTO cbt_siswa VALUES("6","A6","SMK00106","KASPARI","TKJ","XII","P","A6","");
INSERT INTO cbt_siswa VALUES("33","SD111A","SMK0010","COBA KELAS 1","IA","I","L","A234","");
INSERT INTO cbt_siswa VALUES("8","A8","SMK00108","SHOLEH","TKJ","XII","L","A8","");
INSERT INTO cbt_siswa VALUES("9","A9","SMK00109","WONOKAIRUN","TKJ","XII","L","A9","");
INSERT INTO cbt_siswa VALUES("11","A11","SMK00111","LUMUT","TKJ","XII","P","A11","");
INSERT INTO cbt_siswa VALUES("12","A12","SMK00112","KIRUN","TKJ","XII","L","A12","");
INSERT INTO cbt_siswa VALUES("13","A13","SMK00113","SIDIK","TKJ","XII","L","A13","");
INSERT INTO cbt_siswa VALUES("14","A14","SMK00114","WAKIDI","TKJ","XII","L","A14","");
INSERT INTO cbt_siswa VALUES("15","A15","SMK00115","MUKIDI","TKJ","XII","L","A15","");
INSERT INTO cbt_siswa VALUES("16","A16","SMK00116","GUNDALA PUTRAPETIR","TKJ","XII","L","A16","");
INSERT INTO cbt_siswa VALUES("17","A17","SMK00117","MATBUKRI","TKJ","XII","L","A17","");
INSERT INTO cbt_siswa VALUES("18","A18","SMK00118","BUNALI","TKJ","XII","L","A18","");
INSERT INTO cbt_siswa VALUES("19","A19","SMK00119","EKO LONDHO","TKJ","XII","L","A19","");
INSERT INTO cbt_siswa VALUES("20","A20","SMK00120","DIDIK MANGKUPROJO","TPE","XII","L","A20","");
INSERT INTO cbt_siswa VALUES("21","A21","SMK00121","PARTO","TPE","XII","L","A21","");
INSERT INTO cbt_siswa VALUES("23","A23","SMK00123","KASINO","TPE","XII","L","A23","");
INSERT INTO cbt_siswa VALUES("24","A24","SMK00124","INDRO","TPE","XII","L","A24","");
INSERT INTO cbt_siswa VALUES("25","A25","SMK00125","TESSY RIWAYATI","TPE","XII","L","A25","");
INSERT INTO cbt_siswa VALUES("26","A26","SMK00126","SUSSY","TPE","XII","P","A26","");
INSERT INTO cbt_siswa VALUES("27","A27","SMK00127","ISYE","TPE","XII","P","A27","");
INSERT INTO cbt_siswa VALUES("31","A100","SMK0000111","Rahman Ardi Saputra","TKJ","XII","L","a100","");
INSERT INTO cbt_siswa VALUES("29","A29","SMK00129","KUCRIT","TPE","XII","L","A29","");



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

INSERT INTO cbt_siswa_ujian VALUES("1","a1","TKJ","SMP01","kimia1","5","2016-11-22 08:18:31","07:15:00","08:02:09","08:18:31","","01:12:51","00:00:00","CDUZI","00:00:00","9");
INSERT INTO cbt_siswa_ujian VALUES("2","a2","TKJ","SMP01","kimia1","5","2016-11-22 09:13:53","07:15:00","09:11:18","09:13:53","","00:03:42","00:00:00","CDUZI","00:00:00","9");
INSERT INTO cbt_siswa_ujian VALUES("3","","","","","0","2016-11-22 09:11:36","00:00:00","09:11:36","09:11:36","","-9:-11:-","00:00:00","","00:00:00","9");
INSERT INTO cbt_siswa_ujian VALUES("4","a1","TKJ","SMP01","kimia1","5","2017-01-18 13:14:01","13:12:00","13:13:06","13:14:01","","01:58:54","00:00:00","MKRYP","00:00:00","9");



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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO cbt_soal VALUES("1","SMP01","kimia1","TKJ","1","","<p>Minyak kayu putih yang berasal dari daun kayu putih dapat diperoleh dengan cara&hellip;</p>","","","","Dekantasi","kristalisasi","Ekstraksi ","Destilasi","kromatografi","","","","","","1","0");
INSERT INTO cbt_soal VALUES("2","SMP01","kimia1","TKJ","2","","<p>Perhatikan gambar rangkaian destilasi/penyulingan dibawah ini<br />Yang paling tepat untuk memisahkan:</p>","","","","minyak tanah","Minyak cengkeh","bensin","minyak kayu putih","solar","","","","","","1","0");
INSERT INTO cbt_soal VALUES("3","SMP01","kimia1","TKJ","3","","<p>Alkohol dan air merupakan dua zat yang berbeda titik didihnya. Alkohol titik didihnya lebih rendah sehingga bila didestilasi alkohol akan ....<br /><img title=\"\\sum \\frac{\\partial }{\\partial x}\" src=\"http://latex.codecogs.com/gif.latex?\\sum&amp;space;\\frac{\\partial&amp;space;}{\\partial&amp;space;x}\" /></p>","","","","habis terlebih dahulu dan air tetap","habis belakangan setelah air menguap seluruhnya.","menguap lebih sedikit daripada air","menguap lebih banyak daripada air","bercampur dengan zat lain","woka1.png","","","","","1","0");
INSERT INTO cbt_soal VALUES("4","SMP01","kimia1","TKJ","4","","<p>Campuran dua zat dipisahkan dengan cara seperti pada gambar dibawah ini&nbsp; menggunakan metode ...</p>","","","","filtrasi","detoknasi","diflasi","okslopitasi","sedimantasi","","","","","","1","0");
INSERT INTO cbt_soal VALUES("5","SMP01","kimia1","TKJ","5","","<p>Berikut ini merupakan tujuan pemisahan campuran, <strong><em>kecuali</em> ....</strong></p>","","","","memperoleh zat murni","mengetahui suatu zat dalam sampel","mendapatkan zat yang berguna","memperoleh zat yang langka ","mendapatkan zat baru","","","","","","1","0");



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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO cbt_ujian VALUES("4","TKJ","SMP01","kimia1","5","2017-01-18","13:12:00","15:12:00","","02:00:00","MKRYP","1");



