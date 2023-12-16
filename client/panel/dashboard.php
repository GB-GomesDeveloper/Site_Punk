<?php
include("../../res/secret/key/ProtectionPagClient.php");

if (isset($_SESSION["discord_Data"])) {
    extract($_SESSION["userData"]);
    $UserName = $username_discord;
    $urlAvatar = "https://cdn.discordapp.com/avatars/" . $discord_id . "/" . $avatar_discord . ".jpg";
    $discordID = $discord_id;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/panel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../Img/icon/IconPunk.png" type="image/x-icon">
    <title>Punk Studios || Dashboard</title>
</head>

<body>
    <main>
        <div class="container">
            <nav>
                <div class="Nav_Main">
                    <div class="Nav_page">
                        <p>Área do Cliente</p>
                    </div>
                    <div class="Nav_Options">
                        <ul>
                            <li>
                                <form id="NavLupa" action="../../public/loja" autocomplete="off" method="post">
                                    <input type="text" name="Lupa" id="Lupa">
                                    <button id="SubmitLupa" type="submit"><img
                                            src="../../Img/Main/svg/LupaSvg.svg"></button>
                                </form>
                            </li>
                            <li><img src="../../Img/client/nav/Bell.svg"></li>
                            <li>
                                <div class="Options_Avatar_Client">
                                    <img src="<?php
                                    extract($_SESSION["userData"]);
                                    echo "https://cdn.discordapp.com/avatars/" . $discord_id . "/" . $avatar_discord . ".jpg";
                                    ?>">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </main>
    <menu>
        <div class="container">
            <div class="MenuMain">
                <div class="MenuLogo">
                    <img src="../../Img/Main/logo/LogoPunk.png">
                </div>
                <div class="MenuOptions">
                    <ul>
                        <li>
                            <div class="OptionUser">
                                <div class="OptionUser_Img">
                                    <img style="width: 30px;" src="Svg/Brifcase.svg">
                                </div>
                                <div class="OptionUser_Desc">
                                    <p>Meus Pedidos</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="OptionUser">
                                <div class="OptionUser_Img">
                                    <img src="Svg/Box_Open.svg">
                                </div>
                                <div class="OptionUser_Desc">
                                    <p>Meus Produtos</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="OptionUser">
                                <div class="OptionUser_Img">
                                    <img src="Svg/Meteor.svg">
                                </div>
                                <div class="OptionUser_Desc">
                                    <p>Sugestão</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="OptionUser">
                                <div class="OptionUser_Img">
                                    <img src="Svg/Medal.svg">
                                </div>
                                <div class="OptionUser_Desc">
                                    <p>Avaliação</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </menu>
    <section id="Conteudo">

        <div class="CUser">
            <div class="UserPerfil">
                <div class="UserPerfil_Main">
                    <div class="UserPerfil_Avatar">
                        <div class="UserPerfil_imagem">
                            <img src="<?php
                            echo $urlAvatar
                                ?>">
                            <div class="UserPerfil_Name">
                                <p style="margin-bottom: -5px;">
                                    <?php echo $UserName ?>
                                </p>
                                <p id="UserPerfil_Roles">Visitante</p>
                            </div>
                        </div>
                    </div>
                    <div class="SolicitarToken_button">
                        <button>Solicitar Token</button>
                    </div>
                    <div class="UserPerfil_Inputs">
                        <div id="Form">
                            <div class="input">
                                <label for="UsernameClient">Usuário</label>
                                <input type="text" name="UsernameClient">
                            </div>
                            <button><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                    viewBox="0 0 20 20">
                                    <path fill="#fff" fill-rule="evenodd"
                                        d="M.307.31a1.053 1.053 0 0 1 1.16-.225L8.1 2.927l8.105 3.474c.123.053.235.128.33.223l3.158 3.158a1.052 1.052 0 1 1-1.489 1.489l-2.407-2.407L8.93 15.85l2.343 2.354A1.053 1.053 0 1 1 9.78 19.69l-3.076-3.092a1.054 1.054 0 0 1-.22-.325L2.945 8.085.086 1.47A1.053 1.053 0 0 1 .307.31Zm7.489 13.692 6.163-6.273-6.034-2.586L5.16 7.906l2.635 6.096ZM4.263 5.827 5.84 4.25 3.068 3.06l1.195 2.766Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div id="Form">
                            <div class="input">
                                <label for="UsernameClient">Senha</label>
                                <input type="text" name="SenhaClient">
                            </div>
                            <button><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                    viewBox="0 0 20 20">
                                    <path fill="#fff" fill-rule="evenodd"
                                        d="M.307.31a1.053 1.053 0 0 1 1.16-.225L8.1 2.927l8.105 3.474c.123.053.235.128.33.223l3.158 3.158a1.052 1.052 0 1 1-1.489 1.489l-2.407-2.407L8.93 15.85l2.343 2.354A1.053 1.053 0 1 1 9.78 19.69l-3.076-3.092a1.054 1.054 0 0 1-.22-.325L2.945 8.085.086 1.47A1.053 1.053 0 0 1 .307.31Zm7.489 13.692 6.163-6.273-6.034-2.586L5.16 7.906l2.635 6.096ZM4.263 5.827 5.84 4.25 3.068 3.06l1.195 2.766Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div id="Form">
                            <div class="input">
                                <label for="UsernameClient">E-mail</label>
                                <input type="text" name="EmailClient">
                            </div>
                            <button><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                    viewBox="0 0 20 20">
                                    <path fill="#fff" fill-rule="evenodd"
                                        d="M.307.31a1.053 1.053 0 0 1 1.16-.225L8.1 2.927l8.105 3.474c.123.053.235.128.33.223l3.158 3.158a1.052 1.052 0 1 1-1.489 1.489l-2.407-2.407L8.93 15.85l2.343 2.354A1.053 1.053 0 1 1 9.78 19.69l-3.076-3.092a1.054 1.054 0 0 1-.22-.325L2.945 8.085.086 1.47A1.053 1.053 0 0 1 .307.31Zm7.489 13.692 6.163-6.273-6.034-2.586L5.16 7.906l2.635 6.096ZM4.263 5.827 5.84 4.25 3.068 3.06l1.195 2.766Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="UserPainel">
                <div class="UserEstatica">
                    <div class="Estatica">
                        <div class="Estatica_Cont">
                            <p>0</p>
                        </div>
                        <div class="Estatica_Name">
                            <p>Produtos</p>
                        </div>
                    </div>
                    <div class="Estatica">
                        <div class="Estatica_Cont">
                            <p>0</p>
                        </div>
                        <div class="Estatica_Name">
                            <p>Pedidos</p>
                        </div>
                    </div>
                    <div class="Estatica">
                        <div class="Estatica_Cont">
                            <p>0</p>
                        </div>
                        <div class="Estatica_Name">
                            <p>Ticket</p>
                        </div>
                    </div>
                </div>
                <div class="UserPainelconfig"></div>
            </div>
        </div>

    </section>
    <!-- script -->
    <script src="../../src/Client/client.js"></script>
    <script>
        document.querySelector(".MenuLogo img").addEventListener("click", function () {
            window.location.href = "../../public/loja"
        })
    </script>
</body>

</html>