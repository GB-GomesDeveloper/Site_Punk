<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Design/carrinho/carrinho.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="../Img/icon/IconPunk.png" type="image/x-icon">
    <title>Punk Studios || Carrinho</title>
</head>
<body>
    
    <?php require("../util/load/load.php")?>

<main>
    <div class="container">
        <?php require("../util/navbar/navbar.php") ?>
    </div>
</main>
<section>
    <div class="container">
        <?php if(!isset($_SESSION["discord_Data"])){
        ?>
        <div class="Carrinho_cont">
            <div class="detail">
                <div class="Carrinho_Title_Vazio">
                    <h1>Seu carrinho está vazio</h1>
                </div>
                <div class="Carrinho_img_Vazio">
                    <img src="../Img/main/avatar/AvatarQueimandoMaconha.png">
                </div>
            </div>
            <div class="Carrinho_Button_Vazio">
                <button>Faça login com sua conta</button>
            </div>
        </div>
        <?php }else{ ?>
        <div class="Carrinho_Che">
            <div class="Produtos_Carrinho">

                <div class="cardCarrinho">
                    <div class="ImgCard">
                        <img src="https://cdn.discordapp.com/attachments/929920813946249248/1167527960593571880/Vampiro.jpg?ex=654e7425&is=653bff25&hm=b1eb5a861090c6e2f93147e7b98ffb848539ccd1ef8119391b394771d44e833c&" alt="">
                    </div>
                    <div class="DescCard">
                        <div class="Name"><p><?php foreach($_SESSION['ProdutosCarrinho'] as $idproduto => $quantidade){
                            echo $idProdutoCr;    
                        }
                        
                        ?></p></div>
                        <div class="Preco"><p>Preço: R$ 30,00</p></div>
                        <div class="ButtonRemover">
                            <button>Remover</button>
                        </div>
                    </div>
                </div>
                <div class="cardCarrinho">
                    <div class="ImgCard">
                        <img src="https://cdn.discordapp.com/attachments/929920813946249248/1167527960593571880/Vampiro.jpg?ex=654e7425&is=653bff25&hm=b1eb5a861090c6e2f93147e7b98ffb848539ccd1ef8119391b394771d44e833c&" alt="">
                    </div>
                    <div class="DescCard">
                        <div class="Name"><p>Vampiro</p></div>
                        <div class="Preco"><p>Preço: R$ 30,00</p></div>
                        <div class="ButtonRemover">
                            <button>Remover</button>
                        </div>
                    </div>
                </div>
                <div class="cardCarrinho">
                    <div class="ImgCard">
                        <img src="https://cdn.discordapp.com/attachments/929920813946249248/1167527960593571880/Vampiro.jpg?ex=654e7425&is=653bff25&hm=b1eb5a861090c6e2f93147e7b98ffb848539ccd1ef8119391b394771d44e833c&" alt="">
                    </div>
                    <div class="DescCard">
                        <div class="Name"><p>Vampiro</p></div>
                        <div class="Preco"><p>Preço: R$ 30,00</p></div>
                        <div class="ButtonRemover">
                            <button>Remover</button>
                        </div>
                    </div>
                </div>
                <div class="cardCarrinho">
                    <div class="ImgCard">
                        <img src="https://cdn.discordapp.com/attachments/929920813946249248/1167527960593571880/Vampiro.jpg?ex=654e7425&is=653bff25&hm=b1eb5a861090c6e2f93147e7b98ffb848539ccd1ef8119391b394771d44e833c&" alt="">
                    </div>
                    <div class="DescCard">
                        <div class="Name"><p>Vampiro</p></div>
                        <div class="Preco"><p>Preço: R$ 30,00</p></div>
                        <div class="ButtonRemover">
                            <button>Remover</button>
                        </div>
                    </div>
                </div>
                <div class="cardCarrinho">
                    <div class="ImgCard">
                        <img src="https://cdn.discordapp.com/attachments/929920813946249248/1167527960593571880/Vampiro.jpg?ex=654e7425&is=653bff25&hm=b1eb5a861090c6e2f93147e7b98ffb848539ccd1ef8119391b394771d44e833c&" alt="">
                    </div>
                    <div class="DescCard">
                        <div class="Name"><p>Vampiro</p></div>
                        <div class="Preco"><p>Preço: R$ 30,00</p></div>
                        <div class="ButtonRemover">
                            <button>Remover</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="Subtotal_Carrinho">
                <div class="Desc_SubTotal">
                    <div id="Title"><p>Subtotal do carrinho</p></div>
                    <div id="Valor_Total"><p>R$ 0,00</p></div>
                    <div id="Sistema_Cupom">
                        <form>
                            <input type="text" name="Cupom" id="CupomInput">
                        </form>
                        <div class="submit">
                            <button>OK</button>
                        </div>
                    </div>
                    <div id="Finalizar_Button">
                        <button>Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<footer>
    <?php require("../util/Footer/footer.php") ?>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(".Carrinho_Button_Vazio button").click(function(){
  $.ajax({
    url: "../app/auth/discord/cnc_api_discord.php",
  }).done(async function(response){
    window.location.href = `${await response}`;
  }) 
})
</script>

</body>
</html>