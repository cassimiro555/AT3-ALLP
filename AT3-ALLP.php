<?php
$porta = 1;
$totalPortas = 20;

while ($porta <= $totalPortas) {
    if ($porta % 5 == 0) {
        
        echo "Porta $porta Reservada. <br>";
        $porta++;
        continue;
    }
    if ($porta == 18) {
        echo "Varredura interrompida por segurança na porta 18 <br>";
        break;
    }

    echo "A VERIFICAR PORTA: $porta <br>";
    $porta++;
}

?>
