
<div class="question">
    <h2><?= $this->title; ?></h2>

    <?php

    if($this->type==QuestionType::$radio) {
        ?>
        <form action="index.php" method="post">
            <?php
            foreach ($this->questions as $index => $ask) {
                ?>
                <label><input type="radio" name="answer" value="<?= $index; ?>"><?= $ask; ?> </label>
                <br>
                <?php
            }
            ?>
            <input type="hidden" name="hash" value="<?= $this->hash; ?>">
            <input type="hidden" name="type" value="radio">

            <input type="submit" value="Next Question" >
        </form>
        <?php
    }
    ?>


    <?php

    if($this->type==QuestionType::$check) {
        ?>
        <form action="index.php" method="post">
            <?php
            foreach ($this->questions as $index => $ask) {
                ?>
                <label><input type="checkbox" name="answer[]" value="<?= $index; ?>"><?= $ask; ?> </label>
                <br>
                <?php
            }
            ?>
            <input type="hidden" name="hash" value="<?= $this->hash; ?>">
            <input type="hidden" name="type" value="check">

            <input type="submit" value="Next Question">
        </form>
        <?php
    }
    ?>

    <?php

    if($this->type==QuestionType::$text) {
        ?>
        <form action="index.php" method="post">
            <?php
            foreach ($this->questions as $index => $ask) {
                ?>
                <h3><?= $ask; ?> </h3>
                <label><input type="text" name="answer" value="<?= $index; ?>"></label>
                <br>
                <?php
            }
            ?>
            <input type="hidden" name="hash" value="<?= $this->hash; ?>">
            <input type="hidden" name="type" value="text">

            <input type="submit" value="Next Question">
        </form>
        <?php
    }
    ?>

    
</div>