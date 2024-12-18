<html>
    <head>
    <title>Provafinalphp</title>
    </head>
        <body>
        <?php 
echo "Digite o raio do circulo:";
$raio = trim(fgets(STDIM));
$perimetro = 2 * M_PI * $raio;
$area = M_PL * pow($raio, 2);
echo "O perímetro do círculo é:" . $perimetro . "\n";
echo "A área do circulo é:" . $area . "\n";
?>

<form action='home.php' method="get">
  Nota 1: <input type="text" name="num1"><br>
  Nota 2: <input type="text" name="num2"><br>
  Nota 3: <input type="text" name="num3"><br>
  <input type="submit">
 </form>
 
 <?php 
  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];
  $num3 = $_GET['num3'];
  
  $media = ($num1 + $num2 + $num3)/3;
  
  echo "Média: $media";
 ?>


<form action='home.php' method="get">
Temperatura em Celsius: <input type="text" name="C"><br>
<input type="submit">
</form>

<?php 
$C = $_GET['C'];
$F = (9/5)*$C + 32;  
  
echo "Em Farenheit: $F <br /><br />";
?> 

</body>
</html>

