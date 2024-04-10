<?php
    $beforeAfterImageBanner = mysqli_query($db, "SELECT `header_title`, `header_description` FROM `beforeAfterImageBanner`") -> fetch_assoc();
?>

<section class="banner">
    <div class='banner-content'>
        <h2><?php echo $beforeAfterImageBanner["header_title"] ?></h2>
        <h3>
            <?php echo $beforeAfterImageBanner["header_description"] ?>
        </h3>
    </div>
</section>