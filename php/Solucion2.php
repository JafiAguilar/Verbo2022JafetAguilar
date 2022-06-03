<html>
</body>
<img src="https://www.recursospython.com/wp-content/uploads/2014/02/triangle.png" align="center">
<?php
$catetoa = $_GET["catetoa"];
$catetob = $_GET["catetob"]; 
$catetoc = sqrt(pow($catetoa,2) + pow($catetob,2));
echo "La Hipotenusa es: " . $catetoc;
 
?>
</body>
</html>