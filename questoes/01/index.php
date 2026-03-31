<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 1: Antecessor de um Valor</h2>
    </header>

    <main>

        <?php
        
        echo "Digite um número: ";
        $numero = readline();
        
        $antecessor = $numero - 1;
        
        echo "O antecessor é: " . $antecessor;
        
        ?>

    </main>
</body>


</html>
