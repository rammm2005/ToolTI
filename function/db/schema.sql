CREATE TABLE kategori;
CREATE TABLE kategori(
    id_kategori INTEGER(11) AUTO_INCREMENT NOT NULL,
    nama_kategori VARCHAR(100) NOT NULL,
    deskripsi TEXT NOT NULL,
    createdAt DATETIME(4) DEFAULT CURRENT_TIMESTAMP(4) NOT NULL,
    updatedAt DATETIME(4) DEFAULT CURRENT_TIMESTAMP(4) NOT NULL,
    PRIMARY KEY (id_kategori)
);