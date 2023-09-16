<html> 
    <head></head>
    <body>
        

<?php
$Nome = $_POST["Nome"];
$Email = $_POST["Email"];
$Senha = $_POST["Pass"];



if(strpos($Email,"@") === false)
{
    header("Location: Cadastro.php?erro=1");
}
else if(strlen($Senha) < 8)
{
    header("Location: Cadastro.php?erro=2");
}
else
{
    echo"Cadastro realizado com sucesso<br>";?><button><a href="Login.php">-------FAZER LOGIN-------</a></button><?php

  

}

?>
</body>
 </html>