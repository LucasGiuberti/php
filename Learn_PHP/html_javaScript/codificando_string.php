<?php
//Codificando uma string com entidades HTML
$comments = htmlentities($_POST['comments']);
//Agora pode exibir $comments
print $comments;
