<?php
    require_once('./assets/server/db_connect.php');
    require_once('./assets/components/include.php');
    session_start();

    $products = mysqli_query($db, "SELECT  * FROM `products` ORDER BY `id` ASC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "priceCalculator";
    require_once($preheader);
    ?>
</head>
<body>
    <?php require($header); ?>
    <?php require($priceCalculatorBanner); ?>

    <!-- <section id="calculator">
        <div class="calculatorForm">
            <form id="priceCalculator">
                <select id="primaryOption" onchange="showProductInfo()">
                    <option value="">Stol/sofa navn</option>
                    <?php foreach ($products as $product) { ?>
                        <option value='option<? $product["id"] ?>'><? $product["title"] ?></option>
                    <?php } ?>
                </select>
                <br>
                <div id="productInfo">
                    <?php foreach ($products as $product) { ?>
                        <img id="productImage" src='<? $product["image"] ?>' alt="Product Image" width="250">
                        <p id="productDescription"><? $product["description"] ?></p>
                    <?php } ?>
                </div>
                <br>
                <select id="highLowOption">
                    <option value="">Stolen/sofaens kvalitet</option>
                    <option value="high">God Stand</option>
                    <option value="low">Dårlig Stand</option>
                </select>
                <br>
                <button type="button" onclick="calculatePrice()" class="priceCalculatorBtn">Beregn Pris</button>
            </form>
            <div class="result" id="priceResult"></div>
        </div>
    </section> -->


    <section id="calculator">
        <div class="calculatorForm">
            <form id="priceCalculator">
                <select id="primaryOption" onchange="showProductInfo()">
                    <option value="">Stol/sofa navn</option>
                    <option value="option1">Hans J Wenger Bamsestol</option>
                    <option value="option2">Hans J Wegner Designet Ox Chair</option>
                    <option value="option3">Wing Chair</option>
                    <option value="option4">Hans J Wegner CH24 Y</option>
                    <option value="option5">Ægget</option>
                    <option value="option6">Svanen</option>
                    <option value="option7">Den Klassiske Syver Stol</option>
                    <option value="option8">Dråben</option>
                    <option value="option9">Pelikan stolen M Knapper</option>
                    <option value="option10">Finn Juhl Poet Sofa</option>
                    <option value="option11">Børge Mogensens Beroemte Stol</option>
                    <option value="option12">Børge Mogensens No 1 2 pers</option>
                    <option value="option13">Børge Mogensens No 1 3 pers</option>
                </select>
                <br>
                <div id="productInfo">
                    <img id="productImage" src="" alt="Product Image" width="250">
                    <p id="productDescription"></p>
                </div>
                <br>
                <select id="highLowOption">
                    <option value="">Stolen/sofaens kvalitet</option>
                    <option value="high">God Stand</option>
                    <option value="low">Dårlig Stand</option>
                </select>
                <br>
                <button type="button" onclick="calculatePrice()" class="priceCalculatorBtn">Beregn Pris</button>
            </form>
            <div class="result" id="priceResult"></div>
        </div>
    </section>

    <script>
        function showProductInfo() {
            var primaryOption = document.getElementById("primaryOption").value;
            var productInfoDiv = document.getElementById("productInfo");
            var productImage = document.getElementById("productImage");
            var productDescription = document.getElementById("productDescription");

            if (primaryOption === "option1") {
                productImage.src = "assets/images/Hans-J-Wegner-Bamsestol.webp";
                productDescription.textContent = "Hans J Wegner Bamsestol fra år 1951.";
            } else if (primaryOption === "option2") {
                productImage.src = "assets/images/Hans-J-Wegner-Designet-Ox-Chair-Stolen.webp";
                productDescription.textContent = "Hans J Wegner designet Ox Chair Stolen For Erik Jørgensen i 1960.";
            } else if (primaryOption === "option3") {
                productImage.src = "assets/images/Wing-Chair.webp";
                productDescription.textContent = "Wing Chair er designet i 1060. Den blev dengang kun fremstillet i ganske få eksemplarer, og kom således først i egentlig produktion da Carl Hansen & Sen relancerde den i 2006. CH445 Wing Chair fæs med den matchende Ch446 fodskammel for ekstra komfort.";
            } else if (primaryOption === "option4") {
                productImage.src = "assets/images/Hans-J-Wegner-CH24-Y-Stolen.webp";
                productDescription.textContent = "Hans nok mest berømte stol, CH24 Y-stolen, tegnede han i 1949 for Carl Hansen & Søn, og stolen har været i uafbrudt produktion siden 1950. Wegner var drevet af visionen om at skabe den ultimative stol.";
            } else if (primaryOption === "option5") {
                productImage.src = "assets/images/Aegget.webp";
                productDescription.textContent = "Ægget er en stol designet af Arne Jacobsen. Den blev først produceret i 1958 for Royal Hotel i København og fremstilles af Fritz Hansen A/S. Ægget.";
            } else if (primaryOption === "option6") {
                productImage.src = "assets/images/Svanen.webp";
                productDescription.textContent = "Svanen er designet af Arne Jacobsen i 1958. Svanen blev oprindligt designet til lobbyen og loungeområderne ved Royal Hotel i København. Opgaven gav Arne Jacobsen mulighed for at virkeliggære sine idéer om integreret design og arkitektur.";
            } else if (primaryOption === "option7") { 
                productImage.src = "assets/images/Den-Klassiske-Syver-Stol.webp";
                productDescription.textContent = "Den Klassiske Syver stol - også kaldet 3107, Syveren eller 7'er stolen - er designet af Arne Jacobsen for Fritz Hansen. Den blev sat i produktion tilabeg i 1955 og er sidenhen blevet den mest solgte stol - ikke blot i Fritz Hansens historie, men måske endda i hele møbelhistorien.";
            } else if (primaryOption === "option8") {
                productImage.src = "assets/images/Draaben.webp";
                productDescription.textContent = "Arne Jacobsen designede Dårben som en del af det omfattende gesamtkunstwerk, han realiserede på SAS Royal Hotel i 1960.";
            } else if (primaryOption === "option9") {
                productImage.src = "assets/images/Pelikan-Stolen-M-Knapper.webp";
                productDescription.textContent = "Pelikan stolen m. knapper. Model FJ4001 Stolen, der blev lanceret i 1940, var oprindeligt ikke populær, men blev efter relancering i 2001 til moderne klassiker.";
            } else if (primaryOption === "option10") { 
                productImage.src = "assets/images/Poet-Sofa.webp";
                productDescription.textContent = "Poet Sofa blev designet af Finn Juhl i 1941, men fik først sit navn i 1959, da den optrådte i den populære tegneseriestribe i Politiken, 'Poeten og Lillemor'.";
            } else if (primaryOption === "option11") {
                productImage.src = "assets/images/Boerge-Mogensens-Beroemte-Stol.webp";
                productDescription.textContent = "Børge Mogensens berømte Sol J39 er kendt for sin alsidighed, sit klare formsporg, og, ikke mindst, sin uforlignelige holdbarhed gennem generationer. Et ægte tidløst design, der har været i kontinuerlig produktion siden lanceringen i 1947.";
            } else if (primaryOption === "option12") {
                productImage.src = "assets/images/Boerge-Mogensens-No-1.webp";
                productDescription.textContent = "No.1 Sofa, 2 pers. - Børge Mogensen, Frederocoa Furnitue Info. 'No 1' sofaen er designet i 1955, og er det første møbel, som Børge Mogensen tegnede specielt til Fredericia Furniture - heraf navnet.";
            } else if (primaryOption === "option13") {
                productImage.src = "assets/images/Boerge-Mogensen-No-1-3-Pers.webp";
                productDescription.textContent = "No.1 Sofa, 3 pers. - Børge Mogensen, Frederocoa Furnitue. 'No 1' sofaen er designet i 1955, og er det første møbel, som Børge Mogensen tegnede specielt til Fredericia Furniture - heraf navnet.";
            }

            productInfoDiv.style = "display:flex; justify-content: center; align-items: center; flex-direction: column;";
        }

        function calculatePrice() {
            var highLowOption = document.getElementById("highLowOption").value;

            var price = 0;
            var primaryOption = document.getElementById("primaryOption").value;
            if (primaryOption === "option1") {
                if (highLowOption === "high") {
                    price = 30000;
                } else if (highLowOption === "low") {
                    price = 20000;
                }
            } else if (primaryOption === "option2") {
                if (highLowOption === "high") {
                    price = 30000;
                } else if (highLowOption === "low") {
                    price = 25000;
                }
            } else if (primaryOption === "option3") {
                if (highLowOption === "high") {
                    price = 15000;
                } else if (highLowOption === "low") {
                    price = 10000;
                }
            } else if (primaryOption === "option4") {
                if (highLowOption === "high") {
                    price = 20000;
                } else if (highLowOption === "low") {
                    price = 10000;
                }
            } else if (primaryOption === "option5") {
                if (highLowOption === "high") {
                    price = 15000;
                } else if (highLowOption === "low") {
                    price = 10000;
                }
            } else if (primaryOption === "option6") {
                if (highLowOption === "high") {
                    price = 15000;
                } else if (highLowOption === "low") {
                    price = 10000;
                }
            } else if (primaryOption === "option7") {
                if (highLowOption === "high") {
                    price = 1500;
                } else if (highLowOption === "low") {
                    price = 800;
                }
            } else if (primaryOption === "option8") {
                if (highLowOption === "high") {
                    price = 1200;
                } else if (highLowOption === "low") {
                    price = 800;
                }
            } else if (primaryOption === "option9") {
                if (highLowOption === "high") {
                    price = 15000;
                } else if (highLowOption === "low") {
                    price = 10000;
                }
            } else if (primaryOption === "option10") {
                if (highLowOption === "high") {
                    price = 18000;
                } else if (highLowOption === "low") {
                    price = 15000;
                }
            } else if (primaryOption === "option11") {
                if (highLowOption === "high") {
                    price = 1500;
                } else if (highLowOption === "low") {
                    price = 800;
                }
            } else if (primaryOption === "option12") {
                if (highLowOption === "high") {
                    price = 10000;
                } else if (highLowOption === "low") {
                    price = 8000;
                }
            } else if (primaryOption === "option13") {
                if (highLowOption === "high") {
                    price = 15000;
                } else if (highLowOption === "low") {
                    price = 8000;
                }
            }

            document.getElementById("priceResult").innerHTML = "På grund af den valgte stol plus den valgte kvalitet er stolen: " + price +" kr værd. Hvis at du gerne vil sægle den kan du skrive en mail til os.";
        }
    </script>

    <?php require($footer); ?>
</body>
</html>