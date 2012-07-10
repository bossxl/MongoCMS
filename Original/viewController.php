<?php

require_once "views/admin.php";
if(isset($_SESSION['page']) && $_SESSION['page'] == 'admin' ){
	$adminView = new adminView();
}
?>