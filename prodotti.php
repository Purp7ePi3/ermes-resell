<!--Web Sites credits: @Ermes_Resell Coder: @manzi_giuliano-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti</title>
    <link rel="stylesheet" href="style/styles2.css">
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

    <!--Sezione principale prodotti-->
    <div class="prodotti_container">
        <div class="prodotti_titolo">
            <h1>Prodotti</h1>
            <h2>Per acquistare contattaci tramite <a href="https://www.instagram.com/ermes_resell/?hl=it" target="_blank">Instagram</a> o <a href="https://wa.me/3349892165" target="_blank">WhatsApp</a></h2>
        </div>
        <div class="prodotti_prodotti">
            <?php include("stampa.php"); ?>
            <!--    <div class="prodotti_card">
                <a href="DunkLowPanda.html"><img src="immagini/Prodotti/dunklowpanda.png" alt="Dunk Low Panda"></a>
            </div>
            <div class="prodotti_card">
                <a href="yeezy350bone.html"><img src="immagini/Prodotti/yeezy350bone.png" alt="Yeezy 350 v2 Bone"></a>
            </div>
            <div class="prodotti_card">
                <a href="jordanmidfrenchblue.html"><img src="immagini/Prodotti/j1frenchblue.png"
                        alt="Jordan 1 Mid french blue"></a>
            </div>
            <div class="prodotti_card">
                <a href="af1supreme.html"><img src="immagini/Prodotti/af1supreme.png" alt="Air Force One Supreme"></a>
            </div>  -->
        </div>
        <div class="prodotti_nontrovati">
            <h1>Non hai trovato quello che cercavi?</h1>
            <h2>Non temere! Contattaci tramite <a href="https://www.instagram.com/ermes_resell/?hl=it" target="_blank">Instagram</a> o <a href="https://wa.me/3349892165" target="_blank">WhatsApp</a> per
                richiederci un prodotto e lo troveremo per te</h2>
        </div>
    </div>

    <!--Footer-->
    <div class="footer_container" id="Footer">
        <div class="footer_links">
            <div class="footer_link-wrapper">
                <div class="footer_link-items">
                    <h2>Info</h2>
                    <a href="informazioni.html">Come acquistare</a>
                    <a href="informazioni.html">Termini e Condizioni</a>
                    <a href="https://www.iubenda.com/privacy-policy/56597744">Informativa sulla privacy</a>
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
                    </script>
                    <a href="informazioni.html">Metodi di pagamento</a>
                    <a href="informazioni.html">Politica di rimborso</a>
                </div>
                <div class="footer_link-items">
                    <h2>Chi siamo</h2>
                    <a href="index.php#about">Su di noi</a>
                    <a href="informazioni.html" target="_blank">Recensioni</a>
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