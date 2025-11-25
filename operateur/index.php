<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Operateur</h1>
        <h2>Exercice 1</h2>
        <?php 
            $a = 12;
            $b = 10;
            $total = $a+$b;

            echo "<p>Le total de l'addition $a + $b est $total</p>"
        ?>

        <h2>Exercice 2</h2>
        <?php 
            $a = 5;
            $b = 3;
            $c = $a + $b;

            echo "<p>Variable a: $a</p>";
            echo "<p>Variable b: $b</p>";
            echo "<p>Variable c: $c</p>";

            $a = 2;
            echo "<p>Variable a: $a</p>";

            $c = $b - $a;
            echo "<p>Variable a: $a</p>";
            echo "<p>Variable b: $b</p>";
            echo "<p>Variable c: $c</p>";
        ?>

        <h2>Exercice 3</h2>
        <?php 
            $a = 15;
            $b = 23;

            echo "<p>Variable a: $a</p>";
            echo "<p>Variable b: $b</p>";

            $c = $b;
            $b = $a;
            $a = $c;

            echo "<p>Variable a: $a</p>";
            echo "<p>Variable b: $b</p>";
        ?>

        <h2>Exercice 4</h2>
        <?php
            $article = "Casque audio";
            $ht = 120;
            $quantiter = 3;
            $tva = 1.20;

            echo "<h3>$article</h3>";
            echo "<p>Prix HT: $ht</p>";
            echo "<p>Quantiter: $quantiter</p>";
            echo "<p>Taux de TVA: $tva</p>";

            $totalht = $ht * $quantiter;
            $totalttc = $totalht * $tva;

            echo "<p>Prix TTC: $totalttc €</p>"
        ?>
    </body>
</html>