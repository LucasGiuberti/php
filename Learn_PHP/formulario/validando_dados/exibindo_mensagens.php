<?php
//Exibindo mensagens de erro com o formulário

//Lógica para a execução da ação correta de acordo com o método solicitado
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Se validate_form() returna erros, eles serão passados para show_form()
    if ($form_errors = validate_form()){
        show_form($form_errors);
    }else{
        process_form();
    }
}else{

    show_form();
}
//Faz algo quando o formulário é enviado
function process_form(){
    print "Hello, ".$_POST['my_name'];
}
//Exibe o formulário
function show_form($errors = ''){
    //Se algum erro sido passado, ele será exibido
    if($errors){
        print 'Please correct these errors: <ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }
    print <<<_HTML_
    <form method="POST"
    action="$_SERVER[PHP_SELF]">
    Your name: <input type="text" name="my_name">
    <br/>
    <input type="submit" value"Say Hello">
    </form>
    _HTML_;
}
//Verifica os dados do formulário
function validate_form()
{
    //Começa com um array de mensagens de erro vazio
    $errors = array();
    //Adiciona uma mensagem de erro se o nome for muito curto
    if(strlen($_POST['my_name']) < 3){
        $errors[] = 'Your name must be at least 3 letters long';

    }
    //Retorna o (possivelmente vazio) array de mensagens de erro
    return $errors;
}