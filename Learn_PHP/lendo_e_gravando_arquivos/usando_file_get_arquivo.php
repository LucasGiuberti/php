<?php
// Carrega o arquivo de template do exemplo anterior
$page = file_get_contents('page-template.html');
// Insere o título da página
$page = str_replace('{page_title}', 'Welcome, $page');
//Torna a página auzl à tarde e verde de manhã
if(date('H'>= 12)){
  $page = str_replace('{color}', 'blue', $page);
}else{
  $page = str_replace('{color}','green', $page);
}
// Obtém o nome de usuário em uma variável de sessão salva anteriormente
$page = str_replace('{name}', $_SESSION['username'], $page);
//Exibe os resultados
print $page;
