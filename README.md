<p align="center" >
  <b>POINT UTAMA</b>
</p>

---
> #### PHP WEB
> -  Web adalah kumpulan informasi yang dapat diakses melalui internet, bukan internet itu sendiri.
> -  Web server merupakan aplikasi yang menyimpan dan menyampaikan isi informasi web.
> -  Web hosting disediakan oleh penyedia data center untuk menyimpan website.
> -  Domain digunakan sebagai alias alamat IP untuk mempermudah mengakses website.
> -  Web browser mengubah bahasa mesin dari web server menjadi tampilan visual yang bisa dipahami oleh pengguna.
> -  Arsitektur aplikasi web menggunakan konsep client-server, di mana klien mengirim permintaan ke server dan server membalasnya.
> -  Konsep client-server memungkinkan akses web dari berbagai belahan dunia dengan menggunakan internet.
> -  PHP awalnya dirancang untuk aplikasi web, namun juga bisa digunakan untuk aplikasi berbasis terminal atau desktop.
---
> #### CARA KERJA PHP WEB
> -  Cara kerja PHP web melibatkan tiga pihak utama: web browser, web server, dan kode program PHP.
---
> #### PHP DEVELOPMENT SERVER
> -  PHP Development Server digunakan untuk mempermudah proses development aplikasi web PHP, bukan untuk dijalankan di web hosting.
> -  Untuk menjalankan PHP Development Server, cukup gunakan perintah ```php -S localhost:port```.
>
> Berikut ketika berhasil menginput kodenya :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/fdcc421e-5e58-4eac-9489-04724b01ba83)
---
> #### HOT RELOAD
> -  Fitur hot reload pada PHP memungkinkan perubahan kode program PHP tanpa perlu melakukan restart server.
---
> #### MENJALANKAN PHP WEB HELLO WORLD
> -  Membuat halaman web sederhana dengan PHP mirip dengan membuatnya menggunakan PHP dasar, namun outputnya dirender di browser.
> -  Pembuatan halaman "Hello World" menggunakan PHP sangat sederhana, cukup akses localhost dengan file PHP yang telah dibuat.
>
> Tampilan php web hello world :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/f5bab7f1-d376-48e3-bc7b-aad9ea6e8de8)
>
> Tampilan http request dan response :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/92639630-4479-4564-95b1-92339e3a8c15)
---
> #### PHP INFO
> - PHP info adalah fitur untuk mengecek versi PHP dan ekstensi yang aktif, dapat diakses melalui browser dengan membuat file ```phpinfo.php``` dan memanggil fungsi ```phpinfo()```.
>
> Berikut kode php info :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/3aad3207-ffa5-4fc2-be13-87b9085fa529)
>
> Berikut tampilan php info :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/144b753f-3bc6-4c75-be42-5e2cba52f4c0)
---
> #### INTEGRASI DENGAN HTML
> - Integrasi PHP dengan HTML memungkinkan pembuatan web dinamis, di mana kode PHP dapat dimasukkan di dalam kode HTML dengan menggunakan tag ```<?php ?>```.
> - Penggunaan PHP dalam HTML dapat disingkat dengan langsung memasukkan variabel atau data ke dalam HTML menggunakan sintaks ```<?= ?>```, menghindari penggunaan ```echo``` atau ```print```.
> - PHP dapat mengintegrasikan tag HTML, CSS, dan JavaScript dengan baik.
>
> Berikut kode integrasi dengan html :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/49103998-4135-4dc6-9740-5317c42b7f3e)
---
> #### $_SERVER
> - Di PHP, terdapat global variable bernama $_SERVER
> - Variabel global server dalam PHP berisi informasi tentang request masuk, seperti header HTTP.
> - Global variable server mengikuti spesifikasi RFC 3875 dan berisi banyak informasi, seperti query-string dan alamat remote.
>
> Berikut kode menampilkan isi $_SERVER :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/002effee-de06-419a-ac2d-b922149f1869)
>
> Berikut tampilan isi $_SERVER :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/02eff704-a639-4bf4-88f8-d417dd161430)
---
> #### QUERY PARAMETER
> - Penggunaan query parameter dalam URL memungkinkan pengiriman informasi tambahan dari client ke server secara dinamis.
---
> #### $_get
> - Global variable $_GET dalam PHP berisi data dari query parameter yang dikirimkan oleh client.
>
> Berikut kode $_get :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/054ccc5a-e6e9-4263-a466-6dca098f8894)
---
> #### MULTIPLE QUERY PARAMETER
> -  Query parameter dapat berjumlah lebih dari satu, dan dapat dipisahkan dengan tanda "&" dalam URL.
>
> Berikut kode multiple $_get :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/058023bf-1c53-429d-8880-802c21195350)
>
> Berikut tampilan multiple $_get :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/b0a47eab-3d61-4d00-bdf3-b05e2d9189b9)
---
> #### QUERY PARAMETER ARRAY
> - Query parameter dapat dibuat dalam bentuk array dengan menambahkan tanda kurung kotak ```[]``` di belakang nama parameter.
>
> Berikut kode query parameter array :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/777dbedc-1707-4ba9-a464-c725817659e1)
---
> #### CROSS SITE SCRIPTING
> - Cross-site scripting (XSS) adalah celah keamanan yang bisa dimanfaatkan oleh penyerang dengan mengirimkan skrip melalui query parameter.
> - Cross-site scripting (XSS) adalah masalah keamanan serius yang terjadi ketika kode JavaScript berbahaya disisipkan ke dalam halaman web, yang dapat menyebabkan pencurian sesi pengguna yang login.
>
> #### CARA MENCEGAH CROSS SITE SCRIPTING
> - Untuk mencegah Cross-site scripting, gunakan fungsi htmlspecialchars() untuk merubah tag HTML menjadi karakter-karakter yang aman.
>
> Berikut kode untuk mencegah xss :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/87640718-628e-41d3-87a8-826ece455f91)
---
> #### FORM POST
> - Ketika menggunakan formulir HTML, hindari metode GET default dan gunakan metode POST untuk mengirim data ke server untuk menghindari menyimpan data sensitif di URL.
>
> #### $_POST
> - $_POST adalah global variable yang berisikan data array yang dikirim dari client ke server dalam bentuk form post.
>
> Berikut kode form post :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/b3cf4877-f7b7-4a18-a9ea-36cd90f0060f)
>
> Berikut kode menerima form post :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/5f7e205e-bc79-4f91-a11d-9f80d8ac7cca)
===
> #### HEADER
> - Header dalam HTTP request dan response menyimpan informasi tambahan di luar URL, yang bisa dikirimkan oleh klien atau dibuat oleh server. Semua header dikonversi menjadi huruf besar dan spasi diganti menjadi underscore.
>
> Berikut kode menangkap header :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/2479126c-d95a-4dc4-b9a6-5cbc4daf28b1)
>
> #### MENAMBAH HEADER RESPONSE
> - Tambahan informasi dalam HTTP response dapat ditambahkan melalui header, seperti versi aplikasi atau informasi waktu server.
> - Header dalam PHP harus ditambahkan sebelum rendering konten HTML untuk mematuhi spesifikasi HTTP.
> - HTTP header tidak sensitif terhadap huruf besar-kecil, namun disarankan untuk konsisten dalam penggunaan.
>
> Beriktu kode menambah header response :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/9c4c921b-851f-43c0-ae53-bfd1b0634e10)
---
> ### REDIRECT
> 
> #### HTTP REDIRECT
> - Redirect dari satu halaman ke halaman lain bisa dilakukan dengan mengirimkan header ```Location``` dalam respons HTTP.
>
> Berikut kode redirect :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/5ecee5ad-bbfc-496d-b6ee-d5898ce93af4)
---
> #### RESPONSE CODE
> =  HTTP response code menunjukkan status respons server, dan dapat diubah menggunakan fungsi http_response_code di PHP.
>
> Berikut kode response code :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/7d21bcc0-49a8-489f-a6ca-eaf08a622254)
---
> #### SESSION
> - Session digunakan untuk menyimpan informasi klien di server, memungkinkan server menjadi stateful dalam interaksi dengan klien.
> - Ketika menggunakan session dalam PHP untuk proses login, informasi login dapat disimpan di sisi server dan dikirimkan kembali ke browser untuk disimpan.
>
> #### MEMASTIKAN FITUR SESSION DI PHP
> = Pastikan PHP yang diinstal mendukung fitur session; periksa dokumentasi PHP untuk memastikan session supportnya.
>
> #### $_SESSION
> = Gunakan global variable $_SESSION untuk menyimpan data session di PHP.
> - Gunakan ```session_start()``` untuk memulai session sebelum mengakses atau mengubah data session.
>
> Berikut kode menjalankan session (1) :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/fe7e1a1b-8619-4fc3-9660-9ce96b949bd4)
>
> Berikut kode menjalankan session (2) :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/902eea94-e5bc-4f9c-a1ca-edfe03b9cc22)
>
> Berikut kode mengambil session :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/24db1dd7-90f6-4b86-9256-159500236220)
>
> Berikut kode menghapus session :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/7fdab6d7-a7a7-49fb-bd57-a29f979e6de2)
---
> #### MASALAH DENGAN PHP SESSION
> - Penting untuk memahami masalah yang terkait dengan penggunaan session dalam PHP, seperti masalah dengan penyimpanan file session di server yang berbeda dan kinerja yang lambat saat menyimpan data besar dalam session.
---
> #### COOKIE
> - Cookie adalah data yang dikirimkan oleh server dan disimpan di browser untuk mengirim informasi ke server tanpa keterlibatan tampilan halaman.
> - Disarankan untuk mengatur atribut ```HttpOnly``` pada cookie menjadi ```true``` agar tidak dapat diakses oleh JavaScript, mengurangi risiko serangan cross-site scripting (XSS).
> - Hatilah dalam penggunaan cookie, hindari menyimpan terlalu banyak data di dalamnya karena semua data akan dikirim dalam setiap permintaan HTTP, yang dapat memperlambat kinerja.
>
> Berikut kode membuat cookie :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/fa437321-f861-4ad7-b644-4a22d6f3b895)
>
> Berikut kode menampilkan cookie :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/e0a584ff-aa69-4c36-99cc-a86d9066cac0)
>
> #### SESSION DAN COOKIE
> - Session ID dalam PHP disimpan di dalam Cookie dan digunakan sebagai identifier untuk file session di server.
> - PHP session ID disimpan di Cookie dan digunakan untuk mengakses file session di server, menjadikannya erat terkait dengan Cookies.
---
> ### UPLOAD FILE
> - PHP memungkinkan upload file dari client ke server dengan mudah menggunakan global variable ```$_FILES```.
> - File yang diupload secara otomatis disimpan di folder temporary di server dan dihapus setelah request selesai untuk menghindari penumpukan.
>
> #### $_FILES
>
> Berikut kode untuk menggunakan variable $_files :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/3d98c5f6-d842-421f-842c-10885e468f37)
>
> Berikut kode form upload :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/ad10b4c3-4e3c-4c84-90c2-cf156ce4e06b)
>
> Berikut kode menerima file upload :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/07362257-2a4f-4a9a-b448-06d3a859d917)
>
> #### MEMINDAHKAN FILE UPLOAD
> -  PHP menyediakan fungsi ```move_uploaded_file()``` untuk memindahkan file yang di-upload ke lokasi tujuan setelah di-upload.
> -  Dalam PHP, kita bisa memindahkan file dari satu lokasi ke lokasi lain menggunakan fungsi ```move_uploaded_file()```.
>
> Berikut kode memindahkan file upload :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/e955a834-4750-4aa9-9a77-86aab08c8f90)
--- 
> #### DOWNLOAD FILE
> - Saat membuat web, kadang kadang kita butuh mengembalikan content berupa file yang butuh didownload oleh client
> - Sebenarnya, kita bisa langsung megakses file tersebut melalui URL, namun kita kita mau, kita juga bisa menggunakan PHP untuk membuat content dalam bentuk file dan memaksa client untuk mendownloadnya.
> - Header HTTP ```content-disposition``` dapat digunakan untuk memaksa browser untuk mengunduh file daripada menampilkannya.
> - Untuk memaksa unduhan file, gunakan header ```content-disposition: attachment``` dan tentukan nama file dengan benar.
>
> Berikut kode download file di php :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/6acfb835-eb2f-4a91-993f-9a425f81bd27)

---

<p align="center" >
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
</p>

> - tidak ada

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

---

> - video ini fokus pada pengembangan fitur PHP pada website.




























