<?php
session_start();
function verificarLink($url, $limite = 25)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_TIMEOUT, $limite);
    curl_setopt($curl, CURLOPT_NOBODY, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_exec($curl);
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE) == 200; // Se a resposta for OK, a URL está ativa
    curl_close($curl);
    return $status;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Img/icon/IconPunk.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Design/main/index.css">
    <title>Punk Studios || Início</title>
</head>

<body>
   <?php require("../util/load/load.php")?>
    <main>
        <div class="container">
            <?php require("../util/navbar/navbar.php") ?>
            <div class="TitPunk">
                <div class="container">
                    <div class="TitMain">
                        <div class="TiTCmc">
                            <div class="Titulo">
                                <h1>Punk Studios</h1>
                                <div>
                                    <p>Prepare-se para mergulhar em um universo de possibilidades <br> infinitas dentro
                                        do famoso mundo MTA.</p>
                                </div>
                            </div>
                            <div class="botao">
                                <a href="#"><button>Aproveite a Oportunidade!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg style="position: relative;
        bottom: -2px;
        margin-top: -42px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#252121" fill-opacity="1"
                d="M0,160L48,149.3C96,139,192,117,288,117.3C384,117,480,139,576,165.3C672,192,768,224,864,213.3C960,203,1056,149,1152,133.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </main>
    <div>
        <div class="container">
            <div class="CardsExp">
                <div class="card">
                    <div class="img">
                        <img src="../Img/Main/png/criatividade.png"">
                </div>
                <div class=" Tit">
                        <p>Variedade de Mods Criativos</p>
                    </div>
                </div>
                <div class="card center">
                    <div class="img">
                        <img src="../Img/Main/png/suporte.png"">
                </div>
                <div class=" Tit">
                        <p>Suporte Técnico Especializado</p>
                    </div>
                </div>
                <div class="card end">
                    <div class="img">
                        <img src="../Img/Main/png/exclusividade.png"">
                </div>
                <div class=" Tit">
                        <p>Promoções e Mods Exclusivas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section style="margin-top: 250px;">
        <div class="container">
            <div class="PrdAMain">
                <div class="PrdDetail">
                    <div class="PrdTitle">
                        <h1>Produtos Mais Adqueridos</h1>
                    </div>
                    <div class="PrdDesc">
                        <p>Punk Studios conquistou o coração dos consumidores <br> com seus produtos inovadores e
                            cativantes, <br> tornando-os os favoritos de muitos.</p>
                    </div>
                    <div class="Prdbutton">
                        <button>Acessar todos produtos</button>
                    </div>
                    <div class="Avatar">
                        <img src="../Img/Main/avatar/AvatarMulherdeShort.png">
                    </div>
                </div>
                <div class="container">
                    <div class="PrdCardMain">
                        <?php include("../res/secret/connection/connectPunk_Studios.php");
                        $queryPedidos = "SELECT nome_produto, COUNT(nome_produto) AS frequencia
                        FROM pedidos
                        GROUP BY nome_produto
                        ORDER BY frequencia DESC
                        LIMIT 3";
                        $stmtPedidos = $connectPunk_Studios->query($queryPedidos);
                        foreach ($stmtPedidos as $key => $valor) {
                            $queryprodutos = "SELECT * FROM `addprodutos` WHERE produto = '$valor[nome_produto]'";
                            $stmtProdutosSite = $connectPunk_Studios->query($queryprodutos);
                            $stmtFetch = $stmtProdutosSite->fetch(PDO::FETCH_ASSOC);

                            $imgCardProduto = $stmtFetch["imagem"];
                            $NomeCardProduto = $stmtFetch["produto"];
                            $ValorCardProduto = number_format($stmtFetch["valor"], 2, ",", ".");
                            $CategoriaCardProduto = $stmtFetch["categorias"];

                            ?>
                            <div class="card">
                                <div class="ImgCard">
                                    <img src="<?php echo $imgCardProduto ?>">
                                </div>
                                <div id="plus">
                                    <p>Popular</p>
                                </div>
                                <div class="CardDetails">
                                    <div class="PrpCardDetails">
                                        <p>
                                            <?php echo $NomeCardProduto ?>
                                        </p>
                                        <div class="PrpCardMais">
                                            <p>Mais detalhes</p>
                                        </div>
                                    </div>
                                    <div class="PrpCardButton">
                                        <button>R$
                                            <?php echo $ValorCardProduto ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 120px;">
        <svg style="position: relative;
        bottom: -2px;
        margin-top: -42px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#555454" fill-opacity="1"
                d="M0,160L48,149.3C96,139,192,117,288,117.3C384,117,480,139,576,165.3C672,192,768,224,864,213.3C960,203,1056,149,1152,133.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <div class="SobreMain">
            <div class="container">
                <div class="SobrePrin">
                    <div class="PrinTigle">
                        <h1>Sobre nós</h1>
                    </div>
                    <div class="PrinDescr">
                        <p>Porque somos diferentes?</p>
                    </div>
                </div>
                <div class="SobreConteudo">
                    <div class="SobreIcon">
                        <img src="../Img/Main/logo/LogoPunk.png">
                    </div>
                    <div class="SobreTex">
                        <p>Devido a preocupação com a qualidade e confiabilidade decadente dos produtos e das relações
                            entre a
                            comunidade nos últimos tempos, o estúdio foi criado com o intuito de renovar o mercado de
                            mods e scripts
                            do MTA.</p>
                        <br>
                        <p>Nós buscamos utilizar tecnologias pouco explorados por outros desenvolvedores, trazendo mods
                            divertidos e criativos para nossos clientes, a loja também utiliza um preço super
                            competitivo e a
                            qualidade dos produtos pode ser comprovada antes de finalizar sua compra. </p>
                        <br>
                        <p> Seja bem vindo ao nosso estúdio e espero que nossos produtos possam proporcionar a você e
                            seus amigos
                            muitas horas de felicidade e incontáveis aventuras!</p>
                    </div>
                </div>
            </div>
        </div>
        <svg style="position: relative;
        bottom: -2px;
        margin-top: -33px; transform: rotate(180deg);" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#555454" fill-opacity="1"
                d="M0,160L48,149.3C96,139,192,117,288,117.3C384,117,480,139,576,165.3C672,192,768,224,864,213.3C960,203,1056,149,1152,133.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section style="margin-top: 120px;"">
        <div class=" container">
        <div class="AvaliaMain">
            <div class="AvaliaDetails">
                <div class="AvaliaTitle">
                    <h1>Avaliações dos Clientes</h1>
                </div>
                <div class="AvaliaDesc">
                    <p>Punk Studios conquistou o coração dos consumidores <br> com seus produtos inovadores e
                        cativantes, <br> tornando-os os favoritos de muitos.</p>
                </div>
                <div class="Avatar Smok">
                    <img style="width: 648px !important;" src="../Img/Main/avatar/AvatarBigSmok.png">
                </div>
            </div>
            <div class="container">
                <div class="AvlCardsMain">
                    <?php

                    include("../res/secret/connection/connectPunk_Studios.php");
                    $queryAvaliacao = $connectPunk_Studios->query("SELECT * FROM `avaliacoes` Order by id DESC limit 6");
                    foreach ($queryAvaliacao as $key => $valor) {
                        $author = $valor["Nome"];
                        $avaliacao = $valor["descricao"];
                        $data = $valor["Data"];
                        $imgAuthor = $valor["Link_foto"];
                        ?>
                        <div class="card">
                            <div class="CardCont">
                                <header class="CardCont_Header">
                                    <p>15/10/2023 às 13:48</p>
                                    <div class="CardCont_Desc">
                                        <p>
                                            <?php echo $avaliacao ?>
                                        </p>
                                    </div>
                                </header>
                                <div class="CardCont_Author">
                                    <div class="CardCont_Author_Avatar">
                                        <img src="<?php
                                        if (verificarLink($imgAuthor)) {
                                            echo $imgAuthor;
                                        } else {
                                            echo "../Design/icon/UserProfile.svg";
                                        }
                                        ?>">
                                    </div>
                                    <div class="CardCont_Author_Name">
                                        <p>
                                            <?php echo $author ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section style="margin-top: 250px;">
        <div class="container">
            <div class="PrgMain">
                <div class="PrgDetails">
                    <div class="PrgDetailsTitle">
                        <h1>Perguntas Frequentes</h1>
                    </div>
                    <div class="PrgDetailsDesc">
                        <p>Encontre respostas detalhadas para as perguntas <br> frequentes que nossos clientes costumam
                            fazer.</p>
                    </div>
                    <div class="Avatar QueimandoMaconha">
                        <img src="../Img/Main/avatar/AvatarQueimandoMaconha.png">
                    </div>
                </div>
                <div class="container">
                    <div class="PrgCardMain">
                        <div class="perCard">
                            <div class="Desc">
                                <p>Como Ativar o Mod ?</p>
                            </div>
                            <div class="Seta">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                </svg>
                            </div>
                            <div class="ConteudoPerg"></div>
                        </div>
                        <div class="perCard">
                            <div class="Desc">
                                <p>Como Ativar o Mod ?</p>
                            </div>
                            <div class="Seta">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                </svg>
                            </div>
                            <div class="ConteudoPerg"></div>
                        </div>
                        <div class="perCard">
                            <div class="Desc">
                                <p>Como Ativar o Mod ?</p>
                            </div>
                            <div class="Seta">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                </svg>
                            </div>
                            <div class="ConteudoPerg"></div>
                        </div>
                        <div class="perCard">
                            <div class="Desc">
                                <p>Como Ativar o Mod ?</p>
                            </div>
                            <div class="Seta">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                </svg>
                            </div>
                            <div class="ConteudoPerg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer style="margin-top: 120px;">
        <?php require("../util/Footer/footer.php"); ?>
    </footer>
    <!-- JS -->
    <script></script>
</body>

</html>