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
     $nome=$_POST['txtNome'];
     $data=$_POST['txtData'];
     $horario=$_POST['txtHora'];
     $idServico=$_POST['txtServico'];
     $idFilial=$_POST['txtFilial'];
     $sql="INSERT INTO atendimento (nome,idServico,idFilial,dataAtendimento,responsável,horarioPreferencial) VALUES ('$nome','$idServico','$idFilial','$data','$horario')";

     if(executarComando($sql))
     {echo "<h1> Seu serviço foi registrado</h1>";}
     else
     {echo "<h1> Erro no registro do serviço</h1>";};
    
    ?>

</body>
</html>
