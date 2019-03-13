<?php
/*incluindo o arquivo da View referente ao Index*/
include_once "view/Main/IndexView.php";

class IndexController{
	public function principal(){
		$indexPage = new IndexView();
		$indexPage->setConteudo("<h1>Exemplo MVC</h1>");
		$indexPage->mostrar();
	}
}

?>