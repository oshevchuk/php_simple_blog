<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
</head>
<body>

<form action="index.php" method="post">

    <div class="debug">
        <p><b>Debug info:</b></p>
        <p>req1 = <?= $req1; ?></p>
        <p>req2 =<?= $req2; ?> - set req2 <input type="text" name="req2" value="<?= $req1; ?>" readonly></p>

        <p>op1 =<?= $op1; ?></p>
        <p>op2 =<?= $op2; ?> - set op2 <input type="text" name="op2" value="<?= $op1; ?>" readonly></p>
    </div>

    <input type="text" name="req1" id="value" class="val">


    <div class="row">
        <div class="btn">
            <button type="button" value="7" name="value">7</button>
        </div>
        <div class="btn">
            <button type="button" value="8" name="value">8</button>
        </div>
        <div class="btn">
            <button type="button" value="9" name="value">9</button>
        </div>
        <div class="btn green">
            <button type="submit" value="X" name="operator">x</button>
        </div>
    </div>
    <div class="row">
        <div class="btn">
            <button type="button" value="4" name="value">4</button>
        </div>
        <div class="btn">
            <button type="button" value="5" name="value">5</button>
        </div>
        <div class="btn">
            <button type="button" value="6" name="value">6</button>
        </div>
        <div class="btn green">
            <button type="submit" value="-" name="operator">-</button>
        </div>
    </div>
    <div class="row">
        <div class="btn">
            <button type="button" value="1" name="value">1</button>
        </div>
        <div class="btn">
            <button type="button" value="2" name="value">2</button>
        </div>
        <div class="btn">
            <button type="button" value="3" name="value">3</button>
        </div>
        <div class="btn green">
            <button type="submit" value="+" name="operator">+</button>
        </div>
    </div>
    <div class="row">
        <div class="btn">
            <button type="button" value="0" name="value">0</button>
        </div>
        <div class="btn">
            <button type="button" value="." name="value">.</button>
        </div>
        <div class="btn red">
            <button type="submit" value="=" name="operator">=</button>
        </div>
        <div class="btn green">
            <button type="submit" value="/" name="operator">/</button>
        </div>
    </div>

</form>
<!--<h2>--><?//= $ans; ?><!--</h2>-->

<script>
    var value =<?= $ans; ?>;
    var dot = false;
    var operators = '=/+-xX';
    var firstClick = false;
    $(document).ready(function () {
        $('#value').val(value);
    });

    $('button').click(function (e) {
        if (!firstClick) {
            firstClick = true;
            value = 0;
            $('#value').val('');
        }

        var target = $(e.target).attr('value');
        if (value == 0)
            value = '';
        if (operators.indexOf(target) < 0) {
            if (target == '.') {
                if (!dot) {
                    dot = true;
                    if (value.length > 0)
                        value += target;
                    else
                        value += '0' + target;
                }
            } else {
                value += target;
            }
        }

        $('#value').val(value);
        console.log(target);
    });
</script>

</body>
</html>