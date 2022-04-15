<?php
//definindo um cookie
setcookie('userid','ralph');
//Exibindo o valor de um cookie
print'Hello','.$COOKIE['userid']';
// Definindo o caminho do cookie
setcookie('short-userid','ralph',0,'/')
//Configurando o caminho do cookie com um diretório específico
setcookie('short-userid','ralph',0,'/~alice/');
