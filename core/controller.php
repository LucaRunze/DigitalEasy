<?php
class controller {

	protected $db;
	protected $lang;

	public function __construct() {
		global $config;
		$this->lang = new Language();
	}
	
	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		include 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadViewLC($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/logincadastro/'.$viewName.'.php';
	}

	public function loadViewP($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/perfilusuario/'.$viewName.'.php';
	}

}