<?php require('views/partials/header.php');?>

    <ul>
        <?php 
        foreach ($posts as $post) {
        ?>  
            <li><?= $post->content;?></li>
        <?php 
        }
        ?>
    </ul>
    <!-- <form action="/names" method="POST">
        <input type="text" name="name" id="">
        <button type="submit">submit</button>
    </form> -->
    <form action="/postCreate" method="POST">
        <input type="text" name="title">
        <input type="text" name="content">
        <button type="submit">create</button>
    </form>
    <?php require('views/partials/footer.php')?>