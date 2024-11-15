# Business Requirements Document (BRD)

## 1. Pendahuluan
Dokumen ini menggambarkan kebutuhan fungsional dan non-fungsional untuk sistem manajemen data menu restoran. Sistem ini memungkinkan pengelolaan menu restoran, pemesanan oleh pelanggan, dan penyampaian ulasan. Aktor yang terlibat dalam sistem ini adalah **Admin**, **Koki**, dan **Pelanggan**.

## 2. Aktor dan Peran

- **Admin**: Pengelola restoran yang dapat mengelola data kategori, menu, dan melihat statistik pesanan dan ulasan.
- **Koki**: Bertanggung jawab untuk melihat pesanan dan menyiapkan menu sesuai permintaan pelanggan.
- **Pelanggan**: Pengguna yang dapat melihat menu, membuat pesanan, dan memberikan ulasan setelah makan.

## 3. Entitas dan Deskripsi Tabel

### 3.1 Tabel Kategori
Tabel kategori digunakan untuk mengorganisasi menu berdasarkan jenis atau kategori tertentu (misalnya, makanan pembuka, hidangan utama, minuman).

| Kolom            | Tipe Data | Deskripsi                         |
|------------------|-----------|-----------------------------------|
| `id_kategori`    | INT       | ID unik kategori (Primary Key)    |
| `nama_kategori`  | VARCHAR   | Nama kategori (misal: "Makanan Pembuka") |
| `deskripsi`      | TEXT      | Deskripsi singkat kategori        |

### 3.2 Tabel Menu
Tabel menu berisi informasi tentang item-menu yang tersedia di restoran.

| Kolom            | Tipe Data  | Deskripsi                                    |
|------------------|------------|----------------------------------------------|
| `id_menu`        | INT        | ID unik menu (Primary Key)                   |
| `id_kategori`    | INT        | ID kategori (Foreign Key)                    |
| `nama_menu`      | VARCHAR    | Nama menu                                    |
| `deskripsi`      | TEXT       | Deskripsi menu                               |
| `harga`          | DECIMAL    | Harga menu                                   |

### 3.3 Tabel Order
Tabel pesanan menyimpan informasi terkait pesanan yang dilakukan oleh pelanggan.

| Kolom            | Tipe Data  | Deskripsi                                      |
|------------------|------------|------------------------------------------------|
| `id_order`       | INT        | ID unik pesanan (Primary Key)                  |
| `id_pelanggan`   | INT        | ID pelanggan (Foreign Key)                     |
| `table_number`   | INT        | Nomor meja tempat pesanan dilakukan            |
| `total_harga`    | DECIMAL    | Total harga pesanan                            |
| `status_order`   | ENUM       | Status pesanan (Menunggu, Diproses, Selesai)   |

### 3.4 Tabel Review
Tabel ulasan digunakan untuk menyimpan ulasan dari pelanggan mengenai menu yang dipesan.

| Kolom            | Tipe Data  | Deskripsi                                      |
|------------------|------------|------------------------------------------------|
| `id_review`      | INT        | ID unik ulasan (Primary Key)                   |
| `id_menu`        | INT        | ID menu yang diulas (Foreign Key)              |
| `id_pelanggan`   | INT        | ID pelanggan yang memberikan ulasan (Foreign Key) |
| `rating`         | INT        | Nilai rating (1-5)                             |
| `komentar`       | TEXT       | Komentar ulasan                               |

## 4. Kebutuhan Fungsional

1. **Admin**
   - Admin dapat menambahkan, mengubah, dan menghapus kategori menu.
   - Admin dapat menambah, mengubah, dan menghapus menu.
   - Admin dapat memantau status pesanan dan ulasan yang diberikan oleh pelanggan.
   
2. **Koki**
   - Koki dapat melihat pesanan yang masuk dan statusnya (Menunggu, Diproses, Selesai).
   - Koki dapat mengupdate status pesanan menjadi "Selesai" setelah makanan siap disajikan.
   
3. **Pelanggan**
   - Pelanggan dapat melihat menu yang tersedia berdasarkan kategori.
   - Pelanggan dapat memesan menu yang diinginkan.
   - Pelanggan dapat memberikan ulasan dan rating terhadap menu yang sudah dicoba.

## 5. Kebutuhan Non-Fungsional
   - **Keamanan**: Semua data yang sensitif (seperti password pelanggan) harus dienkripsi.
   - **Kinerja**: Sistem harus dapat menangani hingga 1000 pesanan dalam satu waktu tanpa penurunan kinerja.
   - **Ketersediaan**: Sistem harus tersedia 99% dalam waktu 24 jam.
   - **Skalabilitas**: Sistem harus dapat mendukung penambahan kategori dan menu tanpa mempengaruhi kinerja.

## 6. Alur Proses

1. **Pendaftaran & Login**:
   - Pelanggan mendaftar dan login untuk dapat memesan dan memberikan ulasan.
   
2. **Pengelolaan Menu**:
   - Admin mengelola kategori dan menu melalui antarmuka sistem.
   - Koki melihat pesanan dan memprosesnya sesuai permintaan pelanggan.

3. **Pemesanan**:
   - Pelanggan memilih menu, menambahkannya ke keranjang, dan melakukan checkout.
   
4. **Ulasan**:
   - Setelah pesanan selesai, pelanggan memberikan ulasan berdasarkan pengalaman mereka.

