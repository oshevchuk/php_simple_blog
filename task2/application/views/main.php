<h1>Main Page</h1>
<p>this is a main page</p>
<hr>

<?php
if(isset($data)) {
    foreach ($data as $post) {
        ?>
        <h3>
            <?= $post['title']; ?>
        </h3>
        <p>
            <?= substr($post['text'], 0, 40); ?>..
        </p>
        <a href="post/<?= $post['id']; ?>">read more</a>
        <hr>
        <?php
    }
}
?>

<a href="newpost">new post</a>