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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>

        <?php
        
        echo "Digite o tempo em segundos: ";
        $segundos = readline();
        
        $horas = floor($segundos / 3600);
        
        $resto = $segundos % 3600;
        
        $minutos = floor($resto / 60);
        
        $seg = $resto % 60;
        
        echo "Horas: " . $horas . "\n";
        echo "Minutos: " . $minutos . "\n";
        echo "Segundos: " . $seg . "\n";
        
        ?>
     
    </main>
</body>


</html>
