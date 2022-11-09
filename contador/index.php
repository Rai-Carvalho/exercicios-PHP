<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>Contador</h1>
    <form action="contador.php" method="get">
        Inicio: <input type="number" name="inicio"><br>
        Fim: <input type="number" name="fim"><br>
        Incremento: 
            <select name="inc" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select><br>
        <button type="submit">Contar</button>
    </form>
</body>
</html>