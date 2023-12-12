<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice_1</title>
</head>

<body>
    <h1 id="date"></h1>
    <script>
        let date = new Date();
        var dateNow = date.toLocaleString()
        const elem = document.querySelector('#date');
        elem.innerHTML = dateNow;
        console.log(date);
    </script>
</body>

</html>