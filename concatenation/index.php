<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Concaténation</h1>
        
        <h2>Exercice 1</h2>
        <?php  
            $a = "bonjour";
            echo "<p>Variable \$a: $a"
        ?>

        <h2>Exercice 2</h2>
        <?php  
            $a = "bon";
            $b = "jour";
            $c = 10;

            $d = "$a$b ".$c+1;
            echo $d
        ?>

        <h3>Exercice 3</h3>
        <?php  
            $a = "bonjour";

            echo '<p>'.$a.' l\'adrar</p>';
        ?>
    </body>
</html>