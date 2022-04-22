<?php
//Modificando erros e dados de entrada modificados

//Lógica para a execução da ação correta de acordo com o método solicitado
if($_SERVER['REQUEST_METHOD']=='POST'){
    // Se validate_from() retornar erros, passa-os para show_form()
    list($form_errors, $input) = validate_form();
    if($form_erros){
        show_form($form_errors);
    }else{
        process_form($input);
    }
}else{
    show_form();
}