<?php $title = 'List of posts' ?>

<?php ob_start() ?>

<h1>List of posts</h1>

<ul>
    <?php foreach($posts as $post): ?>
    <li>
        <a href="/show.php?id=<?= $post['id'] ?>">
            <?= $post['title'] ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>

<?php $content = ob_get_clean() ?>

<?php include('layout.php') ?>