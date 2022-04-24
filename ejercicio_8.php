<?php
    if($_POST) {
        $valorA=$_POST['ValorA'];
        $valorB=$_POST['ValorB'];
        if ($valorA > $valorB) {
            echo "El ".$valorA." es mayor que ".$valorB; 
        } else if ($valorA > $valorB) {
            echo "El ".$valorB." es mayor que ".$valorA; 
        } else {
            echo "El ".$valorB." es igual que ".$valorA; 
        }

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
    <form action="ejercicio_8.php" method="post">
        Valor A: <input type="text" name="ValorA" id="">
        <br/>        
        Valor B: <input type="text" name="ValorB" id="">
        <br/>               
        <input type="submit" value="Calcular">       

    </form>
</body>
</html>