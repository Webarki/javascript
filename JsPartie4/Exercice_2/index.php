<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice_2</title>
</head>

<body>
    <p id="txt"></p>
    <script>
        document.addEventListener('keydown', function(e) {
            var touch = event.keyCode;
            console.log(touch);
            var key = String.fromCharCode(touch);
            var txt = document.getElementById('txt').innerHTML = key;
        });
    </script>
</body>

</html>