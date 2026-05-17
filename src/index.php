<?php

session_start();

require __DIR__ . '/config.php';
require __DIR__ . '/includes/helpers.php';
require __DIR__ . '/includes/mahasiswa_repository.php';
require __DIR__ . '/actions/mahasiswa_actions.php';

handleMahasiswaAction($pdo);

$search = trim($_GET['q'] ?? '');
$mahasiswa = allMahasiswa($pdo, $search);
$flash = takeFlash();

require __DIR__ . '/partials/header.php';
?>

<main class="container app-shell py-4">
    <?php require __DIR__ . '/partials/flash.php'; ?>

    <div class="row g-4">
        <?php require __DIR__ . '/partials/create_form.php'; ?>
        <?php require __DIR__ . '/partials/table.php'; ?>
    </div>
</main>

<?php
require __DIR__ . '/partials/modals.php';
require __DIR__ . '/partials/footer.php';
