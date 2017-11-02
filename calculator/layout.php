<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="calculator_body">
    <form action="index.php" method="post">
        <div class="row display">
            <b>0</b>
            <input type="hidden" name="hiden" hidden value="<?= $value;?>">
        </div>
        <div class="row">
            <div class="btn">
                <button type="submit" value="7" name="value">7</button>
            </div>
            <div class="btn">
                <button type="submit" value="8" name="value">8</button>
            </div>
            <div class="btn">
                <button type="submit" value="9" name="value">9</button>
            </div>
            <div class="btn green">
                <button type="submit" value="X" name="value">x</button>
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
                <button type="submit" value="-" name="value">-</button>
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
                <button type="submit" value="+" name="value">+</button>
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
                <button type="submit" value="=" name="value">=</button>
            </div>
            <div class="btn green">
                <button type="submit" value="/" name="value">/</button>
            </div>
        </div>
    </form>

</div>
</body>
</html>