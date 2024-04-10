<?php
    require_once('./assets/server/db_connect.php');
    require_once('./assets/components/include.php');
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Home";
    require_once($preheader);
    ?>
</head>
<body>
    <?php require($header); ?>
    <?php require($frontPageBanner); ?>

    <section id="Information" data-component="information">
        <section class='infobox'>
            <div class='container infoboxContainer'>
                <h2>"Jeg passer godt på mormors stol"</h2>
                <p>
                    Møbelpolstreren med næsten 20 års efering med arbejde i både stof og læder
                    som elsker at give nyt liv til gamle møbler. Så trænger arvestykket til at blive frisket op
                    eller ynglings stolen til en ombetrkning eller er sædet på spisebordsstolene helt flade,
                    så skriv en mail og få et uforpligtende tilbud.
                </p>
            </div>
        </section>

        <section class='halv'>
            <div class='infotext'>
                <h2 style='font-size: 25px;'>Møbel Drømme</h2>
                <p>
                    Går du med en drøm om et møbelt i specielle mål eller design,
                    Så tag en snak med os, så kan vi måske hjælpe. - 
                    Stolen som du kan se på billet til højre har vi bygget efter en kunnes ønske.
                </p>
            </div>
            <div class='infoimage'>
                <img src='assets/images/FirstPersonImage.webp' alt=''>
            </div>
        </section>
    </section>

    <?php require($footer); ?>
</body>
</html>