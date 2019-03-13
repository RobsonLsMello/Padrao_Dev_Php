<?php
 
 
 class LayoutGeral{
 
 private function gerar($conteudo, $titulo){
 $html = "<!DOCTYPE html>";
 $html .= "<html lang='pt-br'>";
 $html .= "<head>";
 $html .=    "<!-- Required meta tags -->";
 $html .=	"<meta charset='utf-8'>";
 $html .=	"<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
 if($titulo != "") $html .=    "<title>".$titulo."</title>";
 else $html .=    "<title>Titulo Generico</title>";
 $html .=    "<link rel='shortcut icon' type='image/png' href='https://albertoroura.com/wp-content/uploads/2014/05/html5_logo-300x300.png'/>";
 $html .=    "<!-- Bootstrap CSS -->";
 $html .=    "<link rel='stylesheet' href='/content/Bootstrap/bootstrap-grid.min.css'>";
 $html .=    "<link rel='stylesheet' href='/content/Bootstrap/bootstrap-reboot.min.css'>";
 $html .=    "<link rel='stylesheet' href='/content/Bootstrap/bootstrap.min.css'>";
 $html .= "</head>";
 $html .= "<body>";
 $html .="<header>";
 $html .="<nav class='navbar navbar-expand-sm navbar-dark bg-dark'>";
 $html .="<a class='navbar-brand' href='#'>Expand at sm</a>";
 $html .="<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarsExample03' aria-controls='navbarsExample03' aria-expanded='false' aria-label='Toggle navigation'>";
 $html .="<span class='navbar-toggler-icon'></span>";
 $html .="</button>";
 $html .="<div class='collapse navbar-collapse' id='navbarsExample03'>";
 $html .="<ul class='navbar-nav mr-auto'>";
 $html .="<li class='nav-item active'>";
 $html .="<a class='nav-link' href='#'>Home <span class='sr-only'>(current)</span></a>";
 $html .="</li>";
 $html .="<li class='nav-item'>";
 $html .="<a class='nav-link' href='#'>Link</a>";
 $html .="</li>";
 $html .="<li class='nav-item'>";
 $html .="<a class='nav-link disabled' href='#'>Disabled</a>";
 $html .="</li>";
 $html .="<li class='nav-item dropdown'>";
 $html .="<a class='nav-link dropdown-toggle' href='#' id='dropdown03' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Dropdown</a>";
 $html .="<div class='dropdown-menu' aria-labelledby='dropdown03'>";
 $html .="<a class='dropdown-item' href='#'>Action</a>";
 $html .="<a class='dropdown-item' href='#'>Another action</a>";
 $html .="<a class='dropdown-item' href='#'>Something else here</a>";
 $html .="</div>";
 $html .="</li>";
 $html .="</ul>";
 $html .="<form class='form-inline my-2 my-md-0'>";
 $html .="<input class='form-control' type='text' placeholder='Search'>";
 $html .="</form>";
 $html .="</div>";
 $html .="</nav>";
 $html .="</header>";
 $html .= $conteudo;
 $html .= "<!--Bootstrap Scripts-->";
 $html .= "<script src='/script/lib/jquery-3.3.1.slim.min.js'></script>";
 $html .= "<script src='/script/lib/popper.min.js'></script>";
 $html .= "<script src='/script/Bootstrap/bootstrap.bundle.min.js'></script>";
 $html .= "<script src='/script/Bootstrap/bootstrap.min.js'></script>";
 $html .= "</body>";
 $html .= "</html>";
 return $html;
 }
 
 public function mostrarHtml($conteudo, $titulo){
 return $this->gerar($conteudo, $titulo);
 }
 }
 