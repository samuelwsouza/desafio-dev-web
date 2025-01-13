<?php
$routes = [
  'home' => 'views/home.php',
  'cadastro' => 'views/cadastro.php',
  'listagem' => 'views/listagem.php',
  'editar' => 'actions/editar.php',
  'excluir' => 'actions/excluir.php',
  'processa_cadastro' => 'actions/processa_cadastro.php',
];

$request = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';

if (array_key_exists($request, $routes)) {
  require $routes[$request];
} else {
  http_response_code(404);
  echo "<h1>Página não encontrada</h1>";
}
