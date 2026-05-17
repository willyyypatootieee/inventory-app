<?php

function handleMahasiswaAction(PDO $pdo): void
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return;
    }

    $action = $_POST['action'] ?? '';
    $id = (int) ($_POST['id'] ?? 0);
    $data = [
        'nim' => oldValue('nim', $_POST),
        'nama' => oldValue('nama', $_POST),
        'jurusan' => oldValue('jurusan', $_POST),
        'email' => oldValue('email', $_POST),
    ];

    if ($action !== 'delete' && in_array('', $data, true)) {
        redirectWithMessage('Semua field wajib diisi.', 'danger');
    }

    try {
        if ($action === 'create') {
            createMahasiswa($pdo, $data);
            redirectWithMessage('Data mahasiswa berhasil ditambahkan.');
        }

        if ($action === 'update' && $id > 0) {
            updateMahasiswa($pdo, $id, $data);
            redirectWithMessage('Data mahasiswa berhasil diperbarui.');
        }

        if ($action === 'delete' && $id > 0) {
            deleteMahasiswa($pdo, $id);
            redirectWithMessage('Data mahasiswa berhasil dihapus.');
        }
    } catch (PDOException $error) {
        redirectWithMessage('Operasi gagal: ' . $error->getMessage(), 'danger');
    }
}
