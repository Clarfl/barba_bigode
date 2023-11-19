<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     include 'conexao_bd.php';
     $descricao_F=$_POST['txtDescricaoF'];
     $loc_F=$_POST['txtLocalizacaoF'];
     $resp_F=$_POST['txtResponsavelF'];
     $sql="INSERT INTO filial (descricao_F,localização,responsável) VALUES ('$descricao_F','$loc_F','$resp_F')";

     if(executarComando($sql))
     {echo "<h1> Seu serviço foi registrado</h1>";}
     else
     {echo "<h1> Erro no registro do serviço</h1>";};



    ?>
</body>
</html>