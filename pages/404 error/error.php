<?php

// Importa a configuração do site:
require('includes/config.php');

// Todo o código PHP desta página começa aqui
// Define o título da página:
$page_title = 'Erro 404';

// Define o conteúdo da página:
$page_content = "
<h2>Oooops!</h2>
<p>O conteúdo que você está tentando acessar não está disponível ou não existe...</p>
";
// Todo o código PHP desta página termina aqui 

// Cabeçalho da página HTML:
require('header.php');

?>

<?php echo $page_content ?>

<?php

// Rodapé da página HTML:
require('footer.php');

?>