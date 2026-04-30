<?php
declare(strict_types=1);
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
$pageTitle = $pageTitle ?? SITE_NAME;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription ?? 'Sites e experiências web profissionais.', ENT_QUOTES, 'UTF-8'); ?>">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <a class="skip-link" href="#conteudo">Ir para o conteúdo</a>
    <header class="site-header" id="topo">
        <div class="container header-inner">
            <a class="logo" href="index.php"><?php echo htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8'); ?></a>
            <button type="button" class="nav-toggle" aria-expanded="false" aria-controls="menu-principal" aria-label="Abrir menu">
                <span class="nav-toggle-bar"></span>
                <span class="nav-toggle-bar"></span>
                <span class="nav-toggle-bar"></span>
            </button>
            <nav class="site-nav" id="menu-principal" aria-label="Principal">
                <ul class="nav-list">
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#historia">Como começamos</a></li>
                    <li><a href="#servicos">Sites &amp; funcionalidades</a></li>
                    <li><a href="#portfolio">Trabalhos</a></li>
                    <li><a href="#contato" class="nav-cta">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main id="conteudo">
