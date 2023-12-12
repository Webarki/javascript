<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice_3</title>
</head>

<body>
    <button class="btn">voir</button>
    <p id="txt"></p>
    <script>
        const btn = document.querySelector('.btn');

        function showType(e) {
            console.log(e);
            alert(e.type)
        }

        btn.addEventListener("click", showType);
    </script>
</body>

</html>