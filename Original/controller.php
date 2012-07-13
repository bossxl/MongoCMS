<?php
if(isset($_GET["page"])){
	switch ($_GET["page"]):
		case "admin":
			$_SESSION['page'] = 'admin';
		break;
		case "login":
			$_SESSION['page'] = 'login';
		break;
		default:
			$_SESSION['page'] = '404';
	endswitch;
} elseif (isset($_GET["id"])){
	echo "get the page with this id";
} else {
	echo "display home";
}


?>