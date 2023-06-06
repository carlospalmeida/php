<?php

if (isset($_GET['calcular'])) {
    if (!empty($_GET['numx']) and !empty($_GET['numy'])) {
        $x = $_GET['numx'];
        $y = $_GET['numy'];

        $result = $x + $y;

        echo "Resultado = $result";
    } else {
        echo "<script>alert('Preencha todos os campos')</script>";
        echo "";
    }
}

echo $_GET['nome'];