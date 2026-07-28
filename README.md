# UK_Pemrograman
Soal untuk Ujian Khusus Mahasiswa Pemrograman 1

# 💻 Ujian Khusus Praktikum Pemrograman Website
## Deskripsi
Ujian Khusus Praktikum ini bertujuan untuk mengimplementasikan konsep **Model-View-Controller (MVC)** dalam pengembangan aplikasi web menggunakan **PHP Native**.
Setiap mahasiswa wajib memilih **salah satu** studi kasus di bawah ini, kemudian mengembangkan aplikasi menggunakan arsitektur MVC.

# 📋 Pilihan Soal
## Soal 1 - Sistem Manajemen Inventaris Barang
### Studi Kasus
Sebuah toko elektronik ingin memiliki aplikasi sederhana untuk mengelola data inventaris barang. Admin dapat menambahkan, mengubah, menghapus, dan mencari data barang.

### Fitur Wajib
- Dashboard
- Login (opsional nilai tambah)
- Data Barang
- Tambah Barang
- Edit Barang
- Hapus Barang
- Detail Barang
- Pencarian Barang
- Statistik jumlah barang

### Data Barang
- Kode Barang
- Nama Barang
- Kategori
- Harga
- Stok
- Supplier

### Implementasi MVC
**Model**
- Mengelola proses CRUD data barang ke database.

**View**
- Menampilkan halaman Dashboard.
- Halaman Data Barang.
- Form Tambah.
- Form Edit.
- Detail Barang.

**Controller**
- Mengatur alur proses CRUD.
- Validasi input.
- Menghubungkan Model dengan View.

## Soal 2 - Sistem Manajemen Peminjaman Ruangan
### Studi Kasus
Sebuah kampus ingin memiliki aplikasi sederhana untuk mengelola peminjaman ruang kelas, laboratorium, dan ruang rapat.

### Fitur Wajib
- Dashboard
- Data Ruangan
- Data Peminjaman
- Tambah Peminjaman
- Edit Peminjaman
- Hapus Peminjaman
- Riwayat Peminjaman
- Pencarian Data

### Data Peminjaman
- Nama Peminjam
- NIM / NIP
- Nama Ruangan
- Tanggal
- Jam Mulai
- Jam Selesai
- Keperluan

### Implementasi MVC
**Model**
- CRUD Data Ruangan
- CRUD Data Peminjaman

**View**
- Dashboard
- Data Ruangan
- Data Peminjaman
- Form Tambah
- Form Edit
- Detail

**Controller**
- Mengatur seluruh request.
- Validasi data.
- Menghubungkan Model dan View.

# 🛠 Teknologi
Wajib menggunakan
- PHP Native
- HTML5
- CSS3
- JavaScript
- MySQL / MariaDB

Boleh menggunakan
- Bootstrap
- Bootstrap Icons
- Font Awesome
- Google Fonts

Tidak diperbolehkan menggunakan
- Laravel
- CodeIgniter
- Symfony
- React
- Vue
- Angular
- Framework backend/frontend lainnya

# 📂 Struktur Project (MVC)
Project wajib menggunakan struktur MVC berikut.

```
project/
│
├── app/
│   ├── controllers/
│   ├── models/
│   └── views/
│
├── config/
│
├── public/
│   ├── css/
│   ├── js/
│   ├── images/
│   └── index.php
│
├── routes/
│
└── README.md
```

Mahasiswa diperbolehkan menambahkan folder lain sesuai kebutuhan, namun struktur MVC harus tetap dipertahankan.

---

# 📝 Petunjuk Pengerjaan
1. Tugas dikerjakan **secara individu**.
2. Clone repository GitHub yang telah dibagikan oleh dosen.
3. Buat branch baru dengan format:

```
feature-NIM
```
Contoh
```
feature-23110001
```
4. Buat folder project dengan format
```
NIM_NamaLengkap
```

Contoh

```
23110001_BudiSantoso
```

5. Seluruh source code aplikasi diletakkan pada folder tersebut.

6. Terapkan arsitektur **Model-View-Controller (MVC)** secara konsisten.

7. Lakukan commit secara berkala.

Minimal **10 commit**.

Contoh commit

```
Initial Project
Create MVC Structure
Add Database Connection
Create Product Model
Create Product Controller
Create Product View
Add CRUD Feature
Add Search Feature
Improve UI
Update README
```
8. Push branch ke repository.
9. Buat Pull Request menuju branch **main**.
Format judul Pull Request

```
[NIM] Nama Mahasiswa - Ujian Khusus Praktikum MVC
```

10. Deskripsi Pull Request minimal berisi
- Nama
- NIM
- Judul Aplikasi
- Studi Kasus
- Struktur MVC yang digunakan
- Fitur yang telah selesai dibuat

---

# 📄 README.md pada Folder Project
Setiap mahasiswa wajib membuat README.md yang berisi
- Nama
- NIM
- Kelas
- Judul Aplikasi
- Studi Kasus
- Deskripsi Sistem
- Diagram Struktur MVC
- Struktur Folder
- Screenshot Dashboard
- Screenshot CRUD
- Screenshot Database
- Teknologi yang digunakan
- Link Deploy (jika ada)
---

# 📊 Kriteria Penilaian
| Aspek | Bobot |
|-------|------:|
| Implementasi MVC | 25% |
| Fungsionalitas CRUD | 25% |
| Desain Database | 10% |
| UI/UX & Responsive | 15% |
| Dokumentasi README | 10% |
| Git Commit & Pull Request | 15% |

---

# ⚠️ Ketentuan Tambahan
- Wajib menggunakan konsep MVC.
- Dilarang menggunakan framework PHP seperti Laravel atau CodeIgniter.
- Dilarang melakukan push langsung ke branch `main`.
- Wajib membuat Pull Request.
- Source code harus dapat dijalankan tanpa error.
- Setiap mahasiswa bertanggung jawab atas keaslian hasil pekerjaannya.
````
