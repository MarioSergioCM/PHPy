<html>
    <head>

    </head>
    <body>
       <h1>Página de cadastro</h1> 
       <form action="ProcessaDados.php" method="post">
<label for="Nome">Nome :</label>
<input type="text" name="Nome"><br>
<label for="Email">Email :</label>
<input type="text" name="Email"><br>
<label for="Senha">Senha :</label>
<input type="password" name="Pass"><br>
<button type="submit"> Criar </button><br>



<?php

if(isset($_GET["erro"]) && $_GET["erro"]==1)
{?>    <div style="background-color: red;">EMAIL INVÁLIDO</div>


<?php
}

if(isset($_GET["erro"]) && $_GET["erro"]== 2)
{?>   
 <div style="background-color: red;">A SENHA DEVE TER PELO MENOS 8 CARACTERES</div>
    <?php
}

?>



       </form>
    </body>
</html>