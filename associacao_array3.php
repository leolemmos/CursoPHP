<?php
$ensino = 'EAD';
$formacao = array('PHP' => 'Desenvolvedor PHP', 'Infra' => 'SysAdmin Linux');

// Não concatenadas
echo "<p>No $ensino da DevMedia você se torna {$formacao['PHP']}";
echo " e pode se tornar também {$formacao['Infra']}.</p>";

// Concatenadas
echo '<p>No ' . $ensino . ' da DevMedia você se torna ' . $formacao['PHP'];
echo ' e pode se tornar também '. $formacao['Infra'] . '.</p>';
?>
