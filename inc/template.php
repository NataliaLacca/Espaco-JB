<?php

// Processa o título da página → Tag <title>...</title>:
if ($page_title == '')                    // Se o título da página não foi definido
    $tag_title .= " - " . $site_slogan;   // O título recebe o slogan
else                                      // Se definiu um título
    $tag_title .= " - " . $page_title;    // O título recebe o título definido

// Processa mensagem de 'Copyright' → Tag <footer>...</footer>:
$ytoday = intval(date('Y'));                // Obtém o ano atual
if ($ytoday > $site_year)                   // Se o ano atual é maior do que o ano do site
    $copyright .= "{$ytoday} {$site_name}"; // Mostra o ano do site e o ano atual na mensagem
else                                        // Se o ano atual é o ano do site
    $copyright .= $site_name;               // Mostra somente o ano do site na mensagem:

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $tag_title ?></title>
</head>

<body>
    <a id="top"></a>
    <div id="wrap">

        <header>
            <a href="/index.html" title="Página inicial">
                <img src="src/logo/logo02.jpg" alt="Logo">
            </a>
            <h3>
                Espaço Jessica Bengaly
                <span>Beleza para Mulheres</span>
            </h3>
        </header>

        <nav>
            <a href="/" title="Página inicial">
                <i class="fa-fw fa-solid fa-house-chimney"></i>
                <span>Início</span>
            </a>
            <a href="/pages/blog/blog.html">
                <i class="fa-solid fa-blog"></i>
                <span>Blog</span>
            </a>
            <a href="/pages/agenda/agenda.html">
                <i class="fa-solid fa-calendar-days"></i>
                <span>Agenda</span>
            </a>
            <a href="/pages/login/login.html">
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
                <p>Vem para o <i>Espaço JB</i>!</p>
            </article>

            <aside>
                <header>
                    <h4>Postagens</h4>
                </header>
                <details>
                    <summary>Sobrancelha</summary>
                    <li><a href="pages/blog/sobrancelha.html">Design</a></li>
                    <li><a href="pages/blog/sobrancelha.html">Design + Henna</a></li>
                    <li><a href="pages/blog/sobrancelha.html">Brow Lamination</a></li>
                </details>
                <br>
                <details>
                    <summary>Massagem</summary>
                    <li><a href="pages/blog/massagem.html">Relaxante</a></li>
                    <li><a href="pages/blog/massagem.html">Modeladora</a></li>
                    <li><a href="pages/blog/massagem.html">Drenagem linfática</a></li>
                    <li><a href="pages/blog/massagem.html">Lipo modeladora</a></li>
                </details>
                <br>
                <details>
                    <summary>Depilação</summary>
                    <li><a href="pages/blog/depilacao.html">Vantagens</a></li>
                    <li><a href="pages/blog/depilacao.html">Pós-depilação</a></li>
                    <li><a href="pages/blog/depilacao.html">Cuidados</a></li>
                </details>
                <br>
                <details>
                    <summary>Limpeza de pele</summary>
                    <li><a href="pages/blog/limpezadepele.html">Como funciona?</a></li>
                    <li><a href="pages/blog/limpezadepele.html">Cuidados</a></li>
                </details>
                <br>
                <details>
                    <summary>Outros assuntos</summary>
                    <li><a href="pages/blog/outros.html">Acne</a></li>
                    <li><a href="pages/blog/outros.html">Cosméticos</a></li>
                    <li><a href="pages/blog/outros.html">Biossegurança</a></li>
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
                    <a href="/pages/contato/contato.html">
                        <i class="fa-solid fa-user"></i>
                        <span>Contato</span>
                    </a><br>
                    <br>
                    <a href="/pages/sobre/sobre.html">
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
                    &copy; 2022 Espaço JB
                    <a href="pages/privacidade/privacidade.html">Políticas de Privacidade</a>
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