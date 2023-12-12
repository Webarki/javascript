<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceJs</title>
</head>

<body>
    <button id="btnDown">-</button> <span id="counter">0</span> <button id="btnUp">+</button>
    <script>
        var counter = document.getElementById("counter");
        var btn = document.getElementById("btnDown");
        var btnMore = document.getElementById("btnUp");
        var count = 0;

        function up() {
            count++;
            counter.textContent = count;
        }

        function down() {
            count--;
            counter.textContent = count;
        }

        document.getElementById("btnUp").addEventListener("click", up);

        document.getElementById("btnDown").addEventListener("click", down);
    </script>
</body>

</html>