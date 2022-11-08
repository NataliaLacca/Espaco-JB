<?php
// Processa mensagem de 'Copyright' → Tag <footer>...</footer>:
$ytoday = intval(date('Y'));                // Obtém o ano atual
if ($ytoday > $site_year)                   // Se o ano atual é maior do que o ano do site
    $copyright .= "{$ytoday} {$site_name}"; // Mostra o ano do site e o ano atual na mensagem
else                                        // Se o ano atual é o ano do site
    $copyright .= $site_name;               // Mostra somente o ano do site na mensagem

?>
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