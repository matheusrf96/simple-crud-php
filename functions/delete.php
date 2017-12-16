<?php

function delete($id){
  $database = new Database;

  try{
    $database->query("
      DELETE FROM Postagem
      WHERE id = ".$id."
    ");

    $database->execute();
  } catch(PDOException $e){
    echo $e->getMessage();
  }
}
?>
