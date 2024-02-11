<?php ob_start() ?>
    <h1><?= $post['title'] ?></h1>

    <div class="date"></div>
    <div class="body">
        <?= $post['body'] ?>
    </div>
<?php $content = ob_get_clean() ?>

<?php include('layout.php') ?>