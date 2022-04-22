<?php
//Remove HTML dos comentários
$comments = strip_tags($_POST['comments']);
//Agora pode exibir $comments
print $comments;
