<?php

function pertenceFibonacci($numero) {
  // Caso base: 0 e 1 pertencem à sequência de Fibonacci
  if ($numero == 0 || $numero == 1) {
    return true;
  }

  // Inicializa os dois primeiros números da sequência
  $a = 0;
  $b = 1;

  // Calcula os próximos números da sequência até que o número fornecido seja atingido ou excedido
  while ($b < $numero) {
    $temp = $b;
    $b = $a + $b;
    $a = $temp;
  }

  // Verifica se o número fornecido é igual ao último número calculado
  return $b == $numero;
}

// Verifica se o número foi enviado via formulário
if (isset($_POST['numero'])) {
  $numero = $_POST['numero'];

  // Chama a função para verificar se o número pertence à sequência de Fibonacci
  if (pertenceFibonacci($numero)) {
    echo "O número $numero pertence à sequência de Fibonacci.\n";
  } else {
    echo "O número $numero não pertence à sequência de Fibonacci.\n";
  }
} else {
  // Exibe o formulário para o usuário inserir o número
  ?>
  <form method="post">
    Digite um número: <input type="number" name="numero">
    <button type="submit">Verificar</button>
  </form>
  <?php
}

?>