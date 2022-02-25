<?php
//Lógica para a execução da ação correta de acordo com
// o método solicitado
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    process_form();
} else {
    show_form();
}
//Faz algo quando o formulário é enviado
function process_form(){
    print "Hello, ".$_POST['my_name'];
}
//Exibe o formulário
function show_form(){
    print <<<_HTML_
    <form method="POST"
    action="$_SERVER[PHP_SELF]">
    Your name:<input type="text" name="my_name">
    <br/>
    <input type="submit" value="Say Hello">
    </form>
    _HTML_;
}
