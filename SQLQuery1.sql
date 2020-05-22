CREATE TABLE Kategori(
    id_kategori INT IDENTITY(1,1) NOT NULL,
    nama_kategori VARCHAR(50) NOT NULL,
);

ALTER TABLE Kategori
	ADD PRIMARY KEY (id_kategori);

CREATE TABLE Bantuan(
    id_bantuan INT IDENTITY(1,1) NOT NULL,
	nama_barang VARCHAR(50) NOT NULL,
	id_kategori INT,
);

ALTER TABLE Bantuan
	ADD PRIMARY KEY (id_bantuan);
ALTER TABLE Bantuan
	ADD FOREIGN KEY (id_kategori) REFERENCES Kategori(id_kategori);

CREATE TABLE Pengguna(
    id_user INT IDENTITY(1,1) NOT NULL,
	nama VARCHAR(50) NOT NULL,
	no_telp VARCHAR(15) NOT NULL,
);

ALTER TABLE Pengguna
	ADD PRIMARY KEY (id_user);


CREATE TABLE Transaksi(
    id_transaksi INT IDENTITY(1,1) NOT NULL,
	jumlah INT NOT NULL,
	waktu DATE NOT NULL DEFAULT '0000-00-00',
	id_user INT,
	id_bantuan INT,
);

ALTER TABLE Transaksi
	ADD PRIMARY KEY (id_transaksi);

ALTER TABLE Transaksi
	ADD FOREIGN KEY (id_user) REFERENCES Pengguna(id_user);

ALTER TABLE Transaksi
	ADD FOREIGN KEY (id_bantuan) REFERENCES Bantuan(id_bantuan);

ALTER TABLE Transaksi
	ALTER COLUMN jumlah VARCHAR(50);

ALTER TABLE Transaksi
	ALTER COLUMN waktu DATE;

INSERT INTO Pengguna VALUES ('user1', '081');

SELECT * FROM Transaksi

INSERT INTO Kategori VALUES ('Uang');
INSERT INTO Kategori VALUES ('Sembako');
INSERT INTO Kategori VALUES ('Alat Medis');

INSERT INTO Bantuan VALUES ('Uang', '1');
INSERT INTO Bantuan VALUES ('Beras', '2');
INSERT INTO Bantuan VALUES ('Masker', '3');

INSERT INTO Pengguna VALUES ('Pak Haji', '081180189981');
INSERT INTO Pengguna VALUES ('Pak Pendeta', '081189981081');
INSERT INTO Pengguna VALUES ('Pak Biksu', '081903827932');

INSERT INTO Transaksi VALUES ('10 Juta Rupiah', '', '2', '2');
INSERT INTO Transaksi VALUES ('100 KG', '', '3', '3');
INSERT INTO Transaksi VALUES ('100 Box', '', '4', '4');

DELETE FROM Transaksi WHERE jumlah='10 juta';