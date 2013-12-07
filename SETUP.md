# Memulai Melakukan Instalasi

Dokumen ini dijelaskan secara singkat dan padat. Baca dari atas sampai bawah. Lewati bagian yang tidak sesuai (misal, jika menggunakkan Windows, abaikan bagian Linux).

# Recommended Environment

- Linux: Ubuntu 12.04
- Windows: Windows XP ke atas

Belum dicoba untuk Mac, tetapi seharusnya bisa. Sesuaikan konfigurasi LAMP dengan environment di Mac.

# Konvensi

`{BERKULIAH}` adalah tempat dimana berkuliah diinstall.

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

Lakukan instalasi program berikut:

1. Coral Server Terbaru: [uniformserver.com](http://sourceforge.net/projects/miniserver/files/Uniform%20Server/8.9.2-Coral/Coral_8_9_2.exe/download).  
   **Catatan:** Anda bisa menggunakkan environment apapun seperti XAMPP, tetapi untuk Windows kami merekomendasikan Uniform.

1. SourceTree: [sourcetreeapp.com](http://sourcetreeapp.com)
1. [MSysGit] dan [KDiff]
1. Untuk fitur Preview, mohon pasang SWFTools (dijelaskan belakangan)

# Initial Configuration Setup

1. Clone: `https://[akun_github_anda]@github.com/misdianti/berkuliah.git` (atau gunakan client
   kesukaan Anda seperti [SourceTree](http://sourcetreeapp.com))
2. Download yii, taruh di satu folder di atasnya
3. Bikin database `berkuliah` dan `berkuliah_test` terus jalanin sql di `protected/data`
4. Selesai!

# Initial Setup



# Menjalankan Unit Testing

1. Pertama, buat sebuah file baru `protected/config/test.php`. Ambil isiyna dari berkas contoh `protected/config/test.example.php`.
2. Sesuaikan isi `test.php` dengan konfigurasi komputer lokal   
2. Buka cmd, `cd` ke folder `{BERKULIAH}\protected\tests`
3. Masih di cmd, ketik `..\vendor\bin\phpunit unit`

# Instalasi Preview Engine

Engine Preview tersedia oleh FlexPaper. FlexPaper memiliki dependency ke SWFTools. Lakukan instalasi [SWFTools](http://www.swftools.org/download.html) terlebih dahulu. 

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