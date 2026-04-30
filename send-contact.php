<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#contato', true, 303);
    exit;
}

$nome = trim((string) ($_POST['nome'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$tipo = trim((string) ($_POST['tipo'] ?? 'outro'));
$mensagem = trim((string) ($_POST['mensagem'] ?? ''));

$allowedTipos = ['institucional', 'landing', 'blog', 'outro'];
if (!in_array($tipo, $allowedTipos, true)) {
    $tipo = 'outro';
}

$ok = false;
if ($nome !== '' && strlen($nome) <= 120
    && $email !== '' && strlen($email) <= 254 && filter_var($email, FILTER_VALIDATE_EMAIL)
    && $mensagem !== '' && strlen($mensagem) <= 4000) {

    $dataDir = BASE_PATH . DIRECTORY_SEPARATOR . 'data';
    if (!is_dir($dataDir)) {
        @mkdir($dataDir, 0755, true);
    }

    $line = sprintf(
        "[%s] %s | %s | %s | %s\n",
        date('c'),
        str_replace(["\r", "\n", "|"], ' ', $nome),
        $email,
        $tipo,
        str_replace(["\r", "\n"], ' ', $mensagem)
    );

    $file = $dataDir . DIRECTORY_SEPARATOR . 'leads.txt';
    if (@file_put_contents($file, $line, FILE_APPEND | LOCK_EX) !== false) {
        $ok = true;
    }
}

$param = $ok ? 'ok' : 'erro';
header('Location: index.php?contato=' . $param . '#contato', true, 303);
exit;
