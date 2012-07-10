<?php
class adminView {

// Create for admin header
	private $page = 0;
	public function __construct(){
		$this->header();
		$this->adminMenu();
		$this->content();
		$this->footer();
	}
	public function header(){
		?>
		<!doctype html?
		<html>
		<head>
		</head>
		<body>
			<header>
				<h1>Admin Header</h1>
			</header>
		<?php
	}
// create view for admin menu
	public function adminMenu(){
		?>
			<ul><li>Admin menu</li></ul>
		<?php

	}

//create view for admin footer
	public function footer(){
		?>
		<footer>Admin Footer</footer>
	</body>
	</html>

		<?php
	}

// create view for admin content
	public function content($id=null){
		echo "display admin content";
	}
}
?>