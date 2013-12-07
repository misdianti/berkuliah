# Memulai Melakukan Instalasi

Dokumen ini dijelaskan secara singkat dan padat. Baca dari atas sampai bawah. Lewati bagian yang tidak sesuai (misal, jika menggunakkan Windows, abaikan bagian Linux).

# Recommended Environment

- Linux: Ubuntu 12.04
- Windows: Windows XP ke atas

Belum dicoba untuk Mac, tetapi seharusnya bisa. Sesuaikan konfigurasi LAMP dengan environment di Mac.

# Environment Setup: Linux (Debian Based)

Jika yakin kebutuhan standar LAMP telah terpenuhi, lewati perintah ini.

1. Install Apache terlebih dahulu:

		apt-get install apache2

1. Kemudian install mysql:

		apt-get install mysql-server
		mysql_secure_installation

1. Kemudian install PHP5:

		apt-get install php5 php-pear php5-suhosin php5-mysql

1. Restart Apache2

		service apache2 restart

1. Tambahan: lakukan instalasi git

		apt-get install git

# Environment Setup: Windows

Download dan install program berikut:

1. Coral Server (atau disebut juga Uniform Server) Terbaru: [uniformserver.com](http://sourceforge.net/projects/miniserver/files/Uniform%20Server/8.9.2-Coral/Coral_8_9_2.exe/download).  
   **Catatan:** Anda bisa menggunakkan environment apapun seperti XAMPP, tetapi untuk Windows kami merekomendasikan Uniform.
1. [MSysGit](http://msysgit.github.io/) dengan [KDiff](http://kdiff3.sourceforge.net/)
1. SourceTree: [sourcetreeapp.com](http://sourcetreeapp.com)
1. Untuk fitur Preview, mohon pasang SWFTools (dijelaskan belakangan)

Catatan khusus untuk instalasi Coral:

1. Pasang Coral. Ketika ditanya instalasi, masukkan folder **yang tidak ada spasinya**. (`C:\` saja cukup). Selanjutnya kita akan sebut folder ini sebagai `{UNISERVER}`.
1. Masukkan setiap baris dari program ini ke environment variable (tentu saja, ubah `{UNISERVER}` menjadi path absolute sebenarnya:
		
		{UNISERVER}\usr\local\php
		{UNISERVER}\usr\local\mysql\bin

1. Jalankan `{UNISERVER}\Start_as_a_program.exe`
1. Akan ditanya "Change MySQL Password". Berhubung hanya akan melakukan instalasi lokal, abaikan saja permintaan ini. Pilih `NO` untuk membiarkan password apa adanya, kemudian pilih `YES` untuk mendisable peringatan ini di kemudian hari.
1. Klik `Start Both`.

# Konfigurasi Inisial

1. `cd` ke `/var/www/` (Linux) atau `{UNISERVER}\www` (Windows)
1. Clone: `https://[akun_github_anda]@github.com/misdianti/berkuliah.git` (atau gunakan client kesukaan Anda seperti [SourceTree](http://sourcetreeapp.com))  
   Selanjutnya, folder ini akan kita sebut sebagai `{BERKULIAH}`
1. Unduh arsip berikut:

		http://yii.googlecode.com/files/yii-1.1.13.e9e4a0.tar.gz
   
   Extract ke satu folder di atas berkuliah dan ubah namanya dari `yii-1.1.13.e9e4a0` menjadi `yii`. Sehingga nantinya struktur foldernya akan seperti berikut:

		www/
		    berkuliah/
		    yii/

1. `cd` ke `{BERKULIAH}/protected` (Linux) atau `{BERKULIAH}\protected` (Windows)
1. Lakukan database migration. Ikuti perintah berikut (Ketika diminta password, masukkan password MySQL. Defaultnya adalah `root`):

		mysql -u root -p
		create database berkuliah;
		use berkuliah;
		source data\berkuliah.sql;
		source data\bk_faculty.sql;
		source data\bk_course.sql;
		source data\bk_badge.sql;
		create database berkuliah_test;
		use berkuliah_test;
		source data\berkuliah.sql;
		source data\bk_faculty.sql;
		source data\bk_course.sql;
		source data\bk_badge.sql;

   Catatan: Jika saat memasukkan perintah `mysql` command line tidak memberikan reaksi apapun, pastikan **Anda sudah menambahkan mysql ke PATH. Baca bagian Setup Environment untuk platform Anda**.

1. Dengan editor kesukaan Anda (misalnya [Aptana Studio](http://aptana.com)), buat berkas berikut:

   - `{BERKULIAH}/protected/config/main.php`. Contoh isinya dapat diambil dari `{BERKULIAH}/protected/config/main.example.php`
   - `{BERKULIAH}/protected/config/local.php`. Contoh isinya dapat diambil dari `{BERKULIAH}/protected/config/local.example.php`  

   Sesuaikan isinya dengan konfigurasi komputer Anda. Mohon dicatat `API KEY` untuk Facebook tidak diberikan, silahkan generate sendiri dari [developer.facebook.com](http://developer.facebook.com).

# Menjalankan Unit Testing

1. Pertama, buat sebuah file baru `protected/config/test.php`. Ambil isinya dari berkas contoh `protected/config/test.example.php`.
2. Sesuaikan isi `test.php` dengan konfigurasi komputer lokal   
2. Buka cmd, `cd` ke folder `{BERKULIAH}\protected\tests`
3. Masih di cmd, ketik `..\vendor\bin\phpunit unit`

# Instalasi Preview Engine

Engine Preview tersedia dengan bantuan FlexPaper. FlexPaper memiliki dependency ke SWFTools. Lakukan instalasi [SWFTools](http://www.swftools.org/download.html) terlebih dahulu. 

- Untuk Windows, cukup unduh [binarynya](http://www.swftools.org/swftools-0.9.0.exe) saja. Kemudian masukkan folder yang mengandung `pdf2swf` ke PATH (ada di folder tempat instalasi)
- Untuk linux:

		# Default Digital Ocean Image prerequisites
		# Ternyata tidak diinstall by default
		apt-get install software-properties-common
		apt-get install python-software-properties
	
		# Actual installation
		sudo add-apt-repository ppa:guilhem-fr/swftools
		sudo apt-get update
		sudo apt-get install swftools

Kemudian lakukan instalasi di `http://localhost/flexpaper/php` (Jangan lupa Apache / Uniform Servernya dihidupkan terlebih dahulu). Jika ditanya apakah ingin split-view, pilih NO (pilih yang single-view). Kemudian jika ditanya lokasi PDF dan generated file, masukkan **absolute path** ke `{BERKULIAH}/notes` dan `{BERKULIAH}/flexpaper/swf`.

Jika instalasi di Windows ternyata bermasalah, mohon cek `flexpaper/php/config/config.ini.win.php`. Pastikan `"cmd.conversion.singledoc"` menampilkan entri yang benar. Pada beberapa kasus, stringnya kurang `\`.

# Github Hook

Untuk automatic deployment ke server, gunakan Github Hook, arahkan ke URL yang mengandung `auto.php`. [Contohnya ini](http://d.pr/i/G6M9).

Kemudian, pastikan permission dan ownership sesuai dengan konfigurasi web server. Untuk Apache, pastikan pemiliknya adalah `www-data:www-data`. Jika tidak, lakukan `chown`. Misal:

	chown www-data:www-data -R /var/www