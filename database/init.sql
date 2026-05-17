CREATE TABLE IF NOT EXISTS mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nim VARCHAR(20) NOT NULL UNIQUE,
  nama VARCHAR(100) NOT NULL,
  jurusan VARCHAR(100) NOT NULL,
  email VARCHAR(120) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO mahasiswa (nim, nama, jurusan, email) VALUES
('532560001', 'Andi Pratama', 'Teknik Informatika', 'andi@example.com'),
('532560002', 'Siti Rahma', 'Sistem Informasi', 'siti@example.com');
