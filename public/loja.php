<?php session_start();
// unset($_SESSION["discord_Data"]);
// unset($_SESSION["ProdutosCarrinho"]);
// unset($_SESSION["cr"]);
// session_destroy();

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
    <link rel="stylesheet" href="../Design/store/store.css">
    <title>Punk Studios | Loja</title>
</head>

<body>
    <?php require("../util/load/load.php") ?>
    <main>
        <div id="response"></div>
        <div class="container">
            <?php require("../util/navbar/navbar.php") ?>
            <div class="TitPunk">
                <div class="container">
                    <div class="TitMain">
                        <div class="TiTCmc">
                            <div class="Titulo">
                                <h1>Punk Studios</h1>
                                <div>
                                    <p>O melhores mods inovadores para o MTA. Descubra estilos super <br> inovadores
                                        para elevar sua experiência no jogo.</p>
                                </div>
                            </div>
                            <div class="botao">
                                <a href="#"><button>Ver Produtos</button></a>
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
    <section style="margin-top: 50px;">
        <div class="container">
            <div class="CardPrdMain">
                <?php
                include("../res/secret/connection/connectPunk_Studios.php");
                $queryProdutos = "SELECT * FROM addprodutos ORDER BY id DESC";
                $stmt = $connectPunk_Studios->prepare($queryProdutos);
                $stmt->execute();
                foreach ($stmt as $key => $valor) {
                    $preco = number_format($valor["valor"], 2, ",", ".");
                    $imagem = $valor["imagem"];
                    $nome = $valor["produto"];
                    $categoria = $valor["categorias"];
                    $id = $valor['id'];
                    ?>
                    <div class="card">
                        <div class="ImgCard">
                            <img src="<?php echo $imagem ?>">
                        </div>
                        <div id="plus">
                            <p>
                                <?php echo $categoria ?>
                            </p>
                        </div>
                        <div class="CardDetails">
                            <div class="PrpCardDetails">
                                <p>
                                    <?php echo $nome ?>
                                </p>
                                <div class="PrpCardMais">
                                    <p>Mais detalhes</p>
                                </div>
                            </div>
                            <div class="PrpCardButton" aria-label="<?php echo $id ?>">
                                <button>R$
                                    <?php echo $preco ?>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <div id="pagination-container"></div>
    <footer>
        <?php require("../util/Footer/footer.php") ?>
    </footer>
    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>

    <script>
        // Pagination
        var items = $(".CardPrdMain .card");
        var numItems = items.length;
        var perPage = 9;
        items.slice(perPage).hide();
        $('#pagination-container').pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: "&laquo;",
            nextText: "&raquo;",
            onPageClick: function (pageNumber) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
            }
        });

        // Button addCarrinho;

        const principalButton = document.querySelectorAll(".PrpCardButton")
        for (let i = 0; i < principalButton.length; i++) {
            principalButton[i].addEventListener("click", function () {
                $.ajax({
                    url: `../app/carrinho/cr?acon=cr&id=${principalButton[i].ariaLabel}`,
                    type: "GET",
                }).done(async function (result) {
                })
            })
        }
    </script>

</body>

</html>