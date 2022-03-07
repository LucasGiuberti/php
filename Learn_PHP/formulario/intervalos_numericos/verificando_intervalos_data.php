<?php
// Cria um objeto DateTime para seis meses atrás
$range_start = new DateTime('6 months ago');
// Cria um objeto DateTime para o momento presente
$range_end = new DateTime();

// Há um ano de 4 dígitos em $_POST['year']
// Há um mês de 2 dígitos em $_POST['month']
// Há um dia de 2 dígitos em $_POST['day']
$input['year'] = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT, array('options' => array('min_range' => 1900, 'max_range' => 2100)));
$input ['month'] = filter_input(INPUT_POST, 'month', FILTER_VALIDATE_INT, array('option' => array('min_rage' => 1, 'max_rage' => 12)));
$input['day'] = filter_input(INPUT_POST, 'day', FILTER_VALIDATE_INT, array('option' => array('min_range' => 1, 'max_range' => 31)));
//Não é preciso usar === para fazer a comparação com falso já que 0 não é uma opção
//Válida para o ano, o mês ou dia, checkdate() assegura que
//o número de dias seja válido para o mês e o ano fornecidos
if ($input['year']&& $input['month']&& $input['day'] && checkdate($input['month'], $input['day'], $input['year'])) {
    $submitted_date = new
    DateTime(strtotime($input['year'].'-'.$input['month'].'-'.$input['day']));
    if (($range_start > $submitted_date) || ($range_end < $submitted_date)) {
        $errors[] = 'Please choose a date less than six months old.';
    }
}else{
    //Isso ocorrerá se alguém omitir um dos parâmetros do formulário ou enviar
    //algo como 31 de fevereiro
    $errors[] = 'Please enter a valid date.';
}