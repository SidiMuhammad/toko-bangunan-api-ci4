**REST API sederhana untuk manajemen produk toko bangunan dibuat menggunakan CodeIgniter 4**

Harap ganti terlebih dahulu `env` menjadi `.env`

Base URL: `http://localhost:8080`

| Method     | Endpoint                | Request Body (JSON)                                                                                     | Deskripsi                             |
| ---------- | ----------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------- |
| GET        | /kategori               | –                                                                                                       | Menampilkan semua kategori            |
| GET        | /kategori/{id_kategori} | –                                                                                                       | Menampilkan kategori berdasarkan ID   |
| POST       | /kategori               | `{ "nama_kategori": string(128) }`                                                                      | Menambahkan kategori baru             |
| PUT        | /kategori/{id_kategori} | `{ "nama_kategori": string(128) }`                                                                      | Memperbarui kategori berdasarkan ID   |
| DELETE     | /kategori/{id_kategori} | –                                                                                                       | Menghapus produk berdasarkan ID       |
| GET        | /produk                 | –                                                                                                       | Menampilkan semua produk              |
| GET        | /produk/{id_produk}     | –                                                                                                       | Menampilkan produk berdasarkan ID     |
| POST       | /produk                 | `{ "id_kategori": int, "nama_produk": string(128), "harga_produk": decimal(12,2), "stok_produk": int }` | Menambahkan produk baru               |
| PUT        | /produk/{id_produk}     | `{ "id_kategori": int, "nama_produk": string(128), "harga_produk": decimal(12,2), "stok_produk": int }` | Memperbarui produk berdasarkan ID     |
| DELETE     | /produk/{id_produk}     | –                                                                                                       | Menghapus produk berdasarkan ID       |
