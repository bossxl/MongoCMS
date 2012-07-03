<?php
if(isset($_GET["page"])){
	switch ($_GET["page"]):
		case "admin":
			echo "display admin page";
		break;
		case "login":
			echo "display login page";
		break;
		default:
			echo "display 404";
	endswitch;
} elseif (isset($_GET["id"])){
	echo "get the page with this id";
} else {
	echo "display home";
}


?>