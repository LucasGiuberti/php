<?php
// Carrega a classe auxiliar do formulário
require'FormHelper.php';
// Conecta-se com o banco de dados
try{
  $db = new PDO("sqlite:/tmp/restaurant.db");
}catch (PDOException $e){
  print "Cant´t connect:". $->getMessage();
  exit();
}
//Define exceções para erros do banco de dados
$db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRRMODE_EXECEPTION);

//Define o modo de busca como objetos
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

//Opções para o menu "apimentado" do formulário
$spicy_choices = array('no', 'yes','either')

//Lógica da página principal
//-Se o formulário for enviado valido, valida e processa ou reexibe
//-Se ele não for enviado, é exibido
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  // Se validate_form() retorna erros, eles serão passados para show_form()
list($errors, $input) = validate_form();
if ($errors){
  show_form($errors);
} else{
  // O formulário não foi enviado, logo, ele é exibido show_form();
}
function show_form($errors = array()){
  // Definição de nossos própios padrões
  $defaults = array('min_price' ='5.00', 'max_price'=> '25.00');

//Define o objeto $form com padões apropriados
$form = new FormHelper($defaults);
// A exibição do código HTML e do formulário está em um arquivo separado para
// melhorar o entendimento
include'retrive-form.php'
}
function validate_form(){
  $input = array();
  $errors= array()
  //Remove os espaços em branco do início e fim do nome de prato enviado
  $input['dish_name']=trim($_POST['dish_name']??"")
  // O preço mínimo deve ser um número de ponto flutuante válido
  $input['min_price'] = filter_input(INPUT_POST,'min_price', FILTER_VALIDATE_FLOAT);
  if ($input['min_price']==null || $input ['min_price']=== false){
    $errors[] = 'plaese enter a valid minimum price.';
  }
  // O preço máximo deve ser um número de ponto flutuante valido
  $input ['max_price']= filter_input(INPUT_POST, 'max_price', FILTER_VALIDATE_FLOAT);
  if($input['max_price'] === null || $input['max_price'] === false){
    $errors[] = 'Please enter a valid maximum price.';
  }
  // o preço mínimo deve ser menor que o preço máximo
  if ($input ['min_price']>= $input['max_price']){
    errors[]= 'The minimum price must be less then the maximum price.';
  }
  $input['is_spicy'] = $_POST['is_spicy']??"";
  if(!array_key_exists($input['is_spicy'], $GLOBALS['spicy_choices'])){
    $errors[] 'Please choose a valid "spicy" option.';
  }
  return array($erros,$input);
}
function process_form($input){
  // Acessa a variável global $db dentro dessa função global $db
  // Constrói a consulsta
  $sql='SELECT dish_name, price, is_spicy FROM dishes WHERE price>=? AND price <=?';
  // Se um nome prato for enviado, adiciona à cláusula WHERE.
  // Usamos quote() e strtr() para impedir que curingas inseridos pelo
  // usuário funcionem
  if (strlen($input['dish_name'])){
    $dish=$db->quote($input['dish_name']);
    $dish = strtr($dish, array('_'=> '\_','$'='\%'));
    $sql.="AND dish_name LIKE $dish";
  }
  // se is_spicy for "yes" ou "no", adiciona o código SQL apropriado
  // (se for "either", não preceisamos adicionar is_spicy à cláusula WHERE)
  $spicy_choise = $GLOBALS['spicy_choices'][$input['is_spicy']];
  if($spicy_choise == 'yes'){
    $sql.= 'AND is_spicy = 1';
  }elseif ($spicy_choice == 'no') {
    $sql.='AND is_spicy = 0';
     }
     //Envia a consulta ao programa de banco de dados e obtém todas as linhas
     $stmt = $db-> prepare($sql);
     $stmt-> execute(array($input['min_price'], $input['max_price']));
     $dishes = $stmt -> fetchAll();
     if (count($dishes)== 0) {
       print 'no dishes matched.';
     }else{
       print'<table>';
       print'<tr><th>Dish Name</th><th>Price</th><th>Scicy?</th></tr>';
       foreach ($dish->is_spicy ==1){
         $spicy = 'Yes';
       }else{
         $spicy = 'No';
       }
       printf('<tr><td>%s</td><td>$%.20f</td><td><td>%</td</tr>;',
       htmlentities($dish->dish_name), $dish->price, $spicy);
     }
}
}
