<?php 

if (isset($_POST["acao"])){ 

   $nome=$_POST["nome"]; 
   $telefone=$_POST["telefone"]; 
   $email=$_POST["email"]; 
   $radio=$_POST["satisfacao"]; 
   $msg=$_POST["mensagem"]; 

   echo "<p>Olá, ".$nome."</p>"; echo "<p>Seu email é: ".$email."</p>"; 

   echo "<p>Seu telefone é: ".$telefone."</p>"; 

   if ($range=="0"){ 
      echo "<p>Você escolheu pouco satisfeita</p>"; 
   }
   elseif ($range=="10") { 
      echo "<p>Você escolheu muito satisfeita</p>"; 
   } 
   echo "<p>Sua mensagem é:<br/>".$msg."</p>"; 
} 
?>