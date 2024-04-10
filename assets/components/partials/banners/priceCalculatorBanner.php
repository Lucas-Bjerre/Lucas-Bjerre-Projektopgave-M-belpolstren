<?php
    $priceCalculatorPage = mysqli_query($db, "SELECT `header_title`, `header_description` FROM `priceCalculatorPage`") -> fetch_assoc();
?>

<section class="short-banner">
    <div class='short-banner-content'>
        <h2><?php echo $priceCalculatorPage["header_title"] ?></h2>
        <h3>
            <?php echo $priceCalculatorPage["header_description"] ?>
        </h3>
    </div>
</section>