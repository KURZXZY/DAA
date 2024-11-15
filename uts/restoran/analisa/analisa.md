# Analisis Sistem Data Menu Restoran

## Tujuan Sistem
Sistem ini dirancang untuk mengelola data menu restoran secara terintegrasi, termasuk pengelolaan kategori, item menu, pemesanan, dan ulasan pelanggan. Sistem mendukung layanan dine-in dan take-away.

---

## Aktor Sistem
1. **Admin**  
   - Mengelola kategori menu, item menu, pengguna, dan ulasan.
   - Memantau status pesanan.
2. **Pelanggan**  
   - Melihat menu, memesan, dan memberikan ulasan.
3. **Koki**  
   - Meninjau pesanan dan menyiapkan makanan.

---

## Fitur Utama
| **ID**  | **Fitur**                      | **Deskripsi**                                                                |
|---------|---------------------------------|-------------------------------------------------------------------------------|
| F01     | Kelola Pengguna                | Admin dapat mengelola data pengguna (pelanggan dan koki).                    |
| F02     | Kelola Kategori dan Menu       | Admin dapat menambah, mengubah, dan menghapus kategori serta item menu.      |
| F03     | Pemesanan                      | Pelanggan dapat memesan dengan metode dine-in atau take-away.                |
| F04     | Pelacakan Pesanan              | Pelanggan dapat melacak status pesanan mereka.                               |
| F05     | Ulasan                         | Pelanggan dapat memberikan ulasan dan penilaian pada pesanan.                |

---

## Data Tabel
### 1. Tabel User
Menyimpan data pengguna, termasuk admin, pelanggan, dan koki.

| **Kolom**       | **Tipe Data** | **Deskripsi**                          |
|------------------|---------------|----------------------------------------|
| id_user          | INT           | ID unik pengguna.                     |
| nama             | VARCHAR       | Nama pengguna.                        |
| role             | ENUM          | Peran pengguna (Admin, Pelanggan, Koki). |
| email            | VARCHAR       | Email pengguna.                       |
| password         | VARCHAR       | Kata sandi pengguna.                  |

### 2. Tabel Kategori
Menyimpan kategori menu.

| **Kolom**   | **Tipe Data** | **Deskripsi**              |
|-------------|---------------|----------------------------|
| id_kategori | INT           | ID unik kategori.         |
| nama        | VARCHAR       | Nama kategori menu.       |

### 3. Tabel Menu
Menyimpan detail item menu.

| **Kolom**   | **Tipe Data** | **Deskripsi**              |
|-------------|---------------|----------------------------|
| id_menu     | INT           | ID unik menu.             |
| nama        | VARCHAR       | Nama item menu.           |
| harga       | DECIMAL       | Harga item menu.          |
| deskripsi   | TEXT          | Deskripsi menu.           |
| id_kategori | INT           | Kategori item menu.       |

### 4. Tabel Order
Menyimpan data pemesanan pelanggan.

| **Kolom**       | **Tipe Data** | **Deskripsi**                          |
|------------------|---------------|----------------------------------------|
| id_order         | INT           | ID unik pesanan.                      |
| id_pelanggan     | INT           | ID pelanggan terkait.                 |
| id_koki          | INT           | ID koki yang menyiapkan.              |
| metode_pemesanan | ENUM          | Tipe pemesanan (Dine-In, Take-Away).  |
| status           | ENUM          | Status pesanan (Pending, Diproses, Selesai). |

### 5. Tabel Review
Menyimpan ulasan dari pelanggan.

| **Kolom**     | **Tipe Data** | **Deskripsi**              |
|---------------|---------------|----------------------------|
| id_review     | INT           | ID unik ulasan.           |
| id_order      | INT           | ID pesanan terkait.       |
| rating        | INT           | Penilaian (1-5).          |
| ulasan        | TEXT          | Teks ulasan.              |

---

## Alur Proses Utama
1. **Admin** mengelola kategori menu, item menu, dan data pengguna.
2. **Pelanggan** memesan menu dengan metode dine-in atau take-away.
3. **Koki** menyiapkan pesanan dan memperbarui status.
4. **Pelanggan** melacak pesanan dan memberikan ulasan.

---

## Non-Fungsionalitas
- Sistem mendukung multi-lokasi restoran.
- Data pengguna dienkripsi untuk keamanan.
- Sistem harus responsif dan mendukung perangkat seluler.
