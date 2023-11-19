<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barba & Bigode</title>

        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; ?>

        <!-- CORPO DA PÁGINA -->

        <form name="formAtendimento" action="atendimento_.php" method="post">
            <div id="body">

                <h1><span>Cadastrar Atendimento</span></h1>

                <ol>
                    <li><input type="text" name="txtNome" placeholder="Nome Completo" class="input"/>
                    </li>

                    <li>
                        <label for="">Serviço</label><br>
                        <select name="txtServico" id="" class="input">
                        <?php 
                            require_once 'conexao_bd.php';
                            $descricao ="SELECT idServico, descricao FROM servico";
                            $resultado =$conn->query($descricao);

                            if($resultado->num_rows>0){
                                while($row = $resultado->fetch_assoc()){
                                    echo "<option value='".$row['idServico']."'>".$row['descricao']."</option>";
                                }
                            }else{
                                echo "Nenhum serviço registrado";
                            }
                        ?>
                        </select>
                    </li>

                    <li>
                        <label for="">Filial</label><br>
                        <select name="txtFilial" id="" class="input">

                        <?php 
                            require_once 'conexao_bd.php';
                            $descricao ="SELECT idFilial, descricao_F FROM filial";
                            $resultado =$conn->query($descricao);

                            if($resultado->num_rows>0){
                                while($row = $resultado->fetch_assoc()){
                                    echo "<option value='".$row['idFilial']."'>".$row['descricao_F']."</option>";
                                }
                            }else{
                                echo "Nenhum serviço registrado";
                            }
                        ?>
                        </select>
                        
                    </li>

                    <li>
                        <label for="">Data</label><br>
                        <input type="date" name="txtData" id="" class="input">
                    </li>

                    <li>
                        <label for="">Horário de Atendimento</label><br>
                        <select name="txttHora" id="" class="input">
                            <option value="07:00 ÀS 09:00">07:00 ÀS 09:00</option>
                            <option value="09:00 ÀS 10:30">09:00 ÀS 10:30</option>
                            <option value="10:30 ÀS 12:00">10:30 ÀS 12:00</option>
                            <option value="13:00 ÀS 15:00">13:00 ÀS 15:00</option>
                            <option value="16:30 ÀS 19:00">16:30 ÀS 19:00</option>
                        </select>
                    </li>

                    <li>
                        <input type="submit" value="Cadastrar" class="botao" />
                    </li>
                </ol>
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
