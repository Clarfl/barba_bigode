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

        <form name="formFilial" action="addFilial.php" method="post">
            <div id="body">

                <h1><span>Cadastrar Filial</span></h1>

                <ol>
                <li> Descrição</li>
                    <li><input type="text" name="txtDescricaoF" placeholder="Descrição" class="input"/>
                    </li>
                    <li> Localização</li>
                    <li><input type="text" name="txtLocalizacaoF" placeholder="Localização" class="input"/>
                    </li>
                    <li> Responsável</li>
                    <li><input type="text" name="txtResponsavelF" placeholder="Responsável" class="input"/>
                    </li>
                    
                    
                    <li><input type="submit" value="Cadastrar" class="botao" />
                    </li>

                </ol>
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
