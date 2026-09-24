<?php
// Marca o link ativo no menu conforme a URL atual
$uri = $_SERVER['REQUEST_URI'] ?? '';
function ativo(string $trecho, string $uri): string
{
    return strpos($uri, $trecho) !== false ? ' active' : '';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Casa Nova Imóveis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" type="image/png" href="<?php echo BASEURL; ?>img/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/all.min.css">

    <style>
        :root {
            --re-green: #0f3d2e;
            --re-green-dark: #0a2b20;
            --re-brass: #b98a3e;
            --re-brass-dark: #9c7230;
            --re-ink: #1c2420;
            --re-paper: #faf8f4;
            --re-line: #e6e1d7;
        }

        html {
            min-height: 100%;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Manrope', system-ui, sans-serif;
            color: var(--re-ink);
            background-color: var(--re-paper);
        }

        main {
            flex: 1;
            padding-top: 1.5rem;
        }

        footer {
            margin-top: auto;
        }

        /* ---------- Barra superior ---------- */
        .re-topbar {
            background: var(--re-green-dark);
            color: #d9e3de;
            font-size: .82rem;
            padding: .45rem 0;
        }

        .re-topbar a {
            color: #d9e3de;
            text-decoration: none;
        }

        .re-topbar a:hover {
            color: var(--re-brass);
        }

        .re-topbar i {
            color: var(--re-brass);
            margin-right: .4rem;
        }

        .re-topbar .re-social a {
            margin-left: 1rem;
        }

        .re-topbar .re-social i {
            margin: 0;
            color: inherit;
        }

        /* ---------- Navbar principal ---------- */
        .re-navbar {
            background: #fff;
            border-bottom: 3px solid var(--re-brass);
            box-shadow: 0 4px 18px rgba(15, 61, 46, .08);
            padding: .6rem 0;
        }

        .re-brand {
            display: flex;
            align-items: center;
            gap: .75rem;
            text-decoration: none;
        }

        .re-brand-icon {
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            background: var(--re-green);
            color: var(--re-brass);
            font-size: 1.25rem;
            border-radius: 6px;
        }

        .re-brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1;
        }

        .re-brand-name {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--re-green);
        }

        .re-brand-tag {
            font-size: .72rem;
            color: #7a8580;
            margin-top: .2rem;
            letter-spacing: .04em;
        }

        .re-navbar .nav-link {
            color: var(--re-ink);
            font-weight: 600;
            font-size: .95rem;
            padding: .6rem .9rem;
            border-bottom: 2px solid transparent;
        }

        .re-navbar .nav-link:hover,
        .re-navbar .nav-link:focus {
            color: var(--re-green);
        }

        .re-navbar .nav-link.active {
            color: var(--re-green);
            border-bottom-color: var(--re-brass);
        }

        .re-navbar .nav-link i {
            color: var(--re-brass);
            margin-right: .35rem;
        }

        .re-navbar .dropdown-menu {
            border: 1px solid var(--re-line);
            border-top: 3px solid var(--re-brass);
            border-radius: 0 0 8px 8px;
            box-shadow: 0 12px 28px rgba(15, 61, 46, .12);
            padding: .5rem 0;
            margin-top: 0;
        }

        .re-navbar .dropdown-item {
            font-size: .92rem;
            padding: .55rem 1.2rem;
        }

        .re-navbar .dropdown-item i {
            width: 1.4rem;
            color: var(--re-brass);
        }

        .re-navbar .dropdown-item:hover {
            background: var(--re-paper);
            color: var(--re-green);
        }

        /* Abre o dropdown ao passar o mouse (só no desktop) */
        @media (min-width: 992px) {
            .re-navbar .dropdown:hover>.dropdown-menu {
                display: block;
            }
        }

        .btn-re {
            background: var(--re-brass);
            border: 1px solid var(--re-brass);
            color: #fff;
            font-weight: 700;
            font-size: .92rem;
            padding: .6rem 1.3rem;
            border-radius: 6px;
        }

        .btn-re:hover,
        .btn-re:focus {
            background: var(--re-brass-dark);
            border-color: var(--re-brass-dark);
            color: #fff;
        }

        .re-navbar .navbar-toggler {
            border-color: var(--re-line);
        }

        .re-navbar .navbar-toggler:focus {
            box-shadow: 0 0 0 .2rem rgba(185, 138, 62, .35);
        }

        /* ---------- Dashboard ---------- */
        .re-hero {
            position: relative;
            overflow: hidden;
            background: var(--re-green);
            color: #fff;
            border-radius: 10px;
            border-bottom: 4px solid var(--re-brass);
            padding: 2.75rem 2rem;
        }

        .re-hero h1 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: clamp(2rem, 4vw, 2.9rem);
            font-weight: 700;
            margin: 0 0 .5rem;
        }

        .re-hero p {
            color: #cfdcd6;
            max-width: 46ch;
            margin: 0;
        }

        .re-hero-icon {
            position: absolute;
            right: -1rem;
            bottom: -2.5rem;
            font-size: 11rem;
            color: rgba(185, 138, 62, .18);
            pointer-events: none;
        }

        .re-tile {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            height: 100%;
            padding: 1.4rem;
            background: #fff;
            border: 1px solid var(--re-line);
            border-radius: 10px;
            color: var(--re-ink);
            text-decoration: none;
            transition: border-color .15s, box-shadow .15s, transform .15s;
        }

        .re-tile:hover,
        .re-tile:focus-visible {
            border-color: var(--re-brass);
            box-shadow: 0 10px 24px rgba(15, 61, 46, .1);
            color: var(--re-ink);
            transform: translateY(-2px);
        }

        .re-tile-icon {
            flex: 0 0 64px;
            height: 64px;
            display: grid;
            place-items: center;
            border-radius: 8px;
            background: var(--re-green);
            color: var(--re-brass);
            font-size: 1.6rem;
        }

        .re-tile--accent .re-tile-icon {
            background: var(--re-brass);
            color: #fff;
        }

        .re-tile h2 {
            font-size: 1.1rem;
            font-weight: 700;
            margin: 0 0 .2rem;
        }

        .re-tile p {
            margin: 0;
            font-size: .9rem;
            color: #6b7772;
        }

        @media (prefers-reduced-motion: reduce) {
            .re-tile {
                transition: none;
            }

            .re-tile:hover {
                transform: none;
            }
        }

        /* ---------- Footer ---------- */
        .re-footer {
            background: var(--re-green-dark);
            color: #b9c8c1;
            margin-top: 3rem;
            border-top: 4px solid var(--re-brass);
        }

        .re-footer .re-brand-name {
            color: #fff;
        }

        .re-footer .re-brand-tag {
            color: #9fb1a9;
        }

        .re-footer .re-brand-icon {
            background: var(--re-brass);
            color: var(--re-green-dark);
        }

        .re-footer h6 {
            color: #fff;
            font-weight: 700;
            font-size: .95rem;
            margin-bottom: 1rem;
        }

        .re-footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .re-footer li {
            font-size: .92rem;
            margin-bottom: .55rem;
        }

        .re-footer a {
            color: #b9c8c1;
            text-decoration: none;
        }

        .re-footer a:hover {
            color: var(--re-brass);
        }

        .re-footer li i {
            width: 1.4rem;
            color: var(--re-brass);
        }

        .re-footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, .1);
            font-size: .82rem;
            padding: 1rem 0;
        }

        /* ---------- Páginas internas (listagem, formulário, detalhes) ---------- */
        .re-page-head {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid var(--re-line);
        }

        .re-page-head h2 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--re-green);
            margin: 0;
        }

        .re-page-head small {
            display: block;
            color: #7a8580;
            font-size: .9rem;
            font-weight: 500;
        }

        .re-card {
            background: #fff;
            border: 1px solid var(--re-line);
            border-radius: 10px;
            padding: 1.75rem;
        }

        .re-fieldset + .re-fieldset {
            margin-top: 1.75rem;
            padding-top: 1.75rem;
            border-top: 1px solid var(--re-line);
        }

        .re-section {
            display: flex;
            align-items: center;
            gap: .6rem;
            font-size: 1rem;
            font-weight: 700;
            color: var(--re-green);
            margin: 0 0 1rem;
        }

        .re-section i {
            color: var(--re-brass);
            width: 1.2rem;
        }

        .re-card .form-label {
            font-weight: 600;
            font-size: .85rem;
            margin-bottom: .3rem;
        }

        .re-card .form-control:focus {
            border-color: var(--re-brass);
            box-shadow: 0 0 0 .2rem rgba(185, 138, 62, .25);
        }

        .re-card .form-control:disabled {
            background: var(--re-paper);
        }

        .re-actions {
            display: flex;
            flex-wrap: wrap;
            gap: .6rem;
            margin-top: 1.75rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--re-line);
        }

        .btn-re.btn-sm {
            padding: .3rem .7rem;
            font-size: .82rem;
        }

        .btn-re-outline {
            background: #fff;
            border: 1px solid #cfc8b8;
            color: var(--re-ink);
            font-weight: 600;
        }

        .btn-re-outline:hover,
        .btn-re-outline:focus {
            background: var(--re-green);
            border-color: var(--re-green);
            color: #fff;
        }

        .btn-re-danger {
            background: #fff;
            border: 1px solid #e3c3c0;
            color: #a4342c;
            font-weight: 600;
        }

        .btn-re-danger:hover,
        .btn-re-danger:focus {
            background: #a4342c;
            border-color: #a4342c;
            color: #fff;
        }

        .re-table-wrap {
            background: #fff;
            border: 1px solid var(--re-line);
            border-radius: 10px;
            overflow: hidden;
        }

        .re-table {
            margin: 0;
            --bs-table-hover-bg: var(--re-paper);
        }

        .re-table thead th {
            background: var(--re-green);
            color: #fff;
            font-size: .85rem;
            font-weight: 600;
            padding: .9rem 1rem;
            border: 0;
            white-space: nowrap;
        }

        .re-table td {
            padding: .9rem 1rem;
            vertical-align: middle;
            border-color: var(--re-line);
        }

        .re-id {
            color: #7a8580;
            font-weight: 600;
        }

        .re-empty {
            text-align: center;
            padding: 3rem 1rem;
            color: #6b7772;
        }

        .re-empty i {
            display: block;
            font-size: 2.5rem;
            color: var(--re-brass);
            margin-bottom: .75rem;
        }

        .re-dl dt {
            font-size: .85rem;
            font-weight: 600;
            color: #6b7772;
            padding: .55rem 0;
        }

        .re-dl dd {
            padding: .55rem 0;
            margin: 0;
            font-weight: 500;
        }

        .re-modal .modal-header {
            background: var(--re-green);
            color: #fff;
            border-bottom: 3px solid var(--re-brass);
        }

        .re-modal .modal-title {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 1.5rem;
            font-weight: 700;
        }

        /* Mantém o estilo original do botão light */
        .btn-light {
            background-color: #cccccc;
            border-color: #cccccc;
            color: #000000;
        }

        .btn-light:hover {
            background-color: #999999;
            border-color: #999999;
            color: #000000;
        }
    </style>
</head>

<body>
    <!-- Barra superior: contato rápido -->
    <div class="re-topbar d-none d-lg-block">
        <div class="container-fluid px-lg-4 d-flex justify-content-between align-items-center">
            <div class="d-flex gap-4">
                <span><i class="fa-solid fa-phone"></i> (15) 3000-0000</span>
                <span><i class="fa-brands fa-whatsapp"></i> (15) 90000-0000</span>
                <span><i class="fa-regular fa-envelope"></i> contato@casanova.com.br</span>
            </div>
            <div class="d-flex align-items-center">
                <span><i class="fa-regular fa-clock"></i> Seg a Sex, 8h às 18h · Sáb, 9h às 13h</span>
                <span class="re-social">
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </span>
            </div>
        </div>
    </div>

    <!-- Navbar principal -->
    <nav class="navbar navbar-expand-lg re-navbar sticky-top">
        <div class="container-fluid px-lg-4">
            <a class="re-brand" href="<?php echo BASEURL; ?>index.php">
                <span class="re-brand-icon"><i class="fa-solid fa-house-chimney"></i></span>
                <span class="re-brand-text">
                    <span class="re-brand-name">Casa Nova</span>
                    <span class="re-brand-tag">IMOBILIÁRIA</span>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCrud"
                aria-controls="navbarCrud" aria-expanded="false" aria-label="Abrir menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCrud">
                <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link<?php echo $uri === BASEURL || strpos($uri, 'index.php') !== false ? ' active' : ''; ?>"
                            href="<?php echo BASEURL; ?>index.php">Início</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle<?php echo ativo('properties', $uri); ?>" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Imóveis
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers"><i
                                        class="fa-solid fa-building"></i> Gerenciar Imóveis</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php"><i
                                        class="fa-solid fa-plus"></i> Novo Imóvel</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link<?php echo ativo('contact', $uri); ?>"
                            href="<?php echo BASEURL; ?>contact.php">Contato</a>
                    </li>
                </ul>

                <a class="btn btn-re" href="<?php echo BASEURL; ?>customers/add.php">
                    <i class="fa-solid fa-plus me-1"></i> Novo imóvel
                </a>
            </div>
        </div>
    </nav>

    <main class="container">