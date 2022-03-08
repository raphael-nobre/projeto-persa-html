<html> 
  <head> 
    <title>PHP Test</title>
  <head>

<?php

  // var_dump ($_GET)

  $email = $_GET['email'];
  $pergunta1 = $_GET['pergunta1'];
  $pergunta2 = $_GET['pergunta2'];
  
  Create table pesquisa {
    Id serial primary key,
    Email varchar(100),
    Pergunta1 integer,
    Pergunta integre
    );  

  $sql = “insert into pesquisa (email	, pergunta1, pergunta2) 
  values(‘$email’, ’$pergunta1’, ‘$pergunta2’)”;

?>