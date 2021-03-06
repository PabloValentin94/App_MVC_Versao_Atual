<?php

spl_autoload_register(function ($nome_classe)
{

  //echo "Include de: " . $nome_classe;

  $classe_controller =  "Controller/" . $nome_classe . ".php";
  $classe_model =  "Model/" . $nome_classe . ".php";
  $classe_DAO =  "DAO/" . $nome_classe . ".php";

  // include "classes/". $nome_classe . "class.php";

  if(file_exists($classe_controller))
  {

    include $classe_controller;

  }

  else if(file_exists($classe_model))
  {

    include $classe_model;

  }

  else if(file_exists($classe_DAO))
  {

    include $classe_DAO;

  }

});


?>