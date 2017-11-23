<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
</head>
<body>

<form action="index.php">
    <input type="text" id="value">
    <button type="button" value="1">1</button>
    <button type="button" value="2">2</button>
</form>

<script>
    $('button').click(function (e) {
        console.log($(e.target).attr('value'));
    });
</script>
</body>
</html>