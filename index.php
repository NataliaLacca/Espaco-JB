<?php
require('includes/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title><?php echo $c['sitename']?></title>
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
            <article>
                <h3>Bem-vinda ao seu Espaço de Beleza!</h3>
                <p>Já cuidou da sua saúde hoje? A estética vai muito além da aparência.
                    É muito mais que um dom ou talento. É o poder de transformar
                    a vida de alguém! Pensar e cuidar de si mesma não é egoísmo, mas sim
                    um ato de amor próprio.</p>
                <p>Cuidar de si mesma sempre vai ser o melhor tratamento. Saúde, beleza
                    e bem-estar andam de mãos dadas. Seja o seu próprio padrão de beleza
                    e seja gentil ao se olhar no espelho. Se ame em primeiro lugar!
                    A vida é muito curta para não ir à esteticista.</p>
                <img src="https://picsum.photos/200/200" alt="Imagem aleatória.">
                <p>Não deixe para depois os cuidados que precisa ter com você mesma.
                    O custo do cuidado é sempre menor do que o custo do reparo, pense
                    nisso. E não se compare! Toda beleza é única e rara.</p>
                <p>Vem para o <i><?php echo $c['sitename']?></i>!</p>
            </article>

            <aside>
                <header>
                    <h4>Postagens</h4>
                </header>
                <details>
                    <summary>Sobrancelha</summary>
                    <li><a href="pages/blog/sobrancelha.php">Design</a></li>
                    <li><a href="pages/blog/sobrancelha.php">Design + Henna</a></li>
                    <li><a href="pages/blog/sobrancelha.php">Brow Lamination</a></li>
                </details>
                <br>
                <details>
                    <summary>Massagem</summary>
                    <li><a href="pages/blog/massagem.php">Relaxante</a></li>
                    <li><a href="pages/blog/massagem.php">Modeladora</a></li>
                    <li><a href="pages/blog/massagem.php">Drenagem linfática</a></li>
                    <li><a href="pages/blog/massagem.php">Lipo modeladora</a></li>
                </details>
                <br>
                <details>
                    <summary>Depilação</summary>
                    <li><a href="pages/blog/depilacao.php">Vantagens</a></li>
                    <li><a href="pages/blog/depilacao.php">Pós-depilação</a></li>
                    <li><a href="pages/blog/depilacao.php">Cuidados</a></li>
                </details>
                <br>
                <details>
                    <summary>Limpeza de pele</summary>
                    <li><a href="pages/blog/limpezadepele.php">Como funciona?</a></li>
                    <li><a href="pages/blog/limpezadepele.php">Cuidados</a></li>
                </details>
                <br>
                <details>
                    <summary>Outros assuntos</summary>
                    <li><a href="pages/blog/outros.php">Acne</a></li>
                    <li><a href="pages/blog/outros.php">Cosméticos</a></li>
                    <li><a href="pages/blog/outros.php">Biossegurança</a></li>
                </details>
                <nav>
                    <h4>Redes sociais:</h4>
                    <a href="https://www.instagram.com/jessicabengaly/" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                        <span>Instagram</span>
                    </a><br>
                    <a href="/" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>Whatsapp</span>
                    </a>
                </nav>
                <nav>
                    <h4>Informações:</h4>
                    <a href="/pages/contact/contact.php">
                        <i class="fa-solid fa-user"></i>
                        <span>Contato</span>
                    </a><br>
                    <br>
                    <a href="/pages/about/about.php">
                        <i class="fa-fw fa-solid fa-circle-info"></i>
                        <span>Sobre</span>
                    </a>
                </nav>
            </aside>
        </main>

        <footer>
            <div id="ftop">
                <a class="home" href="/" title="Página inicial">
                    <i class="fa-fw fa-solid fa-house-chimney"></i>
                </a>

                <div class="policies">
                    &copy; 2022 <?php echo $c['sitename']?>
                    <a href="pages/privacy/privacy.php">Políticas de Privacidade</a>
                </div>

                <a class="arrow" href="#top">
                    <i class="fa-fw fa-solid fa-circle-up"></i>
                </a>
            </div>
        </footer>
        <span>&nbsp;</span>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="/script.js"></script>
</body>
</html>