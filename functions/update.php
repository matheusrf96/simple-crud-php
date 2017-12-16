<?php

function update($id, $post){
  $database = new Database;

  try{
    $database->query("
      UPDATE Postagem SET
      titulo = '".$post->getTitulo()."',
      autor = '".$post->getAutor()."',
      conteudo = '".$post->getConteudo()."'
      WHERE id = ".$id."
    ");

    $database->execute();
  } catch(PDOException $e){
    echo $e->getMessage();
  }
}
?>
