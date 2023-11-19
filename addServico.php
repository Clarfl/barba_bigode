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
     $descricao=$_POST['txtDescricao'];
     $preco=$_POST['txtPreco'];
     $sql="INSERT INTO servico (descricao,preco) VALUES ('$descricao','$preco')";

     if(executarComando($sql))
     {echo "<h1> Seu serviço foi registrado</h1>";}
     else
     {echo "<h1> Erro no registro do serviço</h1>";};



    ?>
</body>
</html>