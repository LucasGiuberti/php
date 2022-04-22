<?php
// Verificando um elemento obrigatório

if (strlen($_POST['email']) == 0) {
    $erros[] = "You must enter an email address";
}
