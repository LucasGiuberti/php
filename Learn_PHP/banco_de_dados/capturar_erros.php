<?php
// Capturando erros na conexãoptimize
try {
  $db = new
  PDO('mysql:host=localhost;dbname=retaruant', 'penguin', 'top^hat');

  //Faz algo com $db aqui
} catch (PDOException $e) {
  print "Couldn't connect to the database:". $e->getMessage();

}
// Suponhamos que top^hat fosse a senha errada para o usuário penguim.
// Nesse caso, o Exemplo exibiria algo como:

//Couldn't connect to the database:SQLSTATE[HY000][1045]
//Access denied
//for user 'peguin '@'client.example.com'
//Using password: YES
