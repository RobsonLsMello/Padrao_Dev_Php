<?php
 /* incluindo o layout padrão*/
 include_once "./view/Layout/LayoutGeral.php";
 
 
 class IndexView{
 
 private $conteudo; 
 private $titulo = "Inicial"; /* titulo da pagina*/
 
 private function gerar(){
 $layout = new LayoutGeral();
 
 $html = $this->conteudo;
 $html .=    "<ul>CRUD";
 $html .=        "<li><a href=./Exemplo/Index>Exemplo</a></li>";
 $html .=    "</ul>";      
 return $layout->mostrarHtml($html,$this->titulo);
 }
 
 public function setConteudo($conteudo){
 $this->conteudo = $conteudo;
 }
 //metodo para mostrar todo o html gerado para essa pagina
 public function mostrar(){
 echo $this->gerar();
 }
 }