<html>
    <body>
        <?php
        $numero = $_GET['num'];
$numero;
if($numero > 0){
    echo "El número es positivo.";
}
else if ($numero < 0){
    echo "El número es negativo.";
}
else{
    echo "El número es cero.";
}
        ?>
    </body>    
</html>