<?php require('views/partials/header.php')?>

    <ul>
        <?php 
        foreach ($posts as $post) {
        ?>  
            <li><?= $post->content;?></li>
        <?php 
        }
        ?>
    </ul>
    <?php require('views/partials/footer.php')?>