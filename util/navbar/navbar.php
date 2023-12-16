<html>

<head>
    <link rel="stylesheet" href="../Design/main/index.css">
</head>

<body>
    <nav>
        <div class="Navmain">
            <div class="NavLogo">
                <img src="../Img/Main/logo/LogoPunk.png">
                <div class="NavPages">
                    <ul>
                        <li id="index"><a href="index">Início</a></li>
                        <li id="loja"><a href="loja">Loja</a></li>
                        <li id="avaliação"><a href="#">Avaliação</a></li>
                        <li id="comunidade"><a href="#">Comunidade</a></li>
                    </ul>
                </div>
            </div>
            <div class="NavFerramentas">
                <ul>
                    <li>
                        <form id="NavLupa" actio="loja" autocomplete="off" method="post">
                            <input type="text" name="Lupa" id="Lupa">
                            <button id="SubmitLupa" type="submit"><img src="../Img/Main/svg/LupaSvg.svg"></button>
                        </form>
                    </li>
                    <li><img src="../Img/Main/svg/ConfigSvg.svg"></li>
                    <li>
                        <div id="carrinho" class="carrinho">
                            <svg width="39" height="40" viewBox="0 0 39 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_76)">
                                    <path class="pathcarrinho"
                                        d="M11.8323 39.3278C13.5976 39.3278 15.0287 37.8968 15.0287 36.1315C15.0287 34.3661 13.5976 32.9351 11.8323 32.9351C10.067 32.9351 8.63589 34.3661 8.63589 36.1315C8.63589 37.8968 10.067 39.3278 11.8323 39.3278Z"
                                        fill="#EEEEEE" />
                                    <path class="pathcarrinho"
                                        d="M27.8144 39.3278C29.5798 39.3278 31.0108 37.8968 31.0108 36.1315C31.0108 34.3661 29.5798 32.9351 27.8144 32.9351C26.0491 32.9351 24.618 34.3661 24.618 36.1315C24.618 37.8968 26.0491 39.3278 27.8144 39.3278Z"
                                        fill="#EEEEEE" />
                                    <path class="pathcarrinho"
                                        d="M37.3781 10.588C36.253 9.51225 34.747 8.92707 33.1908 8.96104H9.68125L9.26092 5.66555C9.1083 4.37211 8.4864 3.17963 7.51313 2.31418C6.53986 1.44872 5.28287 0.97045 3.98046 0.970032L3.04232 0.970032C2.40652 0.970032 1.79675 1.2226 1.34717 1.67219C0.897592 2.12177 0.64502 2.73153 0.64502 3.36733H0.64502C0.64502 4.00314 0.897592 4.6129 1.34717 5.06248C1.79675 5.51206 2.40652 5.76464 3.04232 5.76464H3.98046C4.11121 5.76604 4.2368 5.81581 4.33301 5.90435C4.42923 5.99289 4.48924 6.11392 4.50148 6.2441L6.89878 25.0373C7.04998 26.3318 7.67131 27.5256 8.64476 28.3921C9.61821 29.2586 10.876 29.7374 12.1792 29.7377H28.3562C30.2806 29.7365 32.1514 29.1039 33.6815 27.937C35.2116 26.77 36.3166 25.1332 36.8267 23.2777L38.8181 16.0363C39.0835 15.0821 39.09 14.0744 38.837 13.1168C38.5839 12.1593 38.0803 11.2864 37.3781 10.588ZM32.2095 22.0072C31.9755 22.8499 31.4723 23.593 30.7766 24.1231C30.0808 24.6531 29.2309 24.9411 28.3562 24.943H12.1792C12.0486 24.942 11.923 24.8923 11.8269 24.8036C11.7309 24.715 11.6713 24.5938 11.6598 24.4636L10.2934 13.7556H33.4305C33.554 13.7547 33.6759 13.7824 33.7869 13.8365C33.8978 13.8907 33.9947 13.9697 34.07 14.0676C34.1452 14.1655 34.1968 14.2794 34.2206 14.4005C34.2444 14.5217 34.2398 14.6466 34.2072 14.7657L32.2095 22.0072Z"
                                        fill="#EEEEEE" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2_76">
                                        <rect width="38.3568" height="38.3568" fill="white"
                                            transform="translate(0.64502 0.970032)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <p id="crnContador"><?php echo @count((array)$_SESSION["cr"]);?></p>
                        </div>
                    </li>
                    <li id="UserFerramentas"><img src="<?php
                    if (!isset($_SESSION["discord_Data"])) {
                        echo "../Img/Main/svg/UserSvg.svg";
                    } else if (isset($_SESSION["discord_Data"])) {
                        extract($_SESSION["userData"]);
                        echo "https://cdn.discordapp.com/avatars/" . $discord_id . "/" . $avatar_discord . ".jpg";
                    }
                    ?>">
                        <div></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Script -->
    <script src="../src/Nav/nav.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $("#UserFerramentas img").click(function () {
            <?php
            if (!isset($_SESSION["discord_Data"])) {
                echo '
                $.ajax({
                url: "../app/auth/discord/cnc_api_discord.php",
            }).done(async function (response) {
                window.location.href = response;
            })';
            } else {
                echo "window.location.href = '../client/panel/dashboard';";
            }
            ?>
        })
        
        $(".carrinho").click(function () {
            window.location.href = "../public/carrinho"
        })
    </script>
</body>

</html>