<?php
    require_once('./assets/server/db_connect.php');
    require_once('./assets/components/include.php');
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "beforeAfterImage";
    require_once($preheader);
    ?>
</head>
<body>
    <?php require($header); ?>
    <?php require($beforeAfterImageBanner); ?>

    <section class="products" data-component="products">
        <div class='productsContainer'>
            <div class='product product1'>
                <h2 class='ItemTitle'>Bauhaus stil frisvingerstol, 1920'erne</h2>
                <div class='beforeItem beforeItem1'>
                    <div class='productImageContainer productImageContainerBefore1'>
                        <img src='assets/images/FirstBeforeImage.webp' class='productsImage'>
                    </div>
                    <p>Da vi fik stolen</p>
                </div>
                <div class='afterItem afterItem1'>
                    <div class='productImageContainer productImageContainerAfter1'>
                        <img src='assets/images/FirstAfterImage.webp' alt='' class='productsImage'>
                    </div>
                    <p>Efter vi har lavet den</p>
                </div>
            </div>
            <div class='product product2'>
                <h2 class='ItemTitle'>Hans J. Wegner stol model GE163A</h2>
                <div class='beforeItem beforeItem2'>
                    <div class='productImageContainer productImageContainerBefore2'>
                        <img src='assets/images/SecondBeforeImage.webp' alt='' class='productsImage'>
                    </div>
                    <p>Da vi fik stolen</p>
                </div>
                <div class='afterItem afterItem2'>
                    <div class='productImageContainer productImageContainerAfter2'>
                        <img src='assets/images/SecondAfterImage.webp' alt='' class='productsImage'>
                    </div>
                    <p>Efter vi har lavet den</p>
                </div>
            </div>
            <div class='product product3'>
                <h2 class='ItemTitle'>Spisebordsstol</h2>        
                <div class='beforeItem beforeItem3'>
                    <div class='productImageContainer productImageContainerBefore3'>
                        <img src='assets/images/ThirdBeforeImage.webp' alt='' class='productsImage'>
                    </div>
                    <p>Da vi fik stolen</p>
                </div>
                <div class='afterItem afterItem3'>
                    <div class='productImageContainer productImageContainerAfter3'>
                        <img src='assets/images/ThirdAfterImage.webp' alt='' class='productsImage'>
                    </div>
                    <p>Efter vi har lavet den</p>
                </div>        
            </div>
        </div>
    </section>

    <?php require($footer); ?>
</body>
</html>