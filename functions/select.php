<?php

function select($sql){
  $database = new Database;

  try{
    $database->query($sql);
    $lista = $database->resultSet();

    return $lista;
  } catch(PDOException $e){
    echo $e->getMessage();
  }
}

function selectAll(){
  return select("SELECT * FROM Postagem");
}
?>
