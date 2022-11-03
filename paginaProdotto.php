<!--Web Sites credits: @Ermes_Resell Coder: @manzi_giuliano-->

<?php
require_once("config.php");
$sql = "select * from snkrs where id = " . $_GET["id"];
$result = $cn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    //$box_print = str_replace("[IMMAGINEPRODOTTO]", $row['image_name'] . ".png", $box_prodotti);
    //$box_print = str_replace("[ID_PRODOTTO]", $row['id'], $box_print);
    // echo  $box_print;
    $taglie = explode(",", $row["taglia"]);
} else {
    echo "0 records";
}
$cn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome prodotto</title>
    <link rel="stylesheet" href="style/styles3.css">
</head>

<body>
    <!--Barra di navigazione-->
    <nav class="navigazione">
        <div class="navigazione_container">
            <a href="index.php" id="navigazione_logo">Ermes Resell</a>
            <div class="navigazione_toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navigazione_menu">
                <li class="navigazione_elementi">
                    <a href="index.php" class="navigazione_link" id="home-page">Home</a>
                </li>
                <li class="navigazione_elementi">
                    <a href="prodotti.php" class="navigazione_link" id="prodotti-page">Prodotti</a>
                </li>
                <li class="navigazione_elementi">
                    <a href="index.php#about" class="navigazione_link" id="about-page">Su di noi</a>
                </li>
                <li class="navigazione_btn">
                    <a href="index.php#sign-up" class="button" id="signup">Newsletter</a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="app.js"></script>

    <!--Sezione Prodotto, all'inzio immagine 1=immagine principale-->
    <div class="prodotto_container">
        <div class="prodotto_wrapper">
            <div class="prodotto_img">
                <div class="prodotto_principale-img">
                    <img src="immagini/<?php echo $row["image_name"]; ?>.png" alt="" id="immaginePrincipale">
                </div>
                <div class="prodotto_altreimmagini">
                    <div class="prodotto_immagine1"><img src="immagini/<?php echo $row["image_name"]; ?>.png" alt="" id="immagine1"></div>
                    <?php
                    $detail = '<div class="prodotto_immagine[Numero]"><img src="immagini/[nome_foto].png" alt="" id="immagine[Numero]"></div>';

                    for ($x = 2; $x <= 9; $x++) {
                        $nome_immagine = $row["image_name"] . "_" . $x;
                        if (file_exists("immagini/" . $nome_immagine . ".png")) {
                            $detail_image = str_replace("[nome_foto]", $nome_immagine, $detail);
                            $detail_image = str_replace("[Numero]", $x, $detail_image);
                            echo $detail_image . "\n";
                        }
                    }
                    ?>
                    <!--<div class="prodotto_immagine2"><img src="immagini/esempioprodotto/foto2.png" alt="" id="immagine2"></div>
                    <div class="prodotto_immagine3"><img src="immagini/esempioprodotto/foto3.png" alt="" id="immagine3"></div>
                    <div class="prodotto_immagine4"><img src="immagini/esempioprodotto/foto4.png" alt="" id="immagine4"></div>
                    <div class="prodotto_immagine5"><img src="immagini/esempioprodotto/foto5.png" alt="" id="immagine5"></div>
                    <div class="prodotto_immagine6"><img src="immagini/esempioprodotto/foto6.png" alt="" id="immagine6"></div>
                    <div class="prodotto_immagine7"><img src="immagini/esempioprodotto/foto7.png" alt="" id="immagine7"></div>
                    <div class="prodotto_immagine8"><img src="immagini/esempioprodotto/foto8.png" alt="" id="immagine8"></div>-->
                </div>
            </div>
            <div class="prodotto_info">
                <div class="info_titolo">
                    <h1><?php echo $row["name"]; ?></h1>
                    <h2><?php echo $row["price"] .   " €"; ?></h2>
                </div>
                <div class="info_altro">
                    <div class="info_altro-taglie">
                        <div>Taglie disponibili:</div>
                        <?php foreach ($taglie as $prova) {
                            echo '<button id="taglie">' . $prova . ' </button>';
                        } ?>

                    </div>
                    <button id="contatti"><a href="https://www.instagram.com/ermes_resell/?hl=it" target="_blank">Contattaci su Instagram</a></button>
                    <br>
                    <button id="contatti"><a href="https://wa.me/3349892165" target="_blank">Contattaci su WhatsaApp</a></button>
                </div>
            </div>
        </div>
        <div class="prodotto_descrizione">
            <h3>Descrizione prodotto</h3>
        </div>
    </div>
    <script src="app2.js"></script>

    <!--Footer-->
    <div class="footer_container" id="Footer">
        <div class="footer_links">
            <div class="footer_link-wrapper">
                <div class="footer_link-items">
                    <h2>Info</h2>
                    <a href="informazioni.php">Come acquistare</a>
                    <a href="informazioni.php">Termini e Condizioni</a>
                    <a href="/sign-up">Informativa sulla privacy</a><a href="https://www.iubenda.com/privacy-policy/56597744">Informativa sulla privacy</a>
                    <script type="text/javascript">
                        (function(w, d) {
                            var loader = function() {
                                var s = d.createElement("script"),
                                    tag = d.getElementsByTagName("script")[0];
                                s.src = "https://cdn.iubenda.com/iubenda.js";
                                tag.parentNode.insertBefore(s, tag);
                            };
                            if (w.addEventListener) {
                                w.addEventListener("load", loader, false);
                            } else if (w.attachEvent) {
                                w.attachEvent("onload", loader);
                            } else {
                                w.onload = loader;
                            }
                        })(window, document);
                    </script> <a href="informazioni.php">Metodi di pagamento</a>
                    <a href="informazioni.php">Politica di rimborso</a>
                </div>
                <div class="footer_link-items">
                    <h2>Chi siamo</h2>
                    <a href="index.php#about">Su di noi</a>
                    <a href="informazioni.php" target="_blank">Recensioni</a>
                </div>
            </div>
            <div class="footer_link-wrapper">
                <div class="footer_link-items">
                    <h2>Contatti</h2>
                    <a href="https://www.instagram.com/ermes_resell/?hl=it" target="_blank">Instagram</a>
                    <a href="https://wa.me/3349892165" target="_blank">WhatsApp</a>
                    <a href="mailto:ermesresell@gmail.com" target="_blank">Email</a>
                </div>
            </div>
        </div>
        <section class="social_media">
            <div class="social_media-wrap">
                <div class="footer_logo">
                    <a href="index.php#home" id="footer_logo">Ermes Resell</a>
                </div>
                <p class="website_rights">© Ermes Resell 2022. Tutti i diritti riservati</p>
                <div class="social_icons">
                    <a href="https://www.instagram.com/ermes_resell/?hl=it" class="social_icon-link" target="_blank">
                        <img src="immagini/instagram.png" alt="Instagram" target="_blank"></img>
                    </a>
                    <a href="https://wa.me/3349892165" class="social_icon-link" target="_blank">
                        <img src="immagini/WhatsApp.png" alt="WhatsaApp" target="_blank"></img>
                    </a>
                    <a href="https://www.paypal.com/it/webapps/mpp/account-sign-up?kid=p52276581155&gclid=CjwKCAjw5P2aBhAlEiwAAdY7dF7AmBv3rYkfANuHIA4MAHICVSTHa6aIZDmQ7xjTVQJvQQK7wexTFhoCnE8QAvD_BwE&gclsrc=aw.ds" class="social_icon-link" target="_blank">
                        <img src="immagini/paypal.png" alt="PayaPal" target="_blank"></img>
                    </a>
                </div>
            </div>
        </section>
    </div>
</body>

</html>