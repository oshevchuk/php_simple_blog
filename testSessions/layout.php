<div>
    <h2><?= $this->title; ?></h2>
    <form action="index.php" method="post">
        <ul>
            <?php
            foreach ($this->questions as $index => $ask) {
                ?>
                <li>
                    <input type="hidden" name="answer" value="<?=$index;?>"> <?=$ask;?>
                </li>
                <?php
            }
            ?>
        </ul>
        <?=$this->hash; ?>
        <input type="submit" value="Next">
    </form>
</div>