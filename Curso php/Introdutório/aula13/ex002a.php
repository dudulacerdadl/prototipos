<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/estilo.css">
    <title>Exercício 02</title>
</head>
<body>
    <div>
        <form action="ex002b.php" method="get">
            Tabuáda Desejada:
            <select name="numtab">
                <?php
                for ($i = 1; $i <= 10; $i++){
                    print "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <input type="submit" value="Mostrar">
        </form>
    </div>
</body>
</html>