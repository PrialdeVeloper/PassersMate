<?php 
	
	Class Home extends Controller{

		public function __construct(){
			
		}

		public function index(){
			$this->render_home();
		}

		public function render_home(){
			$view = $this->view('home');
		}
	}

?>