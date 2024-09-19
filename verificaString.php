<?php

function verificaLetraA($string) {
  // Converte a string para minúsculas
  $string = strtolower($string);

  // Verifica se a letra 'a' está presente na string
  $temA = strpos($string, 'a') !== false;

  // Conta as ocorrências da letra 'a'
  $quantidadeA = substr_count($string, 'a');

  return array($temA, $quantidadeA);
}

// Verifica se a string foi enviada via formulário
if (isset($_POST['string'])) {
  $texto = $_POST['string'];

  // Chama a função para verificar a string
  list($temA, $quantidadeA) = verificaLetraA($texto);

  // Imprime o resultado
  if ($temA) {
    echo "A letra 'a' está presente na string.\n";
    echo "A letra 'a' aparece $quantidadeA vezes na string.\n";
  } else {
    echo "A letra 'a' não está presente na string.\n";
  }
} else {
  // Exibe o formulário para o usuário inserir a string
  ?>
  <form method="post">
    Digite uma string: <input type="text" name="string">
    <button type="submit">Verificar</button>
  </form>
  <?php
}

?>