<!--Web Sites credits: @Ermes_Resell Coder: @manzi_giuliano-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ermes Resell</title>
    <link rel="stylesheet" href="style/styles.css">


    <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {
            "consentOnContinuedBrowsing": false,
            "floatingPreferencesButtonDisplay": "bottom-right",
            "invalidateConsentWithoutLog": true,
            "perPurposeConsent": true,
            "siteId": 2851478,
            "whitelabel": false,
            "cookiePolicyId": 56597744,
            "lang": "it",
            "banner": {
                "acceptButtonDisplay": true,
                "closeButtonRejects": true,
                "customizeButtonDisplay": true,
                "explicitWithdrawal": true,
                "listPurposes": true,
                "logo": null,
                "position": "bottom"
            }
        };
    </script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>

</head>

<body>

    <!--Barra di navigazione-->
    <nav class="navigazione">
        <div class="navigazione_container">
            <a href="#home" id="navigazione_logo">Ermes Resell</a>
            <div class="navigazione_toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navigazione_menu">
                <li class="navigazione_elementi">
                    <a href="#home" class="navigazione_link" id="home-page">Home</a>
                </li>
                <li class="navigazione_elementi">
                    <a href="prodotti.php" class="navigazione_link" id="prodotti-page">Prodotti</a>
                </li>
                <li class="navigazione_elementi">
                    <a href="#about" class="navigazione_link" id="about-page">Su di noi</a>
                </li>
                <li class="navigazione_btn">
                    <a href="#sign-up" class="button" id="signup">Newsletter</a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="app.js"></script>

    <!--Sezione principale (hero)-->
    <div class="hero" id="home">
        <div class="hero_container">
            <h1 class="hero_heading">Definisci il tuo <span>stile</span></h1>
            <p class="hero_descrizione">Sneakers per tutti</p>
            <button class="main_btn"><a href="prodotti.php">Esplora i prodotti</a></button>
        </div>
    </div>

    <!--Sezione prodotti (services)-->
    <div class="services" id="prodotti">
        <h1>Le nostre sneakers</h1>



        <div class="services_wrapper">
            <?php
            include("stampa_home.php");
            /*
            ?>
            <div class="services_card">
                <a href="DunkLowPandaphp"><img src="immagini/Prodotti/dunklowpanda.png" alt="Dunk Low Panda"></a>
                <!--Bottoni per ogni card <div class="services_btn"><button>Esplora</button></div> -->
            </div>
            <div class="services_card">
                <a href="yeezy350bonephp"><img src="immagini/Prodotti/yeezy350bone.png" alt="Yeezy 350 v2 Bone"></a>
                <!--Bottoni per ogni card <div class="services_btn"><button>Esplora</button></div> -->
            </div>
            <div class="services_card">
                <a href="jordanmidfrenchbluephp"><img src="immagini/Prodotti/j1frenchblue.png" alt="Jordan 1 mid french blue"></a>
                <!--Bottoni per ogni card <div class="services_btn"><button>Esplora</button></div> -->
            </div>
            <div class="services_card">
                <a href="af1supremephp"><img src="immagini/Prodotti/af1supreme.png" alt="Air force one Supreme"></a>
                <!--Bottoni per ogni card <div class="services_btn"><button>Esplora</button></div> -->
            </div><?php */ ?>
        </div>
        <div class="button_wrapper">
            <button class="services_button"><a href="prodotti.php">Tutti i prodotti</a></button>
        </div>
    </div>

    <!--Sezione su di noi (about)-->
    <div class="main" id="about">
        <div class="main_container">
            <div class="main_img-container">
                <div class="main_img-card"><img src="immagini/hermes.png" alt="Logo"></div>
            </div>
            <div class="main_content">
                <h1>Chi siamo</h1>
                <h2>Ermes Resell è un rivenditore di sneakers 100% originali</h2>
                <p>Se hai domande o hai bisogno di più informazioni, non esitare a contattarci</p>
                <button class="main_btn"><a href="#Footer">Contattaci</a></button>
            </div>
        </div>
    </div>

    <!--Sezione features-->
    <div class="newsletter" id="sign-up">
        <div class="newsletter_container">
            <div class="main_img-container">
                <div class="main_content">
                    <h1>Unisciti alla Fam</h1>
                    <h2>Verrai notificato quando un nuovo prodotto viene aggiunto allo shop</h2>
                    <button class="main_btn" onclick="myFunction()"><a>Iscriviti alla Newsletter</a></button>
                    <form action="newsletter.php" method="post">
                        <label id="labelInput" for="mail" style="display: none;" type="email" required="">Inserisci la
                            tua mail:</label>
                        <input type="email" id="input" name="mail" style="display: none;">
                        <button id="btnInput" style="display: none;">Inserisci</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <div class="footer_container" id="Footer">
        <div class="footer_links">
            <div class="footer_link-wrapper">
                <div class="footer_link-items">
                    <h2>Info</h2>
                    <a href="informazioniphp">Come acquistare</a>
                    <a href="informazioniphp">Termini e Condizioni</a>
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
                    <a href="informazioniphp">Metodi di pagamento</a>
                    <a href="informazioniphp">Politica di rimborso</a>
                </div>
                <div class="footer_link-items">
                    <h2>Chi siamo</h2>
                    <a href="indexphp#about">Su di noi</a>
                    <a href="informazioniphp" target="_blank">Recensioni</a>
                </div>
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
                    <a href="indexphp#home" id="footer_logo">Ermes Resell</a>
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