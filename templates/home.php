<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Crud - PHP</title>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>templates/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>templates/css/style.css">  
  </head>

  <body>
    <section id="top">
      <div class="container text-center">
        <h1>Simple CRUD - PHP</h1>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h3>Select</h3>
            <?php

            if($_POST['submit-select']){
              $lista = selectAll();

              foreach($lista as $item) : ?>
                <div>
                  <p>
                    ID: <?php echo $item['id']; ?><br />
                    Título: <?php echo $item['titulo']; ?><br />
                    Autor: <?php echo $item['autor']; ?><br />
                    Conteúdo: <?php echo $item['conteudo']; ?><br />
                  </p>
                </div>
              <?php endforeach; 
            }
            ?>

            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
              <input type="submit" name="submit-select" value="Exibir Dados" />
            </form>
          </div>
          <div class="col">
            <h3>Insert</h3>
            <?php
            if($_POST['submit-insert']){
              $postagem = new Postagem(
                $_POST['titulo'],
                $_POST['autor'],
                $_POST['conteudo']
              );
        
              insert($postagem);

              header("Refresh:0");
            }

            ?>
        
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
              <label>Título</label><br />
              <input type="text" name="titulo" placeholder="Título da Postagem" /><br />
              <label>Autor</label><br />
              <input type="text" name="autor" placeholder="Autor da Postagem" /><br />
              <label>Conteúdo</label><br />
              <textarea name="conteudo"></textarea><br /><br />

              <input type="submit" name="submit-insert" value="Inserir" />
            </form>
          </div>
          <div class="col">
            <h3>Update</h3>

            <?php
            if($_POST['submit-update']){
              $id = $_POST['id'];

              $postagem = new Postagem(
                $_POST['titulo'],
                $_POST['autor'],
                $_POST['conteudo']
              );

              update($id, $postagem);

              header("Refresh:0");
            }
            ?>

            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
              <label>ID</label><br />
              <input type="number" name="id" placeholder="ID do item a ser atualizado" /><br />
              <label>Novo Título</label><br />
              <input type="text" name="titulo" placeholder="Novo Título" /><br />
              <label>Novo Autor</label><br />
              <input type="text" name="autor" placeholder="Novo Autor" /><br />
              <label>Novo Conteúdo</label><br />
              <textarea name="conteudo"></textarea><br /><br />

              <input type="submit" name="submit-update" value="Atualizar" />
            </form>
          </div>
          <div class="col">
            <h3>Delete</h3>

            <?php
            if($_POST['submit-delete']){
              $id = $_POST['id'];

              delete($id);

              header("Refresh:0");
            }
            ?>

            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
              <label>ID a ser deletado</label><br />
              <input type="number" name="id" placeholder="ID do item a ser deletado" /><br /><br />

              <input type="submit" name="submit-delete" value="Deletar" />
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
