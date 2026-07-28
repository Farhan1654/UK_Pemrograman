# UK_Pemrograman
Soal untuk Ujian Khusus Mahasiswa Pemrograman 1

````markdown
# 💻 Tugas Besar Pemrograman Website

Selamat datang di repository **Tugas Besar Mata Kuliah Pemrograman Website**.

Setiap mahasiswa **wajib memilih salah satu** dari dua studi kasus berikut dan mengimplementasikannya menggunakan **HTML, CSS, dan JavaScript**.

---

# 📋 Pilihan Soal

## Soal 1 - Sistem Reservasi Lapangan Olahraga

### Studi Kasus

Sebuah pusat olahraga ingin memiliki website sederhana yang dapat digunakan pelanggan untuk melihat informasi lapangan dan melakukan simulasi reservasi secara online.

Website ini **tidak perlu menggunakan database**, namun seluruh data reservasi harus disimpan menggunakan **Local Storage**.

### Fitur Wajib

1. Halaman Beranda.
2. Halaman Daftar Lapangan.
3. Halaman Reservasi.
4. Halaman Riwayat Reservasi.
5. Halaman Tentang Kami.

### Data Reservasi

Minimal terdiri dari:

- Nama Pemesan
- Nomor Telepon
- Jenis Lapangan
- Tanggal
- Jam Bermain
- Durasi Sewa

### Fitur Aplikasi

- Menampilkan daftar lapangan beserta informasi harga.
- Form reservasi dengan validasi input.
- Menyimpan data reservasi ke Local Storage.
- Menampilkan daftar reservasi.
- Mengubah data reservasi.
- Menghapus data reservasi.
- Menampilkan total jumlah reservasi.
- Fitur pencarian berdasarkan nama pemesan.

---

## Soal 2 - Sistem Peminjaman Buku Perpustakaan

### Studi Kasus

Sebuah perpustakaan sekolah membutuhkan website sederhana untuk mengelola data peminjaman buku oleh siswa.

Website dikembangkan menggunakan **HTML, CSS, dan JavaScript**, tanpa database.

### Fitur Wajib

1. Dashboard.
2. Halaman Daftar Buku.
3. Halaman Peminjaman Buku.
4. Halaman Data Peminjaman.
5. Halaman Profil Perpustakaan.

### Data Peminjaman

Minimal terdiri dari:

- Nama Peminjam
- NIS/NIM
- Judul Buku
- Tanggal Pinjam
- Tanggal Kembali

### Fitur Aplikasi

- Menampilkan daftar buku.
- Form peminjaman buku.
- Menyimpan data ke Local Storage.
- Menampilkan daftar peminjaman.
- Edit data peminjaman.
- Hapus data peminjaman.
- Menampilkan jumlah buku yang sedang dipinjam.
- Pencarian data berdasarkan nama peminjam atau judul buku.

---

# 🛠 Teknologi yang Digunakan

Wajib menggunakan:

- HTML5
- CSS3
- JavaScript

Boleh menggunakan:

- Bootstrap
- Bootstrap Icons
- Font Awesome
- Google Fonts

Tidak diperbolehkan menggunakan:

- React
- Vue
- Angular
- Next.js
- Laravel
- CodeIgniter
- Framework backend lainnya.

---

# 📂 Struktur Repository

Setiap mahasiswa **WAJIB** membuat folder project masing-masing dengan format:

```
NIM_NamaLengkap
```

Contoh:

```
23110001_BudiSantoso
```

Struktur minimal:

```
repository-kelas/
│
├── 23110001_BudiSantoso/
│   ├── index.html
│   ├── css/
│   ├── js/
│   ├── images/
│   └── README.md
│
└── ...
```

---

# 📝 README.md pada Folder Project

Setiap mahasiswa wajib membuat file **README.md** di dalam folder project masing-masing yang berisi:

- Nama Lengkap
- NIM
- Kelas
- Judul Aplikasi
- Studi Kasus yang dipilih
- Deskripsi singkat aplikasi
- Daftar fitur yang telah diimplementasikan
- Teknologi yang digunakan
- Struktur folder project
- Screenshot aplikasi
- Link deploy (GitHub Pages/Netlify/Vercel) *(jika ada)*

---

# 📌 Petunjuk Pengerjaan

1. Tugas dikerjakan **secara individu**.
2. Clone repository yang telah dibagikan oleh dosen.
3. Buat branch baru dengan format:

```
feature-NIM
```

Contoh:

```
feature-23110001
```

4. Buat folder project sesuai format:

```
NIM_NamaLengkap
```

5. Kerjakan aplikasi di dalam folder tersebut.

6. Lakukan commit secara berkala dengan pesan commit yang jelas dan bermakna.

7. Minimal melakukan **8 commit** selama proses pengerjaan.

8. Push branch ke repository GitHub.

9. Buat **Pull Request** menuju branch `main`.

Format judul Pull Request:

```
[NIM] Nama Mahasiswa - Tugas Besar Pemrograman Website
```

10. Deskripsi Pull Request minimal memuat:

- Nama
- NIM
- Judul Aplikasi
- Studi Kasus
- Nama Folder Project
- Ringkasan fitur yang telah dibuat

11. Pengumpulan dianggap selesai apabila Pull Request berhasil dibuat sebelum batas waktu yang ditentukan.

---

# 📊 Kriteria Penilaian

| Aspek Penilaian | Bobot |
|-----------------|------:|
| HTML & Struktur Halaman | 20% |
| CSS & Responsive Design | 20% |
| JavaScript & Fungsionalitas | 25% |
| UI/UX | 15% |
| Dokumentasi (README.md) | 10% |
| Git Commit & Pull Request | 10% |

---

# ⚠️ Ketentuan Tambahan

- Dilarang melakukan plagiarisme.
- Dilarang melakukan push langsung ke branch `main`.
- Source code harus dapat dijalankan tanpa error.
- Setiap mahasiswa bertanggung jawab atas keaslian hasil pekerjaannya.
- Keterlambatan pengumpulan mengikuti kebijakan dosen pengampu.
