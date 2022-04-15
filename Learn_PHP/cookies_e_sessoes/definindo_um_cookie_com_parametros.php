<?php
//definindo um cookie com parâmentros de segurança
// Um valor null para o domínio e o caminho informa ao PHP para não inserir nenhum
// domínio ou caminho no cookie
setcookie('short-userid', 'ralph',0,null,null,true,true)
//excluindo um cookie
stcookie('short-userid', '')
