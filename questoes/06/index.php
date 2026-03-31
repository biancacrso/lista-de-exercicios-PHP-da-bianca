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
        <h2>Questão 06: Ordem Decrescente</h2>
    </header>

    <main>

        <?php
        
        echo "Digite o primeiro número: ";
        $n1 = readline();
        
        echo "Digite o segundo número: ";
        $n2 = readline();
        
        echo "Digite o terceiro número: ";
        $n3 = readline();
        
        $numeros = array($n1, $n2, $n3);
        
        rsort($numeros);
        
        echo "Números em ordem decrescente:\n";
        
        foreach ($numeros as $n) {
            echo $n . "\n";
        }
        
        ?>
     
    </main>
</body>


</html>
