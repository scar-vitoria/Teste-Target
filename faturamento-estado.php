<?php
$faturamento = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53
];

$valorTotal = array_sum($faturamento);

echo "Percentual de representação por estado:\n";

foreach ($faturamento as $estado => $valor) {
    $percentual = ($valor / $valorTotal) * 100;
    echo "$estado: " . number_format($percentual, 2, ',', '.') . "%\n";
}
?>