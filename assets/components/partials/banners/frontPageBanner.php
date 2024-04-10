<?php
    $frontpageData = mysqli_query($db, "SELECT `header_title`, `header_description` FROM `frontpage`") -> fetch_assoc();
?>

<section class="banner">
    <div class='banner-content'>
        <h2><?php echo $frontpageData["header_title"] ?></h2>
        <h3>
            <?php echo $frontpageData["header_description"] ?>
        </h3>
    </div>
</section>