<?php
// Processa o título da página → Tag <title>...</title>:
if ($page_title == '')                    // Se o título da página não foi definido
    $tag_title .= " - " . $site_slogan;   // O título recebe o slogan
else                                      // Se definiu um título
    $tag_title .= " - " . $page_title;    // O título recebe o título definido
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Espaço JB - <?php echo $page_title ?></title>
</head>

<body>
    <a id="top"></a>
    <div id="wrap">

        <header>
            <a href="/index.html" title="Página inicial">
                <img src="<?php echo $c['sitelogo']?>" alt="Logo">
            </a>
            <h3>
                <?php echo $c['favname']?>
                <span><?php echo $c['siteslogan']?></span>
            </h3>
        </header>

        <nav>
            <a href="/" title="Página inicial">
                <i class="fa-fw fa-solid fa-house-chimney"></i>
                <span>Início</span>
            </a>
            <a href="/pages/blog/blog.php">
                <i class="fa-solid fa-blog"></i>
                <span>Blog</span>
            </a>
            <a href="/pages/schedule/schedule.php">
                <i class="fa-solid fa-calendar-days"></i>
                <span>Agenda</span>
            </a>
            <a href="/pages/login/login.php">
                <i class="fa-solid fa-user"></i>
                <span>Login</span>
            </a>
        </nav>

        <main>