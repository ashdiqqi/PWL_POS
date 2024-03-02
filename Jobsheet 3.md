## JOBSHEET 3 
Nama  : Fatriya Ibnu Ash shidiqqi <BR>
Kelas : TI 2F <br>
NIM   : 2241720178 <br>

### PERTANYAAN
1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel? <BR>
Jawaban : APP_KEY digunakan Laravel sebagai encryption key untuk aplikasi kita. Laravel menggunakan string acak tersebut untuk meng-encrypt data yang kita butuhkan, misalnya cookies ataupun password.
2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY? <BR>
Jawaban : Generate menggunakan php artisan.
3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? 
dan untuk apa saja file migrasi tersebut? <BR>
Jawaban : <br> 
* create_users_table.php: File migrasi ini bertanggung jawab untuk membuat tabel users di database Anda. Tabel ini biasanya digunakan untuk menyimpan informasi pengguna, seperti nama, alamat email, dan kata sandi. <br>
* create_password_resets_table.php: File migrasi ini digunakan untuk membuat tabel password_resets di database Anda. Tabel ini digunakan untuk menyimpan token reset password yang dikirim ke pengguna yang meminta reset password. <br>
* create_failed_jobs_table.php: File migrasi ini membuat tabel failed_jobs yang digunakan untuk menyimpan informasi tentang pekerjaan-pekerjaan yang gagal dieksekusi oleh sistem antrean (queue) Laravel. 
4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output dari fungsi tersebut? <BR>
Jawaban : Menambahkan tabel created_at dan updated_at
5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari fungsi tersebut?<BR>
Jawaban : Tipe data yang dihasilkan adalah auto increment integer
6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); dengan menggunakan $table->id('level_id'); ? <BR>
Jawaban : Hasil migrasi menggunakan $table->id() adalah primary key  yang auto increment, sedangkan  hasil migrations $table->id ('level_id') adalah primary key berupa 'level_id'
7. Pada migration, Fungsi ->unique() digunakan untuk apa?<BR>
Jawaban : Fungsi ->unique() dalam file migrasi Laravel digunakan untuk menentukan bahwa nilai-nilai dalam kolom yang bersangkutan harus unik di antara semua baris (records) dalam tabel. Dengan kata lain, penggunaan ->unique() menjamin bahwa tidak ada dua baris dalam tabel yang memiliki nilai yang sama untuk kolom yang ditentukan.
8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user
menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id
pada tabel m_level menggunakan $tabel->id('level_id') ? <BR>
Jawaban : Karena kolom level_id pada table m_user merupakan foreign key sedangkan kolom level_id pada tabel m_level merupakan primary key 
9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode 
program Hash::make('1234');? <BR>
Jawaban : Tujuan utama dari class hash adalah untuk mengamankan kata sandi. Dalam kasus ini, Hash::make('1234') akan menghasilkan hash yang dienkripsi dari string '1234'. Proses hash adalah proses mengonversi suatu input (dalam hal ini, string '1234') menjadi nilai hash yang unik yang sulit atau tidak mungkin untuk diurai kembali ke nilai aslinya.
10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa 
kegunaan dari tanda tanya (?) tersebut?<BR>
Jawaban : Tanda tanya (?) dalam query builder Laravel digunakan sebagai placeholder untuk parameter dalam query yang akan diikuti oleh nilai yang diberikan pada saat eksekusi query. 
11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = 
‘m_user’; dan protected $primaryKey = ‘user_id’; ? <BR>
Jawaban : Menentukan tabel yang spesifik yaitu tabel m_user serta menentukan juga primary key dari tabel tersebut
12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke 
database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan <BR>
Jawaban : Query Builder karena kita tidak perlu menulis perintah SQL secara langsung, 
melainkan cukup memanggil method-method yang ada di query builder. Query builder membuat kode kita menjadi rapi dan lebih mudah dibaca