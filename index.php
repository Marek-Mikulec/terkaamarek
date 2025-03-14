<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/png" href="images/tm-faficon-265px.png">
    <title>Terka a Marek | Svatební stránky</title>
</head>
<body>
    <header>
        <!-- Navigace -->
        <nav>
            <div id="navbar">
                <div id="nav-logo">
                    <a href="#"><img src="images/tm-logo.png" alt="Terka a marek logo"></a>
                </div>
                <ul>
                    <li><a href="#">Úvod</a></li>
                    <li><a href="#misto">Místo</a></li>
                    <li><a href="#program">Program</a></li>
                    <li><a href="#info">Informace</a></li>
                    <li><a href="#formular">Formulář</a></li>
                </ul>
            </div>

            <!-- Navigace Napište nám button -->
            
            <div id="nav-form">
                <a href="#formular" id="nav-form-href">
                    <div id="nav-form-box">
                        <img src="/images/icons/button-ico-mail.png" alt="Mail button icon">
                    </div>
                </a>
            </div>

            <!-- Navigace up button -->

            <div id="nav-up">
                <a href="#">
                    <div id="nav-up-box">
                        <div class="nav-up-arrow"></div>
                    </div>
                </a>
            </div>

            <!-- Navigace tvar -->
               
            <div class="nav-shape">
                <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="nav-wave">
                    <defs>
                        <filter id="wave-shadow" x="-20%" y="-20%" width="140%" height="140%">
                            <feOffset dx="0" dy="6" result="offset" />
                            <feGaussianBlur stdDeviation="10" result="blurred" />
                            <feFlood flood-color="var(--primary-color)" result="shadowColor" />
                            <feComposite in2="blurred" operator="in" />
                            <feMerge>
                                <feMergeNode />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>
                    </defs>
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                    <path fill="none" stroke="var(--primary-color)" stroke-width="14" stroke-linecap="round" d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3" filter="url(#wave-shadow)"></path>
                </svg>
            </div>
        </nav>

        <!-- Header -->
        <div id="header-box">
            <h1>Terka a&nbsp;Marek</h1>
            <p id="slogan">Se&nbsp;budou&nbsp;brát!</p>
            <p id="date">17.&nbsp;května&nbsp;2025</p>
            <img src="images/spade-left.png" alt="" id="spade-left">
            <img src="images/spade-right.png" alt="" id="spade-right">
        </div>
    </header>
    <main>

        <!-- první listy na pozadí --> 

        <div class="bg-box">
            <div class="bg-box-layout">
                <img src="images/big-spade-right.png" alt="Left Spade" class="bg-image left">
                <img src="images/big-spade-left.png" alt="Right Spade" class="bg-image right">
            </div>
        </div>

        <!-- O nás -->

        <section class="row" id="o-nas">
            <h2>O nás</h2>
            <div class="narrow">
                <p>Po&nbsp;více než 12&nbsp;letech společného soužití budeme i&nbsp;my brzo nosit stejné příjmení - Mikulcovi. A&nbsp;že&nbsp;jsme toho za&nbsp;tu dobu stihli prožít! Spoustu cestování do&nbsp;daleka, ale&nbsp;i&nbsp;výletů po&nbsp;okolí. Hodně zážitků a&nbsp;zkušeností, dobrých i&nbsp;zlých. A&nbsp;to&nbsp;vše jsme prožívali s&nbsp;Vámi! Proto bychom Vás nyní chtěli pozvat na&nbsp;oslavu uzavření našeho manželství!</p>
            </div>
        </section>

        <!-- Místo konání -->

        <section class="row" id="misto">
            <h2>Místo konaní svatby</h2>
            <div id="misto-box">
                <div id="misto-img">
                    <img src="images/dubecsky-spejchar.jpg" alt="Dubečský špejchar">
                </div>
                <div id="misto-text">
                    <p><strong>Dubečský Špejchar</strong></p>
                    <p>U Dubečské tvrze 1675</p>
                    <p>Praha 10 | Dubeč</p>
                </div>
            </div>
            <div id="misto-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2561.2414477372945!2d14.594355277545814!3d50.063039715181255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b8d1370b8b735%3A0xaf01880fc326b0ce!2zRHViZcSNc2vDvSDFoHBlamNoYXI!5e0!3m2!1scs!2scz!4v1736671578119!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="narrow ico-box">
                <div class="ico"><img src="/images/icons/ico-location.png" alt="Ikona mapa"></div>
                <h3>Parkování a MHD</h3>
                <p>Parkování je možné přímo nad&nbsp;Panskou zahradou. Do&nbsp;navigace stačí zadat „Parkoviště u&nbsp;Dubečské tvrze“.
                    <br>
                    <br>MHD - nedaleko Špejcharu je zastávka MHD „Wiklerova“, ze&nbsp;které jede bus č.&nbsp;240 na&nbsp;Černý most nebo na&nbsp;Háje. Poslední spoje odjíždí okolo&nbsp;00:30.
                </p>
            </div>
        </section>

        <!-- Program -->

        <section class="gallery" id="program">
            <div class="row" id="program-box">
                <h2>Svatební program</h2>
                <div id="program-layout">

                    <div class="one-program-box" id="one-program-p1">
                        <div class="one-program-box-img">
                            <img src="images/icons/ico-car.png" alt="Ikona prsteny">
                        </div>
                        <div><p><strong>12:00</strong></p></div>
                        <div><p>Příjezd hostů</p></div>
                    </div>

                    <div class="one-program-box" id="one-program-p2">
                        <div class="one-program-box-img">
                            <img src="images/icons/ico-rings.png" alt="Ikona prsteny">
                        </div>
                        <div><p><strong>13:00</strong></p></div>
                        <div><p>Obřad</p></div>
                    </div>

                    <div class="one-program-box" id="one-program-p3">
                        <div class="one-program-box-img">
                            <img src="images/icons/ico-camera.png" alt="Ikona fotoaparát">
                        </div>
                        <div><p><strong>14:00</strong></p></div>
                        <div><p>Focení</p></div>
                    </div>

                    <div class="one-program-box" id="one-program-p4">
                        <div class="one-program-box-img">
                            <img src="images/icons/ico-cutlery.png" alt="Ikona jídlo">
                        </div>
                        <div><p><strong>15:00</strong></p></div>
                        <div><p>Polévka a&nbsp;raut</p></div>
                    </div>

                    <div class="one-program-box" id="one-program-p5">
                        <div class="one-program-box-img">
                            <img src="images/icons/ico-cake.png" alt="Ikona dort">
                        </div>
                        <div><p><strong>17:00</strong></p></div>
                        <div><p>Dort</p></div>
                    </div>

                    <div class="one-program-box" id="one-program-p6">
                        <div class="one-program-box-img">
                            <img src="images/icons/ico-drink.png" alt="Ikona přípitek">
                        </div>
                        <div><p><strong>17:30</strong></p></div>
                        <div><p>Přípitek</p></div>
                    </div>

                    <div class="one-program-box" id="one-program-p7">
                        <div class="one-program-box-img">
                            <img src="images/icons/ico-grill.png" alt="Ikona grill">
                        </div>
                        <div><p><strong>18:00</strong></p></div>
                        <div><p>Grill</p></div>
                    </div>

                    <div class="one-program-box" id="one-program-p8">
                        <div class="one-program-box-img">
                            <img src="images/icons/ico-music.png" alt="Ikona hudba">
                        </div>
                        <div><p><strong>19:00</strong></p></div>
                        <div><p>Volná zábava</p></div>
                    </div>

                    <div id="program-line">
                        <hr id="pr-main-line">
                        <hr class="pr-line">
                        <hr class="pr-line">
                        <hr class="pr-line">
                        <hr class="pr-line">
                        <hr class="pr-line">
                        <hr class="pr-line">
                        <hr class="pr-line">
                        <hr class="pr-line">
                    </div>
                    <p id="program-info-text"><strong>Časy jsou pouze&nbsp;orientační</strong></p>
                </div>
            </div>
        </section>

        <!-- Info -->

        <section class="row" id="info">
            <h2>Důležité informace</h2>
            <div id="info-box">
                <div class="one-info-box">
                    <div class="one-info-head">
                        <div>
                            <img src="images/icons/ico-proposal.png" alt="Ikona obřad">
                        </div>
                        <p><strong>Obřad</strong></p>
                    </div>
                    <p class="one-info-text">Obřad se&nbsp;bude konat ve&nbsp;13:00 v&nbsp;přírodním divadle v&nbsp;Panské zahradě vedle&nbsp;Dubečského Špejcharu na&nbsp;Praze&nbsp;9. <br><br>Kdyby pršelo, obřad bude přesunut do&nbsp;budovy Špejcharu, kde bude následně probíhat i&nbsp;raut a&nbsp;večerní zábava.</p>
                </div>
                <div class="one-info-box">
                    <div class="one-info-head">
                        <div>
                            <img src="images/icons/ico-house.png" alt="Ikona ubytování">
                        </div>
                        <p><strong>Ubytování</strong></p>
                    </div>
                    <p class="one-info-text">Ubytování není zajištěno. Odvážlivci mohou přenocovat na&nbsp;zahradě Špejcharu ve&nbsp;stanu či na&nbsp;zemi uvnitř. K&nbsp;dispozici bude kuchyňka a&nbsp;sprcha. <br><br>Chcete-li poradit, kde&nbsp;sehnat luxusnější nocleh, kontaktujte nás telefonem, emailem, či&nbsp;pomocí formuláře níže. </p>
                </div>
                <div class="one-info-box">
                    <div class="one-info-head">
                        <div>
                            <img src="images/icons/ico-gift.png" alt="Ikona dárky">
                        </div>
                        <p><strong>Dárky</strong></p>
                    </div>
                    <p class="one-info-text">Nejlepším darem bude Vaše přítomnost na&nbsp;naší svatbě. <br><br>Pokud budete mít i&nbsp;přesto nutkání něčím nás obdarovat, finanční příspěvek na&nbsp;naší svatební cestu bude z&nbsp;logistických důvodů nejpraktičtější. </p>
                </div>
                <div class="one-info-box">
                    <div class="one-info-head">
                        <div>
                            <img src="images/icons/ico-dress.png" alt="Ikona dress">
                        </div>
                        <p><strong>Dress code</strong></p>
                    </div>
                    <p class="one-info-text">Dress code na&nbsp;naši svatbu je Smart Casual, slavnostní, ale&nbsp;pohodlný.<br><br>Tepláky nechte prosím doma, ale kravaty a&nbsp;podpatky nejsou povinné. Hlavně ať se cítíte dobře a&nbsp;užijete si&nbsp;den s&nbsp;námi!</p>
                </div>
                <div class="one-info-box">
                    <div class="one-info-head">
                        <div>
                            <img src="images/icons/ico-bouquet.png" alt="Ikona bouquet">
                        </div>
                        <p><strong>Co s sebou</strong></p>
                    </div>
                    <p class="one-info-text">Přineste si deštník a&nbsp;bude slunečno.<br><br> Přineste si sluneční brýle a&nbsp;bude pršet. <br><br>Spacák, karimatku a&nbsp;další potřeby, pokud budete nocovat s&nbsp;námi na&nbsp;Špejcharu.</p>
                </div>
                <div class="one-info-box">
                    <div class="one-info-head">
                        <div>
                            <img src="images/icons/ico-kids.png" alt="Ikona děti">
                        </div>
                        <p><strong>Děti na svatbě</strong></p>
                    </div>
                    <p class="one-info-text">Děti jsou na&nbsp;naší svatbě vítány. Poblíž Špejcharu se&nbsp;nachází dvě menší dětská hřiště a&nbsp;přírodní bludiště.<br><br>Prosíme rodiče, aby&nbsp;na&nbsp;své ratolesti během dne dohlédli a&nbsp;zvážili jejich přítomnost v&nbsp;pozdních večerních hodinách. </p>
                </div>
                <div class="one-info-box">
                    <div class="one-info-head">
                        <div>
                            <img src="images/icons/ico-cutlery.png" alt="Ikona jídlo">
                        </div>
                        <p><strong>Jídlo</strong></p>
                    </div>
                    <p class="one-info-text">Po obřadu na&nbsp;Vás bude čekat bohatý raut. Odpoledne se těšte na&nbsp;grilování a&nbsp;další studené i&nbsp;teplé občerstvení.<br><br>O&nbsp;dort a&nbsp;sladké dobroty se&nbsp;postará naše drahá&nbsp;Su. Věčně hladovým doporučujeme lehký oběd před&nbsp;příjezdem.</p>
                </div>
                <div class="one-info-box">
                    <div class="one-info-head">
                        <div>
                            <img src="images/icons/ico-phone.png" alt="Ikona telefon">
                        </div>
                        <p><strong>Kontakt</strong></p>
                    </div>
                    <div class="one-info-text">
                        <div class="info-text-layout">
                            <p>V případě dotazů nás prosím kontaktuje zde:</p>
                            <div class="info-text-box">
                                <div class="one-info-text-box">
                                    <p>Kontakt na Terku: 
                                        <br><img src="images/icons/button-ico-tel.png" alt=""><a href="tel:+420602699058">602 699 058</a>
                                        <br><img src="images/icons/button-ico-mail.png" alt=""><a href="mailto:terkach23@gmail.com?cc=marek.432@email.cz&subject=Dotaz na svatbu&body=Ahoj%20Terko,%0A">terkach23@gmail.com</a></p>
                                </div>
                                <div class="one-info-text-box">
                                    <p>Kontakt na Marka: 
                                        <br><img src="images/icons/button-ico-tel.png" alt=""><a href="tel:+420604727012">604 727 012</a>
                                        <br><img src="images/icons/button-ico-mail.png" alt=""><a href="mailto:marek.432@email.cz?cc=terkach23@gmail.com&subject=Dotaz na svatbu&body=Ahoj%20Marku,%0A">marek.432@email.cz</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Co nedělat?</h3>

            <div id="info-ban">
                <div class="one-info-empty"></div>
                <div class="one-info-box">
                    <div class="one-info-head">
                        <div>
                            <img src="images/icons/ico-dove.png" alt="Ikona holubice">
                        </div>
                        <p><strong>Házení rýží</strong></p>
                    </div>
                    <p class="one-info-text">Po obřadu po&nbsp;nás prosím neházejte rýži ani&nbsp;jiné obiloviny. Na&nbsp;místě bude k&nbsp;dispozici dostatek materiálu, který&nbsp;po&nbsp;nás budete moci mrsknout pro&nbsp;štěstí.</p>
                </div>
                <div class="one-info-box">
                    <div class="one-info-head">
                        <div>
                            <img src="images/icons/ico-camera-no.png" alt="Ikona zákaz focení">
                        </div>
                        <p><strong>Focení obřadu</strong></p>
                    </div>
                    <p class="one-info-text">Přítomen bude profesionální fotograf, který&nbsp;zaznamená celý obřad i&nbsp;následující okamžiky. Proto prosím odložte svoje telefony a&nbsp;fotoaparáty a užijte si naši chvíli společně s&nbsp;námi. <br><br> </p>
                </div>
                <div class="one-info-empty"></div>
            </div>
            <p id="info-ban-text"><strong>Neunášejte prosím nevěstu!!!!</strong></p>
        </section>

        <!-- druhé listy na pozadí --> 

        <div class="bg-box">
            <div class="bg-box-layout">
                <img src="images/big-spade-right.png" alt="Left Spade" class="bg-image left-b">
                <img src="images/big-spade-left.png" alt="Right Spade" class="bg-image right-b">
            </div>
        </div>

        <!-- Formulář -->

        <section class="gallery" id="formular">
            <div class="row" id="formular-box">
                <h2>Potvrzení účasti</h2>
                <form action="others/mailer.php" method="post" id="formular-layout">
                    
                    <?php
                        if($_GET['success'] == 1){
                        echo "<div class=\"form-result success\">Zprávu jsme obdrželi. Děkujeme&nbsp;Vám.</div>";
                        };

                        if($_GET['success'] == -1){
                        echo "<div class=\"form-result error\">Chyba při&nbsp;odeslání. Zkuste to prosím znova.</div>";
                        };
                    ?>

                    <div class="form-star-box">
                        <input type="text" name="name" id="" value="" placeholder="Jméno a příjmení"><div class="form-star">*</div>
                    </div>
    
                    <div class="form-star-box">
                        <input type="email" name="email" id="form-email" value="" placeholder="E-mail"><div class="form-star">*</div>
                    </div>
    
                    <input type="tel" name="form-phone" id="form-phone" value="" pattern="\d{3} \d{3} \d{3}" maxlength="12" placeholder="Telefonní číslo">

                    <p><span class="form-star-text">* povinné pole</span></p>

                    <hr>

                    <p>Dorazíte?</p>
    
                    <div id="form-partic">
                        <label for="partic-yes">
                            <input type="radio" name="partic" value="ano" id="partic-yes" checked required>Rád dorazím
                        </label>
                        <label for="partic-yes-booth">
                            <input type="radio" name="partic" value="ano, s doprovodem" id="partic-yes-booth" >Dorazím s doprovodem
                        </label>
                        <label for="partic-no">
                            <input type="radio" name="partic" value="ne" id="partic-no" >Je mi líto, nedorazím
                        </label>
                    </div>
                    
                    <hr>

                    <p>Kolik s Vámi přijde dětí?</p>

                    <div id="form-kids-label">
                        <button id="a" type="button" onclick="this.nextElementSibling.stepDown()">-</button>
                        <input type="number" min="0" name="kids" placeholder="0">
                        <button type="button" onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>
    

                    <p>Kolik dětem je?</p>
    
                    <div id="form-kids-num">
                        <label for="kids-3">
                            <input type="checkbox" name="kids-3" id="kids-3">0 - 3 let
                        </label>
                        <label for="kids-6">
                            <input type="checkbox" name="kids-6" id="kids-6">4 - 6 let
                        </label>
                        <label for="kids-10">
                            <input type="checkbox" name="kids-10" id="kids-10">7 - 10 let
                        </label>
                        <label for="kids-more">
                            <input type="checkbox" name="kids-more" id="kids-more">Více let
                        </label>
                    </div>
    
                    <hr>

                    <p>Napište nám prosím!</p>

                    <textarea name="message" id="" rows="5" placeholder="Máte potravinové alergie? Potřebujete poradit s&nbsp;ubytováním nebo s&nbsp;cestou? Máte nějaký dotaz ohledně naší svatby?"></textarea>

                    <hr>
                    
                    <div id="form-submit">
                        <button type="submit">Odeslat</button>

                    </div>
                </form>
            </div>
        </section>

        <!-- Svědci -->

        <section class="row" id="person">
            <h2>Svědci</h2>
            <div id="person-box">
                <div class="one-person">
                    <div class="one-person-photo">
                        <div class="one-person-photo-box">
                            <img src="/images/svedkyne.jpg" alt="">
                        </div>
                    </div>
                    <div class="one-person-text">
                        <p class="one-person-name">MÍRA JÓROVÁ</p>
                        <p class="one-person-info">Svědkyně nevěsty</p>
                        <!-- <p>Telefon??</p> -->
                        <p class="one-person-perex">Terka se zná s&nbsp;Mírou už&nbsp;opravdu dlouho. Je to holka pro každou srandu a&nbsp;pokaždé, když se&nbsp;tyhle dvě sejdou, tak&nbsp;to stojí za&nbsp;to.</p>
                    </div>
                </div>
                <div class="one-person">
                    <div class="one-person-photo">
                        <div class="one-person-photo-box">
                            <img src="/images/svedek.jpg" alt="">
                        </div>
                    </div>
                    <div class="one-person-text">
                        <p class="one-person-name">KAREL HALAMA</p>
                        <p class="one-person-info">Svědek ženicha</p>
                        <!-- <p>Telefon??</p> -->
                        <p class="one-person-perex">Marek s&nbsp;Kájou jsou kamarádi už od&nbsp;základní školy a&nbsp;přesto, že&nbsp;nyní Karel žije ve&nbsp;Švýcarsku, vždy&nbsp;rád přijede zpátky do&nbsp;Čech na&nbsp;pívo a&nbsp;procházku.</p>
                    </div>
                </div>
            </div>

        </section>

        <!-- QR kód fotky -->

        <section class="gallery" id="qr-photo">
            <div class="row" id="qr-photo-layout">
                <div class="ico-box">
                    <div class="ico"><img src="/images/icons/ico-photos.png" alt="Ikona fotky"></div>
                </div>
                <h2>Pošli nám fotky</h2>
                <div id="qr-photo-box">
                    <p>Máte pěkné fotky z&nbsp;naší svatby? Použijte prosím následující QR&nbsp;kód, který&nbsp;Vás přesměruje na&nbsp;sdílené album na&nbsp;Google fotkách, kam&nbsp;můžete své záběry nahrát. My do&nbsp;tohoto alba následně přidáme i&nbsp;fotky od&nbsp;našeho fotografa.</p>
                    <div id="qr-photo-box-img"><a href="https://photos.app.goo.gl/7AbLDjzKJYBCtoN9A">
                        <img src="images/qr-code-photo.jpg" alt="Terka a Marek QR kód na fotky"></a>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>
        
        <!-- fixlé listy na pozadí --> 

        <div class="bg-box-fix">
            <div class="bg-box-layout-fix">
                <img src="images/big-spade-right.png" alt="Left Spade" class="bg-image left-fix">
                <img src="images/big-spade-left.png" alt="Right Spade" class="bg-image right-fix">
            </div>
        </div>

        <!-- footer --> 

        <div id="footer-box">
            <div id="footer-layout">
                <div id="footer-logo">
                    <img src="images/tm-logo-big.png" alt="Logo Terka a Marek velké">
                </div>
                <p>Těšíme se na&nbsp;Vás! </p>

            </div>
        </div>
    </footer>
    <script src="script/script.js"></script>
</body>
</html>