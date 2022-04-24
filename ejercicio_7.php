<?php
    if($_POST) {
        $valorA=$_POST['ValorA'];
        $valorB=$_POST['ValorB'];

        $suma=$valorA + $valorB;
        echo $valorA." + ".$valorB." = ".$suma;
        echo "<br/>";
        $resta=$valorA - $valorB;
        echo $valorA." - ".$valorB." = ".$resta;
        echo "<br/>";
        $multiplicacion=$valorA * $valorB;
        echo $valorA." * ".$valorB." = ".$multiplicacion;
        echo "<br/>";
        $division=$valorA / $valorB;
        echo $valorA." / ".$valorB." = ".$division;    
    } else {
        print_r("Ingrese dos numeros para realizar operaciones");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio_7.php" method="post">
        Valor A: <input type="text" name="ValorA" id="">
        <br/>        
        Valor B: <input type="text" name="ValorB" id="">
        <br/>               
        <input type="submit" value="Calcular">       

    </form>
</body>
</html>