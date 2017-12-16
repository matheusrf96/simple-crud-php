<?php
class Postagem{
  private $id;
  private $titulo;
  private $autor;
  private $conteudo;

  public function __construct($titulo, $autor, $conteudo){

    if(strlen($titulo) > 45){
      $this->titulo = substr($titulo, 0, 45);
    }
    else{
      $this->titulo = $titulo;
    }

    if(strlen($autor) > 45){
      $this->autor = substr($autor, 0, 45);
    }
    else{
      $this->autor = $autor;
    }

    $this->conteudo = $conteudo;
  }

  public function getId(){
    return $this->id;
  }

  public function setId($id){
    $this->id = $id;
  }

  public function getTitulo(){
    return $this->titulo;
  }

  public function setTitulo($titulo){
    if(strlen($titulo) > 45){
      $this->titulo = substr($titulo, 0, 45);
    }
    else{
      $this->titulo = $titulo;
    }
  }

  public function getAutor(){
    return $this->autor;
  }

  public function setAutor($autor){
    if(strlen($autor) > 45){
      $this->autor = substr($autor, 0, 45);
    }
    else{
      $this->autor = $autor;
    }
  }

  public function getConteudo(){
    return $this->conteudo;
  }

  public function setConteudo($conteudo){
    $this->conteudo = $conteudo;
  }

  public function toString(){
    return "
      ID: ".$this->id."<br />
      Título: ".$this->titulo."<br />
      Autor: ".$this->autor."<br />
      Conteúdo: ".$this->autor."<br />
    ";
  }

}

?>
