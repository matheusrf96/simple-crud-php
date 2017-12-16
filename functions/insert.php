<?php

function insert($post){
  $database = new Database;

  try{
    $database->query("
      INSERT INTO Postagem(titulo, autor, conteudo) VALUES
      ('".$post->getTitulo()."', '".$post->getAutor()."', '".$post->getConteudo()."')
    ");

    $database->execute();
  } catch(PDOException $e){
    echo $e->getMessage();
  }
}
?>
