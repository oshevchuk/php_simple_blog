<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
</head>
<body>
<div class="calculator_body">
    <form action="index.php" method="post">
        h<input type="text" name="hiden"  value="<?= $value;?>">
        p<input type="text" name="prev"  value="<?= $prev;?>">
        o<input type="text" name="op"  value="<?= $op;?>">
        <div class="row display">
            <b><?=$value;?></b>


        </div>
        <div class="row">
            <div class="btn">
                <button value="7" name="value">7</button>
            </div>
            <div class="btn">
                <button  value="8" name="value">8</button>
            </div>
            <div class="btn">
                <button  value="9" name="value">9</button>
            </div>
            <div class="btn green">
                <button type="submit" value="X" name="operator">x</button>
            </div>
        </div>
        <div class="row">
            <div class="btn">
                <button type="submit" value="4" name="value">4</button>
            </div>
            <div class="btn">
                <button type="submit" value="5" name="value">5</button>
            </div>
            <div class="btn">
                <button type="submit" value="6" name="value">6</button>
            </div>
            <div class="btn green">
                <button type="submit" value="-" name="operator">-</button>
            </div>
        </div>
        <div class="row">
            <div class="btn">
                <button type="submit" value="1" name="value">1</button>
            </div>
            <div class="btn">
                <button type="submit" value="2" name="value">2</button>
            </div>
            <div class="btn">
                <button type="submit" value="3" name="value">3</button>
            </div>
            <div class="btn green">
                <button type="submit" value="+" name="operator">+</button>
            </div>
        </div>
        <div class="row">
            <div class="btn">
                <button type="submit" value="0" name="value">0</button>
            </div>
            <div class="btn">
                <button type="submit" value="," name="value">,</button>
            </div>
            <div class="btn red">
                <button type="submit" value="=" name="operator">=</button>
            </div>
            <div class="btn green">
                <button type="submit" value="/" name="operator">/</button>
            </div>
        </div>
    </form>

</div>
<script>

</script>
</body>
</html>