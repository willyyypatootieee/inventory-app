<?php

function allMahasiswa(PDO $pdo, string $search = ''): array
{
    if ($search === '') {
        return $pdo->query('SELECT * FROM mahasiswa ORDER BY id DESC')->fetchAll();
    }

    $stmt = $pdo->prepare(
        'SELECT * FROM mahasiswa
         WHERE nim LIKE ? OR nama LIKE ? OR jurusan LIKE ? OR email LIKE ?
         ORDER BY id DESC'
    );
    $keyword = "%{$search}%";
    $stmt->execute([$keyword, $keyword, $keyword, $keyword]);

    return $stmt->fetchAll();
}

function createMahasiswa(PDO $pdo, array $data): void
{
    $stmt = $pdo->prepare('INSERT INTO mahasiswa (nim, nama, jurusan, email) VALUES (?, ?, ?, ?)');
    $stmt->execute([$data['nim'], $data['nama'], $data['jurusan'], $data['email']]);
}

function updateMahasiswa(PDO $pdo, int $id, array $data): void
{
    $stmt = $pdo->prepare('UPDATE mahasiswa SET nim = ?, nama = ?, jurusan = ?, email = ? WHERE id = ?');
    $stmt->execute([$data['nim'], $data['nama'], $data['jurusan'], $data['email'], $id]);
}

function deleteMahasiswa(PDO $pdo, int $id): void
{
    $stmt = $pdo->prepare('DELETE FROM mahasiswa WHERE id = ?');
    $stmt->execute([$id]);
}
