CREATE DATABASE profildb;

USE profildb;

CREATE TABLE contact (
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255),	
    message VARCHAR(255)
    );


CREATE TABLE beranda (
    judul text(255),
    deskripsi text(255)
    );

INSERT INTO beranda(judul, deskripsi) VALUES ('Halo', 'Saya Magaretha Corliss, seorang mahasiswa dari Universitas Pembangunan Jaya.');

CREATE TABLE TentangSaya (
    judul text(255),
    deskripsi text(255)
    );

INSERT INTO TentangSaya(judul, deskripsi) VALUES ('Tentang Saya', 'Nama saya Magaretha Corliss, seorang mahasiswa jurusan Informatika di Universitas Pembangunan Jaya. Saya aktif terlibat dalam organisasi HIMA, KSPM, dan gereja.');

CREATE TABLE kemampuan (
    nama_kemampuan text(255),
    deskripsi text(255)
    );

INSERT INTO kemampuan(nama_kemampuan, deskripsi) VALUES ('Adaptasi', 'Saya memiliki kemampuan adaptasi yang baik dalam berorganisasi.');

INSERT INTO kemampuan(nama_kemampuan, deskripsi) VALUES ('Komunikasi', 'Saya memiliki kemampuan komunikasi yang baik dan respon yang cepat.');

INSERT INTO kemampuan(nama_kemampuan, deskripsi) VALUES ('Problem-Solving', 'Saya memiliki kemampuan untuk menganalisis masalah dan menemukan solusi yang efektif untuk mengatasi masalah tersebut.');

INSERT INTO kemampuan(nama_kemampuan, deskripsi) VALUES ('Berpikir Kritis', 'Saya memiliki kemampuan berpikir kritis untuk mengevaluasi dan membuat keputusan yang tepat.');

CREATE TABLE kegiatan (
    nama_kegiatan VARCHAR(255),
    deskripsi text(255)
    );

INSERT INTO kegiatan(nama_kegiatan, deskripsi) VALUES ('Organisasi Gereja', 'Tampil dalam ibadah remaja.');

INSERT INTO kegiatan(nama_kegiatan, deskripsi) VALUES ('Organisasi HIMA', 'Acara bersama HIMAFORKA.');

INSERT INTO kegiatan(nama_kegiatan, deskripsi) VALUES ('Organisasi KSPM', 'Sesi lomba bersama Jaya Stock Club.');






